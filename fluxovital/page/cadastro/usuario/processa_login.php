<?php
session_start();
include_once(__DIR__ . '/../../../config/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $senha = $_POST['senha'];

    if (empty($email) || empty($senha)) {
        $_SESSION['erro_login'] = "Preencha todos os campos!";
        header("Location: login_usuario.php");
        exit;
    }

    $sql = "SELECT * FROM usuario WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $usuario = $resultado->fetch_assoc();

        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nome'] = $usuario['nome'];
            header("Location: /fluxovital/index.php"); // <== sua home principal
            exit;
        }
    }

    $_SESSION['erro_login'] = "E-mail ou senha incorretos!";
    header("Location: login_usuario.php");
    exit;
}
