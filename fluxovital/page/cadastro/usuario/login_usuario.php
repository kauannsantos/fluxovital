<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - Fluxo Vital</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    body {
      background-color: #fdecef;
      margin: 0;
      padding-top: 70px; /* Espaço para o cabeçalho fixo */
      padding-bottom: 80px; /* Espaço para o rodapé */
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .login-card {
      background: white;
      padding: 2.5rem;
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
      max-width: 420px;
      margin: auto;
      margin-top: 4vh;
    }

    .login-card h2 {
      margin-bottom: 2rem;
      color: #9d040e;
      text-align: center;
      font-weight: 700;
    }

    .form-label {
      font-weight: 600;
      color: #333;
    }

    .form-control {
      border-radius: 10px;
      padding: 0.75rem;
    }

    .btn-login {
      background-color: #9d040e;
      border: none;
      padding: 0.75rem;
      border-radius: 12px;
      font-weight: 600;
      transition: background-color 0.3s;
    }

    .btn-login:hover {
      background-color: #6a0207;
    }

    .link-cadastro {
      display: block;
      margin-top: 1.5rem;
      text-align: center;
      color: #6c757d;
      font-size: 0.95rem;
    }

    .link-cadastro:hover {
      text-decoration: underline;
      color: #9d040e;
    }

    .form-icon {
      position: absolute;
      left: 15px;
      top: 50%;
      transform: translateY(-50%);
      color: #aaa;
    }

    .input-group > .form-control {
      padding-left: 2.5rem;
    }

    /* Cabeçalho fixo */
    .navbar {
      background-color: #9d040e;
    }

    .navbar-brand {
      color: white;
      font-weight: bold;
      font-size: 1.2rem;
    }

    .navbar-brand i {
      margin-right: 8px;
    }

    /* Rodapé */
    footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      height: 60px;
      background-color: #f8d7da;
      color: #6a0207;
      text-align: center;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>

  <!-- Cabeçalho -->
  <nav class="navbar fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <i class="bi bi-droplet-half"></i> Fluxo Vital
      </a>
    </div>
  </nav>

  <!-- Conteúdo -->
  <div class="login-card">
    <h2><i class="bi bi-person-circle"></i> Login</h2>

    <form method="post" action="/fluxovital/page/cadastro/usuario/processa_login.php" novalidate>
      <div class="mb-3 position-relative">
        <label for="email" class="form-label">E-mail</label>
        <div class="input-group">
          <span class="form-icon"><i class="bi bi-envelope-fill"></i></span>
          <input
            type="email"
            class="form-control"
            id="email"
            name="email"
            placeholder="seu@email.com"
            required
          />
        </div>
        <div class="invalid-feedback">
          Por favor, insira um e-mail válido.
        </div>
      </div>

      <div class="mb-3 position-relative">
        <label for="senha" class="form-label">Senha</label>
        <div class="input-group">
          <span class="form-icon"><i class="bi bi-lock-fill"></i></span>
          <input
            type="password"
            class="form-control"
            id="senha"
            name="senha"
            placeholder="••••••••"
            required
            minlength="6"
          />
        </div>
        <div class="invalid-feedback">
          A senha deve ter pelo menos 6 caracteres.
        </div>
      </div>

      <button type="submit" class="btn btn-login w-100 text-white">Entrar</button>
    </form>

    <a href="/fluxovital/page/cadastro/usuario/cadastro_usuario.php" class="link-cadastro">
      Ainda não tem uma conta? <strong>Cadastre-se</strong>
    </a>
  </div>

  <!-- Rodapé -->
  <footer>
    © 2025 Fluxo Vital – Unidos pela Vida.
  </footer>

  <!-- Bootstrap JS + Validação -->
  <script>
    (() => {
      'use strict';
      const form = document.querySelector('form');

      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      });
    })();
  </script>

</body>
</html>
