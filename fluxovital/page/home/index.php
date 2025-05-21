<?php 
  // Inclui o cabeçalho padrão do sistema (sessões, configs globais, scripts)
  include '../../include/header.php'; 
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Fluxo Vital</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="/fluxovital/assets/images/logo_fluxovital.png" type="image/x-icon">

  <style>
    .btn-acessar-medula {
      margin-top: 14px;
    }
    .btn-acessar-materno {
      margin-top: 16px;
    }

    body {
      background-color: #f2e3d5; /* bege */
      background-size: cover;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      margin: 0;
      padding: 0;
      color: #333; /* Texto escuro para melhor leitura */
    }

    .navbar {
      background-color: #a40000 !important; /* vermelho escuro */
    }

    .navbar-brand {
      display: flex;
      align-items: center;
      font-weight: 700;
      font-size: 1.5rem;
      color: white;
      text-decoration: none;
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
      margin-top: auto;
    }

    .hero {
      text-align: center;
      padding: 50px 20px 40px;
      color: #a40000;
    }

    .hero-content {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 30px; /* Espaçamento maior entre logo e texto */
      flex-wrap: wrap; /* Para responsividade, quebra em telas menores */
      text-align: left; /* Para alinhar o texto ao lado da logo */
    }

    .hero-content img {
      position: relative;
      top: -30px; /* sobe só a logo 10px */
      height: 210px; /* Logo maior */
      max-width: 100%;
      object-fit: contain;
    }

    .hero-text {
      max-width: 600px;
      flex: 1 1 auto;
    }

    .hero h1 {
      font-weight: 700;
      font-size: 2.8rem;
      margin-bottom: 0.5rem;
      text-align: left;
    }

    .hero p {
      font-size: 1.2rem;
      margin-bottom: 1rem;
      text-align: left;
    }

    /* Cards flexbox styling */
    .card-body {
      display: flex;
      flex-direction: column;
    }

    .card-body a.btn {
      margin-top: auto;
    }

    /* Footer expandido */
    .footer-expanded {
      background-color: #6b0000;
      color: white;
      padding: 40px 20px;
      font-size: 0.9rem;
    }

    .footer-expanded .footer-section {
      margin-bottom: 20px;
    }

    .footer-expanded h5 {
      font-weight: 700;
      margin-bottom: 10px;
      color: #ffdddd;
    }

    .footer-expanded a {
      color: #ffdede;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .footer-expanded a:hover {
      color: white;
      text-decoration: underline;
    }

    .footer-expanded .footer-columns {
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
      max-width: 960px;
      margin: 0 auto 20px;
      justify-content: center;
    }

    @media (max-width: 768px) {
      .footer-expanded .footer-columns {
        flex-direction: column;
        gap: 30px;
        text-align: center;
      }
      .hero-content {
        text-align: center;
        justify-content: center;
      }
      .hero-text {
        max-width: 100%;
      }
      .hero h1, .hero p {
        text-align: center;
      }
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="/fluxovital/page/home/index.php">
      <img src="/fluxovital/assets/images/logo1.png" alt="Logo" />
      Fluxo Vital
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDoacoes" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Doações
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDoacoes">
            <li><a class="dropdown-item" href="/fluxovital/page/doacao/sangue/index.php">Doação de Sangue</a></li>
            <li><a class="dropdown-item" href="/fluxovital/page/doacao/medula/index.php">Doação de Médula Óssea</a></li>
            <li><a class="dropdown-item" href="/fluxovital/page/doacao/leite/index.php">Doação de Leite Materno</a></li>
          </ul>
        </li>

        <!-- Novas categorias no cabeçalho, fora do dropdown Doações -->
        <li class="nav-item">
          <a class="nav-link" href="/fluxovital/page/noticias/index.php">Notícias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/fluxovital/page/eventos/index.php">Eventos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/fluxovital/page/sobre/index.php">Sobre Nós</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/fluxovital/page/contato/index.php">Contato</a>
        </li>

        <li class="nav-item">
          <a href="/fluxovital/doador_instituicao/home.php" class="btn btn-light ms-lg-3 mt-2 mt-lg-0">Entrar / Cadastrar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Conteúdo principal -->
<main class="container-main">

  <!-- Seção boas-vindas -->
  <section class="hero">
    <div class="hero-content">
      <img src="/fluxovital/assets/images/logo1.png" alt="Logo Fluxo Vital" />
      <div class="hero-text">
        <h1>Bem-vindo(a) ao Fluxo Vital</h1>
        <p>Plataforma que conecta doadores e instituições de forma inteligente para salvar vidas.</p>
      </div>
    </div>
  </section>

  <div class="mt-4">
    <div id="carouselBanners" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner rounded shadow">
        <div class="carousel-item active">
          <img src="/fluxovital/assets/images/bn1.jpg" class="d-block w-100" alt="Banner 1">
        </div>
        <div class="carousel-item">
          <img src="/fluxovital/assets/images/bn2.jpg" class="d-block w-100" alt="Banner 2">
        </div>
        <div class="carousel-item">
          <img src="/fluxovital/assets/images/bn4.jpg" class="d-block w-100" alt="Banner 3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanners" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselBanners" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>

  <!-- Categorias de doação -->
  <section class="text-center mt-5">
    <h2>Escolha uma Categoria de Doação</h2>
    <div class="row">
      <!-- Card 1: Sangue -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body d-flex flex-column">
            <i class="fa-solid fa-droplet" style="font-size: 4rem; color: #a40000;"></i>
            <h5 class="card-title mt-2">Doação de Sangue</h5>
            <p class="card-text">Para conectar doadores, instituições e beneficiários, facilitando a doação de sangue com segurança e agilidade.</p>
            <a href="/fluxovital/page/doacao/sangue/index.php" class="btn btn-danger mt-auto btn-acessar-sangue">Acessar</a>
          </div>
        </div>
      </div>

      <!-- Card 2: Medula -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body d-flex flex-column">
            <i class="fa-solid fa-heart-pulse" style="font-size: 4rem; color: #a40000;"></i>
            <h5 class="card-title mt-2">Doação de Médula Óssea</h5>
            <p class="card-text">Conecte doadores e pacientes para transplantes que salvam vidas.</p>
            <a href="/fluxovital/page/doacao/medula/index.php" class="btn btn-danger mt-auto btn-acessar-medula">Acessar</a>
          </div>
        </div>
      </div>

      <!-- Card 3: Leite Materno -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body d-flex flex-column">
             <i class="fa-solid fa-person-breastfeeding" style="font-size: 4rem; color: #a40000;"></i>
            <h5 class="card-title mt-2">Doação de Leite Materno</h5>
            <p class="card-text">Ajude mães e bebês através da doação de leite materno.</p>
            <a href="/fluxovital/page/doacao/leite/index.php" class="btn btn-danger mt-auto btn-acessar-materno">Acessar</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Nova seção com outros cards úteis -->
  <section class="text-center mt-5">
    <h2>Fique por dentro</h2>
    <div class="row">
      <!-- Card: Campanhas -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body d-flex flex-column">
            <i class="fa-solid fa-bullhorn" style="font-size: 4rem; color: #a40000;"></i>
            <h5 class="card-title mt-2">Campanhas</h5>
            <p class="card-text">Acompanhe as campanhas de doação em andamento e participe para salvar vidas.</p>
            <a href="/fluxovital/page/campanhas/index.php" class="btn btn-danger mt-auto">Acessar</a>
          </div>
        </div>
      </div>

      <!-- Card: Notícias -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body d-flex flex-column">
            <i class="fa-solid fa-newspaper" style="font-size: 4rem; color: #a40000;"></i>
            <h5 class="card-title mt-2">Notícias</h5>
            <p class="card-text">Fique atualizado com as últimas notícias sobre doação e saúde.</p>
            <a href="/fluxovital/page/noticias/index.php" class="btn btn-danger mt-auto">Acessar</a>
          </div>
        </div>
      </div>

   <!-- Card: Vidas Já Salvas -->
<div class="col-md-4 mb-4">
  <div class="card h-100 shadow-sm">
    <div class="card-body d-flex flex-column">
      <i class="fa-solid fa-stethoscope" style="font-size: 4rem; color: #a40000;"></i>
      <h5 class="card-title mt-2">Vidas Já Salvas</h5>
      <p class="card-text">
        Conheça histórias inspiradoras e reais de pessoas que tiveram suas vidas transformadas graças às doações e ao apoio da nossa comunidade.
      </p>
      <a href="#" class="btn btn-danger mt-auto">Saiba Mais</a>
    </div>
  </div>
</div>
</section>
</main>

