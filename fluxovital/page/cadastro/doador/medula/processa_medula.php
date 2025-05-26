<?php
session_start();
include_once(__DIR__ . '/../../../config/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $conn->prepare("INSERT INTO questionario_medula (
        nome, idade, tipo_sang, possui_doenca_cronica, usa_medicamentos, fumante,
        ja_fez_transplante, tem_doenca_autoimune, estado_geral, observacoes
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

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

    if ($stmt->execute()) {
        header("Location: sucesso.php");
        exit();
    } else {
        echo "Erro ao enviar formulário: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
