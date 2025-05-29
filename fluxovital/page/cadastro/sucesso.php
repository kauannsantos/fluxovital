<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro realizado com sucesso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
        }

        .card {
            border: none;
            border-radius: 1rem;
        }

        .btn-primary {
            background-color: #d90429;
            border: none;
        }

        .btn-primary:hover {
            background-color: #a4031f;
        }

        .btn-outline-secondary {
            border-color: #2b2d42;
            color: #2b2d42;
        }

        .btn-outline-secondary:hover {
            background-color: #2b2d42;
            color: #fff;
        }

        h1 {
            font-weight: bold;
        }

        .logo {
            width: 80px;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow text-center p-4" style="max-width: 480px;">
        <div class="card-body">
            <img src="/fluxovital/assets/images/logo1.png" alt="Fluxo Vital" class="logo mb-3">
            <h1 class="text-success mb-3">✅ Cadastro Concluído!</h1>
            <p class="fs-5 mb-4">Obrigado por se cadastrar como doador.<br>Agora vamos te conhecer melhor!</p>

            <div class="d-grid gap-2">
                <a href="/fluxovital/page/cadastro/escolha_categoria.php" class="btn btn-primary">
                    Escolher Categoria de Doação
                </a>
                <a href="/fluxovital/home/index.php" class="btn btn-outline-secondary">
                    Voltar para a Home
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
