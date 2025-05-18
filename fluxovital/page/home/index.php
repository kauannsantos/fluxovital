<?php include '../../include/header.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Fluxo Vital</title>

  <!-- Bootstrap e Ícones -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Favicon -->
  <link rel="shortcut icon" href="/fluxovital/assets/images/logo_fluxovital.png" type="image/x-icon">

  <!-- Estilos personalizados -->
  <style>
    body {
      background-size: cover;
      color: white;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .navbar {
      background-color: #a40000 !important;
    }

    .navbar-brand {
      display: flex;
      align-items: center;
      font-weight: 700;
      font-size: 1.5rem;
      color: white;
    }

    .navbar-brand img {
      height: 40px;
      margin-right: 10px;
    }

    .btn-light {
      font-weight: 600;
    }

    .container-main {
      flex: 1;
      max-width: 960px;
      margin: 40px auto;
      padding: 20px;
      background: rgba(255, 255, 255, 0.9);
      border-radius: 16px;
      color: #333;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.25);
    }

    h2 {
      color: #a40000;
      font-weight: 700;
      margin-bottom: 1rem;
    }

    .btn-danger {
      border-radius: 30px;
      margin-top: 15px;
      padding: 10px 30px;
      font-weight: 600;
      transition: background-color 0.3s ease;
    }

    .btn-danger:hover {
      background-color: #800000;
    }

    .news-item {
      display: flex;
      align-items: flex-start;
      margin-bottom: 0.75rem;
      font-size: 1rem;
      color: #a40000;
    }

    .news-item i {
      margin-right: 0.5rem;
      margin-top: 0.2rem;
    }

    footer {
      background-color: #880000;
      color: white;
      padding: 15px;
      text-align: center;
      font-size: 0.9rem;
      user-select: none;
    }

    .hero {
      text-align: center;
      padding: 50px 20px 40px;
      color: #a40000;
    }

    .hero h1 {
      font-weight: 700;
      font-size: 2.8rem;
      margin-bottom: 0.5rem;
    }

    .hero p {
      font-size: 1.2rem;
      margin-bottom: 1rem;
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
    <a href="/fluxovital/page/cadastro/acesso.php" class="btn btn-light ms-auto">Entrar / Cadastrar</a>
  </div>
</nav>

<!-- Conteúdo principal -->
<main class="container-main">

  <!-- Hero -->
  <section class="hero">
    <h1>Bem-vindo ao Fluxo Vital</h1>
    <p>Plataforma que conecta doadores e instituições de forma inteligente para salvar vidas.</p>
    <a href="/fluxovital/page/cadastro/acesso.php" class="btn btn-danger btn-lg">
      <i class="bi bi-person-plus-fill"></i> Cadastrar ou Entrar
    </a>
  </section>

  <!-- Seções principais -->
  <section class="text-center mt-5">
    <h2>Quem Pode Doar?</h2>
    <p>Descubra se você está apto para doar sangue, médula óssea ou leite materno.</p>
    <a href="/page/tira_duvida/index.php" class="btn btn-danger">Ver requisitos</a>
    <!-- Categorias de Doação -->
<section class="text-center mt-5">
  <h2>Escolha uma Categoria de Doação</h2>
  <div class="row mt-4">
    <div class="col-md-4 mb-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body">
          <i class="bi bi-droplet" style="font-size: 2rem; color: #a40000;"></i>
          <h5 class="card-title mt-2">Doação de Sangue</h5>
          <p class="card-text">Ajude a salvar vidas com uma simples doação de sangue.</p>
          <a href="/fluxovital/page/doacao/sangue/index.php" class="btn btn-danger">Acessar</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body">
          <i class="bi bi-heart-pulse" style="font-size: 2rem; color: #a40000;"></i>
          <h5 class="card-title mt-2">Doação de Medula</h5>
          <p class="card-text">Cadastre-se como doador e seja a esperança para alguém com leucemia.</p>
          <a href="/fluxovital/page/doacao/medula/index.php" class="btn btn-danger">Acessar</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body">
          <i class="bi bi-baby" style="font-size: 2rem; color: #a40000;"></i>
          <h5 class="card-title mt-2">Doação de Leite</h5>
          <p class="card-text">Contribua para o desenvolvimento saudável de recém-nascidos.</p>
          <a href="/fluxovital/page/doacao/leite/index.php" class="btn btn-danger">Acessar</a>
        </div>
      </div>
    </div>
  </div>
</section>

  </section>

  <section class="text-center mt-5">
    <h2>Locais de Coleta</h2>
    <p>Encontre o ponto de coleta mais próximo da sua região.</p>
    <a href="/page/local/index.php" class="btn btn-danger">Localizar</a>
  </section>

  <section class="text-center mt-5">
    <h2>Banco Digital</h2>
    <p>Acompanhe os estoques de sangue e outros dados em tempo real.</p>
    <a href="/page/local/index.php" class="btn btn-danger">Acessar</a>
  </section>

  <!-- Notícias (estáticas por enquanto) -->
  <section class="mt-5">
    <h2>Últimas Notícias</h2>
    <div class="news-item">
      <i class="bi bi-droplet-half"></i>
      <span>Campanha Nacional de Doação de Sangue começa este mês.</span>
    </div>
    <div class="news-item">
      <i class="bi bi-person-heart"></i>
      <span>Doadores de medula óssea ganham prioridade em programas de saúde.</span>
    </div>
    <div class="news-item">
      <i class="bi bi-broadcast-pin"></i>
      <span>Novos pontos de coleta inaugurados em 5 capitais.</span>
    </div>
  </section>

</main>

<!-- Rodapé -->
<footer>
  &copy; 2025 Fluxo Vital — Desenvolvido por estudantes para o bem comum.
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
