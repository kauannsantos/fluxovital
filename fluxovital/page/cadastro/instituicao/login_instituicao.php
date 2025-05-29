<?php
session_start();

$categoria = $_POST['categoria'] ?? null;

if (!$categoria) {
    header("Location: escolha_categoria.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <title>Login - Categoria: <?= htmlspecialchars($categoria) ?></title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Fonte Google Roboto -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />

  <style>
    body {
      background-color: #FFE6E6; /* Rosa clarinho */
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    header {
      background-color: #7B1B1B;
      color: white;
      padding: 1rem 0;
      text-align: center;
      font-weight: bold;
      font-size: 1.5rem;
      user-select: none;
    }

    footer {
      background-color: #7B1B1B;
      color: white;
      text-align: center;
      padding: 1rem 0.5rem;
      margin-top: auto;
      font-size: 0.95rem;
      user-select: none;
    }

    .login-container {
      background: #fff;
      border-radius: 20px;
      padding: 3rem 2.5rem;
      max-width: 420px;
      width: 100%;
      margin: 2rem auto;
      box-shadow: 0 12px 28px rgba(123, 27, 27, 0.25);
      text-align: center;
    }

    h2 {
      color: #7B1B1B;
      font-weight: 700;
      margin-bottom: 2rem;
      user-select: none;
      font-size: 1.8rem;
    }

    .form-control {
      border: 2px solid #7B1B1B;
      border-radius: 14px;
      padding: 0.8rem 1.2rem;
      font-size: 1.05rem;
      transition: border-color 0.3s ease;
    }

    .form-control:focus {
      border-color: #3E0D0D;
      box-shadow: 0 0 10px rgba(62, 13, 13, 0.4);
      outline: none;
    }

    .btn-primary {
      background-color: #7B1B1B;
      border-color: #7B1B1B;
      border-radius: 14px;
      padding: 0.85rem;
      font-weight: 700;
      font-size: 1.1rem;
      width: 100%;
      margin-top: 1.5rem;
      transition: background-color 0.3s ease;
      cursor: pointer;
    }

    .btn-primary:hover {
      background-color: #3E0D0D;
      border-color: #3E0D0D;
      box-shadow: 0 0 14px rgba(62, 13, 13, 0.6);
    }

    .alert-danger {
      background-color: #f8d7da;
      color: #842029;
      border-radius: 14px;
      padding: 1rem 1.2rem;
      font-weight: 600;
      margin-bottom: 1.5rem;
    }

    .link-cadastro {
      margin-top: 1.8rem;
      font-weight: 600;
      color: #7B1B1B;
      display: inline-block;
      transition: color 0.3s ease;
      text-decoration: none;
    }

    .link-cadastro:hover {
      color: #3E0D0D;
      text-decoration: underline;
    }

    @media (max-width: 480px) {
      .login-container {
        padding: 2.5rem 1.8rem;
      }
      h2 {
        font-size: 1.6rem;
      }
      .btn-primary {
        font-size: 1rem;
        padding: 0.75rem;
      }
    }
  </style>
</head>
<body>

  <header>
    Fluxo Vital – Sistema de Doações
  </header>

  <section class="login-container shadow">
    <h2>Login - Categoria: <?= htmlspecialchars($categoria) ?></h2>

    <?php if (!empty($_SESSION['erro'])): ?>
      <div class="alert-danger" role="alert"><?= htmlspecialchars($_SESSION['erro']) ?></div>
      <?php unset($_SESSION['erro']); ?>
    <?php endif; ?>

    <form action="processa_login.php" method="post" novalidate autocomplete="off">
      <input type="hidden" name="categoria" value="<?= htmlspecialchars($categoria) ?>" />

      <div class="mb-4 text-start">
        <label for="email" class="form-label fw-semibold">Email</label>
        <input
          type="email"
          id="email"
          name="email"
          class="form-control"
          placeholder="Digite seu email"
          required
          value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
          autocomplete="username"
        />
      </div>

      <div class="mb-4 text-start">
        <label for="senha" class="form-label fw-semibold">Senha</label>
        <input
          type="password"
          id="senha"
          name="senha"
          class="form-control"
          placeholder="Senha"
          required
          autocomplete="current-password"
        />
      </div>

      <button type="submit" class="btn btn-primary" aria-label="Entrar">Entrar</button>
    </form>

    <a href="form_cadastro_instituicao.php?categoria=<?= urlencode($categoria) ?>" class="link-cadastro">
      Não tem cadastro? Cadastre-se aqui
    </a>
  </section>

  <footer>
    &copy; <?= date("Y") ?> Fluxo Vital. Todos os direitos reservados.
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
