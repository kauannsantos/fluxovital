<?php
include __DIR__ . '/../include/header.php';

if (!isset($_SESSION['usuario_id'])) {
    header("Location: /fluxovital/page/cadastro/tipos_cadastros.php");
    exit();
}

require_once __DIR__ . '/../config/db.php';

$usuario = [];
$query = $conn->prepare("SELECT nome, email, data_criacao FROM usuario WHERE id = ?");
$query->bind_param("i", $_SESSION['usuario_id']);

if ($query->execute()) {
    $result = $query->get_result();
    $usuario = $result->fetch_assoc();
    $result->free();
} else {
    die("Erro ao buscar dados do usuário: " . $conn->error);
}

$tipoConta = 'Usuário comum';  // Como não tem tabelas doador ou instituicao

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Meu Perfil - Fluxo Vital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Meu Perfil</h2>

    <div class="card shadow">
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <i class="bi bi-person-circle" style="font-size: 6rem; color: #8B0000;"></i>
                </div>
                <div class="col-md-8">
                    <h4><?= htmlspecialchars($usuario['nome'] ?? 'Nome não encontrado') ?></h4>
                    <p class="text-muted">Membro desde: <?= isset($usuario['data_criacao']) ? date('d/m/Y', strtotime($usuario['data_criacao'])) : 'Data não registrada' ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label text-danger">E-mail:</label>
                        <p><?= htmlspecialchars($usuario['email'] ?? 'E-mail não cadastrado') ?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label text-danger">Tipo de Conta:</label>
                        <p><?= $tipoConta ?></p>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <a href="/fluxovital/perfil/editar_perfil.php" class="btn btn-danger">
                    <i class="bi bi-pencil-square"></i> Editar Perfil
                </a>
                <a href="/fluxovital/logout/logout.php" class="btn btn-outline-danger">
                    <i class="bi bi-box-arrow-right"></i> Sair
                </a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
