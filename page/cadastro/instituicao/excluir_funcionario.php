<?php
$conn = new mysqli("localhost", "root", "", "fluxovital");
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$id = intval($_GET['id']);
$instituicao_id = intval($_GET['id_instituicao']);

$stmt = $conn->prepare("DELETE FROM funcionario WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: gerenciar_instituicao.php?id=$instituicao_id");
    exit;
} else {
    echo "Erro: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>