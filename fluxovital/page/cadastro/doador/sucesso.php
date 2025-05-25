<?php
session_start();

// Opcional: valida se o doador está logado
if (!isset($_SESSION['doador_id'])) {
    header("Location: ../../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Cadastro Concluído</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="card p-4 shadow" style="max-width: 500px; width: 100%;">
        <h3 class="text-success text-center mb-3">Formulário enviado com sucesso!</h3>
        <p class="text-center">Agradecemos sua contribuição. Sua doação faz a diferença! ❤️</p>
        <div class="d-grid gap-2 mt-4">
            <a href="/fluxovital/page/home/index.php" class="btn btn-primary">Voltar à Home</a>
        </div>
    </div>
</body>
</html>
