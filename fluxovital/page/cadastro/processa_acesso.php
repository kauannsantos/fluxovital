<?php
session_start();

// Inclui conexão com banco
include __DIR__ . '/../../config/db.php';

// Verifica conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Recebe dados do formulário
$email = trim($_POST['email'] ?? '');
$senha = $_POST['senha'] ?? '';

// Validação básica
if (empty($email) || empty($senha)) {
    echo "<script>alert('Preencha todos os campos.'); window.history.back();</script>";
    exit();
}

// Prepara consulta de existência
$stmt = $conn->prepare("SELECT id, nome, senha FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    // Login
    $usuario = $result->fetch_assoc();
    if (password_verify($senha, $usuario['senha'])) {
        $_SESSION['usuario_id']   = $usuario['id'];
        $_SESSION['usuario_nome'] = $usuario['nome'];
    } else {
        echo "<script>alert('Senha incorreta.'); window.history.back();</script>";
        exit();
    }
    $stmt->close();
    $conn->close();
    header("Location: /fluxovital/page/cadastro/escolha_perfil.php");
    exit();
} 

// Cadastro automático
$stmt->close();
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);
$nomePadrao = 'Usuário';

$insert = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
$insert->bind_param("sss", $nomePadrao, $email, $senhaHash);

if ($insert->execute()) {
    $_SESSION['usuario_id']   = $insert->insert_id;
    $_SESSION['usuario_nome'] = $nomePadrao;
    $insert->close();
    $conn->close();
    header("Location: /fluxovital/doador_instituicao/home.php");
    exit();
} else {
    echo "<script>alert('Erro ao cadastrar usuário.'); window.history.back();</script>";
    exit();
}
