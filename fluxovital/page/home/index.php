<?php 
  include '../../include/header.php'; 
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Fluxo Vital</title>

  <!-- Estilos e bibliotecas externas -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="shortcut icon" href="/fluxovital/assets/images/logo_fluxovital.png" type="image/x-icon" />
  <link rel="stylesheet" href="/fluxovital/assets/css/style.css" />

  <!-- Bootstrap Bundle (inclui Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">


  <!-- Estilo personalizado -->
  <style>
    body {
      background-color: #f2e3d5;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      color: #333;
      margin: 0;  
      padding: 0;
    }

    .container-main {
      flex: 1;
      max-width: 960px;
      margin: 30px auto;
      padding: 20px;
      background: rgba(255, 255, 255, 0.9);
      border-radius: 16px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.25);
    }

    .navbar {
      background-color: #8B0000;
    }

    .navbar-brand {
      display: flex;
      align-items: center;
      font-weight: 700;
      font-size: 1.5rem;
      color: white;
    }

    .navbar-brand img {
      height: 60px;
      margin-right: 30px;
    }

    .btn-light {
      font-weight: 600;
    }

    /* Hero (cabeçalho principal aumentado) */
    
.hero {
  padding-top: 40px; /* Reduzi um pouco para ficar mais justo */
  padding-bottom: 80px;
}


    .hero-content {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 30px;
      flex-wrap: wrap;
      text-align: left;
    }

    .hero-content img {
      position: relative;
      top: -20px; /* Menos deslocamento vertical */
      height: 250px; /* Maior altura */
      object-fit: contain;
    }

    .hero-text {
      max-width: 600px;
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

    .carousel-banner-img {
      width: 100%;
      height: 300px;
      object-fit: cover;
    }

    .card-body {
      display: flex;
      flex-direction: column;
    }

    .card-body a.btn {
      margin-top: auto;
    }

    .btn-danger {
      border-radius: 30px;
      padding: 10px 30px;
      font-weight: 600;
      transition: background-color 0.3s ease;
    }

    .btn-danger:hover {
      background-color: #8B0000;
    }

    .btn-acessar-medula {
      margin-top: 14px;
    }

    .btn-acessar-materno {
      margin-top: 16px;
    }

    footer, .custom-footer {
      background-color:  #8B0000;

      color: white;
      padding: 15px;
      text-align: center;
      font-size: 0.9rem;
      margin-top: auto;
    }

    .footer-expanded {
      background-color: #8B0000;
      padding: 40px 20px;
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
      .hero-content, .hero h1, .hero p {
        text-align: center;
        justify-content: center;
      }
      .hero-text {
        max-width: 100%;
      }
    }
  </style>
</head>






<body>

<!-- Cabeçalho / barra de pesquisa -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #8B0000;">
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
            <li><a class="dropdown-item" href="/fluxovital/page/home/sangue.php">Doação de Sangue</a></li>
            <li><a class="dropdown-item" href="/fluxovital/page/home/medula.php">Doação de Médula Óssea</a></li>
            <li><a class="dropdown-item" href="/fluxovital/page/home/materno.php">Doação de Leite Materno</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="/fluxovital/page/categorias/campanhas.php">Campanhas</a></li>
        <li class="nav-item"><a class="nav-link" href="/fluxovital/page/categorias/relatorios.php">Relatórios</a></li>
        <li class="nav-item"><a class="nav-link" href="/fluxovital/page/categorias/sobrenos.php">Sobre Nós</a></li>
        <li class="nav-item"><a class="nav-link" href="/fluxovital/page/categorias/contato.php">Contato</a></li>
        <li class="nav-item">
    <?php if (isset($_SESSION['usuario_id'])): ?>
        <div class="dropdown">
            <a class="btn btn-light ms-lg-3 mt-2 mt-lg-0 dropdown-toggle" 
               href="#" 
               role="button" 
               id="dropdownPerfil" 
               data-bs-toggle="dropdown" 
               aria-expanded="false">
                <i class="bi bi-person-fill me-1"></i> PERFIL
            </a>
            
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownPerfil">
                <li><a class="dropdown-item" href="/fluxovital/perfil/perfil.php">
                    <i class="bi bi-person-lines-fill me-2"></i>Meu Perfil
                </a></li>
                <li><a class="dropdown-item text-danger" href="/fluxovital/logout/logout.php">
                    <i class="bi bi-box-arrow-right me-2"></i>Sair
                </a></li>
            </ul>
        </div>
    <?php else: ?>
        <a href="/fluxovital/doador_instituicao/home.php" class="btn btn-light ms-lg-3 mt-2 mt-lg-0">
            <i class="bi bi-box-arrow-in-right me-1"></i> Entrar / Cadastrar
        </a>
    <?php endif; ?>
</li>
      </ul>
    </div>
  </div>
</nav>

<style>
  /* Força cor branca nos textos da navbar */
  .navbar-dark .navbar-nav .nav-link,
  .navbar-dark .navbar-brand,
  .navbar-dark .dropdown-menu a.dropdown-item {
    color: white !important;
  }

  /* Fundo do dropdown igual ao navbar */
  .dropdown-menu {
    background-color: #8B0000;
  }

  /* Hover no dropdown */
  .dropdown-menu a.dropdown-item:hover {
    background-color: #6a0000;
    color: white;
  }
</style>



<!-- Carrossel -->
<div class="mt-4 px-0">
  <div id="carouselBanners" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner rounded-0 shadow">
      <div class="carousel-item active">
        <img src="/fluxovital/assets/images/bnnr1.jpg" class="d-block w-100 carousel-banner-img" alt="Banner 1">
      </div>
      <div class="carousel-item">
        <img src="/fluxovital/assets/images/bnnr2.jpg" class="d-block w-100 carousel-banner-img" alt="Banner 2">
      </div>
      <div class="carousel-item">
        <img src="/fluxovital/assets/images/bnnr3.jpg" class="d-block w-100 carousel-banner-img" alt="Banner 3">
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

<!-- Conteúdo principal -->
<main class="container-main">

  <!-- ===================== SEÇÃO: CATEGORIAS DE DOAÇÃO ===================== -->
  <section class="text-center mt-5">
    <h2 class="mb-4">Escolha uma Categoria de Doação</h2>
    <div class="row">
      <!-- Card: Doação de Sangue -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body d-flex flex-column align-items-center text-center">
            <i class="fa-solid fa-droplet" style="font-size: 4rem; color: #a40000;"></i>
            <h5 class="card-title mt-3">Doação de Sangue</h5>
            <p class="card-text">Conecte doadores e instituições para salvar vidas com segurança e agilidade.</p>
            <a href="/fluxovital/page/home/sangue.php" class="btn btn-danger mt-auto btn-acessar-sangue">Acessar</a>
          </div>
        </div>
      </div>

      <!-- Card: Doação de Médula Óssea -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body d-flex flex-column align-items-center text-center">
            <i class="fa-solid fa-heart-pulse" style="font-size: 4rem; color: #8B0000;"></i>
            <h5 class="card-title mt-3">Doação de Médula Óssea</h5>
            <p class="card-text">Cadastre-se como doador e ajude pacientes que precisam de um transplante.</p>
            <a href="/fluxovital/page/home/medula.php" class="btn btn-danger mt-auto btn-acessar-medula">Acessar</a>
          </div>
        </div>
      </div>

      <!-- Card: Doação de Leite Materno -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body d-flex flex-column align-items-center text-center">
            <i class="fa-solid fa-person-breastfeeding" style="font-size: 4rem; color: #8B0000;"></i>
            <h5 class="card-title mt-3">Doação de Leite Materno</h5>
            <p class="card-text">Ajude bebês prematuros e suas famílias doando leite materno com segurança.</p>
            <a href="/fluxovital/page/home/materno.php" class="btn btn-danger mt-auto btn-acessar-materno">Acessar</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- DIVISOR VISUAL ENTRE AS SEÇÕES -->
  <hr class="my-5">

  <!-- ===================== SEÇÃO: OUTROS RECURSOS ===================== -->
  <section class="text-center mb-5">
    <h2 class="mb-4">Outros Recursos da Plataforma</h2>
    <div class="row">
      <!-- Card: Campanhas -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body d-flex flex-column align-items-center text-center">
            <i class="fa-solid fa-bullhorn" style="font-size: 4rem; color: #8B0000;"></i>
            <h5 class="card-title mt-3">Campanhas</h5>
            <p class="card-text">Fique por dentro das campanhas de incentivo à doação e participe.</p>
            <a href="/fluxovital/page/campanhas/index.php" class="btn btn-danger mt-auto">Acessar</a>
          </div>
        </div>
      </div>

      <!-- Card: Relatórios -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body d-flex flex-column align-items-center text-center">
            <i class="fa-solid fa-newspaper" style="font-size: 4rem; color: #8B0000;"></i>
            <h5 class="card-title mt-3">Relatórios</h5>
            <p class="card-text">Acesse relatórios, gráficos e planilhas sobre atualizações do sistema de sangue, médula e leite materno.</p>
            <a href="/fluxovital/page/categorias/relatorios.php" class="btn btn-danger mt-auto">Acessar</a>
          </div>
        </div>
      </div>

      <!-- Card: Vidas Já Salvas -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body d-flex flex-column align-items-center text-center">
            <i class="fa-solid fa-stethoscope" style="font-size: 4rem; color: #8B0000;"></i>
            <h5 class="card-title mt-3">Vidas Já Salvas</h5>
            <p class="card-text">Veja histórias inspiradoras de pessoas impactadas pelas doações.</p>
            <a href="#" class="btn btn-danger mt-auto">Saiba Mais</a>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>


<!-- Cabeçalho -->
<footer class="footer-red pt-5 pb-4 mt-5">
  <div class="container">

    <div class="row mb-5">

      <!-- COLUNA 1: INSTITUCIONAL -->
      <div class="col-md-4">
        <h5 class="fw-bold text-uppercase mb-3 text-white">Sistema Fluxo Vital</h5>
        <p class="small text-justify text-white">
          É um sistema de integrações entre usuários, doadores e instituições que auxilia no agendamento e arquivação de doações e, sobretudo,
          ao gerenciamento dos sistemas de sangue, médula óssea e leite materno para tornar o processo de doação mais eficiente.
        </p>
        <p class="small text-justify text-white">
          O Fluxo Vital vem estendendo seus serviços gradativamente através da expansão de integrações com instituições localizadas na capital do Maranhão, contemplando a população do desde do centro quanto das extremidades do Estado e potencializando o fluxo de doações.
        </p>

          <h6 class="mt-3 mb-2 text-white">Endereço e Contato:</h6>
          <ul class="list-unstyled small text-white">
            <li>Universidade CEUMA - Campus Renascença - São Luís - MA</li>
            <li>Telefone fixo: (98) 98467-4013</li>
            <li>Email: <a href="contato@fluxovital.com.org" class="email-link">contato@fluxovital.com.org</a></li>
          </ul>
        </>
      </div>

      <!-- COLUNA 2: MAPA DO SITE -->
      <div class="col-md-4">
        <h5 class="fw-bold text-uppercase mb-3 text-white">Mapa do Site</h5>
        <ul class="list-unstyled small ps-1">
          <li><a href="#" class="footer-link">Institucional</a></li>
          <li><a href="#" class="footer-link">Quem Somos</a></li>
          <li><a href="#" class="footer-link">Relatórios de Gestão</a></li>
          <li><a href="#" class="footer-link">Legislação</a></li>
          <li><a href="#" class="footer-link">Unidades</a></li>
          <li><a href="#" class="footer-link">Campanhas</a></li>
          <li><a href="#" class="footer-link">Requisitos</a></li>
          <li><a href="#" class="footer-link">Ciclo do Sangue</a></li>
          <li><a href="#" class="footer-link">Ciclo da Médula Óssea</a></li>
          <li><a href="#" class="footer-link">Ciclo do Leite Materno</a></li>
          <li><a href="#" class="footer-link">Transparência</a></li>
          <li><a href="#" class="footer-link">Ouvidoria</a></li>
          <li><a href="#" class="footer-link">Contato</a></li>
        </ul>
      </div>

      <!-- COLUNA 3: FORMULÁRIO -->
      <div class="col-md-4">
        <div class="bg-form rounded p-4 shadow">
          <h5 class="fw-bold mb-3 text-form">Entre em Contato</h5>
          <form>
            <div class="mb-2">
              <label for="nome" class="form-label">Nome:</label>
              <input type="text" class="form-control form-control-sm" id="nome" placeholder="Seu nome">
            </div>
            <div class="mb-2">
              <label for="email" class="form-label">E-mail:</label>
              <input type="email" class="form-control form-control-sm" id="email" placeholder="Seu e-mail">
            </div>
            <div class="mb-2">
              <label for="telefone" class="form-label">Telefone:</label>
              <input type="tel" class="form-control form-control-sm" id="telefone" placeholder="Seu telefone">
            </div>
            <div class="mb-2">
              <label for="mensagem" class="form-label">Mensagem:</label>
              <textarea class="form-control form-control-sm" id="mensagem" rows="3" placeholder="Escreva sua mensagem"></textarea>
            </div>
            <div class="text-end">
              <button type="submit" class="btn btn-form">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- RODAPÉ FINAL -->
    <div class="border-top pt-3 text-center small text-white-50">
      Todos os direitos reservados © <span class="fw-bold text-white">Fluxo Vital</span> // <span class="fst-italic">P.I - GPECOV</span>
    </div>

  </div>
</footer>

<!-- ESTILOS PERSONALIZADOS -->
<style>
  /* Fundo vermelho escuro */
  .footer-red {
    background-color: #8B0000;
  }

  /* Links suaves */
  .footer-link,
  .email-link {
    color: #ffdede;
    text-decoration: none;
    display: inline-block;
    margin-bottom: 0.3rem;
  }

  .footer-link:hover,
  .email-link:hover {
    color: #f1b0b7;
    text-decoration: underline;
  }

  /* Card do formulário */
  .bg-form {
    background-color: #fff;
  }

  /* Título do formulário */
  .text-form {
    color: #8B0000;
  }

  /* Rótulos do formulário */
  .form-label {
    color: #8B0000;
    font-size: 0.85rem;
  }

  /* Campos do formulário */
  .form-control {
    background-color: #fff;
    border: 1px solid #ccc;
    color: #8B0000;
    font-size: 0.85rem;
  }

  .form-control::placeholder {
    color: #8B0000;
  }

  /* Botão do formulário */
  .btn-form {
    background-color: #8B0000;
    color: white;
    font-size: 0.85rem;
    border: none;
    padding: 0.4rem 1rem;
    border-radius: 4px;
  }

  .btn-form:hover {
    background-color: #8B0000;
  }

  /* Textos alinhados e agradáveis */
  .text-justify {
    text-align: justify;
  }

  ul {
    padding-left: 1.2rem;
  }

  ul li {
    margin-bottom: 0.4rem;
  }

  /* Responsividade */
  @media (max-width: 768px) {
    .footer-red {
      text-align: center;
    }

    ul {
      padding-left: 0 !important;
    }

    ul li {
      text-align: left;
    }
  }
</style>



</body>





</html>

 
