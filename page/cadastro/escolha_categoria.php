<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Escolha de Categoria de Doação - Fluxo Vital</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <style>
    body {
      background: #ffe6e6;
      font-family: 'Segoe UI', sans-serif;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }
    header, footer {
      background-color: #9d040e;
      color: white;
      padding: 1rem;
      text-align: center;
      font-weight: bold;
    }
    main {
      flex: 1;
      padding: 40px 20px;
    }
    .card i {
      font-size: 4rem;
      color: #9d040e;
    }
    .btn-selecionar {
      background-color: #9d040e;
      color: white;
      border: none;
      transition: background-color 0.3s ease;
    }
    .btn-selecionar:hover {
      background-color: #9d040e;
    }
    .card:hover {
      transform: scale(1.03);
      transition: transform 0.3s ease;
    }
  </style>
</head>
<body>
  <header>Fluxo Vital – Escolha de Doação</header>

  <main class="container">
    <section class="text-center mt-5">
      <h2 class="mb-5 fw-bold" style="color:#7B1B1B;">Escolha uma Categoria de Doação</h2>
      <form method="POST" action="selecionar_tipo.php">
        <div class="row">

          <!-- Card: Doação de Sangue -->
          <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 rounded-4 shadow-lg">
              <div class="card-body d-flex flex-column align-items-center text-center p-4">
                <i class="fa-solid fa-droplet"></i>
                <h5 class="card-title mt-3 fw-semibold">Doação de Sangue</h5>
                <p class="card-text">Ajude a salvar vidas com uma simples doação de sangue.</p>
                <button type="submit" name="tipo_doacao" value="sangue" class="btn btn-selecionar mt-auto w-100">Selecionar</button>
              </div>
            </div>
          </div>

          <!-- Card: Doação de Médula Óssea -->
          <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 rounded-4 shadow-lg">
              <div class="card-body d-flex flex-column align-items-center text-center p-4">
                <i class="fa-solid fa-heart-pulse"></i>
                <h5 class="card-title mt-3 fw-semibold">Doação de Médula Óssea</h5>
                <p class="card-text">Seja um potencial salvador para pessoas com leucemia.</p>
                <button type="submit" name="tipo_doacao" value="medula" class="btn btn-selecionar mt-auto w-100">Selecionar</button>
              </div>
            </div>
          </div>

          <!-- Card: Doação de Leite Materno -->
          <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 rounded-4 shadow-lg">
              <div class="card-body d-flex flex-column align-items-center text-center p-4">
                <i class="fa-solid fa-person-breastfeeding"></i>
                <h5 class="card-title mt-3 fw-semibold">Leite Materno</h5>
                <p class="card-text">Ajude bebês prematuros e suas famílias doando leite com segurança.</p>
                <button type="submit" name="tipo_doacao" value="leite" class="btn btn-selecionar mt-auto w-100">Selecionar</button>
              </div>
            </div>
          </div>

        </div>
      </form>
    </section>
  </main>

  <footer>&copy; 2025 Fluxo Vital - Todos os direitos reservados.</footer>
</body>
</html>
