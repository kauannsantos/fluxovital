<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cadastro Básico do Doador - Fluxo Vital</title>

  <!-- Bootstrap e ícones -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    :root {
      --vinho: #9d040e;
      --vinho-dark: #6a0207;
      --claro: #f9f6f5;
      --input-bg: #fff;
      --box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    }

    body {
      background: linear-gradient(135deg, #ffdede, #f2e3d5);
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    header, footer {
      background-color: var(--vinho);
      color: #fff;
      text-align: center;
      padding: 1rem;
    }

    footer {
      background-color: var(--vinho-dark);
      margin-top: auto;
    }

    .form-wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 3rem 1rem;
      flex: 1;
    }

    .form-card {
      width: 100%;
      max-width: 500px;
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(6px);
      padding: 2.5rem;
      border-radius: 1.5rem;
      box-shadow: var(--box-shadow);
    }

    .form-icon {
      position: absolute;
      left: 1rem;
      top: 50%;
      transform: translateY(-50%);
      color: #999;
    }

    .input-group {
      position: relative;
    }

    .input-group input {
      padding-left: 2.5rem;
      background-color: var(--input-bg);
    }

    .form-control:focus {
      border-color: var(--vinho);
      box-shadow: 0 0 0 0.25rem rgba(157, 4, 14, 0.25);
    }

    .btn-primary {
      background-color: var(--vinho);
      border: none;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .btn-primary:hover {
      background-color: var(--vinho-dark);
      transform: scale(1.03);
    }

    .text-muted a {
      color: var(--vinho);
      text-decoration: none;
    }

    .text-muted a:hover {
      text-decoration: underline;
    }
  </style>

  <script>
    function validarFormulario() {
      const senha = document.getElementById("senha").value;
      const confirmaSenha = document.getElementById("confirma_senha").value;
      if (senha !== confirmaSenha) {
        alert("As senhas não coincidem.");
        return false;
      }
      return true;
    }
  </script>
</head>
<body>

<header>
  <h1><i class="bi bi-droplet-half me-2"></i>Fluxo Vital</h1>
</header>

<main class="form-wrapper">
  <div class="form-card">
    <h3 class="text-center mb-4">Cadastro do Doador</h3>

    <?php if (isset($_SESSION['erro'])): ?>
      <div class="alert alert-danger"><?= $_SESSION['erro']; unset($_SESSION['erro']); ?></div>
    <?php endif; ?>

    <form method="POST" action="processa_doador.php" onsubmit="return validarFormulario()" novalidate>

      <div class="mb-3 input-group">
        <span class="form-icon"><i class="bi bi-person-fill"></i></span>
        <input type="text" name="nome" class="form-control" placeholder="Nome completo" required>
      </div>

      <div class="mb-3 input-group">
        <span class="form-icon"><i class="bi bi-envelope-fill"></i></span>
        <input type="email" name="email" class="form-control" placeholder="Seu e-mail" required>
      </div>

      <div class="mb-3 input-group">
        <span class="form-icon"><i class="bi bi-telephone-fill"></i></span>
        <input type="tel" name="telefone" class="form-control" placeholder="Telefone" required>
      </div>

      <div class="mb-3 input-group">
        <span class="form-icon"><i class="bi bi-lock-fill"></i></span>
        <input type="password" name="senha" id="senha" class="form-control" placeholder="Crie uma senha" required>
      </div>

      <div class="mb-4 input-group">
        <span class="form-icon"><i class="bi bi-lock-fill"></i></span>
        <input type="password" name="confirma_senha" id="confirma_senha" class="form-control" placeholder="Confirme a senha" required>
      </div>

      <button type="submit" class="btn btn-primary w-100 py-2">Cadastrar</button>

      <p class="text-center text-muted mt-3">
        Já tem conta? <a href="login_doador.php">Faça login</a>
      </p>
    </form>
  </div>
</main>

<footer>
  <p>&copy; <?= date("Y") ?> Fluxo Vital • Todos os direitos reservados.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
