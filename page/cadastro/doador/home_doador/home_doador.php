<?php
session_start();

// Ativar exibição de erros para depuração
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Verifica se o usuário está logado e é doador
if (!isset($_SESSION['usuario_id']) || $_SESSION['tipo_usuario'] !== 'doador') {
    header('Location: /fluxovital/page/cadastro/doador/login/login_doador.php');
    exit();
}

// Recupera o nome e tipo de doador da sessão
$nome = $_SESSION['nome'] ?? 'Doador';
$tipo_doador = $_SESSION['tipo_doacao'] ?? 'não informado';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Home do Doador - Fluxo Vital</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

    <style>
        :root {
            --vinho: #9d040e;
            --vinho-escuro: #6a0207;
            --rosa-claro: #ffe9ec;
            --rosa-medio: #f2b8c5;
            --cinza-claro: #f5f5f5;
        }

        body {
            background-color: var(--rosa-claro);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar {
            background-color: var(--vinho);
        }

        .navbar-brand {
            color: #fff;
            font-weight: 700;
            font-size: 1.75rem;
            letter-spacing: 2px;
            user-select: none;
        }

        .navbar-brand:hover {
            color: var(--rosa-medio);
            text-decoration: none;
        }

        .navbar-nav .nav-link,
        .btn-outline-light {
            color: #fff;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover,
        .btn-outline-light:hover {
            color: var(--rosa-medio);
        }

        .card {
            border: none;
            border-radius: 1.5rem;
            box-shadow: 0 0.8rem 2rem rgba(123, 30, 56, 0.15);
            background-color: #fff;
            padding: 2rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 1rem 3rem rgba(123, 30, 56, 0.3);
        }

        .card-title {
            color: var(--vinho);
            font-weight: 700;
            margin-bottom: 0.75rem;
        }

        .card-text {
            color: #555;
            margin-bottom: 1.5rem;
        }

        .card i {
            color: var(--vinho);
            margin-bottom: 1rem;
        }

        .btn-theme {
            background-color: var(--vinho);
            color: #fff;
            font-weight: 600;
            border-radius: 50px;
            padding: 0.5rem 1.75rem;
            transition: background-color 0.3s ease;
        }

        .btn-theme:hover,
        .btn-theme:focus {
            background-color: var(--vinho-escuro);
            color: #fff;
        }

        footer {
            background-color: var(--vinho);
            color: #fff;
            padding: 1.25rem 0;
            margin-top: auto;
            font-size: 0.9rem;
            text-align: center;
            user-select: none;
        }

        footer a {
            color: var(--rosa-medio);
            text-decoration: none;
            font-weight: 600;
        }

        footer a:hover {
            text-decoration: underline;
            color: #fff;
        }

        .highlight {
            color: var(--vinho);
            font-weight: 700;
        }

        main > .container {
            max-width: 960px;
        }
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#">Fluxo Vital</a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Alternar navegação"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto align-items-center gap-2">
                <a href="agendamento.php" class="btn btn-outline-light btn-sm">
                    <i class="bi bi-calendar-check me-1"></i> Agendar Doação
                </a>
                <a href="/fluxovital/page/cadastro/doador/home_doador/logout.php" class="btn btn-outline-light btn-sm">
                    <i class="bi bi-box-arrow-right me-1"></i> Sair
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- Conteúdo -->
<main class="flex-fill">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Bem-vindo(a), <?= htmlspecialchars($nome) ?>!</h2>
            <p class="lead">
                Você é um doador do tipo:
                <span class="highlight"><?= htmlspecialchars($tipo_doador) ?></span>.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card text-center">
                    <i class="bi bi-person-lines-fill fs-1 mb-3"></i>
                    <h5 class="card-title">Atualizar Dados</h5>
                    <p class="card-text">Mantenha suas informações atualizadas.</p>
                    <a href="editar_doador.php" class="btn btn-theme">Editar Perfil</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card text-center">
                    <i class="bi bi-clock-history fs-1 mb-3"></i>
                    <h5 class="card-title">Histórico de Doações</h5>
                    <p class="card-text">Consulte o histórico das suas doações registradas.</p>
                    <a href="historico_doacoes.php" class="btn btn-theme">Ver Histórico</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card text-center">
                    <i class="bi bi-hospital fs-1 mb-3"></i>
                    <h5 class="card-title">Instituições Próximas</h5>
                    <p class="card-text">Veja onde você pode doar perto de você.</p>
                    <a href="instituicoes_proximas.php" class="btn btn-theme">Ver Locais</a>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Rodapé -->
<footer>
    <div class="container">
        <p class="mb-0">
            © 2025 Fluxo Vital. Todos os direitos reservados. — Criado com eficiência por nossa equipe.
        </p>
    </div>
</footer>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
