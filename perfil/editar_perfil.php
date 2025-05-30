<?php
include __DIR__ . '/../include/header.php';

if (!isset($_SESSION['usuario_id'])) {
    header("Location: /fluxovital/page/cadastro/tipos_cadastros.php");
    exit();
}

require_once __DIR__ . '/../config/db.php';

// Inicializa variáveis e mensagens de erro
$nome = '';
$email = '';
$errors = [];

// Busca dados atuais do usuário
$query = $conn->prepare("SELECT nome, email FROM usuario WHERE id = ?");
$query->bind_param("i", $_SESSION['usuario_id']);
if ($query->execute()) {
    $result = $query->get_result();
    if ($user = $result->fetch_assoc()) {
        $nome = $user['nome'];
        $email = $user['email'];
    }
    $result->free();
} else {
    $errors['geral'] = 'Erro ao carregar dados do perfil.';
}

// Processa envio do formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');

    // Validações
    if (empty($nome)) {
        $errors['nome'] = 'O nome não pode ficar em branco.';
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Informe um e-mail válido.';
    }

    // Se válido, atualiza
    if (empty($errors)) {
        $update = $conn->prepare("UPDATE usuario SET nome = ?, email = ? WHERE id = ?");
        $update->bind_param("ssi", $nome, $email, $_SESSION['usuario_id']);
        if ($update->execute()) {
            // Atualiza nome na sessão para refletir no header
            $_SESSION['usuario_nome'] = $nome;
            $_SESSION['flash_success'] = 'Perfil atualizado com sucesso!';
            header('Location: /fluxovital/perfil/perfil.php');
            exit();
        } else {
            $errors['geral'] = 'Erro ao atualizar perfil. Tente novamente.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Perfil - Fluxo Vital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --vermelho-fluxo: #6B2A2D;
            --bege-claro: #F5EDE6;
        }
        body {
            background-color: var(--bege-claro);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .profile-card {
            background: white;
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
            overflow: hidden;
            width: 100%;
            max-width: 600px;
            margin: 2rem auto;
        }
        .card-header {
            background-color: var(--vermelho-fluxo);
            color: white;
            padding: 2rem;
            text-align: center;
        }
        .card-body {
            padding: 2rem;
        }
        .form-control:focus {
            border-color: var(--vermelho-fluxo);
            box-shadow: 0 0 0 0.25rem rgba(107,42,45,0.25);
        }
        .input-icon {
            position: relative;
        }
        .input-icon i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--vermelho-fluxo);
        }
        .input-icon input {
            padding-left: 40px;
        }
        .btn-fluxo {
            background-color: var(--vermelho-fluxo);
            color: white;
            padding: 0.75rem 1.5rem;
            transition: all 0.3s ease;
        }
        .btn-fluxo:hover {
            background-color: #5a2326;
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="profile-card">
        <div class="card-header">
            <h2 class="mb-0"><i class="bi bi-person-gear me-2"></i>Editar Perfil</h2>
        </div>
        <div class="card-body">
            <?php if (!empty($errors['geral'])): ?>
                <div class="alert alert-danger"><?= htmlspecialchars($errors['geral']) ?></div>
            <?php endif; ?>
            <form method="post" action="">
                <div class="mb-4 input-icon">
                    <i class="bi bi-person-fill"></i>
                    <input type="text" 
                           name="nome"
                           id="nome"
                           class="form-control <?= isset($errors['nome']) ? 'is-invalid' : '' ?>"
                           placeholder="Nome completo"
                           value="<?= htmlspecialchars($nome) ?>">
                    <?php if (isset($errors['nome'])): ?>
                        <div class="invalid-feedback d-block"><?= htmlspecialchars($errors['nome']) ?></div>
                    <?php endif; ?>
                </div>
                <div class="mb-4 input-icon">
                    <i class="bi bi-envelope-fill"></i>
                    <input type="email"
                           name="email"
                           id="email"
                           class="form-control <?= isset($errors['email']) ? 'is-invalid' : '' ?>"
                           placeholder="E-mail"
                           value="<?= htmlspecialchars($email) ?>">
                    <?php if (isset($errors['email'])): ?>
                        <div class="invalid-feedback d-block"><?= htmlspecialchars($errors['email']) ?></div>
                    <?php endif; ?>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                    <a href="/fluxovital/perfil/perfil.php" class="btn btn-outline-secondary">
                        <i class="bi bi-x-circle me-2"></i>Cancelar
                    </a>
                    <button type="submit" class="btn btn-fluxo">
                        <i class="bi bi-save me-2"></i>Salvar Alterações
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>