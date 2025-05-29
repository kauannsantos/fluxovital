<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario_id']) || $_SESSION['tipo_usuario'] !== 'doador') {
    header('Location: ../../login.php');
    exit();
}

// Recupera o nome e tipo de doador da sessão
$nome = $_SESSION['nome'] ?? 'Doador';
$tipo_doador = $_SESSION['tipo_doacao'] ?? 'não informado';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Home do Doador - Fluxo Vital</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #fff0f5;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background-color: #8a054d;
        }

        .navbar-brand {
            color: white;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: white;
        }

        .card {
            border: none;
            border-radius: 1.5rem;
            box-shadow: 0 0.8rem 2rem rgba(0, 0, 0, 0.1);
            padding: 2rem;
        }

        .btn-theme {
            background-color: #8a054d;
            color: white;
        }

        .btn-theme:hover {
            background-color: #6c043d;
        }

        footer {
            background-color: #8a054d;
            color: white;
            padding: 1rem 0;
            margin-top: auto;
        }

        .highlight {
            color: #8a054d;
            font-weight: 600;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#">❤️ Fluxo Vital</a>
        <div class="ms-auto">
            <a href="../../logout.php" class="btn btn-outline-light btn-sm"><i class="bi bi-box-arrow-right"></i> Sair</a>
        </div>
    </div>
</nav>

<!-- Conteúdo -->
<main class="flex-fill">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Bem-vindo(a), <?= htmlspecialchars($nome) ?>!</h2>
            <p class="lead">Você é um doador do tipo: <span class="highlight"><?= htmlspecialchars($tipo_doador) ?></span>.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card text-center">
                    <i class="bi bi-person-lines-fill fs-1 text-success mb-3"></i>
                    <h5 class="card-title">Atualizar Dados</h5>
                    <p class="card-text">Mantenha suas informações atualizadas para facilitar o contato.</p>
                    <a href="editar_doador.php" class="btn btn-theme">Editar Perfil</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card text-center">
                    <i class="bi bi-clock-history fs-1 text-primary mb-3"></i>
                    <h5 class="card-title">Histórico de Doações</h5>
                    <p class="card-text">Consulte o histórico das suas doações registradas.</p>
                    <a href="historico_doacoes.php" class="btn btn-theme">Ver Histórico</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card text-center">
                    <i class="bi bi-hospital fs-1 text-danger mb-3"></i>
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
    <div class="container text-center">
        <p class="mb-0">© 2025 Fluxo Vital. Todos os direitos reservados.</p>
    </div>
</footer>

</body>
</html>
