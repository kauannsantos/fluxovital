<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tipo_doacao'])) {
    $_SESSION['tipo_doacao'] = $_POST['tipo_doacao'];  // Salva corretamente na sessão
    header("Location: cadastro_doador.php");           // Redireciona para o cadastro
    exit();
} else {
    $_SESSION['erro'] = 'Tipo de doação não selecionado.';
    header("Location: escolha_categoria.php");
    exit();
}
