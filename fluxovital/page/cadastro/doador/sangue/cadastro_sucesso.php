<?php
session_start();
$tipo = $_SESSION['tipo_doacao'] ?? 'não especificado';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Concluído - Fluxo Vital</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Ícones Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Estilo personalizado -->
    <style>
        body {
            background-color: #fff0f5; /* Rosa claro */
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background-color: #8B0000;
        }

        .navbar-brand {
            color: white;
            font-weight: bold;
            font-size: 1.4rem;
        }

        .card {
            border-radius: 1.5rem;
            padding: 2.5rem;
            background-color: white;
            border: none;
            box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1);
        }

        .btn-theme {
            background-color: #8B0000;
            color: white;
            font-weight: 500;
        }

        .btn-theme:hover {
            background-color: #8B0000;
            color: white;
        }

        footer {
            background-color: #8B0000;
            color: white;
            padding: 1rem 0;
            margin-top: auto;
            text-align: center;
        }

        .success-icon {
            font-size: 4rem;
            color: #28a745;
        }

        .highlight {
            color: #8B0000;
            font-weight: 600;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="/fluxovital/page/cadastro/doador/home_doador.php"> Fluxo Vital</a>
    </div>
</nav>

<!-- Conteúdo principal -->
<main class="flex-fill d-flex justify-content-center align-items-center">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card text-center">
                    <div class="success-icon mb-3">
                        <i class="bi bi-check-circle-fill"></i>
                    </div>
                    <h2 class="text-success mb-3">Cadastro concluído com sucesso!</h2>
                    <p class="mb-4">Seu formulário de <span class="highlight"><?= htmlspecialchars($tipo) ?></span> foi enviado corretamente.</p>
                    <a href="/fluxovital/page/cadastro/doador/home_doador.php" class="btn btn-theme btn-lg w-100">🏠 Voltar para a Home</a>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Rodapé -->
<footer>
    <div class="container">
        <p class="mb-0">© 2025 Fluxo Vital. Todos os direitos reservados.</p>
    </div>
</footer>

</body>
</html>
