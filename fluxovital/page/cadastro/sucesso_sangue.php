<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário Enviado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #e0f7fa, #ffffff);
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            padding: 30px;
            max-width: 500px;
            text-align: center;
        }
        .card h1 {
            color: #28a745;
            font-size: 2rem;
            margin-bottom: 20px;
        }
        .btn-home {
            margin-top: 25px;
        }
    </style>
</head>
<body>
    <div class="card">
        <img src="https://cdn-icons-png.flaticon.com/512/190/190411.png" alt="Check" width="100">
        <h1>Formulário Enviado com Sucesso!</h1>
        <p>Obrigado por se disponibilizar para doar sangue. Sua atitude pode salvar vidas. 💖</p>
        <a href="../../index.php" class="btn btn-success btn-home">Voltar para a Home</a>
    </div>
</body>
</html>
