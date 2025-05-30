<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tipo_doacao'])) {
    $_SESSION['tipo_doacao'] = $_POST['tipo_doacao'];
    header("Location: /fluxovital/page/cadastro/doador/login/login_doador.php");
    exit();
} else {
    
    header("Location: /fluxovital/page/cadastro/escolha_categoria.php");
    exit();
}
