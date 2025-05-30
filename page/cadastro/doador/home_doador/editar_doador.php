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

// Recupera os dados do doador da sessão
$nome = $_SESSION['nome'] ?? '';
$tipo_doacao = $_SESSION['tipo_doacao'] ?? '';
$email = $_SESSION['email'] ?? '';
$telefone = $_SESSION['telefone'] ?? '';
$cpf = $_SESSION['cpf'] ?? '';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Perfil - Fluxo Vital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h2>Editar Perfil</h2>
        <form action="processa_doador.php" method="POST">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?= htmlspecialchars($nome) ?>" required>
            </div>
            <div class="mb-3">
                <label for="tipo_doacao" class="form-label">Tipo de Doação</label>
                <input type="text" class="form-control" id="tipo_doacao" name="tipo_doacao" value="<?= htmlspecialchars($tipo_doacao) ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($email) ?>" required>
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="<?= htmlspecialchars($telefone) ?>" required>
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" value="<?= htmlspecialchars($cpf) ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>
    </div>
</body>
</html>
