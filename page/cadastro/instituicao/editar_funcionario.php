<?php
$conn = new mysqli("localhost", "root", "", "fluxovital");
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = intval($_POST['id']);
    $nome = trim($_POST['nome']);
    $cargo = trim($_POST['cargo']);
    $instituicao_id = intval($_POST['instituicao_id']);

    $stmt = $conn->prepare("UPDATE funcionario SET nome=?, cargo=? WHERE id=?");
    $stmt->bind_param("ssi", $nome, $cargo, $id);

    if ($stmt->execute()) {
        header("Location: gerenciar_instituicao.php?id=$instituicao_id");
        exit;
    } else {
        echo "Erro ao atualizar: " . $stmt->error;
    }

    $stmt->close();
} else {
    $id = intval($_GET['id']);
    $instituicao_id = intval($_GET['id_instituicao']);

    $stmt = $conn->prepare("SELECT * FROM funcionario WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $result = $stmt->get_result();
    $funcionario = $result->fetch_assoc();

    if ($funcionario) {
        // Renderizar formulário aqui
    } else {
        echo "Funcionário não encontrado.";
    }

    $stmt->close();
}

$conn->close();
?>