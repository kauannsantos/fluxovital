<?php
session_start();
if (empty($_SESSION['instituicao_id'])) {
    header("Location: escolha_categoria.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Área da Instituição | Fluxo Vital</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <style>
        body {
            background-color:  #ffe6e6;
            font-family: 'Segoe UI', sans-serif;
        }

        .header {
            background-color: #7B1B1B;
            color: white;
            padding: 2rem 1rem;
            border-radius: 0 0 1rem 1rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            text-align: center;
            margin-bottom: 2rem;
        }

        .header h1 {
            font-size: 2rem;
            font-weight: 700;
        }

        .welcome-text {
            font-size: 1.1rem;
            margin-top: 0.5rem;
        }

        .card-category {
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            border: none;
            border-radius: 1rem;
            background: #fff;
            box-shadow: 0 0 0 transparent;
        }

        .card-category:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(220, 53, 69, 0.2);
        }

        .card-category .card-body {
            padding: 2rem 1rem;
        }

        .card-category i {
            color: #7B1B1B;
            margin-bottom: 1rem;
        }

        .card-title {
            font-weight: 600;
        }

        .btn-danger {
            border-radius: 50px;
            padding: 0.5rem 1.5rem;
        }

        .logout-btn {
            margin-top: 3rem;
        }

        footer {
            margin-top: 4rem;
            padding: 1rem;
            background-color: #7B1B1B;
            color: #fff;
            text-align: center;
            border-top-left-radius: 1rem;
            border-top-right-radius: 1rem;
        }

        @media (max-width: 576px) {
            .header h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Área da Instituição</h1>
        <div class="welcome-text">
            Bem-vindo(a), <strong><?= htmlspecialchars($_SESSION['instituicao_nome']) ?></strong> — Categoria: <em><?= htmlspecialchars($_SESSION['instituicao_categoria']) ?></em>
        </div>
    </div>

    <?php if (!empty($_SESSION['sucesso'])): ?>
        <div class="alert alert-success text-center">
            <?= htmlspecialchars($_SESSION['sucesso']) ?>
        </div>
        <?php unset($_SESSION['sucesso']); ?>
    <?php endif; ?>

    <div class="row g-4">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-category h-100" onclick="location.href='gerenciar_instituicao.php'">
                <div class="card-body text-center">
                    <i class="fas fa-building fa-3x"></i>
                    <h5 class="card-title">Dados da Instituição</h5>
                    <p class="text-muted">Adicionar e editar dados institucionais.</p>
                    <button class="btn btn-danger">Gerenciar</button>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-category h-100" onclick="location.href='funcionarios.php'">
                <div class="card-body text-center">
                    <i class="fas fa-users fa-3x"></i>
                    <h5 class="card-title">Estoque</h5>
                    <p class="text-muted">Controlar e gerenciar estoques do sistema.</p>
                    <button class="btn btn-danger">Gerenciar</button>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-category h-100" onclick="location.href='doacoes.php'">
                <div class="card-body text-center">
                    <i class="fas fa-tint fa-3x"></i>
                    <h5 class="card-title">Doações</h5>
                    <p class="text-muted">Visualizar e gerenciar doações recebidas no sistema.</p>
                    <button class="btn btn-danger">Acessar</button>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-category h-100" onclick="location.href='campanhas.php'">
                <div class="card-body text-center">
                    <i class="fas fa-bullhorn fa-3x"></i>
                    <h5 class="card-title">Campanhas</h5>
                    <p class="text-muted">Criar e acompanhar campanhas de doação.</p>
                    <button class="btn btn-danger">Gerenciar</button>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-category h-100" onclick="location.href='relatorios.php'">
                <div class="card-body text-center">
                    <i class="fas fa-file-alt fa-3x"></i>
                    <h5 class="card-title">Relatórios</h5>
                    <p class="text-muted">Gerar relatórios e estatísticas.</p>
                    <button class="btn btn-danger">Visualizar</button>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-category h-100" onclick="location.href='solicitar_coleta.php'">
                <div class="card-body text-center">
                    <i class="fas fa-truck fa-3x"></i>
                    <h5 class="card-title">Solicitar Coleta</h5>
                    <p class="text-muted">Peça coleta de doações à equipe Fluxo Vital.</p>
                    <button class="btn btn-danger">Solicitar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center logout-btn">
        <a href="logout.php" class="btn btn-outline-danger btn-lg">
            <i class="fas fa-sign-out-alt"></i> Sair
        </a>
    </div>
</div>

<footer>
    &copy; <?= date("Y") ?> Fluxo Vital — Todos os direitos reservados.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
