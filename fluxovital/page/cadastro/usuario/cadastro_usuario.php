<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cadastro - Fluxo Vital</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
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
<body class="bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">
  <div class="card p-4" style="max-width: 400px; width: 100%;">
    <h3 class="text-center mb-3">Cadastro de Usuário</h3>
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
        <input type="password" name="senha" id="senha" class="form-control" required />
      </div>
      <div class="mb-3">
        <label for="confirma_senha" class="form-label">Confirmar Senha</label>
        <input type="password" name="confirma_senha" id="confirma_senha" class="form-control" required />
      </div>
      <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
      <div class="text-center mt-3">
        <a href="login_usuario.php">Já tem conta? Faça login</a>
      </div>
    </form>
  </div>
</body>
</html>
