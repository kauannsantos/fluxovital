<?php
session_start();

// Caminho corrigido para o arquivo de conexão com o banco de dados
include_once(__DIR__ . '/../../../../config/db.php'); // <- Subiu 3 níveis para acessar /config/db.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Prepara a query com os campos do formulário
    $stmt = $conn->prepare("INSERT INTO questionario_medula (
        nome, idade, tipo_sang, possui_doenca_cronica, usa_medicamentos, fumante,
        ja_fez_transplante, tem_doenca_autoimune, estado_geral, observacoes
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Faz o bind dos parâmetros com os dados recebidos via POST
    $stmt->bind_param("sissssssss",
        $_POST['nome'],
        $_POST['idade'],
        $_POST['tipo_sang'],
        $_POST['possui_doenca_cronica'],
        $_POST['usa_medicamentos'],
        $_POST['fumante'],
        $_POST['ja_fez_transplante'],
        $_POST['tem_doenca_autoimune'],
        $_POST['estado_geral'],
        $_POST['observacoes']
    );

    // Executa a query e trata o resultado
    if ($stmt->execute()) {
        header("Location:/fluxovital/page/cadastro/doador/sangue/cadastro_sucesso.php");
        exit();
    } else {
        echo "Erro ao enviar formulário: " . $stmt->error;
    }

    // Encerra o statement e a conexão
    $stmt->close();
    $conn->close();
}
?>
