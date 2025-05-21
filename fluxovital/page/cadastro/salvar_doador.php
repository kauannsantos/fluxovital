<?php
session_start();

// Verifica se os dados foram enviados via POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: doador.php');
    exit;
}

// Inclui conexão com banco (mysqli)
include __DIR__ . '/../../config/db.php'; // $conn deve ser um objeto mysqli

function limpar($valor) {
    return trim(htmlspecialchars($valor));
}

// Receber e limpar os dados do formulário
$nome = limpar($_POST['nome'] ?? '');
$email = limpar($_POST['email'] ?? '');
$senha = $_POST['senha'] ?? '';
$data_nascimento = $_POST['data_nascimento'] ?? '';
$tipo_sanguineo = limpar($_POST['tipo_sanguineo'] ?? '');
$telefone = limpar($_POST['telefone'] ?? '');

// Validações básicas
if (empty($nome) || empty($email) || empty($senha) || empty($data_nascimento) || empty($tipo_sanguineo) || empty($telefone)) {
    $_SESSION['erro'] = "Preencha todos os campos obrigatórios.";
    header('Location: doador.php');
    exit;
}

// Criptografar a senha
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

try {
    // Verifica se o e-mail já está cadastrado
    $check = $conn->prepare("SELECT id FROM doadores WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        $_SESSION['erro'] = "E-mail já cadastrado.";
        header('Location: doador.php');
        exit;
    }

    // Inserção no banco de dados
    $stmt = $conn->prepare("INSERT INTO doadores (nome, email, senha, data_nascimento, tipo_sanguineo, telefone) 
                            VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $nome, $email, $senhaHash, $data_nascimento, $tipo_sanguineo, $telefone);
    $stmt->execute();

    // Redireciona para página de sucesso
    header("Location: sucesso.php"); // Você pode criar essa página
    exit;

} catch (Exception $e) {
    error_log("Erro no cadastro: " . $e->getMessage());
    $_SESSION['erro'] = "Erro ao cadastrar. Tente novamente mais tarde.";
    header("Location: doador.php");
    exit;
}

