<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Relatórios - Fluxo Vital</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Estilo personalizado -->
  <style>
    body {
      background-color: #ffeef0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #333;
    }

    .header {
      background-color: #9d040e;
      color: white;
      padding: 2rem;
      text-align: center;
      border-bottom: 5px solid #ffccd5;
    }

    .header h1 {
      font-size: 2.5rem;
      font-weight: bold;
    }

    .section-title {
      margin-top: 2rem;
      color: #9d040e;
    }

    .card {
      border: none;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      transition: transform 0.2s ease-in-out;
    }

    .card:hover {
      transform: scale(1.02);
    }

    .btn-relatorio {
      background-color: #9d040e;
      color: white;
    }

    .btn-relatorio:hover {
      background-color: #6a0207;
    }
  </style>
</head>
<body>

  <!-- Cabeçalho -->
  <div class="header">
    <h1>Relatórios e Estatísticas</h1>
    <p class="lead">Acesse relatórios, gráficos e planilhas sobre atualizações do sistema de sangue, medula e leite materno.</p>
  </div>

  <!-- Seções de relatórios -->
  <div class="container my-5">
    <div class="row g-4">
      
      <!-- Relatórios de Sangue -->
      <div class="col-md-4">
        <div class="card p-4">
          <h5 class="card-title text-danger">Relatórios de Sangue</h5>
          <p class="card-text">Estoque, doações recebidas, tipo sanguíneo em falta, campanhas e comparativos mensais.</p>
          <a href="#" class="btn btn-relatorio mt-3 w-100">Ver Relatórios</a>
        </div>
      </div>

      <!-- Relatórios de Medula -->
      <div class="col-md-4">
        <div class="card p-4">
          <h5 class="card-title text-danger">Relatórios de Medula</h5>
          <p class="card-text">Cadastro de doadores, compatibilidades encontradas, histórico de transplantes e alertas.</p>
          <a href="#" class="btn btn-relatorio mt-3 w-100">Ver Relatórios</a>
        </div>
      </div>

      <!-- Relatórios de Leite Materno -->
      <div class="col-md-4">
        <div class="card p-4">
          <h5 class="card-title text-danger">Relatórios de Leite Materno</h5>
          <p class="card-text">Volume coletado, bebês beneficiados, bancos de leite ativos e estatísticas por região.</p>
          <a href="#" class="btn btn-relatorio mt-3 w-100">Ver Relatórios</a>
        </div>
      </div>

    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
