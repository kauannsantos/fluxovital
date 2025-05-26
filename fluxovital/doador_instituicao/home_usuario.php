<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
  header("Location: /fluxovital/login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Bem-vindo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .card-action {
      transition: transform 0.2s ease;
      cursor: pointer;
    }
    .card-action:hover {
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <h2 class="text-center mb-4">Bem-vindo, <?= htmlspecialchars($_SESSION['nome']) ?>!</h2>

    <div class="alert alert-info text-center">
      Você ainda não escolheu um papel. Que tal se tornar doador ou cadastrar sua instituição?
    </div>

    <div class="row justify-content-center mb-5">
      <div class="col-md-4 mb-3">
        <a href="/fluxovital/page/cadastro/cadastro_doador.php" class="text-decoration-none">
          <div class="card card-action text-center shadow-sm p-4">
            <i class="bi bi-droplet icon" style="font-size: 2.5rem; color: red;"></i>
            <h5 class="mt-3">Quero ser Doador</h5>
          </div>
        </a>
      </div>
      <div class="col-md-4 mb-3">
        <a href="/fluxovital/page/cadastro/cadastro_instituicao.php" class="text-decoration-none">
          <div class="card card-action text-center shadow-sm p-4">
            <i class="bi bi-building icon" style="font-size: 2.5rem; color: #0d6efd;"></i>
            <h5 class="mt-3">Quero ser Instituição</h5>
          </div>
        </a>
      </div>
    </div>

    <div class="text-center">
      <p class="text-muted">Explore campanhas, informações e muito mais pela plataforma.</p>
      <a href="/fluxovital/logout.php" class="btn btn-outline-secondary btn-sm">Sair</a>
    </div>
  </div>
</body>
</html>
