<?php
session_start();
include __DIR__ . '/../../../../config/db.php';

// Captura os dados do formulário
$nome     = trim($_POST['nome'] ?? '');
$email    = trim($_POST['email'] ?? '');
$telefone = trim($_POST['telefone'] ?? '');
$senha    = $_POST['senha'] ?? '';
$confirma = $_POST['confirma_senha'] ?? '';

// Verifica se tipo de doação está definido corretamente na sessão
$tipoDoador = $_SESSION['tipo_doacao'] ?? null;
$tiposValidos = ['sangue', 'medula', 'leite'];

if (!in_array($tipoDoador, $tiposValidos)) {
    $_SESSION['erro'] = "Tipo de doação inválido.";
    header("Location: cadastro_doador.php");
    exit();
}

// Validações
if (empty($nome) || empty($email) || empty($telefone) || empty($senha) || empty($confirma)) {
    echo "<script>alert('Preencha todos os campos corretamente.'); window.history.back();</script>";
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
        echo "<script>alert('Este e-mail já está cadastrado, mas a senha está incorreta.'); window.history.back();</script>";
        exit();
    }
}

// Cadastro novo
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);
$stmt = $conn->prepare("INSERT INTO doador (nome, email, telefone, senha, tipo_doador) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $nome, $email, $telefone, $senhaHash, $tipoDoador);

if ($stmt->execute()) {
    $_SESSION['doador_id'] = $stmt->insert_id;
    $_SESSION['doador_nome'] = $nome;

    // Redirecionamento inteligente por tipo de doação
    switch ($tipoDoador) {
        case 'sangue':
            header("Location: /fluxovital/page/cadastro/doador/sangue/form_sangue.php");
            break;
        case 'medula':
            header("Location: /fluxovital/page/cadastro/doador/medula/form_medula.php");
            break;
        case 'leite':
            header("Location: /fluxovital/page/cadastro/doador/leite/form_leite_materno.php");
            break;
        default:
            header("Location: /fluxovital/page/home/index.php");
    }
    exit();
} else {
    echo "<script>alert('Erro ao cadastrar. Tente novamente.'); window.history.back();</script>";
    exit();
}
