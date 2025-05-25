<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: escolha_categoria.php');
    exit;
}

// Coletando os dados
$categoria = $_POST['categoria'] ?? null;
$nome = $_POST['nome'] ?? null;
$cnpj = $_POST['cnpj'] ?? null;
$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;
$telefone = $_POST['telefone'] ?? null;
$endereco = $_POST['endereco'] ?? null;
$cidade = $_POST['cidade'] ?? null;
$estado = $_POST['estado'] ?? null;
$cep = $_POST['cep'] ?? null;

// Validação básica
if (!$categoria || !$nome || !$cnpj || !$email || !$senha || !$endereco || !$cidade || !$estado || !$cep) {
    echo "Por favor, preencha todos os campos obrigatórios.";
    exit;
}

// Hash seguro da senha
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

// Conexão com o banco de dados
include_once(__DIR__ . '/../../../../config/db.php');

// Inserção no banco
$stmt = $conn->prepare("INSERT INTO instituicoes (nome, cnpj, email, senha, telefone, categoria, endereco, cidade, estado, cep)
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

if (!$stmt) {
    echo "Erro ao preparar SQL: " . $conn->error;
    exit;
}

$stmt->bind_param("ssssssssss", $nome, $cnpj, $email, $senhaHash, $telefone, $categoria, $endereco, $cidade, $estado, $cep);

if ($stmt->execute()) {
    header("Location: sucesso.php"); // redirecione para uma página de confirmação
    exit;
} else {
    echo "Erro ao cadastrar instituição: " . $stmt->error;
}

$stmt->close();
$conn->close();
