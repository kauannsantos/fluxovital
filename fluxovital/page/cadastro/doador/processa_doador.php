<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once(__DIR__ . '/../../../config/db.php'); // ajuste o caminho conforme seu projeto

    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $telefone = trim($_POST['telefone']);
    $senha = $_POST['senha'];
    $confirma_senha = $_POST['confirma_senha'];

    if ($senha !== $confirma_senha) {
        $_SESSION['erro'] = "As senhas não coincidem.";
        header("Location: cadastro_doador.php");
        exit();
    }

    // Verifica se e-mail já existe na tabela doador
    $sql_check = "SELECT id FROM doador WHERE email = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("s", $email);
    $stmt_check->execute();
    $stmt_check->store_result();

    if ($stmt_check->num_rows > 0) {
        $_SESSION['erro'] = "E-mail já cadastrado.";
        header("Location: cadastro_doador.php");
        exit();
    }
    $stmt_check->close();

    // Criptografa a senha
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // Insere o doador no banco
    $sql = "INSERT INTO doador (nome, email, telefone, senha, status) VALUES (?, ?, ?, ?, 'ativo')";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nome, $email, $telefone, $senha_hash);

    if ($stmt->execute()) {
        $_SESSION['doador_id'] = $stmt->insert_id;
        header("Location: escolher_categoria_doacao.php"); // próxima etapa
        exit();
    } else {
        $_SESSION['erro'] = "Erro ao cadastrar: " . $conn->error;
        header("Location: cadastro_doador.php");
        exit();
    }
}
?>
