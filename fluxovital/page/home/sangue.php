<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Doe Sangue - Salve Vidas</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet"/>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      line-height: 1.6;
      color: #333;
    }

    header {
      background-color: #a90000;
      color: white;
      padding: 1rem 2rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    header .logo {
      font-size: 1.5rem;
      font-weight: 700;
    }

    nav a {
      color: white;
      text-decoration: none;
      margin-left: 1.5rem;
      font-weight: 500;
    }

    .banner {
      background: url('https://images.unsplash.com/photo-1606205957578-769d0c6dbf98?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80') no-repeat center center/cover;
      color: white;
      padding: 6rem 2rem;
      text-align: center;
    }

    .banner h1 {
      font-size: 3rem;
      margin-bottom: 1rem;
      text-shadow: 1px 1px 4px rgba(0,0,0,0.6);
    }

    .banner p {
      font-size: 1.25rem;
      max-width: 600px;
      margin: 0 auto;
      text-shadow: 1px 1px 3px rgba(0,0,0,0.6);
    }

    .section {
      padding: 4rem 2rem;
      max-width: 1000px;
      margin: auto;
    }

    .section h2 {
      color: #a90000;
      margin-bottom: 1.5rem;
    }

    .benefits, .requirements {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.5rem;
    }

    .card {
      border: 1px solid #ccc;
      border-radius: 8px;
      padding: 1.5rem;
      background-color: #f9f9f9;
    }

    .cta {
      background-color: #a90000;
      color: white;
      text-align: center;
      padding: 3rem 2rem;
    }

    .cta h2 {
      margin-bottom: 1rem;
    }

    .cta a {
      background-color: white;
      color: #a90000;
      text-decoration: none;
      padding: 0.75rem 1.5rem;
      font-weight: bold;
      border-radius: 5px;
      display: inline-block;
      margin-top: 1rem;
    }

    footer {
      background-color: #1a1a1a;
      color: white;
      padding: 2rem;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    footer .footer-section {
      flex: 1;
      min-width: 250px;
      margin-bottom: 1rem;
    }

    footer h3 {
      color: #ff4d4d;
      margin-bottom: 1rem;
    }

    footer a {
      color: white;
      text-decoration: none;
      display: block;
      margin-bottom: 0.5rem;
    }

    footer a:hover {
      text-decoration: underline;
    }

    @media (max-width: 600px) {
      header {
        flex-direction: column;
        align-items: flex-start;
      }

      nav {
        margin-top: 0.5rem;
      }

      .banner h1 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>

  <header>
    <div class="logo">Doe Sangue</div>
    <nav>
      <a href="#">Início</a>
      <a href="#sobre">Sobre</a>
      <a href="#beneficios">Benefícios</a>
      <a href="#agendar">Agendar</a>
    </nav>
  </header>

  <section class="banner">
    <h1>Salve Vidas com um Gesto de Amor</h1>
    <p>Uma única doação de sangue pode salvar até 4 vidas. Doe sangue e faça a diferença hoje.</p>
  </section>

  <section class="section" id="sobre">
    <h2>Por que doar sangue?</h2>
    <p>O sangue é insubstituível e essencial em diversas situações: cirurgias, acidentes graves, partos complicados e no tratamento de doenças como anemias e câncer. Doar é um ato voluntário, solidário e seguro que pode salvar muitas vidas.</p>
  </section>

  <section class="section" id="beneficios">
    <h2>Benefícios de doar sangue</h2>
    <div class="benefits">
      <div class="card">Ajuda direta a quem precisa de transfusão</div>
      <div class="card">Exame de saúde gratuito a cada doação</div>
      <div class="card">Redução do risco de doenças cardíacas</div>
      <div class="card">Contribui para o bem-estar coletivo</div>
    </div>
  </section>

  <section class="section">
    <h2>Quem pode doar?</h2>
    <div class="requirements">
      <div class="card">Ter entre 16 e 69 anos (menores com autorização)</div>
      <div class="card">Estar em boas condições de saúde</div>
      <div class="card">Pesar mais de 50kg</div>
      <div class="card">Estar alimentado e descansado</div>
    </div>
  </section>

  <section class="cta" id="agendar">
    <h2>Pronto para salvar vidas?</h2>
    <p>Agende sua doação em poucos cliques e seja um herói da vida real.</p>
    <a href="#">Agendar Doação</a>
  </section>

  <footer>
    <div class="footer-section">
      <h3>Hemocentro Virtual</h3>
      <a href="#">Início</a>
      <a href="#">Agendamento</a>
      <a href="#">Contato</a>
    </div>
    <div class="footer-section">
      <h3>Contatos</h3>
      <a href="tel:6232014101">Telefone: (62) 3201-4101</a>
      <a href="mailto:hemocentro@saude.go.gov.br">hemocentro@saude.go.gov.br</a>
    </div>
    <div class="footer-section">
      <h3>Endereço</h3>
      <p>Av. Anhanguera, nº 7.745 – Setor Campinas<br>Goiânia - GO, CEP: 74530-010</p>
    </div>
  </footer>

</body>
</html>
