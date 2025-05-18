<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Escolha seu Perfil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .card-option {
      transition: transform 0.2s ease;
      cursor: pointer;
    }
    .card-option:hover {
      transform: scale(1.05);
    }
    .icon {
      font-size: 3rem;
      color: #0d6efd;
    }
  </style>
</head>
<body>
  <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
    <h2 class="mb-4 text-center">Como deseja continuar?</h2>

    <div class="row justify-content-center w-100" style="max-width: 600px;">
      <div class="col-md-6 mb-3">
        <a href="/fluxovital/page/cadastro/cadastro_doador.php" class="text-decoration-none">
          <div class="card card-option shadow-sm p-4 text-center">
            <i class="bi bi-droplet icon"></i>
            <h5 class="mt-3">Sou Doador</h5>
            <p class="text-muted">Quero doar sangue, medula ou leite.</p>
          </div>
        </a>
      </div>
      <div class="col-md-6 mb-3">
        <a href="/fluxovital/page/cadastro/cadastro_instituicao.php" class="text-decoration-none">
          <div class="card card-option shadow-sm p-4 text-center">
            <i class="bi bi-building icon"></i>
            <h5 class="mt-3">Sou Instituição</h5>
            <p class="text-muted">Represento uma entidade que recebe doações.</p>
          </div>
        </a>
      </div>
    </div>
  </div>

  <!-- Bootstrap e ícones -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</body>
</html>
