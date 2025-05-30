<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Atualização Concluída</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #ffe9ec;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .card {
      border: none;
      border-radius: 1rem;
      box-shadow: 0 6px 20px rgba(0,0,0,0.12);
      padding: 2rem;
      text-align: center;
    }
    .btn-custom {
      background-color: #9d040e;
      border: none;
    }
    .btn-custom:hover {
      background-color: #7a030b;
    }
  </style>
</head>
<body>

<div class="card">
  <h2 class="mb-3">✔ Dados atualizados com sucesso!</h2>
  <p>Suas informações foram salvas.</p>
  <a href="/fluxovital/page/home/index.php" class="btn btn-custom text-white mt-3">Voltar à Página Inicial</a>
</div>

</body>
</html>
