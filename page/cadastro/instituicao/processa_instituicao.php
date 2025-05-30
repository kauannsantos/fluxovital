<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: escolha_categoria.php');
    exit;
}

include_once('config/db.php');

$categoria = $_POST['categoria'] ?? null;
$nome = $_POST['nome'] ?? null;
$cnpj = $_POST['cnpj'] ?? null;
$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;
$telefone = $_POST['telefone'] ?? null;
$endereco = $_POST['endereco'] ?? null;
$cidade = $_POST['cidade'] ?? null;
$estado = $_POST['estado'] ?? null;
$cep = $_POST['cep'] ?? null;

if (!$categoria || !$nome || !$cnpj || !$email || !$senha || !$endereco || !$cidade || !$estado || !$cep) {
    echo "Por favor, preencha todos os campos obrigatórios.";
    exit;
}

$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

$conn = new mysqli("localhost", "root", "", "fluxovital");
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO instituicoes (nome, cnpj, email, senha, telefone, categoria, endereco, cidade, estado, cep)
                         VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("ssssssssss", $nome, $cnpj, $email, $senhaHash, $telefone, $categoria, $endereco, $cidade, $estado, $cep);

if ($stmt->execute()) {
    header("Location: sucesso.php");
    exit;
} else {
    echo "Erro ao cadastrar instituição: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>