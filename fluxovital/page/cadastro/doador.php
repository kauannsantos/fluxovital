<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Doador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-lg">
                <div class="card-header bg-danger text-white text-center">
                    <h4>Cadastro de Doador</h4>
                </div>
                <div class="card-body">

                    <?php if (isset($_SESSION['erro'])): ?>
                        <div class="alert alert-danger">
                            <?= $_SESSION['erro']; unset($_SESSION['erro']); ?>
                        </div>
                    <?php endif; ?>

                    <form action="salvar_doador.php" method="POST" novalidate>

                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome completo</label>
                            <input type="text" class="form-control" name="nome" id="nome" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" class="form-control" name="senha" id="senha" required>
                        </div>

                        <div class="mb-3">
                            <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" name="data_nascimento" id="data_nascimento" required>
                        </div>

                        <div class="mb-3">
                            <label for="tipo_sanguineo" class="form-label">Tipo Sanguíneo</label>
                            <select class="form-select" name="tipo_sanguineo" id="tipo_sanguineo" required>
                                <option value="">Selecione</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="(XX) XXXXX-XXXX" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-danger">Cadastrar</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <a href="/fluxovital/home/index.php" class="btn btn-link">Voltar para a Home</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
