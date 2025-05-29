<?php
$conn = new mysqli("localhost", "root", "", "fluxovital");
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep']; // Modificado
$cnpj = $_POST['cnpj']; // Modificado
$categoria = $_POST['categoria']; // Modificado
$senha = $_POST['senha']; // Modificado

if (!empty($senha)) { // Modificado
    $stmt = $conn->prepare("UPDATE instituicoes SET nome=?, cnpj=?, email=?, telefone=?, endereco=?, cep=?, categoria=?, senha=? WHERE id=?");
    $stmt->bind_param("sssssssssi", $nome, $cnpj, $email, $telefone, $endereco, $cep, $categoria, $senha, $id);
} else { // Modificado
    $stmt = $conn->prepare("UPDATE instituicoes SET nome=?, cnpj=?, email=?, telefone=?, endereco=?, cep=?, categoria=? WHERE id=?");
    $stmt->bind_param("ssssssssi", $nome, $cnpj, $email, $telefone, $endereco, $cep, $categoria, $id);
}

if ($stmt->execute()) {
    header("Location: gerenciar_instituicao.php?id=$id");
    exit;
} else {
    echo "Erro: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>