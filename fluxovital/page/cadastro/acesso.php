<?php include '../../include/header.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Acesso - Fluxo Vital</title>

  <!-- Bootstrap e ícones -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    body {
      background-size: cover;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      color: #a40000;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .navbar {
      background-color: #a40000 !important;
    }

    .navbar-brand {
      font-weight: 700;
      color: white !important;
      font-size: 1.5rem;
      display: flex;
      align-items: center;
    }

    .navbar-brand img {
      height: 40px;
      margin-right: 10px;
    }

    .container-main {
      flex: 1;
      max-width: 500px;
      margin: 60px auto 40px;
      padding: 30px 25px;
      background: rgba(255, 255, 255, 0.95);
      border-radius: 20px;
      box-shadow: 0 0 15px rgba(0,0,0,0.25);
    }

    h2 {
      font-weight: 700;
      margin-bottom: 1rem;
      text-align: center;
      color: #a40000;
    }

    .btn-danger, .btn-secondary {
      width: 100%;
      font-weight: 700;
      border-radius: 30px;
      padding: 10px 0;
      margin-top: 0.5rem;
    }

    .btn-danger:hover {
      background-color: #800000;
    }

    .btn-secondary {
      background-color: #6c757d;
      border: none;
    }

    .btn-secondary:hover {
      background-color: #5a6268;
    }

    .btn i {
      margin-right: 8px;
      font-size: 1.2rem;
      vertical-align: middle;
    }

    footer {
      background-color: #880000;
      color: white;
      text-align: center;
      padding: 12px;
      font-size: 0.9rem;
      user-select: none;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="/fluxovital/page/home/index.php">
      <img src="/fluxovital/assets/images/logo_fluxovital.png" alt="Logo" />
      Fluxo Vital
    </a>
  </div>
</nav>

<!-- Conteúdo principal -->
<main class="container-main">
  <h2>Acesso</h2>

  <!-- Botões de Cadastro -->
  <a href="/fluxovital/page/cadastro/doador.php" class="btn btn-danger">
    <i class="bi bi-person-plus-fill"></i> Cadastrar como Doador
  </a>

  <a href="/fluxovital/page/cadastro/instituicao.php" class="btn btn-danger">
    <i class="bi bi-building"></i> Cadastrar como Instituição
  </a>

  <!-- Formulário de Login -->
  <form method="post" action="/fluxovital/page/login/login.php" class="mt-4">
    <div class="mb-3">
      <label for="email" class="form-label">E-mail:</label>
      <input type="email" name="email" id="email" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="senha" class="form-label">Senha:</label>
      <input type="password" name="senha" id="senha" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-secondary">
      <i class="bi bi-box-arrow-in-right"></i> Entrar
    </button>
  </form>
</main>

<!-- Rodapé -->
<footer>
  &copy; 2025 Fluxo Vital — Desenvolvido por estudantes para o bem comum.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
