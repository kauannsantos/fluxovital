<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Escolha de Categoria de Doação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #ffe6e6, #f8f9fa);
            font-family: 'Segoe UI', sans-serif;
        }

        .container {
            padding-top: 50px;
        }

        .card {
            border: none;
            border-radius: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 30px;
        }

        h2 {
            color: #c82333;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }

        .btn-doacao {
            background-color: #c82333;
            border: none;
            border-radius: 12px;
            color: white;
            padding: 15px 20px;
            font-weight: bold;
            font-size: 16px;
            width: 100%;
            margin-bottom: 15px;
            transition: 0.3s;
        }

        .btn-doacao:hover {
            background-color: #a71d2a;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center">
        <div class="card" style="max-width: 500px; width: 100%;">
            <h2>Escolha o Tipo de Doação</h2>
            <form method="POST" action="/fluxovital/page/cadastro/formulario_sangue.php">
                <button type="submit" name="tipo_doacao" value="sangue" class="btn btn-doacao">Doação de Sangue</button>
                <button type="submit" name="tipo_doacao" value="Leite Materno" class="btn btn-doacao">Doação de Leite Materno</button>
                <button type="submit" name="tipo_doacao" value="medula" class="btn btn-doacao">Cadastro para Doação de Medula</button>
            </form>
        </div>
    </div>
</body>
</html>
