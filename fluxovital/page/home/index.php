<?php 
  // Inclui o cabeçalho padrão do site a partir de um arquivo externo
  include '../../include/header.php'; 
?>
<!DOCTYPE html> <!-- Define o tipo de documento como HTML5 -->
<html lang="pt-BR"> <!-- Início do documento HTML com idioma definido como português do Brasil -->
<head>
  <meta charset="UTF-8" /> <!-- Define a codificação de caracteres como UTF-8 -->
  <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- Configura a responsividade para dispositivos móveis -->
  <title>Fluxo Vital</title> <!-- Título da página que aparece na aba do navegador -->

  <!-- Importa o CSS do Bootstrap 5.3.3 para estilização e responsividade -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Importa os ícones do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Importa a biblioteca de ícones Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!-- Define o favicon (ícone da aba do navegador) do site -->
  <link rel="shortcut icon" href="/fluxovital/assets/images/logo_fluxovital.png" type="image/x-icon" />

  <!-- Importa um arquivo CSS personalizado do projeto -->
  <link rel="stylesheet" href="/fluxovital/assets/css/style.css" />

  <!-- Importa o JavaScript do Bootstrap (inclui o Popper.js para elementos como tooltips e dropdowns) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

  <!-- Reimporta os ícones do Bootstrap (esta linha está repetida e pode ser removida sem impacto) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Estilos personalizados definidos diretamente na página -->
  <style>
    body {  
      background: #ffe6e6; /* Gradiente de fundo suave */
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif; /* Fonte padrão do corpo */
      min-height: 100vh; /* Altura mínima igual à altura da tela */
      display: flex;
      flex-direction: column; /* Organização em coluna para usar o footer no final */
      color: #333; /* Cor padrão do texto */
      margin: 0;  
      padding: 0;
    }

    .container-main {
      flex: 1; /* Faz a área principal expandir para ocupar o espaço restante */
      max-width: 960px; /* Largura máxima */
      margin: 30px auto; /* Centraliza com margem vertical */
      padding: 20px;
      background: rgba(255, 255, 255, 0.9); /* Fundo branco com leve transparência */
      border-radius: 16px; /* Cantos arredondados */
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); /* Sombra ao redor do container */
    }

    .navbar {
      background-color: #8B0000; /* Cor de fundo da barra de navegação (vermelho escuro) */
    }

    .navbar-brand {
      display: flex;
      align-items: center; /* Alinha os itens verticalmente */
      font-weight: 700;
      font-size: 1.5rem;
      color: white; /* Cor do texto da marca */
    }

    .navbar-brand img {
      height: 60px; /* Altura da logo */
      margin-right: 30px; /* Espaço à direita da logo */
    }

    .btn-light {
      font-weight: 600; /* Botões claros com fonte mais pesada */
    }

    /* Estilo da seção hero (destaque) */
    .hero {
      padding-top: 40px; /* Espaço acima da seção */
      padding-bottom: 80px; /* Espaço abaixo da seção */
    }

    .hero-content {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 30px; /* Espaçamento entre os elementos */
      flex-wrap: wrap; /* Permite quebra de linha em telas menores */
      text-align: left;
    }

    .hero-content img {
      position: relative;
      top: -20px; /* Move a imagem ligeiramente para cima */
      height: 250px; /* Altura da imagem */
      object-fit: contain; /* Garante que a imagem mantenha proporção */
    }

    .hero-text {
      max-width: 600px; /* Largura máxima do texto do hero */
    }

    .hero h1 {
      font-weight: 700;
      font-size: 2.8rem; /* Tamanho grande para título */
      margin-bottom: 0.5rem;
    }

    .hero p {
      font-size: 1.2rem;
      margin-bottom: 1rem;
    }

    .carousel-banner-img {
      width: 100%; /* Largura total */
      height: 300px; /* Altura fixa */
      object-fit: cover; /* Cobre todo o espaço sem distorcer */
    }

    .card-body {
      display: flex;
      flex-direction: column; /* Organiza o conteúdo da card em coluna */
    }

    .card-body a.btn {
      margin-top: auto; /* Botão fica no final da card */
    }

    .btn-danger {
      border-radius: 30px; /* Botões arredondados */
      padding: 10px 30px;
      font-weight: 600;
      transition: background-color 0.3s ease; /* Suaviza a transição de cor */
    }

    .btn-danger:hover {
      background-color: #8B0000; /* Cor no hover do botão */
    }

    .btn-acessar-medula {
      margin-top: 14px; /* Margem superior personalizada */
    }

    .btn-acessar-materno {
      margin-top: 16px; /* Margem superior personalizada */
    }

    footer, .custom-footer {
      background-color: #8B0000; /* Cor de fundo do rodapé */
      color: white;
      padding: 15px;
      text-align: center;
      font-size: 0.9rem;
      margin-top: auto; /* Empurra o rodapé para o final da página */
    }

    .footer-expanded {
      background-color: #8B0000;
      padding: 40px 20px; /* Espaçamento interno */
    }

    .footer-expanded .footer-section {
      margin-bottom: 20px; /* Espaçamento entre seções */
    }

    .footer-expanded h5 {
      font-weight: 700;
      margin-bottom: 10px;
      color: #ffdddd; /* Cor suave para os títulos das seções do rodapé */
    }

    .footer-expanded a {
      color: #ffdede;
      text-decoration: none; /* Remove sublinhado dos links */
    }

    .footer-expanded a:hover {
      color: white;
      text-decoration: underline; /* Adiciona sublinhado ao passar o mouse */
    }

    .footer-expanded .footer-columns {
      display: flex;
      flex-wrap: wrap;
      gap: 40px; /* Espaço entre colunas */
      max-width: 960px;
      margin: 0 auto 20px;
      justify-content: center;
    }

    @media (max-width: 768px) {
      /* Estilos para dispositivos móveis */
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
        max-width: 100%; /* Texto ocupa toda a largura no celular */
      }
    }
  </style>
</head>

<body>

  <!-- ===================== NAVBAR ===================== -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #8B0000;">
    <div class="container">
      <!-- Logo e link para a home -->
      <a class="navbar-brand d-flex align-items-center" href="/fluxovital/page/home/index.php">
        <img src="/fluxovital/assets/images/logo1.png" alt="Logo Fluxo Vital" height="40" class="me-2" />
        <strong>Fluxo Vital</strong>
      </a>

      <!-- Botão para expandir navbar em telas pequenas -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Itens da navbar -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-lg-center">

          <!-- Menu dropdown: Doações -->
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

          <!-- Link para campanhas -->
          <li class="nav-item"><a class="nav-link" href="/fluxovital/page/categorias/campanhas.php">Campanhas</a></li>

          <!-- Link para relatórios -->
          <li class="nav-item"><a class="nav-link" href="/fluxovital/page/categorias/relatorios.php">Relatórios</a></li>

          <!-- Link para página Sobre Nós -->
          <li class="nav-item"><a class="nav-link" href="/fluxovital/page/categorias/sobrenos.php">Sobre Nós</a></li>

          <!-- Link para página de Contato -->
          <li class="nav-item"><a class="nav-link" href="/fluxovital/page/categorias/contato.php">Contato</a></li>

          <!-- Área de login ou perfil do usuário -->
          <li class="nav-item">
            <?php if (isset($_SESSION['usuario_id'])): ?>
              <!-- Dropdown com nome do usuário logado -->
              <div class="dropdown">
                <a class="btn btn-light ms-lg-3 mt-2 mt-lg-0 dropdown-toggle" 
                   href="#" 
                   role="button" 
                   id="dropdownPerfil" 
                   data-bs-toggle="dropdown" 
                   aria-expanded="false">
                  <i class="bi bi-person-fill me-1"></i>
                  <?= htmlspecialchars($_SESSION['usuario_nome']) ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownPerfil">
                  <!-- Link para perfil do usuário -->
                  <li>
                    <a class="dropdown-item" href="/fluxovital/perfil/perfil.php">
                      <i class="bi bi-person-lines-fill me-2"></i>Meu Perfil
                    </a>
                  </li>
                  <!-- Link para logout -->
                  <li>
                    <a class="dropdown-item text-danger" href="/fluxovital/logout/logout.php">
                      <i class="bi bi-box-arrow-right me-2"></i>Sair
                    </a>
                  </li>
                </ul>
              </div>
            <?php else: ?>
              <!-- Botão para login/cadastro -->
              <a href="/fluxovital/page/cadastro/tipos_cadastros.php" class="btn btn-light ms-lg-3 mt-2 mt-lg-0">
                <i class="bi bi-box-arrow-in-right me-1"></i> Entrar / Cadastrar
              </a>
            <?php endif; ?>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <!-- ===================== ESTILO DA NAVBAR ===================== -->
  <style>
    /* Força cor branca nos textos da navbar */
    .navbar-dark .navbar-nav .nav-link,
    .navbar-dark .navbar-brand,
    .navbar-dark .dropdown-menu a.dropdown-item {
      color: white !important;
    }

    /* Define fundo do dropdown igual à navbar */
    .dropdown-menu {
      background-color: #8B0000;
    }

    /* Define cor de fundo ao passar o mouse sobre o dropdown */
    .dropdown-menu a.dropdown-item:hover {
      background-color: #6a0000;
      color: white;
    }
  </style>

  <!-- ===================== CARROSSEL DE BANNERS ===================== -->
  <div class="mt-4 px-0">
    <div id="carouselBanners" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
      <div class="carousel-inner rounded-0 shadow">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <img src="/fluxovital/assets/images/1.png" class="d-block w-100 carousel-banner-img" alt="Banner 1">
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item">
          <img src="/fluxovital/assets/images/2.png" class="d-block w-100 carousel-banner-img" alt="Banner 2">
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item">
          <img src="/fluxovital/assets/images/3.png" class="d-block w-100 carousel-banner-img" alt="Banner 3">
        </div>
      </div>
      <!-- Botões de navegação -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanners" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselBanners" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>

  <!-- ===================== CONTEÚDO PRINCIPAL ===================== -->
  <main class="container-main">

    <!-- ===================== CATEGORIAS DE DOAÇÃO ===================== -->
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
              <i class="fa-solid fa-heart-pulse" style="font-size: 4rem; color: #a40000;"></i>
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
              <i class="fa-solid fa-person-breastfeeding" style="font-size: 4rem; color: #a40000;"></i>
              <h5 class="card-title mt-3">Doação de Leite Materno</h5>
              <p class="card-text">Ajude bebês prematuros e suas famílias doando leite materno com segurança.</p>
              <a href="/fluxovital/page/home/materno.php" class="btn btn-danger mt-auto btn-acessar-materno">Acessar</a>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- ===================== DIVISOR ENTRE SEÇÕES ===================== -->
    <hr class="my-5">

    <!-- ===================== OUTROS RECURSOS ===================== -->
    <section class="text-center mb-5">
      <h2 class="mb-4">Outros Recursos da Plataforma</h2>
      <div class="row">

        <!-- Card: Campanhas -->
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm">
            <div class="card-body d-flex flex-column align-items-center text-center">
              <i class="fa-solid fa-bullhorn" style="font-size: 4rem; color: #a40000;"></i>
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
              <i class="fa-solid fa-newspaper" style="font-size: 4rem; color: #a40000;"></i>
              <h5 class="card-title mt-3">Relatórios</h5>
              <p class="card-text">Acesse relatórios, gráficos e planilhas sobre atualizações do sistema de sangue, médula e leite materno.</p>
              <a href="/fluxovital/page/categorias/relatorios.php" class="btn btn-danger mt-auto">Acessar</a>
            </div>
          </div>
        </div>

      
        <!-- Card: Vidas Já Salvas -->
<div class="col-md-4 mb-4"> <!-- Coluna com largura média (4/12) e margem inferior -->
  <div class="card h-100 shadow-sm"> <!-- Card com altura total e sombra leve -->
    <div class="card-body d-flex flex-column align-items-center text-center"> <!-- Corpo do card com layout flexível em coluna e alinhamento central -->
      <i class="fa-solid fa-stethoscope" style="font-size: 4rem; color: #a40000;"></i> <!-- Ícone de estetoscópio estilizado -->
      <h5 class="card-title mt-3">Vidas Já Salvas</h5> <!-- Título do card com margem superior -->
      <p class="card-text">Veja histórias inspiradoras de pessoas impactadas pelas doações.</p> <!-- Texto descritivo do card -->
      <a href="/fluxovital/page/home/categoria/vidasalvas.php" class="btn btn-danger mt-auto">Saiba Mais</a> <!-- Botão vermelho com margem superior automática para empurrar para o fim -->
    </div>
  </div>
</div>
</div> <!-- Fim da última linha de cards (não exibida aqui, mas foi aberta antes) -->
</section> <!-- Fim da seção principal de cards -->
</main> <!-- Fim do conteúdo principal da página -->

<!-- Cabeçalho do rodapé -->
<footer class="footer-red pt-5 pb-4 mt-5"> <!-- Rodapé com padding superior, inferior e margem no topo -->
  <div class="container"> <!-- Container Bootstrap centralizado -->

    <div class="row mb-5"> <!-- Linha com margem inferior para espaçamento -->

      <!-- COLUNA 1: INSTITUCIONAL -->
      <div class="col-md-4"> <!-- Primeira coluna do rodapé (1/3 da largura) -->
        <h5 class="fw-bold text-uppercase mb-3 text-white">Sistema Fluxo Vital</h5> <!-- Título em branco, maiúsculo e negrito -->
        <p class="small text-justify text-white"> <!-- Primeiro parágrafo institucional -->
          É um sistema de integrações entre usuários, doadores e instituições que auxilia no agendamento e arquivação de doações e, sobretudo,
          ao gerenciamento dos sistemas de sangue, médula óssea e leite materno para tornar o processo de doação mais eficiente.
        </p>
        <p class="small text-justify text-white"> <!-- Segundo parágrafo institucional -->
          O Fluxo Vital vem estendendo seus serviços gradativamente através da expansão de integrações com instituições localizadas na capital do Maranhão, contemplando a população do desde do centro quanto das extremidades do Estado e potencializando o fluxo de doações.
        </p>

        <h6 class="mt-3 mb-2 text-white">Endereço e Contato:</h6> <!-- Subtítulo dos contatos -->
        <ul class="list-unstyled small text-white"> <!-- Lista sem estilo padrão (sem marcadores) -->
          <li>Universidade CEUMA - Campus Renascença - São Luís - MA</li> <!-- Endereço -->
          <li>Telefone fixo: (98) 98467-4013</li> <!-- Telefone -->
          <li>Email: <a href="contato@fluxovital.com.org" class="email-link">contato@fluxovital.com.org</a></li> <!-- Email com link estilizado -->
        </ul>
        </> <!-- Aqui está um erro: tag de fechamento incorreta -->
      </div>

      <!-- COLUNA 2: MAPA DO SITE -->
      <div class="col-md-4"> <!-- Segunda coluna do rodapé -->
        <h5 class="fw-bold text-uppercase mb-3 text-white">Mapa do Site</h5> <!-- Título da coluna -->
        <ul class="list-unstyled small ps-1"> <!-- Lista dos links de navegação -->
          <li><a href="#" class="footer-link">Institucional</a></li>
          <li><a href="#" class="footer-link">Legislação</a></li>
          <li><a href="#" class="footer-link">Unidades</a></li>
          <li><a href="#" class="footer-link">Campanhas</a></li>
          <li><a href="#" class="footer-link">Requisitos</a></li>
          <li><a href="#" class="footer-link">Ouvidoria</a></li>
        </ul>
      </div>

      <!-- COLUNA 3: FORMULÁRIO -->
      <div class="col-md-4"> <!-- Terceira coluna do rodapé -->
        <div class="bg-form rounded p-4 shadow"> <!-- Bloco com fundo branco, bordas arredondadas, padding e sombra -->
          <h5 class="fw-bold mb-3 text-form">Entre em Contato</h5> <!-- Título do formulário -->

          <form> <!-- Início do formulário -->
            <div class="mb-2"> <!-- Campo nome -->
              <label for="nome" class="form-label">Nome:</label>
              <input type="text" class="form-control form-control-sm" id="nome" placeholder="Seu nome">
            </div>
            <div class="mb-2"> <!-- Campo email -->
              <label for="email" class="form-label">E-mail:</label>
              <input type="email" class="form-control form-control-sm" id="email" placeholder="Seu e-mail">
            </div>
            <div class="mb-2"> <!-- Campo telefone -->
              <label for="telefone" class="form-label">Telefone:</label>
              <input type="tel" class="form-control form-control-sm" id="telefone" placeholder="Seu telefone">
            </div>
            <div class="mb-2"> <!-- Campo mensagem -->
              <label for="mensagem" class="form-label">Mensagem:</label>
              <textarea class="form-control form-control-sm" id="mensagem" rows="3" placeholder="Escreva sua mensagem"></textarea>
            </div>
            <div class="text-end"> <!-- Botão alinhado à direita -->
              <button type="submit" class="btn btn-form">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- RODAPÉ FINAL -->
    <div class="border-top pt-3 text-center small text-white-50"> <!-- Linha superior e texto centralizado no fim -->
      Todos os direitos reservados © <span class="fw-bold text-white">Fluxo Vital</span> // <span class="fst-italic">P.I - GPECOV</span>
    </div>

  </div>
</footer>

<!-- ESTILOS PERSONALIZADOS -->
<style>
  /* Fundo vermelho escuro para o rodapé */
  .footer-red {
    background-color: #8B0000;
  }

  /* Estilo para links do rodapé */
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

  /* Estilo para o card de formulário */
  .bg-form {
    background-color: #fff;
  }

  /* Cor do título do formulário */
  .text-form {
    color: #8B0000;
  }

  /* Estilo dos rótulos dos campos */
  .form-label {
    color: #8B0000;
    font-size: 0.85rem;
  }

  /* Estilo dos campos do formulário */
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

  /* Texto justificado */
  .text-justify {
    text-align: justify;
  }

  /* Estilo padrão para listas */
  ul {
    padding-left: 1.2rem;
  }

  ul li {
    margin-bottom: 0.4rem;
  }

  /* Estilo para dispositivos móveis */
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
