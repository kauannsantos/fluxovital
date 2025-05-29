<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Fluxo Vital - Agendamento e Captação</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  
  <style>
   /* Estilos para o header */
   .topo {
    background: linear-gradient(to right, #c00, #900); /* Gradiente para um visual mais moderno */
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    padding: 15px 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    position: sticky;
    top: 0;
    z-index: 1000;
  }

  .header-container {
    width: 100%;
    max-width: 1400px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
  }

  .logo_topo {
    display: flex;
    align-items: center;
  }

  .logo_topo img {
    height: 60px;
    width: auto;
    filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));
  }

  .logo_vertical {
    display: flex;
    align-items: center;
    text-decoration: none;
    transition: transform 0.3s ease;
  }

  .logo_vertical:hover {
    transform: scale(1.05);
  }

  .texto_logo {
    font-size: 24px;
    font-weight: bold;
    color: #fff;
    margin-left: 12px;
    font-family: system-ui, sans-serif;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
  }

  .nav-menu {
    display: flex;
    align-items: center;
    gap: 20px;
  }

  .nav-link {
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    padding: 8px 12px;
    border-radius: 4px;
    transition: background-color 0.3s;
  }

  .nav-link:hover {
    background-color: rgba(255,255,255,0.1);
    color: #fff;
  }

  .nav-link.active {
    background-color: rgba(255,255,255,0.2);
  }

  .header-btn {
    appearance: button;
    -webkit-appearance: button;
    -moz-appearance: button;
    padding: 10px 16px;
    background: #fff;
    color: #c00;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: bold;
    transition: all 0.3s ease;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
  }

  .header-btn:hover {
    background: #f8f8f8;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
  }

  .estoque-container {
    background-color: rgba(0,0,0,0.1);
    border-radius: 8px;
    padding: 15px;
    margin-top: 15px;
    width: 100%;
  }

  .estoque-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
  }

  .estoque-title {
    font-size: 22px;
    color: #fff;
    margin: 0;
    font-weight: bold;
  }

  .blood-types-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 15px;
  }

  .blood-type-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: rgba(255,255,255,0.1);
    border-radius: 8px;
    padding: 10px;
    transition: transform 0.3s;
    width: 80px;
  }

  .blood-type-item:hover {
    transform: translateY(-5px);
    background-color: rgba(255,255,255,0.2);
  }

  .blood-type-item img {
    height: 50px;
    width: auto;
    margin-bottom: 5px;
  }

  .blood-type-text {
    color: #fff;
    font-weight: bold;
    text-align: center;
    font-size: 14px;
  }

  .blood-status {
    font-size: 12px;
    padding: 2px 6px;
    border-radius: 10px;
    margin-top: 2px;
  }

  .status-reduzido {
    background-color: #ff9800;
    color: #fff;
  }

  .status-alerta {
    background-color: #f44336;
    color: #fff;
  }

  .status-estavel {
    background-color: #4caf50;
    color: #fff;
  }

  /* Estilos para o carrossel central */
  .carousel-container {
    margin: 30px auto;
    max-width: 2500px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    border-radius: 8px;
    width: 100%;
    overflow: hidden;
  }

  .carousel-caption {
    background-color: rgba(0,0,0,0.6);
    border-radius: 8px;
    padding: 15px;
    bottom: 30px;
  }

  /* Estilos para as seções de FAQ e Doação */
  .section-title {
    color: #c00;
    text-align: center;
    margin: 40px 0 20px;
    font-weight: bold;
    position: relative;
    padding-bottom: 10px;
  }

  .section-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 3px;
    background-color: #c00;
  }

  .faq-container, .donation-container {
    max-width: 900px;
    margin: 0 auto 50px;
    padding: 20px;
  }

  .accordion-item {
    border-left: none;
    border-right: none;
    margin-bottom: 10px;
  }

  .accordion-button:not(.collapsed) {
    background-color: #f8d7da;
    color: #c00;
  }

  .accordion-button:focus {
    box-shadow: 0 0 0 0.25rem rgba(204, 0, 0, 0.25);
  }

  .donation-card {
    border-radius: 8px;
    border: 1px solid #ddd;
    padding: 20px;
    margin-bottom: 20px;
    transition: transform 0.3s ease;
  }

  .donation-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  }

  .donation-icon {
    font-size: 2.5rem;
    color: #c00;
    margin-bottom: 15px;
  }

  /* Estilos para o footer */
  footer {
    background: linear-gradient(to right, #333, #222);
    color: white;
    padding: 40px 0 20px;
    position: relative;
  }

  .footer-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }

  .footer-logo {
    width: 80px;
    margin-bottom: 15px;
  }

  .footer-section {
    margin-bottom: 30px;
  }

  .footer-section h5 {
    color: #ff6b6b;
    font-weight: bold;
    margin-bottom: 15px;
    position: relative;
    padding-bottom: 10px;
  }

  .footer-section h5::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 40px;
    height: 2px;
    background-color: #ff6b6b;
  }

  .footer-links {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .footer-links li {
    margin-bottom: 10px;
  }

  .footer-links a {
    color: #ddd;
    text-decoration: none;
    transition: color 0.3s;
  }

  .footer-links a:hover {
    color: #ff6b6b;
  }

  .social-icons {
    display: flex;
    gap: 15px;
    margin-top: 15px;
  }

  .social-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    background-color: rgba(255,255,255,0.1);
    border-radius: 50%;
    color: #fff;
    transition: all 0.3s;
  }

  .social-icon:hover {
    background-color: #ff6b6b;
    transform: translateY(-3px);
  }

  .footer-bottom {
    border-top: 1px solid rgba(255,255,255,0.1);
    padding-top: 20px;
    margin-top: 20px;
    text-align: center;
    font-size: 14px;
    color: #aaa;
  }

  /* Botão de voltar ao topo */
  .back-to-top {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 50px;
    height: 50px;
    background-color: #c00;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    cursor: pointer;
    box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s;
    z-index: 999;
  }

  .back-to-top.show {
    opacity: 1;
    visibility: visible;
  }

  .back-to-top:hover {
    background-color: #900;
    transform: translateY(-5px);
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

  @media (max-width: 768px) {
    .topo {
      padding: 10px;
    }
    
    .blood-types-container {
      gap: 8px;
    }
    
    .blood-type-item {
      width: 70px;
      padding: 8px;
    }
    
    .carousel-container {
      margin: 15px auto;
    }
    
    .back-to-top {
      bottom: 20px;
      right: 20px;
      width: 40px;
      height: 40px;
    }
  }

  @media (max-width: 576px) {
    .nav-menu {
      flex-direction: column;
      gap: 10px;
    }
    
    .blood-types-container {
      justify-content: space-around;
    }
  }
  </style>
</head>
<body>
  <!-- Cabeçalho -->
  <header class="topo">
    <div class="header-container">
      <div class="logo_topo">
        <a href="#" class="logo_vertical">
          <img src="https://cdn.discordapp.com/attachments/1358570541434277909/1373713971303157981/1747583148564.png?ex=6837f095&is=68369f15&hm=fc7cc7cbf9a0ec0d9a29d267f7cdb6f25a68e41ded5fb427bc9e031b953611da&" alt="Fluxo Vital">
          <span class="texto_logo">Fluxo Vital</span>
        </a>
      </div>
      
      <div class="nav-menu">
        <a href="#" class="nav-link active">Início</a>
        <a href="#doacoes" class="nav-link">Doações</a>
        <a href="#faq" class="nav-link">Perguntas Frequentes</a>
        <a href="https://www.hemosc.org.br/agende-sua-doacao.html" class="nav-link">
          <button class="header-btn">AGENDE SUA DOAÇÃO</button>
        </a>
      </div>
    </div>
    
    <div class="estoque-container">
      <div class="estoque-header">
        <h2 class="estoque-title">ESTOQUE DE SANGUE</h2>
        <span class="text-white">Atualizado em: 27/05/2025</span>
      </div>
      
      <div class="blood-types-container">
        <div class="blood-type-item">
          <img src="https://cdn.discordapp.com/attachments/1376557082618363987/1376558172122382378/1748267319182.png?ex=6835c333&is=683471b3&hm=90219dab6fbef73f9ba7ad231355bef8417812a7f19ffe7edcbb91e445176a9d&" alt="Sangue tipo A-">
          <span class="blood-type-text">A-</span>
          <span class="blood-status status-reduzido">Reduzido</span>
        </div>
        <div class="blood-type-item">
          <img src="https://cdn.discordapp.com/attachments/1376557082618363987/1376558172122382378/1748267319182.png?ex=6835c333&is=683471b3&hm=90219dab6fbef73f9ba7ad231355bef8417812a7f19ffe7edcbb91e445176a9d&" alt="Sangue tipo A+">
          <span class="blood-type-text">A+</span>
          <span class="blood-status status-reduzido">Reduzido</span>
        </div>
        <div class="blood-type-item">
          <img src="https://cdn.discordapp.com/attachments/1376557082618363987/1376558153746878557/1748267365484.png?ex=6835c32f&is=683471af&hm=271a692556de6a2b2ef88333d8579f7392426e97bbc627d14b77694c8dab634b&" alt="Sangue tipo B-">
          <span class="blood-type-text">B-</span>
          <span class="blood-status status-alerta">Alerta</span>
        </div>
        <div class="blood-type-item">
          <img src="https://cdn.discordapp.com/attachments/1376557082618363987/1376558172122382378/1748267319182.png" alt="Sangue tipo B+">
          <span class="blood-type-text">B+</span>
          <span class="blood-status status-estavel">Estável</span>
        </div>
        <div class="blood-type-item">
          <img src="https://cdn.discordapp.com/attachments/1376557082618363987/1376558162261573662/1748267340471.png" alt="Sangue tipo AB-">
          <span class="blood-type-text">AB-</span>
          <span class="blood-status status-reduzido">Reduzido</span>
        </div>
        <div class="blood-type-item">
          <img src="https://cdn.discordapp.com/attachments/1376557082618363987/1376558162261573662/1748267340471.png" alt="Sangue tipo AB+">
          <span class="blood-type-text">AB+</span>
          <span class="blood-status status-estavel">Estável</span>
        </div>
        <div class="blood-type-item">
          <img src="https://cdn.discordapp.com/attachments/1376557082618363987/1376558138446057625/1748267396651.png" alt="Sangue tipo O-">
          <span class="blood-type-text">O-</span>
          <span class="blood-status status-alerta">Alerta</span>
        </div>
        <div class="blood-type-item">
          <img src="https://cdn.discordapp.com/attachments/1376557082618363987/1376558138446057625/1748267396651.png" alt="Sangue tipo O+">
          <span class="blood-type-text">O+</span>
          <span class="blood-status status-alerta">Alerta</span>
        </div>
      </div>
    </div>
  </header>

  <!-- Carrossel Central Aprimorado -->
  <div class="container carousel-container">
    <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel"> 

      </div>
      <div class="carousel-inner ">
        <div class="carousel-item active">
          <img src="https://cdn.discordapp.com/attachments/1367500914264637570/1376721447979978842/imagem_doacao.png?ex=68385583&is=68370403&hm=863e0f3dc127ab6fe22e97ee5957aea4a62028f5465e8dd5429d3456a476206d&" class="d-block w-100" alt="Doação de Sangue">
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://cdn.discordapp.com/attachments/1367500914264637570/1376724649219719258/Sangue.png?ex=6838587e&is=683706fe&hm=10f8bfe442b5ba9661eaf30ba8bbb8cbb55fa48419b3479b08b0a7974474559b&" class="d-block w-100" alt="Doação de sangue 2">
          
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://media.discordapp.net/attachments/1367500914264637570/1372004379565228143/image.png?ex=6835ace6&is=68345b66&hm=ae55dcdcdbc9d3891296bbba1bc45fe10fbe508dfbcfad55e6827e3597ed1517&=&format=webp&quality=lossless&width=1195&height=676" class="d-block w-100" alt="Agendamento">
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>
  </div>

  <!-- Seção de Perguntas Frequentes -->
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
           A doação de sangue pode causar uma leve dor na hora da picada da agulha.
Durante o processo, a maioria das pessoas sente apenas um leve incômodo ou pressão.
É rápida, segura e qualquer desconforto passa logo.
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
                    <li>Siga as recomendações pós-doação para uma boa recuperação.</li>
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

  <!-- Seção de Localização -->
<h2 class="section-title" id="localizacao">Localização - Hemomar São Luís</h2>
<div class="container mb-5">
  <div class="map-container" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; ">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.1371000000003!2d-44.2675101!3d-2.5461371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7f68f8ccf7f1051%3A0x3875b46624c473f2!2sHEMOMAR%20-%20Centro%20de%20Hematologia%20e%20Hemoterapia%20do%20Maranh%C3%A3o!5e0!3m2!1sen!2sus!4v1685186529445!5m2!1sen!2sus" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>

<!-- Rodapé -->
  <footer>
    <div class="footer-container">
      <div class="row">
        <div class="col-lg-4 col-md-6 footer-section">
          <img src="https://cdn.discordapp.com/attachments/1358570541434277909/1373713971303157981/1747583148564.png?ex=6835f655&is=6834a4d5&hm=4ab9068c04826f1b1ec9e2cb210974512c7cd772f8c24b2a9fca4904d9b29dd6&" alt="Fluxo Vital" class="footer-logo">
          <h5>Fluxo Vital</h5>
          <p>Conectando doadores e receptores para salvar vidas. Nossa missão é facilitar o processo de doação e garantir que todos tenham acesso aos recursos necessários.</p>
          <div class="social-icons">
            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6 footer-section">
          <h5>Links Rápidos</h5>
          <ul class="footer-links">
            <li><a href="#">Início</a></li>
            <li><a href="#doacoes">Doações</a></li>
            <li><a href="#faq">Perguntas Frequentes</a></li>
            <li><a href="#">Sobre Nós</a></li>
            <li><a href="#">Política de Privacidade</a></li>
            <li><a href="#">Termos de Uso</a></li>
          </ul>
        </div>
        
        <div class="col-lg-4 col-md-12 footer-section">
          <h5>Contato Hemomar - São Luís</h5>
          <p><i class="fas fa-map-marker-alt me-2"></i> Rua 5 de Janeiro, S/N - Jordoa, São Luís/MA</p>
          <p>CEP: 65040-450</p>
          <p><i class="fas fa-phone me-2"></i> Telefone: (98) 3216-1100</p>
          <p><i class="fab fa-whatsapp me-2"></i> Agendamento (WhatsApp): (98) 9162-3334</p>
          <p><i class="fas fa-clock me-2"></i> Segunda a Sexta: 7h30 às 18h</p>
          <p><i class="fas fa-clock me-2"></i> Sábados: 7h30 às 12h</p>
        </div>
      </div>
      
      <div class="footer-bottom">
        <p>&copy; 2025 Fluxo Vital. Todos os direitos reservados.</p>
      </div>
    </div>
  </footer>

  <!-- Botão de voltar ao topo -->
  <a href="#" class="back-to-top" id="backToTop">
    <i class="fas fa-arrow-up"></i>
  </a>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- Script para o botão de voltar ao topo -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var backToTopButton = document.getElementById('backToTop');
      
      // Mostrar ou esconder o botão baseado na posição de rolagem
      window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
          backToTopButton.classList.add('show');
        } else {
          backToTopButton.classList.remove('show');
        }
      });
      
      // Rolar suavemente para o topo quando o botão for clicado
      backToTopButton.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
      });
    });
  </script>
</body>
</html>

/* Estilos para o body */
body {
  background: linear-gradient(to bottom, #ffffff, #f1f1f1); /* Gradiente suave */
  padding-top: 150px; /* Ajuste para compensar o header fixo e o estoque */
}

/* Animação para títulos */
@keyframes fadeInGrow {
  from {
    opacity: 0;
    transform: scale(0.95);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}

/* Smooth scroll */
html {
  scroll-behavior: smooth;
}



.section-title {
  color: #c00;
  text-align: center;
  margin: 40px 0 20px;
  font-weight: bold;
  position: relative;
  padding-bottom: 10px;
  animation: fadeInGrow 0.8s ease-out forwards; /* Aplica a animação */
}

.donation-card {
  border-radius: 8px;
  border: 1px solid #ddd;
  padding: 20px;
  margin-bottom: 20px;
  transition: transform 0.3s ease, box-shadow 0.3s ease; /* Transição suave */
}

.donation-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

.blood-type-item {
  display: flex;
  flex-direction: column;
  align-items: center;
  background-color: rgba(255,255,255,0.1);
  border-radius: 8px;
  padding: 10px;
  transition: transform 0.3s, background-color 0.3s; /* Transição suave */
  width: 80px;
}

.blood-type-item:hover {
  transform: scale(1.1) translateY(-5px); /* Aumenta e levanta no hover */
  background-color: rgba(255,255,255,0.25);
}



  <!-- Scripts Bootstrap e Popper -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

  <!-- Script para inicializar tooltips -->
  <script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    // Script para botão Voltar ao Topo
    const backToTopButton = document.getElementById('backToTop');
    window.onscroll = function() {
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        backToTopButton.classList.add('show');
      } else {
        backToTopButton.classList.remove('show');
      }
    };
  </script>
</body>
</html>
