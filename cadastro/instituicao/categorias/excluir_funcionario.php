<?php
include_once '/../../../../config/db.php';

if (!isset($_GET['id'])) {
    header("Location: gerenciar_funcionarios.php");
    exit;
}

$id = intval($_GET['id']);

$sql = "DELETE FROM funcionario WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: gerenciar_funcionarios.php?success=1");
} else {
    echo "Erro ao excluir funcionário: " . $conn->error;
}

$stmt->close();
$conn->close();
