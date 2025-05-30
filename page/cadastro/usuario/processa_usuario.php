<?php
session_start();
include_once(__DIR__ . '/../../../config/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = $_POST['senha'];

    if (empty($nome) || empty($email) || empty($senha)) {
        $_SESSION['erro_cadastro'] = "Preencha todos os campos!";
        header("Location: cadastro_usuario.php");
        exit;
    }

    $senha_criptografada = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuario (nome, email, senha) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nome, $email, $senha_criptografada);

    if ($stmt->execute()) {
        // LOGIN AUTOMÁTICO APÓS CADASTRO
        $novo_id = $stmt->insert_id; // Pega o ID do novo usuário

        // Define a sessão com os dados do usuário
        $_SESSION['usuario_id'] = $novo_id;
        $_SESSION['usuario_nome'] = $nome;

        // Redireciona para a home
        header("Location: /fluxovital/index.php");
        exit;
    } else {
        if ($conn->errno === 1062) {
            $_SESSION['erro_cadastro'] = "Este e-mail já está cadastrado.";
        } else {
            $_SESSION['erro_cadastro'] = "Erro ao cadastrar: " . $conn->error;
        }
        header("Location: cadastro_usuario.php");
        exit;
    }
} else {
    header("Location: cadastro_usuario.php");
    exit;
}
