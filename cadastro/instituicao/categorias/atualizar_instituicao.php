<?php
session_start();
include_once(__DIR__ . '/../../../../config/db.php');

if (!isset($_SESSION['instituicao_id'])) {
    header("Location: ../../login.php");
    exit;
}

$id = $_SESSION['instituicao_id'];

// Pega dados do POST
$nome = trim($_POST['nome'] ?? '');
$cnpj = trim($_POST['cnpj'] ?? '');
$email = trim($_POST['email'] ?? '');
$telefone = trim($_POST['telefone'] ?? '');
$endereco = trim($_POST['endereco'] ?? '');
$cep = trim($_POST['cep'] ?? '');
$senha = $_POST['senha'] ?? '';

// Validação básica (pode melhorar depois)
if (!$nome || !$cnpj || !$email) {
    header("Location: editar_instituicao.php?error=campos_obrigatorios");
    exit;
}

// Validação de e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: editar_instituicao.php?error=erro_email");
    exit;
}

// Validação simples de CNPJ (pode usar função mais completa)
if (!preg_match('/^\d{14}$/', preg_replace('/\D/', '', $cnpj))) {
    header("Location: editar_instituicao.php?error=erro_cnpj");
    exit;
}

// Montar query UPDATE
if ($senha) {
    // Atualiza senha (hash)
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "UPDATE instituicoes SET nome = ?, cnpj = ?, email = ?, telefone = ?, endereco = ?, cep = ?, senha = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssi", $nome, $cnpj, $email, $telefone, $endereco, $cep, $senha_hash, $id);
} else {
    // Sem alterar senha
    $sql = "UPDATE instituicoes SET nome = ?, cnpj = ?, email = ?, telefone = ?, endereco = ?, cep = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssi", $nome, $cnpj, $email, $telefone, $endereco, $cep, $id);
}

if ($stmt->execute()) {
    header("Location: editar_instituicao.php?msg=sucesso");
    exit;
} else {
    header("Location: editar_instituicao.php?error=erro_bd");
    exit;
}
