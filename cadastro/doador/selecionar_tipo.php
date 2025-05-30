<?php
session_start();

$tipos_validos = ['sangue', 'medula', 'leite materno'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tipo_doacao']) && in_array($_POST['tipo_doacao'], $tipos_validos)) {
    $_SESSION['tipo_doacao'] = $_POST['tipo_doacao'];
    header("Location: cadastro_doador.php");
    exit();
} else {
    $_SESSION['erro'] = 'Tipo de doação inválido ou não selecionado.';
    header("Location: escolha_categoria.php");
    exit();
}
