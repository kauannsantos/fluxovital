<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Campanhas - Fluxo Vital</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Estilo personalizado -->
  <style>
    body {
      background-color: #fff0f3;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #333;
    }

    .header {
      background-color: #9d040e;
      color: white;
      padding: 2rem;
      text-align: center;
    }

    .header h1 {
      font-size: 2.5rem;
      font-weight: bold;
    }

    .card-campanha {
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      transition: transform 0.2s ease-in-out;
      background-color: white;
    }

    .card-campanha:hover {
      transform: scale(1.02);
    }

    .btn-participar {
      background-color: #9d040e;
      color: white;
    }

    .btn-participar:hover {
      background-color: #6a0207;
    }

    .campanha-img {
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
      height: 200px;
      object-fit: cover;
      width: 100%;
    }
  </style>
</head>
<body>

  <!-- Cabeçalho -->
  <div class="header">
    <h1>Campanhas de Doação</h1>
    <p class="lead">Fique por dentro das campanhas de incentivo à doação e participe.</p>
  </div>

  <!-- Campanhas -->
  <div class="container my-5">
    <div class="row g-4">

      <!-- Campanha 1 -->
      <div class="col-md-4">
        <div class="card card-campanha">
          <img src="/fluxovital/assets/images/gotito.jpeg" alt="Doe Sangue" class="campanha-img">
          <div class="card-body">
            <h5 class="card-title text-danger">Doe Sangue, Salve Vidas</h5>
            <p class="card-text">Participe da nossa campanha especial de doação de sangue em parceria com hospitais da sua região.</p>
            <a href="#" class="btn btn-participar w-100">Participar</a>
          </div>
        </div>
      </div>

      <!-- Campanha 2 -->
      <div class="col-md-4">
        <div class="card card-campanha">
          <img src="/fluxovital/assets/images/blood.jpeg" alt="Doe Medula" class="campanha-img">
          <div class="card-body">
            <h5 class="card-title text-danger">Encontre seu Par Genético</h5>
            <p class="card-text">Cadastre-se como doador de medula e ajude pacientes com leucemia e outras doenças do sangue.</p>
            <a href="#" class="btn btn-participar w-100">Participar</a>
          </div>
        </div>
      </div>

      <!-- Campanha 3 -->
      <div class="col-md-4">
        <div class="card card-campanha">
          <img src="/fluxovital/assets/images/doaleite.jpeg" alt="Doe Leite Materno" class="campanha-img">
          <div class="card-body">
            <h5 class="card-title text-danger">Doe Leite, Alimente Vidas</h5>
            <p class="card-text">Seu leite pode salvar a vida de recém-nascidos prematuros. Conheça como doar com segurança.</p>
            <a href="#" class="btn btn-participar w-100">Participar</a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
