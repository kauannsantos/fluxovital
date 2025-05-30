<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cadastro - Fluxo Vital</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #ffe9ec;
    }

    .card-custom {
      background-color: #ffffff;
      border: 2px solid #9d040e;
      border-radius: 16px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .btn-custom {
      background-color: #9d040e;
      color: #fff;
      font-weight: 600;
    }

    .btn-custom:hover {
      background-color: #6a0207;
      color: #fff;
    }

    .form-label {
      color: #6a0207;
      font-weight: 500;
    }

    a {
      color: #9d040e;
    }

    a:hover {
      color: #6a0207;
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
<body class="d-flex align-items-center justify-content-center" style="height: 100vh;">
  <div class="card card-custom p-4" style="width: 100%; max-width: 420px;">
    <div class="text-center mb-4">
      <h3 class="fw-bold" style="color: #9d040e;">Cadastro de Usuário</h3>
      <p class="text-muted">Preencha seus dados para criar uma conta</p>
    </div>

    <form method="POST" action="processa_usuario.php" onsubmit="return validarFormulario()">
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" required />
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" name="email" id="email" class="form-control" required />
      </div>

      <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" name="senha" id="senha" class="form-control" required />
      </div>

      <div class="mb-3">
        <label for="confirma_senha" class="form-label">Confirmar Senha</label>
        <input type="password" name="confirma_senha" id="confirma_senha" class="form-control" required />
      </div>

      <button type="submit" class="btn btn-custom w-100">Cadastrar</button>

      <div class="text-center mt-3">
        <a href="login_usuario.php">Já tem conta? Faça login</a>
      </div>
    </form>
  </div>
</body>
</html>
