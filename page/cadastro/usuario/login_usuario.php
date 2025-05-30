<?php
// Inicia a sessão PHP (necessário para login, mensagens, etc.)
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
  <!-- Ícones do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #ffe9ec, #fff);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding: 1rem;
    }

    .login-card {
      background: white;
      padding: 2.5rem 2rem;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(157, 4, 14, 0.15);
      width: 100%;
      max-width: 420px;
      animation: fadeInUp 0.6s ease;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(40px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .login-card h2 {
      margin-bottom: 1.5rem;
      color: #9d040e;
      font-weight: bold;
      text-align: center;
    }

    .form-label {
      color: #9d040e;
      font-weight: 500;
    }

    .form-control:focus {
      border-color: #9d040e;
      box-shadow: 0 0 0 0.2rem rgba(157, 4, 14, 0.2);
    }

    .btn-login {
      background-color: #9d040e;
      border: none;
      transition: background-color 0.3s ease;
    }

    .btn-login:hover {
      background-color: #6a0207;
    }

    .link-cadastro,
    .link-senha {
      color: #9d040e;
      transition: color 0.2s ease;
    }

    .link-cadastro:hover,
    .link-senha:hover {
      color: #6a0207;
      text-decoration: underline;
    }

    .form-icon {
      position: absolute;
      top: 50%;
      left: 10px;
      transform: translateY(-50%);
      color: #9d040e;
    }

    .input-group .form-control {
      padding-left: 2.5rem;
    }
  </style>
</head>
<body>

  <div class="login-card">
    <h2><i class="bi bi-heart-pulse-fill"></i> Fluxo Vital</h2>

    <!-- Formulário de login -->
    <form method="post" action="/fluxovital/page/cadastro/usuario/processa_login.php" novalidate>
      
      <!-- Campo de e-mail -->
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

      <!-- Campo de senha -->
      <div class="mb-3 position-relative">
        <label for="senha" class="form-label">Senha</label>
        <div class="input-group">
          <span class="form-icon"><i class="bi bi-lock-fill"></i></span>
          <input
            type="password"
            class="form-control"
            id="senha"
            name="senha"
            placeholder="Senha"
            required
            minlength="6"
          />
        </div>
        <div class="invalid-feedback">
          A senha deve ter pelo menos 6 caracteres.
        </div>
        <a href="/fluxovital/page/cadastro/usuario/esqueci_senha.php" class="link-senha d-block mt-2 text-end">
          Esqueci minha senha
        </a>
      </div>

      <!-- Botão de login -->
      <button type="submit" class="btn btn-login w-100 text-white mt-3">
        Entrar
      </button>
    </form>

    <!-- Link para cadastro -->
    <a href="/fluxovital/page/cadastro/usuario/cadastro_usuario.php" class="link-cadastro">
      Ainda não tem uma conta? Cadastre-se
    </a>
  </div>

  <!-- Script de validação -->
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
