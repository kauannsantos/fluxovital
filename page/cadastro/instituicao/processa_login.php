<?php
session_start();
include_once(__DIR__ . '/../../../config/db.php');

$categoria = $_POST['categoria'] ?? null;
if (!$categoria) {
    header("Location: escolha_categoria.php");
    exit;
}

$email = trim($_POST['email'] ?? '');
$senha = $_POST['senha'] ?? '';

if (!$email || !$senha) {
    $_SESSION['erro'] = "Preencha email e senha.";
    header("Location: login_instituicao.php?categoria=" . urlencode($categoria));
    exit;
}

$stmt = $conn->prepare("SELECT id, nome, senha, categoria FROM instituicoes WHERE email = ? AND categoria = ?");
$stmt->bind_param("ss", $email, $categoria);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();

    if (password_verify($senha, $row['senha'])) {
        // Login OK - limpa erros anteriores
        unset($_SESSION['erro']);

        $_SESSION['instituicao_id'] = $row['id'];
        $_SESSION['instituicao_email'] = $email;
        $_SESSION['instituicao_nome'] = $row['nome'];
        $_SESSION['instituicao_categoria'] = $row['categoria'];

        header("Location: home_instituicao.php"); // redireciona para home da instituição
        exit;
    } else {
        $_SESSION['erro'] = "Senha incorreta.";
    }
} else {
    $_SESSION['erro'] = "Usuário não encontrado na categoria selecionada.";
}

$stmt->close();
$conn->close();

// Se chegar aqui, deu erro no login
header("Location: login_instituicao.php?categoria=" . urlencode($categoria));
exit;
