<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerenciar Instituição - Fluxo Vital</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    html, body {
      height: 100%;
      background-color: #ffe9ec;
      margin: 0;
    }
    body {
      display: flex;
      flex-direction: column;
    }
    .main-content {
      flex: 1;
    }
    .navbar, .footer {
      background-color: #9d040e;
    }
    .navbar-brand, .nav-link, .footer-text {
      color: #fff !important;
    }
    .card {
      border: none;
      border-radius: 1.5rem;
      padding: 2rem;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease-in-out;
      background: #ffffff;
      height: 100%;
    }
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }
    .btn-custom {
      background-color: #9d040e;
      color: #fff;
      border-radius: 0.75rem;
      padding: 0.6rem 1.2rem;
    }
    .btn-custom:hover {
      background-color: #9d040e;
    }
    .footer-text {
      font-size: 0.9rem;
    }
    .section-title {
      font-weight: bold;
      font-size: 1.8rem;
    }
  </style>
</head>
<body>
  <!-- Cabeçalho -->
  <nav class="navbar navbar-expand-lg">
    <div class="container d-flex justify-content-between align-items-center">
      <a class="navbar-brand fw-bold" href="#">Fluxo Vital</a>
      <div class="d-flex">
        <a class="nav-link me-3" href="#">Início</a>
        <a class="nav-link" href="#">Sair</a>
      </div>
    </div>
  </nav>

  <!-- Conteúdo -->
  <div class="container main-content py-5">
    <h2 class="section-title text-center mb-5">Painel da Instituição</h2>
    <div class="row justify-content-center g-4">
      
      <!-- Card: Editar Instituição -->
      <div class="col-md-6 col-lg-4">
        <div class="card text-center">
          <h5 class="card-title mb-3">Editar Dados da Instituição</h5>
          <p class="card-text">Atualize as informações básicas da sua instituição.</p>
          <a href="editar_instituicao.php?id=ID_DA_INSTITUICAO" class="btn btn-custom mt-3">Editar</a>
        </div>
      </div>

      <!-- Card: Funcionários -->
      <div class="col-md-6 col-lg-4">
        <div class="card text-center">
          <h5 class="card-title mb-3">Funcionários</h5>
          <p class="card-text">Gerencie, edite e atualize os membros da sua instituição.</p>
          <a href="lista_funcionarios.php?id=ID_DA_INSTITUICAO" class="btn btn-custom mt-3">Gerenciar</a>
        </div>
      </div>

      <!-- Card: Relatórios -->
      <div class="col-md-6 col-lg-4">
        <div class="card text-center">
          <h5 class="card-title mb-3">Relatórios</h5>
          <p class="card-text">Visualize relatórios e dados relevantes da instituição.</p>
          <a href="relatorios.php?id=ID_DA_INSTITUICAO" class="btn btn-custom mt-3">Acessar</a>
        </div>
      </div>

    </div>
  </div>

  <!-- Rodapé -->
  <footer class="footer py-3">
    <div class="container text-center">
      <span class="footer-text">&copy; 2025 Fluxo Vital. Todos os direitos reservados.</span>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
