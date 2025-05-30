<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Verifica se o usuário está logado e é doador
if (!isset($_SESSION['usuario_id']) || $_SESSION['tipo_usuario'] !== 'doador') {
    header('Location: /fluxovital/page/cadastro/doador/login/login_doador.php');
    exit();
}

// Conexão com o banco de dados
require_once '/caminho/para/conexao.php'; // Ajuste o caminho conforme necessário

// Recupera os dados do formulário
$nome = $_POST['nome'] ?? '';
$tipo_doacao = $_POST['tipo_doacao'] ?? '';
$email = $_POST['email'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$cpf = $_POST['cpf'] ?? '';

// Valida os dados
if (empty($nome) || empty($tipo_doacao) || empty($email) || empty($telefone) || empty($cpf)) {
    $_SESSION['erro'] = 'Todos os campos são obrigatórios.';
    header('Location: editar_doador.php');
    exit();
}

// Prepara a consulta SQL para atualizar os dados
$sql = "UPDATE doadores SET nome = ?, tipo_doacao = ?, email = ?, telefone = ?, cpf = ? WHERE usuario_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sssssi', $nome, $tipo_doacao, $email, $telefone, $cpf, $_SESSION['usuario_id']);

// Executa a consulta
if ($stmt->execute()) {
    // Atualiza os dados na sessão
    $_SESSION['nome'] = $nome;
    $_SESSION['tipo_doacao'] = $tipo_doacao;
    $_SESSION['email'] = $email;
    $_SESSION['telefone'] = $telefone;
    $_SESSION['cpf'] = $cpf;

    $_SESSION['sucesso'] = 'Perfil atualizado com sucesso!';
    header('Location: home_doador.php');
} else {
    $_SESSION['erro'] = 'Erro ao atualizar perfil. Tente novamente.';
    header('Location: editar_doador.php');
}

$stmt->close();
$conn->close();
?>
