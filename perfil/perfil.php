<?php
include __DIR__ . '/../include/header.php';

if (!isset($_SESSION['usuario_id'])) {
    header("Location: /fluxovital/page/cadastro/tipos_cadastros.php");
    exit();
}

require_once __DIR__ . '/../config/db.php';

// Busca dados do usuário
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

$tipoConta = 'Usuário comum';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Meu Perfil - Fluxo Vital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --vermelho-fluxo: #6B2A2D;
            --bege-claro: #F5EDE6;
            --cinza-escuro: #4A4A4A;
        }
        body {
            background-color: var(--bege-claro);
            color: var(--cinza-escuro);
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding-top: 2rem;
            padding-bottom: 2rem;
        }
        .profile-container {
            max-width: 600px;
            margin: 0 auto;
        }
        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .card-header {
            background-color: var(--vermelho-fluxo);
            color: white;
            text-align: center;
            padding: 2rem;
        }
        .card-body {
            padding: 2rem;
        }
        .info-label {
            font-weight: bold;
            color: var(--vermelho-fluxo);
        }
        .btn-home {
            background-color: var(--bege-claro);
            color: var(--vermelho-fluxo);
            border: 2px solid var(--vermelho-fluxo);
            text-transform: uppercase;
            font-weight: bold;
            transition: all 0.3s;
        }
        .btn-home:hover {
            background-color: var(--vermelho-fluxo);
            color: var(--bege-claro);
        }
    </style>
</head>
<body>
<div class="container profile-container">
    <div class="card">
        <div class="card-header">
            <i class="bi bi-person-circle" style="font-size: 4rem;"></i>
            <h2 class="mt-2"><?= htmlspecialchars($usuario['nome'] ?? 'Nome não encontrado') ?></h2>
            <p>Membro desde <?= isset($usuario['data_criacao']) ? date('d/m/Y', strtotime($usuario['data_criacao'])) : '---' ?></p>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <span class="info-label">E-mail:</span>
                <p><?= htmlspecialchars($usuario['email'] ?? 'Não cadastrado') ?></p>
            </div>
            <div class="mb-3">
                <span class="info-label">Tipo de Conta:</span>
                <p><?= htmlspecialchars($tipoConta) ?></p>
            </div>
            <div class="d-flex justify-content-between mt-4">
                <a href="/fluxovital/index.php" class="btn btn-home">
                    <i class="bi bi-house-door me-1"></i> Home
                </a>
                <div>
                    <a href="/fluxovital/perfil/editar_perfil.php" class="btn btn-danger me-2">
                        <i class="bi bi-pencil-square me-1"></i> Editar
                    </a>
                    <a href="#" class="btn btn-outline-danger me-2" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">
                        <i class="bi bi-trash me-1"></i> Excluir
                    </a>
                    <a href="/fluxovital/logout/logout.php" class="btn btn-outline-secondary">
                        <i class="bi bi-box-arrow-right me-1"></i> Sair
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL CONFIRMAÇÃO -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="/fluxovital/perfil/excluir_perfil.php" method="POST" class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmar Exclusão</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                Tem certeza de que deseja excluir seu perfil? Esta ação não poderá ser desfeita.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-danger">Sim, excluir</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
