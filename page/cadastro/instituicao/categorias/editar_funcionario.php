<?php
session_start();
include_once(__DIR__ . '/../../../../config/db.php');

if (!isset($_SESSION['instituicao_id'])) {
    die("Acesso negado.");
}

$instituicao_id = $_SESSION['instituicao_id'];

// Buscar dados da instituição
$sqlInst = "SELECT * FROM instituicoes WHERE id = ?";
$stmtInst = $conn->prepare($sqlInst);
$stmtInst->bind_param("i", $instituicao_id);
$stmtInst->execute();
$instituicao = $stmtInst->get_result()->fetch_assoc();

if (!$instituicao) {
    die("Instituição não encontrada.");
}

// Buscar funcionários da instituição
$sqlFunc = "SELECT * FROM funcionario WHERE instituicao_id = ?";
$stmtFunc = $conn->prepare($sqlFunc);
$stmtFunc->bind_param("i", $instituicao_id);
$stmtFunc->execute();
$funcionarios = $stmtFunc->get_result()->fetch_all(MYSQLI_ASSOC);
?>

<!-- Aí seu HTML com $instituicao e $funcionarios preenchidos -->
