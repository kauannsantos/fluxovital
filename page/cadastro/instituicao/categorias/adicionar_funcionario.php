<?php
session_start();
include_once(__DIR__ . '/../../../../config/db.php');

if (!isset($_SESSION['instituicao_id'])) {
    die("Acesso negado: instituição não autenticada.");
}

$instituicao_id = $_SESSION['instituicao_id'];

$nome = trim($_POST['nome'] ?? '');
$cpf = trim($_POST['cpf'] ?? '');
$cargo = trim($_POST['cargo'] ?? '');

if (empty($nome) || empty($cpf)) {
    die("Nome e CPF são obrigatórios.");
}

$sqlCheck = "SELECT id FROM instituicoes WHERE id = ?";
$stmtCheck = $conn->prepare($sqlCheck);
$stmtCheck->bind_param("i", $instituicao_id);
$stmtCheck->execute();
$stmtCheck->store_result();

if ($stmtCheck->num_rows === 0) {
    die("Instituição inválida.");
}
$stmtCheck->close();

$sql = "INSERT INTO funcionario (nome, cpf, cargo, instituicao_id) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssi", $nome, $cpf, $cargo, $instituicao_id);

try {
    $stmt->execute();
    // Redireciona para a página de gerenciamento, para evitar reenvio do POST
    header("Location: gerenciar_funcionarios.php?msg=success");
    exit;
} catch (mysqli_sql_exception $e) {
    if (strpos($e->getMessage(), 'Duplicate entry') !== false) {
        echo "Erro: CPF já cadastrado para outro funcionário.";
    } else {
        echo "Erro ao adicionar funcionário: " . $e->getMessage();
    }
}

$stmt->close();
$conn->close();
?>
