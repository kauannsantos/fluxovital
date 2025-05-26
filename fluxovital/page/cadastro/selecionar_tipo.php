<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tipo_doacao'])) {
    $_SESSION['tipo_doacao'] = $_POST['tipo_doacao'];
    header("Location: /fluxovital/page/cadastro/doador/login/login_doador.php"); // Altere se necessário
    exit();
} else {
    // Redireciona de volta se acesso direto
    header("Location: /fluxovital/page/cadastro/escolha_categoria.php");
    exit();
}
