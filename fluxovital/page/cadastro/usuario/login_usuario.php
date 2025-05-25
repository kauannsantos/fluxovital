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

  <style>
    body {
      background: #f8f9fa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding: 1rem;
    }

    .login-card {
      background: white;
      padding: 2rem;
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
    }

    .login-card h2 {
      margin-bottom: 1.5rem;
      color: #9d040e;
      text-align: center;
    }

    .btn-login {
      background-color: #9d040e;
      border: none;
    }

    .btn-login:hover {
      background-color: #6a0207;
    }

    .link-cadastro {
      display: block;
      margin-top: 1rem;
      text-align: center;
    }
  </style>
</head>
<body>

  <div class="login-card">
    <h2>Login - Fluxo Vital</h2>

    <form method="post" action="/fluxovital/page/cadastro/usuario/processa_login.php" novalidate>
      <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input
          type="email"
          class="form-control"
          id="email"
          name="email"
          placeholder="seu@email.com"
          required
        />
        <div class="invalid-feedback">
          Por favor, insira um e-mail válido.
        </div>
      </div>

      <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input
          type="password"
          class="form-control"
          id="senha"
          name="senha"
          placeholder="Senha"
          required
          minlength="6"
        />
        <div class="invalid-feedback">
          A senha deve ter pelo menos 6 caracteres.
        </div>
      </div>

      <button type="submit" class="btn btn-login w-100 text-white">Entrar</button>
    </form>

    <a href="/fluxovital/page/cadastro/usuario/cadastro_usuario.php" class="link-cadastro">
      Ainda não tem uma conta? Cadastre-se
    </a>
  </div>

  <!-- Bootstrap JS + validação simples -->
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
