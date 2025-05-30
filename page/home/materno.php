<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Doação de Leite Materno</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      font-family: 'Poppins', sans-serif;
      background: #F8E7E7;
      color: #333;
      line-height: 1.6;
    }

    .container { max-width: 960px; margin: 0 auto; padding: 1rem; }

    header {
      background: #7B2E2E;
      color: white;
      padding: 1rem 0;
    }
    .logo { font-size: 1.8rem; font-weight: 600; }
    nav ul { list-style: none; display: flex; gap: 1rem; flex-wrap: wrap; }
    nav a {
      color: white;
      text-decoration: none;
      font-weight: 500;
    }
    nav a:hover { text-decoration: underline; }

    .hero {
  background: url('25c43c2a-2daf-4b27-a9c3-295e0d758328.png') center/cover no-repeat;
  height: 400px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  position: relative;
  border-radius: 8px;
  margin: 2rem 0;
  color: white;
}

.hero::before {
  content: "";
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background-color: rgba(0, 0, 0, 0.5); /* escurece a imagem */
  border-radius: 8px;
  z-index: 1;
}

.hero-content {
  position: relative;
  z-index: 2;
  padding: 1rem;
}

.hero h2 {
  font-size: 2rem;
  margin-bottom: 1rem;
}

.btn {
  background: #800020;
  color: white;
  padding: 0.75rem 1.5rem;
  border-radius: 30px;
  font-weight: 600;
  text-decoration: none;
  box-shadow: 0 3px 6px rgba(128, 0, 32, 0.5);
}

.btn:hover {
  background: #a00030;
}


    .hero h2 { font-size: 2rem; margin-bottom: 1rem; }
    .hero p {
      max-width: 600px;
      margin: 0 auto 2rem;
      font-size: 1.125rem;
    }
    .btn {
      background: #A44C4C;
      color: white;
      padding: 0.75rem 1.5rem;
      border-radius: 30px;
      font-weight: 600;
      text-decoration: none;
      box-shadow: 0 3px 6px rgba(164, 76, 76, 0.5);
    }
    .btn:hover { background: #8c3d3d; }

    .info, .steps { margin: 2rem 0; }
    .info h3, .steps h3 {
      color: #7B2E2E;
      font-size: 1.5rem;
      margin-bottom: 0.5rem;
    }
    .info p, .steps ol {
      max-width: 700px;
      margin: 0 auto;
    }
    .steps li { margin-bottom: 1rem; }

    footer {
      background: #7B2E2E;
      color: white;
      text-align: center;
      padding: 1.5rem 1rem;
      font-size: 0.9rem;
    }

    .carousel {
      position: relative;
      overflow: hidden;
      border-radius: 8px;
      margin: 2rem 0;
      background: white;
    }
    .carousel-slides {
      display: flex;
      transition: transform 0.5s ease;
    }
    .carousel-slide {
      min-width: 100%;
      padding: 2rem;
      text-align: center;
    }
    .carousel-slide img {
      max-width: 100%;
      max-height: 300px;
      border-radius: 8px;
      margin-bottom: 1rem;
    }
    .carousel-slide h4 {
      color: #7B2E2E;
      margin-bottom: 0.5rem;
    }
    .carousel-slide p {
      max-width: 600px;
      margin: 0 auto;
    }

    .carousel-nav {
      position: absolute;
      top: 50%;
      width: 100%;
      display: flex;
      justify-content: space-between;
      transform: translateY(-50%);
    }
    .carousel-nav button {
      background: rgba(123, 46, 46, 0.7);
      border: none;
      color: white;
      font-size: 2rem;
      width: 3rem;
      height: 3rem;
      border-radius: 50%;
      cursor: pointer;
    }

    .carousel-indicators {
      text-align: center;
      margin: 1rem 0;
    }
    .carousel-indicators button {
      width: 12px;
      height: 12px;
      margin: 0 5px;
      background: #ccc;
      border: none;
      border-radius: 50%;
      cursor: pointer;
    }
    .carousel-indicators button.active {
      background: #7B2E2E;
    }

    @media (max-width: 600px) {
      nav ul { flex-direction: column; gap: 0.5rem; }
    }
  </style>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #8B0000;"></nav>
    <div class="container">
    <a  class="navbar-brand d-flex aling-items-center" href="/fluxovital/page/home/materno.php">
          <img src="/fluxovital/assets/images/logo1.png" alt="Logo Fluxo Vital"  height="40" class="me-2">
            <strong>Fluxo Vital</strong>  
    </a>
      <h1 class="logo">Fluxo Vital</h1>
      <nav>
        <ul>
          <li><a href="#">Início</a></li>
          <li><a href="#">Quem Pode Doar</a></li>
          <li><a href="#">Como Funciona</a></li>
          <li><a href="#">Postos de Coleta</a></li>
          <li><a href="#">Contato</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
<section class="hero">
  <div class="hero-content">
    <h2>Leite Materno: O Primeiro Gesto de Amor</h2>
    <a href="#" class="btn">Saiba Como Doar</a>
  </div>
</section>


    <section class="carousel">
      <div class="carousel-slides" id="carouselSlides">
        <div class="carousel-slide">
          <img src="https://images.unsplash.com/photo-1582201948490-7b1f1b6e9f7b?auto=format&fit=crop&w=600&q=80" alt="Mãe doando leite" />
          <h4>Um gesto que nutre</h4>
          <p>“A doação de leite foi essencial para a recuperação do meu bebê na UTI neonatal.”</p>
        </div>
        <div class="carousel-slide">
          <img src="https://images.unsplash.com/photo-1620295284707-9e3bfeafc146?auto=format&fit=crop&w=600&q=80" alt="Bebê prematuro" />
          <h4>Ajude os prematuros</h4>
          <p>O leite doado é destinado a recém-nascidos que não podem ser amamentados pela própria mãe.</p>
        </div>
        <div class="carousel-slide">
          <img src="https://images.unsplash.com/photo-1595433707802-839f3dc0f35f?auto=format&fit=crop&w=600&q=80" alt="Doação segura" />
          <h4>Segurança garantida</h4>
          <p>Todo leite doado passa por rigorosos processos de controle de qualidade nos bancos de leite.</p>
        </div>
      </div>
      <div class="carousel-nav">
        <button id="prevBtn">&#10094;</button>
        <button id="nextBtn">&#10095;</button>
      </div>
      <div class="carousel-indicators" id="carouselIndicators">
        <button class="active"></button>
        <button></button>
        <button></button>
      </div>
    </section>

    <section class="info">
      <div class="container">
        <h3>Por que doar leite materno?</h3>
        <p>
          O leite materno doado é fundamental para a nutrição e recuperação de recém-nascidos prematuros e doentes. Uma única doadora pode ajudar a salvar várias vidas. Cada gota conta!
        </p>
      </div>
    </section>

    <section class="steps">
      <div class="container">
        <h3>Como doar leite humano</h3>
        <ol>
          <li>Entre em contato com o banco de leite mais próximo para se cadastrar.</li>
          <li>Receba orientações sobre coleta e armazenamento do leite.</li>
          <li>O banco de leite buscará sua doação em casa, com toda segurança e cuidado.</li>
        </ol>
      </div>
    </section>
  </main>

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
</body>
</html>
