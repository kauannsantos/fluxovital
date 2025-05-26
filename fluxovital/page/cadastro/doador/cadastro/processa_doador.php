<?php
session_start();

include __DIR__ . '/../../../config/db.php';  // caminho correto para conexão

// Captura os dados do formulário
$nome       = trim($_POST['nome'] ?? '');
$email      = trim($_POST['email'] ?? '');
$telefone   = trim($_POST['telefone'] ?? '');
$senha      = $_POST['senha'] ?? '';
$confirma   = $_POST['confirma_senha'] ?? '';
$tipoDoador = $_POST['tipo_doador'] ?? '';  // pega o tipo de doação

// Validações básicas
if (empty($nome) || empty($email) || empty($telefone) || empty($senha) || empty($confirma) || empty($tipoDoador)) {
    echo "<script>alert('Preencha todos os campos, incluindo o tipo de doação.'); window.history.back();</script>";
    exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('Email inválido.'); window.history.back();</script>";
    exit();
}

if ($senha !== $confirma) {
    echo "<script>alert('As senhas não coincidem.'); window.history.back();</script>";
    exit();
}

// Verifica se o doador já existe
$stmt = $conn->prepare("SELECT id, nome, senha FROM doador WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $doador = $result->fetch_assoc();
    if (password_verify($senha, $doador['senha'])) {
        $_SESSION['doador_id'] = $doador['id'];
        $_SESSION['doador_nome'] = $doador['nome'];
        header("Location: /fluxovital/page/home/index.php");
        exit();
    } else {
        echo "<script>alert('Senha incorreta.'); window.history.back();</script>";
        exit();
    }
}

// Cadastra novo doador incluindo o tipo de doação
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

// OBS: A tabela 'doador' precisa ter a coluna 'tipo_doador' VARCHAR
$stmt = $conn->prepare("INSERT INTO doador (nome, email, telefone, senha, tipo_doador) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $nome, $email, $telefone, $senhaHash, $tipoDoador);

if ($stmt->execute()) {
    $_SESSION['doador_id'] = $stmt->insert_id;
    $_SESSION['doador_nome'] = $nome;
    header("Location: /fluxovital/page/home/index.php");
    exit();
} else {
    echo "<script>alert('Erro ao cadastrar doador.'); window.history.back();</script>";
    exit();
}
