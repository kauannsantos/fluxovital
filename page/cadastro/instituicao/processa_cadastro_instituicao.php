<?php
session_start();
include_once(__DIR__ . '/../../../config/db.php');

$nome = trim($_POST['nome'] ?? '');
$cnpj = trim($_POST['cnpj'] ?? '');
$email = trim($_POST['email'] ?? '');
$senha = $_POST['senha'] ?? '';
$telefone = trim($_POST['telefone'] ?? '');
$categoria = $_POST['categoria'] ?? '';
$endereco = trim($_POST['endereco'] ?? '');
$cidade = trim($_POST['cidade'] ?? '');
$estado = strtoupper(trim($_POST['estado'] ?? ''));
$cep = trim($_POST['cep'] ?? '');

if (!$nome || !$cnpj || !$email || !$senha || !$categoria || !$endereco || !$cidade || !$estado || !$cep) {
    $_SESSION['erro'] = 'Por favor, preencha todos os campos obrigatórios.';
    header("Location: form_cadastro_instituicao.php?categoria=" . urlencode($categoria));
    exit;
}

// Verifica se já existe instituição com mesmo e-mail
$stmtCheck = $conn->prepare("SELECT id FROM instituicoes WHERE email = ?");
$stmtCheck->bind_param("s", $email);
$stmtCheck->execute();
$stmtCheck->store_result();

if ($stmtCheck->num_rows > 0) {
    $_SESSION['erro'] = 'Já existe uma instituição cadastrada com esse e-mail.';
    $stmtCheck->close();
    header("Location: form_cadastro_instituicao.php?categoria=" . urlencode($categoria));
    exit;
}
$stmtCheck->close();

// Criptografa a senha
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO instituicoes (nome, cnpj, email, senha, telefone, categoria, endereco, cidade, estado, cep) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
if (!$stmt) {
    $_SESSION['erro'] = "Erro na preparação da consulta: " . $conn->error;
    header("Location: form_cadastro_instituicao.php?categoria=" . urlencode($categoria));
    exit;
}

$stmt->bind_param("ssssssssss", $nome, $cnpj, $email, $senhaHash, $telefone, $categoria, $endereco, $cidade, $estado, $cep);

if ($stmt->execute()) {
    $_SESSION['instituicao_id'] = $stmt->insert_id;
    $_SESSION['instituicao_email'] = $email;
    $_SESSION['instituicao_nome'] = $nome;
    $_SESSION['instituicao_categoria'] = $categoria;
    $_SESSION['sucesso'] = 'Cadastro realizado com sucesso! Bem-vindo(a)!';

    header("Location: home_instituicao.php");
    exit;
} else {
    $_SESSION['erro'] = "Erro ao cadastrar: " . $stmt->error;
    header("Location: form_cadastro_instituicao.php?categoria=" . urlencode($categoria));
    exit;
}

$stmt->close();
$conn->close();
