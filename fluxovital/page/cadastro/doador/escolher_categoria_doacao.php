<?php
session_start();

if (!isset($_SESSION['doador_id'])) {
    header("Location: cadastro_doador.php");
    exit();
}

$doador_id = $_SESSION['doador_id'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Escolher Categoria de Doação - Fluxo Vital</title>

  <!-- Bootstrap + Ícones -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    :root {
      --vinho: #9d040e;
      --vinho-dark: #6a0207;
    }

    body {
      background: linear-gradient(135deg, #fcefee, #f9f6f5);
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    header, footer {
      background-color: var(--vinho);
      color: white;
      text-align: center;
      padding: 1rem;
    }

    footer {
      background-color: var(--vinho-dark);
      margin-top: auto;
    }

    .main-wrapper {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 2rem 1rem;
    }

    .card-custom {
      width: 100%;
      max-width: 480px;
      background: rgba(255, 255, 255, 0.95);
      border-radius: 1.5rem;
      box-shadow: 0 5px 25px rgba(0, 0, 0, 0.15);
      padding: 2rem;
    }

    .btn-lg {
      font-size: 1.1rem;
      padding: 0.75rem;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .btn-lg i {
      margin-right: 0.5rem;
      font-size: 1.2rem;
    }

    .text-muted a {
      color: var(--vinho-dark);
      text-decoration: none;
    }

    .text-muted a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<header>
  <h1><i class="bi bi-droplet-half me-2"></i>Fluxo Vital</h1>
</header>

<main class="main-wrapper">
  <div class="card-custom text-center">
    <h3 class="mb-3">Escolha a Categoria de Doação</h3>
    <p class="text-muted mb-4">Selecione a categoria para preencher o formulário correspondente.</p>

    <div class="d-grid gap-3">
      <a href="form_sangue.php" class="btn btn-danger btn-lg">
        <i class="bi bi-heart-pulse-fill"></i> Doação de Sangue
      </a>
      <a href="form_leite_materno.php" class="btn btn-warning btn-lg">
        <i class="bi bi-baby-bottle-fill"></i> Doação de Leite Materno
      </a>
      <a href="form_medula.php" class="btn btn-success btn-lg">
        <i class="bi bi-flower1"></i> Doação de Medula Óssea
      </a>
    </div>

    <div class="mt-4 text-muted">
      <a href="logout.php"><i class="bi bi-box-arrow-left"></i> Sair da conta</a>
    </div>
  </div>
</main>

<footer>
  <p>&copy; <?= date("Y") ?> Fluxo Vital • Todos os direitos reservados.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
