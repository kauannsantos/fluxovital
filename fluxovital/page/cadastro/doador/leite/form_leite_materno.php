<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questionário - Doação de Leite Materno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="card shadow-lg rounded-4 p-4">
            <h2 class="mb-4 text-center text-primary">🍼 Doação de Leite Materno</h2>
            <form action="processa_materno.php" method="POST">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Nome completo</label>
                        <input type="text" name="nome" class="form-control" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Idade</label>
                        <input type="number" name="idade" class="form-control" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Tipo Sanguíneo</label>
                        <input type="text" name="tipo_sang" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Está amamentando?</label>
                        <select name="amamentando" class="form-select" required>
                            <option value="">Selecione</option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Tempo de amamentação (meses)</label>
                        <input type="number" name="tempo_amamentacao_meses" class="form-control">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Usa medicamentos?</label>
                    <select name="usa_medicamentos" class="form-select" required>
                        <option value="">Selecione</option>
                        <option value="Sim">Sim</option>
                        <option value="Não">Não</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Descreva os medicamentos (se houver)</label>
                    <textarea name="descreva_medicamentos" class="form-control" rows="2"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Possui doenças crônicas?</label>
                    <select name="possui_doencas_cronicas" class="form-select" required>
                        <option value="">Selecione</option>
                        <option value="Sim">Sim</option>
                        <option value="Não">Não</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Descreva as doenças (se houver)</label>
                    <textarea name="descreva_doencas" class="form-control" rows="2"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Fuma ou já fumou?</label>
                    <select name="fuma_droga" class="form-select" required>
                        <option value="">Selecione</option>
                        <option value="Sim">Sim</option>
                        <option value="Não">Não</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Estado geral de saúde</label>
                    <select name="estado_geral" class="form-select" required>
                        <option value="">Selecione</option>
                        <option value="Bem">Bem</option>
                        <option value="Doente">Doente</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="form-label">Observações adicionais</label>
                    <textarea name="observacoes" class="form-control" rows="3"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-4">Enviar Formulário</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
