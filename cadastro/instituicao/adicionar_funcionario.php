<?php
$conn = new mysqli("localhost", "root", "", "fluxovital");
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$cargo = $_POST['cargo'];
$instituicao_id = $_POST['instituicao_id'];

$stmt = $conn->prepare("INSERT INTO funcionario (nome, cpf, cargo, instituicao_id) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sssi", $nome, $cpf, $cargo, $instituicao_id);

if ($stmt->execute()) {
    header("Location: gerenciar_instituicao.php?id=$instituicao_id");
    exit;
} else {
    echo "Erro: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>