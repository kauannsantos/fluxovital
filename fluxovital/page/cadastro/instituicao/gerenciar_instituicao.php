<?php
session_start();

$conn = new mysqli("localhost", "root", "", "fluxovital");
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// VERIFICA SE O ID FOI PASSADO
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "ID da instituição não fornecido.";
    exit;
}

$id = intval($_GET['id']);
$instituicao = null;

// BUSCA OS DADOS DA INSTITUIÇÃO
$stmt = $conn->prepare("SELECT * FROM instituicoes WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$instituicao = $result->fetch_assoc();
$stmt->close();

if (!$instituicao) {
    echo "Instituição não encontrada.";
    exit;
}
?>
