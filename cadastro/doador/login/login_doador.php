<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - Fluxo Vital</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #ffe9ec; /* rosa claro */
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    header {
      background-color: #9d040e;
      padding: 1rem 0;
      color: #fff;
      text-align: center;
      font-weight: 700;
      font-size: 1.5rem;
      letter-spacing: 0.05em;
      box-shadow: 0 2px 8px rgb(123 27 27 / 0.3);
    }

    .fluxo-card {
      max-width: 420px;
      width: 100%;
      background-color: #ffffff;
      border: none;
      border-radius: 1.5rem;
      padding: 2rem;
      box-shadow: 0 0 24px rgba(0, 0, 0, 0.08);
      margin: auto;
      margin-top: 3rem;
      margin-bottom: 3rem;
    }

    .fluxo-card h3 {
      color: #9d040e;
      font-weight: bold;
    }

    .btn-fluxo {
      background-color: #9d040e;
      border: none;
      color: #fff;
      transition: background-color 0.3s ease;
    }

    .btn-fluxo:hover {
      background-color: #5c1313;
    }

    .form-control {
      border-radius: 0.75rem;
    }

    .alert i {
      font-size: 1.25rem;
    }

    .cadastro-link {
      color: #6c757d;
      text-decoration: none;
    }

    .cadastro-link:hover {
      text-decoration: underline;
    }

    footer {
      background-color: #7B1B1B;
      color: #fff;
      text-align: center;
      padding: 1rem 0;
      font-size: 0.9rem;
      margin-top: auto;
      box-shadow: 0 -2px 8px rgb(123 27 27 / 0.3);
    }
  </style>
</head>
<body>

  <header>
    Fluxo Vital
  </header>

  <main class="d-flex flex-grow-1 align-items-center justify-content-center">
    <div class="fluxo-card">
      <h3 class="text-center mb-4">Login do Doador</h3>

      <?php if (isset($_SESSION['erro_login'])): ?>
        <div class="alert alert-danger d-flex align-items-center" role="alert">
          <i class="bi bi-exclamation-triangle-fill me-2"></i>
          <div>
            <?php 
              echo $_SESSION['erro_login']; 
              unset($_SESSION['erro_login']);
            ?>
          </div>
        </div>
      <?php endif; ?>

      <?php if (isset($_SESSION['sucesso_cadastro'])): ?>
        <div class="alert alert-success d-flex align-items-center" role="alert">
          <i class="bi bi-check-circle-fill me-2"></i>
          <div>
            <?php 
              echo $_SESSION['sucesso_cadastro']; 
              unset($_SESSION['sucesso_cadastro']);
            ?>
          </div>
        </div>
      <?php endif; ?>

      <form method="POST" action="processa_login_doador.php">
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" name="email" class="form-control" required />
        </div>
        <div class="mb-3">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" name="senha" class="form-control" required />
        </div>
        <button type="submit" class="btn btn-fluxo w-100 rounded-3">Entrar</button>
      </form>

      <div class="text-center mt-3">
        <a href="/fluxovital/page/cadastro/doador/cadastro/cadastro_doador.php" class="cadastro-link">
          <small>Ainda não tem conta? <strong>Cadastre-se</strong></small>
        </a>
      </div>
    </div>
  </main>

  <footer>
    &copy; <?php echo date('Y'); ?> Fluxo Vital - Todos os direitos reservados.
  </footer>

</body>
</html>
