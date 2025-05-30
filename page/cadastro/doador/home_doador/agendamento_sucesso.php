<?php
session_start();

echo "Tentando incluir arquivo: " . __DIR__ . '/../../../../config/db.php';
exit;

include_once(__DIR__ . '/../../../../config/db.php');

// ... resto do código abaixo ...

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Agendamento Realizado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #ffe9ec;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .success-box {
            max-width: 500px;
            padding: 40px;
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            text-align: center;
        }
        .success-box h1 {
            color: #28a745;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .success-box p {
            font-size: 1.1rem;
            color: #555;
        }
        .btn-back {
            margin-top: 30px;
            background-color: #28a745;
            border: none;
            font-weight: bold;
            padding: 10px 25px;
            border-radius: 12px;
            transition: 0.3s ease;
        }
        .btn-back:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<div class="success-box">
    <h1>✅ Agendamento Confirmado!</h1>
    <p>Obrigado por realizar seu agendamento. Sua doação fará a diferença na vida de muitas pessoas.</p>
    <a href="/fluxovital/page/doador/home_usuario.php" class="btn btn-back">Voltar para a Área do Doador</a>
</div>

</body>
</html>
