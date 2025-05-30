<?php
session_start();
require_once __DIR__ . '/../config/db.php';

if (!isset($_SESSION['usuario_id'])) {
    header("Location: /fluxovital/index.php");
    exit();
}

$usuarioId = $_SESSION['usuario_id'];

// Exclui o usuário do banco
$stmt = $conn->prepare("DELETE FROM usuario WHERE id = ?");
$stmt->bind_param("i", $usuarioId);

if ($stmt->execute()) {
    // Limpa a sessão
    session_destroy();
    header("Location: /fluxovital/index.php?msg=perfil_excluido");
    exit();
} else {
    echo "Erro ao excluir perfil: " . $conn->error;
}
?>
