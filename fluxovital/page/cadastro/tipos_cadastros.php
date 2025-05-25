<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Escolha seu Perfil - Fluxo Vital</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    :root {
      --vinho: #9d040e;
      --vinho-dark: #6a0207;
      --cinza-claro: #f2e3d5;
      --texto-secundario: #6c757d;
      --foco: #8B0000;
      --font-family-base: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: linear-gradient(135deg, #f8d7da, #f2e3d5);
      font-family: var(--font-family-base);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    header {
      background-color: var(--vinho);
      color: white;
      padding: 1rem 0;
    }

    header .navbar-brand {
      font-weight: bold;
      font-size: 1.5rem;
      margin-left: 1rem;
    }

    footer {
      background-color: var(--vinho-dark);
      color: white;
      padding: 1rem 0;
      text-align: center;
      font-size: 0.9rem;
      margin-top: auto;
    }

    main.container {
      max-width: 900px;
      width: 100%;
      padding: 2rem 1.5rem;
      flex-grow: 1;
    }

    h2 {
      color: var(--vinho-dark);
      font-weight: 700;
      margin-bottom: 2rem;
      text-align: center;
      user-select: none;
    }

    .card-option {
      border: none;
      border-radius: 16px;
      cursor: pointer;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      transition: transform 0.25s ease, box-shadow 0.25s ease;
      padding: 2rem 1.5rem;
      display: flex;
      flex-direction: column;
      align-items: center;
      height: 100%;
      background-color: white;
      color: var(--vinho-dark);
      text-decoration: none;
      user-select: none;
    }

    .card-option:hover,
    .card-option:focus-visible {
      transform: translateY(-6px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
      outline: none;
      color: var(--vinho);
      text-decoration: none;
    }

    .card-option:focus-visible {
      outline: 3px solid var(--foco);
      outline-offset: 4px;
    }

    .icon {
      font-size: 3.5rem;
      margin-bottom: 1rem;
      color: var(--vinho);
      transition: color 0.25s ease;
    }

    .card-option:hover .icon,
    .card-option:focus-visible .icon {
      color: var(--vinho-dark);
    }

    h5 {
      font-weight: 600;
      margin-bottom: 0.5rem;
      user-select: none;
    }

    p.card-text {
      color: var(--texto-secundario);
      min-height: 3rem;
      font-size: 0.95rem;
      text-align: center;
      user-select: none;
    }

    .info-text {
      margin-top: 2rem;
      color: var(--texto-secundario);
      text-align: center;
      font-size: 1rem;
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
      user-select: none;
    }

    @media (max-width: 575.98px) {
      .card-option {
        padding: 1.5rem 1rem;
      }

      .icon {
        font-size: 3rem;
      }
    }
  </style>
</head>
<body>

  <!-- Cabeçalho -->
  <header>
    <div class="container d-flex align-items-center justify-content-between">
      <a class="navbar-brand text-white" href="/fluxovital/">Fluxo Vital</a>
      <nav class="d-none d-md-block">
        <a href="/fluxovital/" class="text-white text-decoration-none me-3">Início</a>
        <a href="/fluxovital/sobre.php" class="text-white text-decoration-none me-3">Sobre</a>
        <a href="/fluxovital/contato.php" class="text-white text-decoration-none">Contato</a>
      </nav>
    </div>
  </header>

  <!-- Conteúdo principal -->
  <main class="container">
    <h2>Como deseja continuar?</h2>

    <div class="row g-4 justify-content-center">
      <div class="col-12 col-md-6 col-lg-4">
        <a href="/fluxovital/page/cadastro/doador/cadastro_doador.php" class="card-option" aria-label="Opção para cadastro como doador">
          <i class="bi bi-droplet-fill icon" aria-hidden="true"></i>
          <h5>Sou Doador</h5>
          <p class="card-text">Quero doar sangue, medula ou leite.</p>
        </a>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <a href="/fluxovital/page/cadastro/instituicao/escolha_categoria.php" class="card-option" aria-label="Opção para cadastro como instituição">
          <i class="bi bi-building icon" aria-hidden="true"></i>
          <h5>Sou Instituição</h5>
          <p class="card-text">Represento uma entidade que gerencia doações.</p>
        </a>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <a href="/fluxovital/page/cadastro/usuario/login_usuario.php" class="card-option" aria-label="Continuar como usuário">
          <i class="bi bi-person icon" aria-hidden="true"></i>
          <h5>Continuar como usuário</h5>
          <p class="card-text">Quero explorar a plataforma antes.</p>
        </a>
      </div>
    </div>

    <p class="info-text">
      Você poderá se cadastrar como doador ou instituição a qualquer momento.
    </p>
  </main>

  <!-- Rodapé -->
  <footer>
    <div class="container">
      © 2025 Fluxo Vital. Todos os direitos reservados.
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
