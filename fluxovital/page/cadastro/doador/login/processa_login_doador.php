<?php
session_start();
include_once(__DIR__ . '/../../../config/db.php'); // ajuste conforme sua estrutura

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM doador WHERE email = :email AND status = 'ativo'";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    if ($stmt->rowCount() === 1) {
        $doador = $stmt->fetch(PDO::FETCH_ASSOC);
        if (password_verify($senha, $doador['senha'])) {
            $_SESSION['doador_id'] = $doador['id'];
            $_SESSION['doador_nome'] = $doador['nome'];
            $_SESSION['tipo_doador'] = $doador['tipo_doador'];

            header("Location: ../../home/home_doador.php");
            exit;
        }
    }

    $_SESSION['erro_login'] = "E-mail ou senha incorretos.";
    header("Location: login_doador.php");
    exit;
}
