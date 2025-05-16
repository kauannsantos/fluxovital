<?php include '../../include/header.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Título da Página</title>

  <!-- Bootstrap (opcional) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- CSS personalizado (se existir) -->
  <link rel="stylesheet" href="/fluxovital/assets/css/estilo.css">

  <!-- Ícones Bootstrap (opcional) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
</head>
<body>

  <?php include '../../include/header.php'; ?> <!-- Cabeçalho padrão -->

  <main class="container mt-4">
    <!-- Conteúdo específico da página -->
    <h1>Bem-vindo à Página</h1>
    <p>Este é um template base para reutilizar em qualquer página do Fluxo Vital.</p>

    <!-- Exemplo de link para outra página -->
    <a href="/fluxovital/page/cadastro/doador.php" class="btn btn-primary">Ir para Cadastro de Doador</a>
  </main>

  <footer class="text-center mt-4 p-3 bg-dark text-white">
    &copy; 2025 Fluxo Vital — Todos os direitos reservados.
  </footer>

  <!-- JS Bootstrap (opcional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
