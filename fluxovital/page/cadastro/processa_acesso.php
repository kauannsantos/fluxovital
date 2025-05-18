<?php
session_start();

// Inclui conexão com banco
include __DIR__ . '/../../config/db.php';

// Verifica conexão
if (!$conn) {
    die("Erro na conexão com o banco de dados.");
}

// Recebe dados do formulário
$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

if (!$email || !$senha) {
    echo "<script>alert('Preencha todos os campos.'); window.history.back();</script>";
    exit();
}

// Consulta usuário existente
$sql = "SELECT id, nome, senha FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $usuario = $result->fetch_assoc();
    if (password_verify($senha, $usuario['senha'])) {
        // Login OK
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_nome'] = $usuario['nome'];
        header("Location: /fluxovital/page/home/index.php");
        exit();
    } else {
        echo "<script>alert('Senha incorreta.'); window.history.back();</script>";
    }
} else {
    // Cadastro automático
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
    $nomePadrao = "Usuário";

    $insert = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
    $insert->bind_param("sss", $nomePadrao, $email, $senhaHash);

    if ($insert->execute()) {
        $_SESSION['usuario_id'] = $insert->insert_id;
        $_SESSION['usuario_nome'] = $nomePadrao;
        echo "<script>alert('Usuário cadastrado com sucesso!'); window.location.href='/fluxovital/page/home/index.php';</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar usuário.'); window.history.back();</script>";
    }
}

$stmt->close();
$conn->close();
