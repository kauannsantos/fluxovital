<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Fluxo Vital - Agendamento e Captação</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- Bootstrap CSS (no <head>) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap JS (antes do fechamento </body>) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


  
  <style>
   /* Estilos para o header */
   .topo {
    background: linear-gradient(to right, #c00, #900); 
    padding: 15px 20px;
    display: flex; align-items: center;
    justify-content: space-between; flex-wrap: wrap;
    box-shadow: 0 2px 10px rgba(0,0,0,0.2);  position: sticky;
    top: 0; z-index: 1000;
  }

  .header-container {
    width: 100%; max-width: 1400px;
    margin: 0 auto; display: flex;
    align-items: center; justify-content: space-between;
    flex-wrap: wrap;
  }

  .logo_topo {
    display: flex; align-items: center;
    
  }

  .logo_topo img {
    height: 60px; width: auto;
    filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));
  }

  .logo_vertical {
    display: flex; align-items: center; text-decoration: none;
    transition: transform 0.3s ease;
  }

  .logo_vertical:hover {
    transform: scale(1.05);
  }

  .texto_logo {
    font-size: 24px; font-weight: bold; /*tamanho e espessura da fonte da logo */
    color: #fff; margin-left: 12px; 
    font-family: system-ui, sans-serif; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
    
  }

  .nav-menu {
    display: flex; align-items: center; gap: 20px; /* organiza as funções em linha*/
  }

  .nav-link {
    color: #fff; text-decoration: none; font-weight: 500;
    padding: 8px 12px; border-radius: 4px;
    transition: background-color 0.3s;
  }

  .nav-link:hover {
    background-color: rgba(255,255,255,0.1); color: #fff;
  }

  .nav-link.active {
    background-color: rgba(255,255,255,0.2);
  }

  .header-btn {
    appearance: button; -webkit-appearance: button;
    -moz-appearance: button; padding: 10px 16px;
    background: #fff; color: #c00;
    border: none; border-radius: 4px;
    cursor: pointer; font-weight: bold;
    transition: all 0.3s ease; box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    
  }

  .header-btn:hover {
    background: #f8f8f8; transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
  }

  .estoque-container {
    background-color: rgba(0,0,0,0.1); border-radius: 8px;
    padding: 15px; margin-top: 15px; width: 100%;
  }

  .estoque-header {
    display: flex; justify-content: space-between;
    align-items: center; margin-bottom: 10px;
  }

  .estoque-title {
    font-size: 22px; color: #fff;
    margin: 0; font-weight: bold;
  }

  .blood-types-container {
    display: flex; flex-wrap: wrap;
    justify-content: center; gap: 15px;
  }

  .blood-type-item {
    display: flex; flex-direction: column;
    align-items: center;
    background-color: rgba(255,255,255,0.1);
    border-radius: 8px; padding: 10px;
    transition: transform 0.3s; width: 80px;
  }

  .blood-type-item:hover {
    transform: translateY(-5px);
    background-color: rgba(255,255,255,0.2);
  }

  .blood-type-item img {
    height: 50px; width: auto; margin-bottom: 5px;
  }

  .blood-type-text {
    color: #fff;font-weight: bold;
    text-align: center; font-size: 14px;
  }

  .blood-status {
    font-size: 12px;padding: 2px 6px; border-radius: 10px; margin-top: 2px;
  }

  .status-reduzido {
    background-color: #ff9800; color: #fff;
  }

  .status-alerta {
    background-color: #f44336; color: #fff;
  }

  .status-estavel {
    background-color: #4caf50; color: #fff;
  }

  /* Estilos para o carrossel central */
  .carousel-container {
    margin: 30px auto; max-width: 2500px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    border-radius: 8px; width: 100%; overflow: hidden;
  }

  .carousel-caption {
    background-color: rgba(0,0,0,0.6); border-radius: 8px;
    padding: 15px; bottom: 30px;
  }

  /* Estilos para as seções de Perguntas frequentes e Doação */
  .section-title {
    color: #c00; text-align: center;
    margin: 40px 0 20px; font-weight: bold;
    position: relative; padding-bottom: 10px; /*espaço interno no botão*/
  }

  .section-title::after {
    content: ''; position: absolute;
    bottom: 0; left: 50%;transform: translateX(-50%); 
    width: 80px; height: 3px; background-color: #c00;
  }
  .faq-container, .donation-container {
    max-width: 900px; margin: 0 auto 50px; padding: 20px;
  }

  .accordion-item {
    border-left: none; border-right: none;
    margin-bottom: 10px;
  }

  .accordion-button:not(.collapsed) {
    background-color: #f8d7da; color: #c00;
  }

  .accordion-button:focus {
    box-shadow: 0 0 0 0.25rem rgba(204, 0, 0, 0.25);
  }
  .donation-card {
    border-radius: 8px; border: 1px solid #ddd;
    padding: 20px; margin-bottom: 20px; transition: transform 0.3s ease;
  }

  .donation-card:hover {
    transform: translateY(-5px); 
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  }
  .donation-icon {
    font-size: 2.5rem; color: #c00; margin-bottom: 15px;
  }

  /* Estilos para o footer */
  footer {
    background: #8B0000;
    padding: 40px 0 20px; position: relative;
  }
  .footer-container {
    max-width: 1200px; margin: 0 auto; padding: 0 20px;
  }

  .footer-logo {
    width: 80px; margin-bottom: 15px;
  }

  .footer-section {
    margin-bottom: 30px;
  }

  /* Botão de voltar ao topo */
  .back-to-top {
    position: fixed; bottom: 30px;
    right: 30px; width: 50px;
    height: 50px; background-color: #c00;
    color: white; border-radius: 50%;
    display: flex; align-items: center;
    justify-content: center; font-size: 20px;
    cursor: pointer;
    box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    opacity: 0; visibility: hidden;
    transition: all 0.3s; z-index: 999;
  }
  .back-to-top.show {
    opacity: 1; visibility: visible;
  }

  .back-to-top:hover {
    background-color: #900;
    transform: translateY(-5px);
  }

  /* Estilos para as novas localizações em formato pequeno */
  .locations-mini-container {
    display: flex;flex-wrap: wrap;
    justify-content: center; gap: 20px; margin-top: 15px;
  }

  .location-mini-card {
    background-color: rgba(255,255,255,0.15);
    border-radius: 8px; padding: 10px; width: 180px;
    transition: all 0.3s ease; display: flex;
    flex-direction: column; align-items: center;
  }

  .location-mini-card:hover {
    transform: translateY(-3px);
    background-color: rgba(255,255,255,0.25);
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
  }

  .location-mini-icon {
    color: #fff; font-size: 1.5rem; margin-bottom: 5px;
  }
  .location-mini-title {
    color: #fff; font-weight: bold;
    font-size: 14px; margin-bottom: 5px; text-align: center;
  }
  .location-mini-address {
    color: rgba(255,255,255,0.8); font-size: 12px; 
    text-align: center; margin-bottom: 5px;
  }

  .location-mini-phone {
    color: #fff; font-size: 12px; font-weight: 500;
  }

 .blood-stock-section {
  max-width: 900px;
  margin: 40px auto;
  padding: 20px;
}

.blood-stock-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
}

.blood-bag-card {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  padding: 15px;
  width: 200px;
  transition: all 0.3s ease;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.blood-bag-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 16px rgba(0,0,0,0.15);
}

/* Ajuste para o ícone no lugar da imagem */
.blood-bag-image {
  font-size: 80px;   /* define o tamanho do ícone */
  color: #f44336;    /* cor padrão vermelho sangue, pode variar */
  margin-bottom: 10px;
}

.blood-bag-info {
  text-align: center;
}

.blood-bag-title {
  font-weight: bold;
  margin-bottom: 5px;
  color: #333;
}

.blood-bag-status {
  font-size: 14px;
  padding: 3px 8px;
  border-radius: 12px;
  display: inline-block;
  margin-top: 5px;
}

.blood-bag-level {
  width: 100%;
  height: 8px;
  background-color: #eee;
  border-radius: 4px;
  margin-top: 8px;
  overflow: hidden;
}

.blood-bag-level-fill {
  height: 100%;
  border-radius: 4px;
}

.level-critical {
  width: 20%;
  background-color: #f44336;
}

.level-low {
  width: 40%;
  background-color: #ff9800;
}

.level-medium {
  width: 65%;
  background-color: #2196f3;
}

.level-good {
  width: 90%;
  background-color: #4caf50;
}

/* Responsividade */
@media (max-width: 992px) {
  .header-container {
    flex-direction: column;
    text-align: center;
  }

  .nav-menu {
    margin-top: 15px;
    justify-content: center;
  }

  .estoque-container {
    margin-top: 20px;
  }
}

  </style>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #8B0000;">
    <div class="container px-4">
      
      <!-- Logo -->
      <a class="navbar-brand d-flex align-items-center" href="/fluxovital/page/home/index.php">
        <img src="/fluxovital/assets/images/logo1.png" alt="Logo Fluxo Vital" height="40" class="me-2" />
        <strong>Fluxo Vital</strong>
      </a>

      <!-- Botão hamburguer para telas pequenas -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Itens da navbar -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-lg-center">

          <!-- Link Início -->
          <li class="nav-item">
            <a class="nav-link active" href="#">Início</a>
          </li>

          <!-- Dropdown Doações -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDoacoes" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Doações
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDoacoes">
              <li><a class="dropdown-item" href="#doacoes">Doação de Sangue</a></li>
              <li><a class="dropdown-item" href="#doacoes">Doação de Médula Óssea</a></li>
              <li><a class="dropdown-item" href="#doacoes">Doação de Leite Materno</a></li>
            </ul>
          </li>

          <!-- Link Perguntas Frequentes -->
          <li class="nav-item">
            <a class="nav-link" href="#faq">Perguntas Frequentes</a>
          </li>

          <!-- Link Localizações -->
          <li class="nav-item">
            <a class="nav-link" href="#localizacoes">Localizações</a>
          </li>

          <!-- Link Estoque -->
          <li class="nav-item">
            <a class="nav-link" href="#estoque">Estoque</a>
          </li>

          <!-- Botão CTA Agendamento -->
          <a href="/fluxovital/page/cadastro/escolha_categoria.php" 
   class="btn fw-semibold" 
   style="background-color:rgb(253, 239, 242); color:rgb(110, 0, 0);">
  AGENDE SUA DOAÇÃO
</a>

          </>
        </ul>
      </div>
    </div>
  </nav>
</header>



    <div class="mt-4 px-0">
  <div id="carouselBanners" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner rounded-0 shadow">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <img src="/fluxovital/assets/images/bannerblood.png" class="d-block w-100 carousel-banner-img" alt="Banner 1">
      </div>
      <!-- Slide 2 -->
      <div class="carousel-item">
        <img src="/fluxovital/assets/images/bannerblood2.png" class="d-block w-100 carousel-banner-img" alt="Banner 2">
      </div>
    </div>

    <!-- Controles de navegação -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanners" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselBanners" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Próximo</span>
    </button>
  </div>
</div>



  <!-- Nova seção de estoque de sangue com ícones Bootstrap Icons -->
<h2 class="section-title" id="estoque">Estoque de Sangue</h2>
<div class="blood-stock-section">
  <div class="blood-stock-container">
    <div class="blood-bag-card">
      <div class="blood-bag-image text-center">
        <i class="bi bi-droplet-fill" style="font-size: 3rem; color: #dc3545;"></i>
      </div>
      <div class="blood-bag-info">
        <div class="blood-bag-title">Tipo A+</div>
        <div class="blood-bag-status status-reduzido">Reduzido</div>
        <div class="blood-bag-level">
          <div class="blood-bag-level-fill level-low"></div>
        </div>
      </div>
    </div>

    <div class="blood-bag-card">
      <div class="blood-bag-image text-center">
        <i class="bi bi-droplet-fill" style="font-size: 3rem; color: #dc3545;"></i>
      </div>
      <div class="blood-bag-info">
        <div class="blood-bag-title">Tipo A-</div>
        <div class="blood-bag-status status-reduzido">Reduzido</div>
        <div class="blood-bag-level">
          <div class="blood-bag-level-fill level-low"></div>
        </div>
      </div>
    </div>

    <div class="blood-bag-card">
      <div class="blood-bag-image text-center">
        <i class="bi bi-droplet-fill" style="font-size: 3rem; color: #198754;"></i>
      </div>
      <div class="blood-bag-info">
        <div class="blood-bag-title">Tipo B+</div>
        <div class="blood-bag-status status-estavel">Cheio</div>
        <div class="blood-bag-level">
          <div class="blood-bag-level-fill level-good"></div>
        </div>
      </div>
    </div>

    <div class="blood-bag-card">
      <div class="blood-bag-image text-center">
        <i class="bi bi-droplet-fill" style="font-size: 3rem; color: #dc3545;"></i>
      </div>
      <div class="blood-bag-info">
        <div class="blood-bag-title">Tipo B-</div>
        <div class="blood-bag-status status-alerta">Alerta</div>
        <div class="blood-bag-level">
          <div class="blood-bag-level-fill level-critical"></div>
        </div>
      </div>
    </div>

    <div class="blood-bag-card">
      <div class="blood-bag-image text-center">
        <i class="bi bi-droplet-fill" style="font-size: 3rem; color: #0dcaf0;"></i>
      </div>
      <div class="blood-bag-info">
        <div class="blood-bag-title">Tipo AB+</div>
        <div class="blood-bag-status status-estavel">Estável</div>
        <div class="blood-bag-level">
          <div class="blood-bag-level-fill level-medium"></div>
        </div>
      </div>
    </div>

    <div class="blood-bag-card">
      <div class="blood-bag-image text-center">
        <i class="bi bi-droplet-fill" style="font-size: 3rem; color: #dc3545;"></i>
      </div>
      <div class="blood-bag-info">
        <div class="blood-bag-title">Tipo AB-</div>
        <div class="blood-bag-status status-reduzido">Reduzido</div>
        <div class="blood-bag-level">
          <div class="blood-bag-level-fill level-low"></div>
        </div>
      </div>
    </div>

    <div class="blood-bag-card">
      <div class="blood-bag-image text-center">
        <i class="bi bi-droplet-fill" style="font-size: 3rem; color: #dc3545;"></i>
      </div>
      <div class="blood-bag-info">
        <div class="blood-bag-title">Tipo O+</div>
        <div class="blood-bag-status status-alerta">Alerta</div>
        <div class="blood-bag-level">
          <div class="blood-bag-level-fill level-critical"></div>
        </div>
      </div>
    </div>

    <div class="blood-bag-card">
      <div class="blood-bag-image text-center">
        <i class="bi bi-droplet-fill" style="font-size: 3rem; color: #dc3545;"></i>
      </div>
      <div class="blood-bag-info">
        <div class="blood-bag-title">Tipo O-</div>
        <div class="blood-bag-status status-alerta">Alerta</div>
        <div class="blood-bag-level">
          <div class="blood-bag-level-fill level-critical"></div>
        </div>
      </div>
    </div>
  </div>
</div>


  <!-- Seção de Perguntas Frequentes -->
  
  <h2 class="section-title" id="doacoes">Doação de Sangue</h2>
  <div class="donation-container">
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="donation-card text-center">
          <div class="donation-icon">
            <i class="fas fa-baby"></i>
          </div>
          <h4>Por que doar?</h4>
          <p>A doação é separada em tipo sanguíneo (ABO) e em fator Rh. Uma única doação  pode salvar até quatro pessoas, já que o sangue é separado em componentes como hemácias, plaquetas, plasma e crioprecipitado.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="donation-card text-center">
          <div class="donation-icon">
            <i class="fas fa-procedures"></i>
          </div>
          <h4>Quem pode receber?</h4>
          <p>Qualquer pessoa que precise de transfusão: vítimas de acidentes, pacientes com anemia severa, doenças crônicas, recém-nascidos, entre outros. O tipo sanguíneo precisa ser compatível com o doador para ser efetuada a doação</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="donation-card text-center">
          <div class="donation-icon">
            <i class="fas fa-hand-holding-heart"></i>
          </div>
          <h4>Como se tornar doadora?</h4>
          <p>Basta estar saudável, ter entre 18 e 69 anos,levar um documento com foto a um hemocentro. Depois você vai para uma triagem para garantir sua segurança e a de quem vai receber.</p>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-md-6 mb-4">
        <div class="donation-card">
                  <h4><i class="fas fa-check-circle text-success me-2"></i> Passo a passo para doar sangue</h4>
                  <ol>
                    <li>Verifique se você atende aos requisitos básicos para doação.</li>
                    <li>Encontre um hemocentro ou local de coleta próximo a você.</li>
                    <li>Agende sua doação (recomendado para evitar filas).</li>
                    <li>Compareça ao local no dia e hora marcados, bem alimentado e hidratado.</li>
                    <li>Passe pela triagem clínica (entrevista e testes rápidos).</li>
                    <li>Realize a coleta de sangue (dura cerca de 10-15 minutos).</li>
                    <li>Descanse e faça um lanche oferecido no local após a doação.</li>
                  </ol>
                  <a href="https://www.gov.br/saude/pt-br/composicao/saes/sangue" target="_blank" class="btn btn-danger mt-2">Encontrar Hemocentro</a>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="donation-card">
          <h4><i class="fas fa-info-circle text-primary me-2"></i> Informações importantes sobre Doação de Sangue</h4>
          <ul>
            <li>Todo o sangue doado é testado para garantir a segurança do receptor.</li>
            <li>A doação é um processo seguro e todo material utilizado é descartável.</li>
            <li>Doar sangue regularmente ajuda a manter os estoques dos hemocentros estáveis.</li>
            <li>Seu corpo repõe o volume de sangue doado em poucas horas.</li>
            <li>A doação também funciona como um check-up, pois seu sangue será testado para diversas doenças.</li>
            <li>Uma única doação pode beneficiar várias pessoas, pois o sangue é fracionado em diferentes componentes.</li>
          </ul>
          <a href="https://www.gov.br/saude/pt-br/composicao/saes/sangue/doacao-de-sangue" target="_blank" class="btn btn-outline-danger mt-2">Saiba mais sobre Doação de Sangue</a>
        </div>
      </div>
    </div>
  </div>
<h2 class="section-title" id="faq">Perguntas Frequentes</h2>
  <div class="faq-container">
    <div class="accordion" id="faqAccordion">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Quem pode doar sangue?
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Para doar sangue, é necessário estar em boas condições de saúde, ter entre 16 e 69 anos (sendo que a primeira doação deve ser feita até os 60 anos), pesar no mínimo 50kg, estar descansado e alimentado (evitar alimentos gordurosos nas 3 horas que antecedem a doação) e apresentar documento original com foto.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Com que frequência posso doar sangue?
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Homens podem doar a cada 2 meses, até 4 vezes ao ano. Mulheres podem doar a cada 3 meses, até 3 vezes ao ano. Este intervalo é necessário para a reposição de ferro no organismo.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Doação de sangue pode doer?
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
          A doação de sangue pode causar uma leve dor na hora da picada da agulha. Durante o processo, a maioria das pessoas
  sente apenas um leve incômodo ou pressão. É rápida, segura e qualquer desconforto passa logo.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            Quanto tempo dura o processo de doação de sangue?
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Todo o processo, desde o cadastro até a liberação, leva em média 40 minutos. A coleta de sangue em si dura no máximo 10 minutos. Após a doação, é recomendável permanecer no local por cerca de 15 minutos para observação.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFive">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            Como é feita a doação de sangue?
          </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            O doador deita em uma cadeira e uma agulha é colocada em seu braço para coletar o sangue.
A coleta dura cerca de 10 minutos, e no fim, o doador recebe um lanche e orientações.
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Seção de Localização -->
  <h2 class="section-title" id="localizacoes">Localizações</h2>
  <div class="container mb-5">
    <div class="row mt-4">
      <div class="col-md-6 mb-4">
        <h4 class="mb-3">Hemocentro São Luís</h4>
        <div class="map-container" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; ">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.1371000000003!2d-44.2675101!3d-2.5461371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7f68f8ccf7f1051%3A0x3875b46624c473f2!2sHEMOMAR%20-%20Centro%20de%20Hematologia%20e%20Hemoterapia%20do%20Maranh%C3%A3o!5e0!3m2!1sen!2sus!4v1685186529445!5m2!1sen!2sus" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <h4 class="mb-3">Hemomar Bacabal</h4>
        <div class="map-container" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; ">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.977509746293!2d-44.799312324987895!3d-4.224646095749218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x78a6f75e2d3f875%3A0x9dcf38974e270eae!2sHEMOMAR%20-%20Hemon%C3%BAcleo%20de%20Bacabal!5e0!3m2!1spt-BR!2sbr!4v1748463790637!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
      </div></div>
    
    <div class="row mt-4">
      <div class="col-md-6 mb-4">
        <h4 class="mb-3">Hemocentro Imperatriz</h4>
        <div class="map-container" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; ">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2029580.2600311101!2d-49.1247454607646!3d-6.518652504625078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92c55fab2c655651%3A0x6b6ddd9163d16cb9!2sHEMOMAR%20Imperatriz!5e0!3m2!1spt-BR!2sbr!4v1748462502249!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <h4 class="mb-3">Hemocentro Caxias</h4>
        <div class="map-container" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; ">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.4675320461766!2d-43.35841492415603!3d-4.3235639962843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ec9b9c2f7d7d7d7%3A0x9b7d9e9c8b5c2b9a!2sR.%20Quininha%20Pires%2C%20746%20-%20Centro%2C%20Caxias%20-%20MA%2C%2065600-000!5e0!3m2!1spt-BR!2sbr!4v1685186529445!5m2!1spt-BR!2sbr" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>

 <!-- Rodapé Simplificado -->
<footer class="footer bg-fluxo text-white py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-3">
        <img src="https://cdn.discordapp.com/attachments/1376557082618363987/1377686554176389243/fluxo_vital_logo.png?ex=6839de16&is=68388c96&hm=ee1359b58d73bb4ee0c3fe5ebf543d5d93b91e47f08da01fcd40a85a660ae53d&" 
             alt="Fluxo Vital" 
             style="max-width: 120px;">
        <h5 class="mt-2">Fluxo Vital</h5>
        <p>Conectando doadores e receptores para salvar vidas. Facilitamos o processo de doação para garantir acesso a todos.</p>
      </div>
      <div class="col-md-4 mb-3">
        <h5>Links Úteis</h5>
        <ul class="list-unstyled">
          <li><a href="#doacoes" class="text-white text-decoration-none">Doações</a></li>
          <li><a href="#faq" class="text-white text-decoration-none">Perguntas Frequentes</a></li>
          <li><a href="#localizacoes" class="text-white text-decoration-none">Localizações</a></li>
          <li><a href="#estoque" class="text-white text-decoration-none">Estoque de Sangue</a></li>
          <li><a href="https://www.gov.br/saude/pt-br/composicao/saes/sangue" target="_blank" class="text-white text-decoration-none">Portal Nacional do Sangue</a></li>
        </ul>
      </div>
      <div class="col-md-4 mb-3">
        <h5>Contato</h5>
        <p>CEUMA - Renascença - São Luís/MA</p>
        <p>(98) 4002-8922</p>
        <p>contato@fluxovital.org.br</p>
      </div>
    </div>
    <div class="text-center mt-3 small">
      &copy; 2025 Fluxo Vital. Todos os direitos reservados.
    </div>
  </div>
</footer>

</body>
</html>
