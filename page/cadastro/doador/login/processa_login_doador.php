<?php
session_start();
include_once(__DIR__ . '/../../../../config/db.php'); // mysqli $conn vem daqui

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Prepare statement mysqli
    $sql = "SELECT * FROM doador WHERE email = ? AND status = 'ativo'";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Erro na preparação da consulta: " . $conn->error);
    }
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $doador = $resultado->fetch_assoc();
        if (password_verify($senha, $doador['senha'])) {
            $_SESSION['usuario_id'] = $doador['id'];
            $_SESSION['nome'] = $doador['nome'];
            $_SESSION['tipo_usuario'] = 'doador';
            $_SESSION['tipo_doacao'] = $doador['tipo_doador'];

            header("Location: /fluxovital/page/cadastro/doador/home_doador/home_doador.php");
            exit;
        }
    }

    $_SESSION['erro_login'] = "E-mail ou senha incorretos.";
    header("Location: login_doador.php");
    exit;
}
