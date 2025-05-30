<?php
session_start();

include __DIR__ . '/../../config/db.php';

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

$email = trim($_POST['email'] ?? '');
$senha = $_POST['senha'] ?? '';

if (empty($email) || empty($senha)) {
    echo "<script>alert('Preencha todos os campos.'); window.history.back();</script>";
    exit();
}

// Validação simples de email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('Email inválido.'); window.history.back();</script>";
    exit();
}

// Verifica se o usuário existe
$stmt = $conn->prepare("SELECT id, nome, senha FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    // Usuário já cadastrado -> LOGIN
    $usuario = $result->fetch_assoc();
    if (password_verify($senha, $usuario['senha'])) {
        $_SESSION['usuario_id']   = $usuario['id'];
        $_SESSION['usuario_nome'] = $usuario['nome'];

        header("Location: /fluxovital/page/home/index.php");
        exit();
    } else {
        echo "<script>alert('Senha incorreta.'); window.history.back();</script>";
        exit();
    }
}

$stmt->close();

// Se não encontrou -> Cadastra usuário
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);
$nomePadrao = 'Usuário';

$insert = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
$insert->bind_param("sss", $nomePadrao, $email, $senhaHash);

if ($insert->execute()) {
    $_SESSION['usuario_id']   = $insert->insert_id;
    $_SESSION['usuario_nome'] = $nomePadrao;

    $insert->close();

    header("Location: /fluxovital/page/home/index.php");
    exit();
} else {
    echo "<script>alert('Erro ao cadastrar usuário.'); window.history.back();</script>";
    exit();
}
?>
