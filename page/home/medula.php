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

  <footer>
    <div class="container">
      <p>&copy; 2025 Sistema de Doação de Leite Materno. Todos os direitos reservados.</p>
    </div>
  </footer>

  <script>
    const slides = document.querySelectorAll('.carousel-slide');
    const indicators = document.querySelectorAll('.carousel-indicators button');
    const slidesContainer = document.getElementById('carouselSlides');
    let currentSlide = 0;

    function showSlide(index) {
      slidesContainer.style.transform = 'translateX(-' + index * 100 + '%)';
      indicators.forEach(btn => btn.classList.remove('active'));
      indicators[index].classList.add('active');
      currentSlide = index;
    }

    document.getElementById('nextBtn').addEventListener('click', () => {
      let next = (currentSlide + 1) % slides.length;
      showSlide(next);
    });

    document.getElementById('prevBtn').addEventListener('click', () => {
      let prev = (currentSlide - 1 + slides.length) % slides.length;
      showSlide(prev);
    });

    indicators.forEach((btn, index) => {
      btn.addEventListener('click', () => showSlide(index));
    });

    setInterval(() => {
      showSlide((currentSlide + 1) % slides.length);
    }, 7000);
  </script>
</body>
</html>
