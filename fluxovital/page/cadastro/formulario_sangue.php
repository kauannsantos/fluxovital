<?php
session_start();
include_once(__DIR__ . '/../../config/db.php');

// Obter tipos sanguíneos da tabela correta
$result = $conn->query("SELECT * FROM TipoSanguineo");
$tipos = $result->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Doação de Sangue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #ffe6e6, #f8f9fa);
            font-family: 'Segoe UI', sans-serif;
        }
        .container {
            max-width: 700px;
            margin-top: 40px;
            padding: 30px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        h2 {
            color: #c82333;
            text-align: center;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Formulário - Doação de Sangue</h2>
        <form method="POST" action="salvar_form_sangue.php">
            <div class="mb-3">
                <label>Nome completo:</label>
                <input type="text" class="form-control" name="nome" required>
            </div>
            <div class="mb-3">
                <label>Idade:</label>
                <input type="number" class="form-control" name="idade" required>
            </div>
            <div class="mb-3">
                <label>Tipo sanguíneo:</label>
                <select name="tipo_sangue" class="form-control" required>
                    <option value="">Selecione</option>
                    <?php foreach ($tipos as $tipo): ?>
                        <option value="<?= $tipo['id_tipo'] ?>"><?= $tipo['tipo'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <?php
            $perguntas = [
                'bebida_alcolica' => 'Você consumiu bebida alcoólica nas últimas 12 horas?',
                'fez_parto' => 'Você fez parto recentemente?',
                'gestante_amamentando' => 'Você está gestante ou amamentando?',
                'usou_drogas' => 'Você já usou drogas ilícitas?',
                'medicamento' => 'Está tomando algum medicamento atualmente?',
                'possui_doenca' => 'Possui alguma doença contagiosa?',
                'tempo_apos_11' => 'Passou menos de 11 meses de uma cirurgia?',
                'peso_mais_50kg' => 'Pesa mais de 50kg?',
                'contato_doenca' => 'Teve contato com doenças infecciosas recentemente?',
                'problema_saude' => 'Tem algum problema de saúde atualmente?'
            ];
            foreach ($perguntas as $campo => $texto): ?>
                <div class="mb-3">
                    <label><?= $texto ?></label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="<?= $campo ?>" value="Sim" required>
                        <label class="form-check-label">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="<?= $campo ?>" value="Não" required>
                        <label class="form-check-label">Não</label>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="mb-3">
                <label>Observações adicionais:</label>
                <textarea name="observacoes" class="form-control" maxlength="250" placeholder="Se desejar, adicione alguma observação..."></textarea>
            </div>
            <button type="submit" class="btn btn-danger w-100">Enviar Formulário</button>
        </form>
    </div>
</body>
</html>
