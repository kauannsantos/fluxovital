<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Vidas Já Salvas - Fluxo Vital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #ffe6e6, #f8f9fa);
            font-family: 'Segoe UI', sans-serif;
        }

        .header {
            background-color: #c82333;
            color: white;
            padding: 20px 0;
            text-align: center;
            border-bottom: 5px solid #a71d2a;
        }

        .header h1 {
            font-weight: bold;
        }

        .container {
            padding: 50px 20px;
        }

        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
            background-color: #fff;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .photo-placeholder {
            width: 100%;
            height: 200px;
            background-color: #e0e0e0;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            color: #777;
        }

        .card-title {
            color: #c82333;
            font-weight: bold;
        }

        .card-text {
            color: #444;
        }

        .footer {
            text-align: center;
            padding: 30px 0 10px;
            color: #888;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>Vidas Já Salvas</h1>
        <p class="mb-0">Veja histórias inspiradoras de pessoas impactadas pelas doações</p>
    </div>

    <div class="container">
        <div class="row g-4">
            <!-- Pessoa 1 -->
            <div class="col-md-4">
                <div class="card p-3">
                     <img src="" alt="Foto de João" class="img-fluid rounded mb-3" style="height: 300px; object-fit: cover; width: 250%;">
                    <h5 class="card-title">Gustavo, -50 anos</h5>
                    <p class="card-text">
                        João foi diagnosticado com leucemia ainda pequeno. Graças a uma doação compatível de medula óssea, ele teve uma nova chance de viver. Hoje, Gustavo está saudável e sonha em ser médico.
                    </p>
                </div>
            </div>

            <!-- Pessoa 2 -->
            <div class="col-md-4">
                <div class="card p-3">
                     <img src="" alt="Foto de Dona Maria" class="img-fluid rounded mb-3" style="height: 300px; object-fit: cover; width: 250%;">
                    <h5 class="card-title">Lucas, 69 anos</h5>
                    <p class="card-text">
                       Após um acidente, marcos ficou muito debilitado e precisou urgentemente receber sangue, graças ao sistema fluxo vital ele esta melhor e já esta normal.
                    </p>
                </div>
            </div>

            <!-- Pessoa 3 -->
            <div class="col-md-4">
                <div class="card p-3">
                    <img src="/fluxovital/assets/images/Lud.jpeg" alt="Foto de Dona Maria" class="img-fluid rounded mb-3" style="height: 300px; object-fit: cover; width: 250%;">
                    <h5 class="card-title">Bebê, 9 meses</h5>
                    <p class="card-text">
                        Descrição.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        © 2025 Fluxo Vital — Salvando vidas com solidariedade
    </div>

</body>
</html>
