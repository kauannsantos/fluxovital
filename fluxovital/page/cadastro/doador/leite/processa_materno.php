<?php
session_start();

include_once(__DIR__ . '/../../../../config/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $conn->prepare("INSERT INTO questionario_leite_materno (
        nome, idade, tipo_sang, amamentando, tempo_amamentacao_meses, usa_medicamentos,
        descreva_medicamentos, possui_doencas_cronicas, descreva_doencas,
        fuma_droga, estado_geral, observacoes
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sississsssss",
        $_POST['nome'],
        $_POST['idade'],
        $_POST['tipo_sang'],
        $_POST['amamentando'],
        $_POST['tempo_amamentacao_meses'],
        $_POST['usa_medicamentos'],
        $_POST['descreva_medicamentos'],
        $_POST['possui_doencas_cronicas'],
        $_POST['descreva_doencas'],
        $_POST['fuma_droga'],
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
