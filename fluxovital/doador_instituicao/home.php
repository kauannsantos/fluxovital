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
      height: 100%;
      transition: transform 0.2s ease;
      cursor: pointer;
      border: none;
    }

    .card-option:hover {
      transform: scale(1.05);
    }

    .icon {
      font-size: 3rem;
      color:rgb(157, 4, 14);
    }

    .card-text {
      min-height: 48px;
    }
  </style>
</head>
<body>
  <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
    <h2 class="mb-4 text-center">Como deseja continuar?</h2>

    <div class="row justify-content-center w-100" style="max-width: 800px;">
      <div class="col-md-4 mb-3">
        <a href="/fluxovital/page/cadastro/doador.php" class="text-decoration-none">
          <div class="card card-option shadow-sm p-4 text-center h-100">
            <i class="bi bi-droplet icon"></i>
            <h5 class="mt-3">Sou Doador</h5>
            <p class="text-muted card-text">Quero doar sangue, medula ou leite.</p>
          </div>
        </a>
      </div>
      <div class="col-md-4 mb-3">
        <a href="/fluxovital/page/cadastro/instituicao.php" class="text-decoration-none">
          <div class="card card-option shadow-sm p-4 text-center h-100">
            <i class="bi bi-building icon"></i>
            <h5 class="mt-3">Sou Instituição</h5>
            <p class="text-muted card-text">Represento uma entidade que gerencia doações.</p>
          </div>
        </a>
      </div>
      <div class="col-md-4 mb-3">
        <a href="/fluxovital/page/cadastro/acesso.php" class="text-decoration-none">
          <div class="card card-option shadow-sm p-4 text-center h-100">
            <i class="bi bi-person icon"></i>
            <h5 class="mt-3">Permanecer como Usuário</h5>
            <p class="text-muted card-text">Quero explorar a plataforma antes.</p>
          </div>
        </a>
      </div>
    </div>

    <p class="mt-3 text-muted text-center" style="max-width: 600px;">
      Você poderá se cadastrar como doador ou instituição a qualquer momento.
    </p>
  </div>

  <!-- Bootstrap e ícones -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</body>
</html>
