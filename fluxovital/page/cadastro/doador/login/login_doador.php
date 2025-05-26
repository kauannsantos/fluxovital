<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - Fluxo Vital</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">
  <div class="card p-4" style="max-width: 400px; width: 100%;">
    <h3 class="text-center mb-3">Login do Doador</h3>

    <?php if (isset($_SESSION['erro_login'])): ?>
      <div class="alert alert-danger text-center">
        <?php 
          echo $_SESSION['erro_login']; 
          unset($_SESSION['erro_login']);
        ?>
      </div>
    <?php endif; ?>

    <?php if (isset($_SESSION['sucesso_cadastro'])): ?>
      <div class="alert alert-success text-center">
        <?php 
          echo $_SESSION['sucesso_cadastro']; 
          unset($_SESSION['sucesso_cadastro']);
        ?>
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
      <button type="submit" class="btn btn-primary w-100">Entrar</button>
      <div class="text-center mt-3">
        <a href="/fluxovital/page/cadastro/doador/cadastro/cadastro_doador.php">Ainda não tem conta? Cadastre-se</a>
      </div>
    </form>
  </div>
</body>
</html>
