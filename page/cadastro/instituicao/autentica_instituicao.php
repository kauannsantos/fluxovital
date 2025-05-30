<?php
session_start();
include_once(__DIR__ . '/../../../config/db.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$stmt = $pdo->prepare("SELECT * FROM instituicoes WHERE email = ?");
$stmt->execute([$email]);

$instituicao = $stmt->fetch();

if ($instituicao && password_verify($senha, $instituicao['senha'])) {
    $_SESSION['instituicao_email'] = $email;
    header("Location: ../../instituicao/home_instituicao.php");
    exit;
} else {
    echo "Login inválido!";
}
?>
