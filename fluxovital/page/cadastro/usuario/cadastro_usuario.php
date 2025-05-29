<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cadastro - Fluxo Vital</title>

  <!-- Bootstrap CSS e ícones -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    body {
      background-color: #fdecef;
      padding-top: 70px;
      padding-bottom: 80px;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .card {
      background: white;
      padding: 2rem;
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
      max-width: 420px;
      margin: auto;
      margin-top: 4vh;
    }

    h3 {
      color: #9d040e;
      font-weight: bold;
    }

    .btn-primary {
      background-color: #9d040e;
      border: none;
      border-radius: 10px;
      font-weight: 600;
      padding: 0.75rem;
    }

    .btn-primary:hover {
      background-color: #6a0207;
    }

    .form-label {
      font-weight: 600;
    }

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

    .link-login {
      color: #6c757d;
      font-size: 0.95rem;
    }

    .link-login:hover {
      color: #9d040e;
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

  <!-- Cabeçalho -->
  <nav class="navbar fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <i class="bi bi-droplet-half"></i> Fluxo Vital
      </a>
    </div>
  </nav>

  <!-- Formulário de cadastro -->
  <div class="card">
    <h3 class="text-center mb-4"><i class="bi bi-person-plus-fill"></i> Cadastro de Usuário</h3>
    <form method="POST" action="processa_usuario.php" onsubmit="return validarFormulario()">
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" required />
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" name="email" class="form-control" required />
      </div>
      <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" name="senha" id="senha" class="form-control" required minlength="6" />
      </div>
      <div class="mb-3">
        <label for="confirma_senha" class="form-label">Confirmar Senha</label>
        <input type="password" name="confirma_senha" id="confirma_senha" class="form-control" required minlength="6" />
      </div>
      <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
      <div class="text-center mt-3">
        <a href="login_usuario.php" class="link-login">Já tem conta? Faça login</a>
      </div>
    </form>
  </div>

  <!-- Rodapé -->
  <footer>
    © 2025 Fluxo Vital – Unidos pela Vida.
  </footer>

</body>
</html>
