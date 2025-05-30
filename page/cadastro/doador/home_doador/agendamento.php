<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!isset($_SESSION['usuario_id']) || $_SESSION['tipo_usuario'] !== 'doador') {
    header('Location: /fluxovital/page/cadastro/doador/login/login_doador.php');
    exit();
}

$nome = $_SESSION['nome'] ?? 'Doador';
$tipo_doador = $_SESSION['tipo_doacao'] ?? 'não informado';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Agendar Doação - Fluxo Vital</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

    <style>
        :root {
            --vinho: #9d040e;
            --vinho-escuro: #6a0207;
            --rosa-claro: #ffe9ec;
            --rosa-medio: #f2b8c5;
            --cinza-claro: #f5f5f5;
        }

        body {
            background-color: var(--rosa-claro);
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background-color: var(--vinho);
        }

        .navbar-brand,
        .navbar-nav .nav-link,
        .btn-outline-light {
            color: #fff;
        }

        .navbar-brand:hover,
        .navbar-nav .nav-link:hover,
        .btn-outline-light:hover {
            color: var(--rosa-medio);
        }

        footer {
            background-color: var(--vinho);
            color: #fff;
            padding: 1rem;
            text-align: center;
            margin-top: auto;
        }

        .container {
            max-width: 720px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#">Fluxo Vital</a>
    </div>
</nav>

<main class="container py-5">
    <h2 class="mb-4 text-center">Agendamento de Doação</h2>

    <form method="POST" action="processa_agendamento.php">
        <div class="mb-3">
            <label for="nome_paciente" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" id="nome_paciente" name="nome_paciente" required>
        </div>

        <div class="mb-3">
            <label for="rg" class="form-label">RG</label>
            <input type="text" class="form-control" id="rg" name="rg" required>
        </div>

        <div class="mb-3">
            <label for="id_especialidade" class="form-label">Tipo de Doação</label>
            <select class="form-select" id="id_especialidade" name="id_especialidade" required>
                <option value="1">Sangue</option>
                <option value="2">Medula Óssea</option>
                <option value="3">Leite Materno</option>
            </select>
        </div>

        <input type="hidden" name="id_estado" value="1"> <!-- Maranhão -->

        <div class="mb-3">
            <label for="id_cidade" class="form-label">Cidade</label>
            <select class="form-select" id="id_cidade" name="id_cidade" required>
                <option value="1">São Luís</option>
                <option value="2">Imperatriz</option>
                <option value="3">Caxias</option>
                <option value="4">Bacabal</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="id_hospital" class="form-label">Hospital</label>
            <select class="form-select" id="id_hospital" name="id_hospital" required>
                <option value="1">Hemomar</option>
                <option value="2">Hospital Municipal de Imperatriz</option>
                <option value="3">Banco de Leite de Caxias</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="turno" class="form-label">Turno</label>
            <select class="form-select" id="turno" name="turno" required>
                <option value="Manhã">Manhã</option>
                <option value="Tarde">Tarde</option>
                <option value="Noite">Noite</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="forma_contato" class="form-label">Forma de Contato</label>
            <select class="form-select" id="forma_contato" name="forma_contato" required>
                <option value="Telefone">Telefone</option>
                <option value="Email">Email</option>
                <option value="WhatsApp">WhatsApp</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="data_agendamento" class="form-label">Data</label>
            <input type="date" class="form-control" id="data_agendamento" name="data_agendamento" required>
        </div>

        <div class="mb-3">
            <label for="hora_agendamento" class="form-label">Hora</label>
            <input type="time" class="form-control" id="hora_agendamento" name="hora_agendamento" required>
        </div>

        <button type="submit" class="btn btn-theme">Agendar</button>
    </form>
</main>

<footer>
    <div class="container">
        <p class="mb-0">© 2025 Fluxo Vital. Todos os direitos reservados.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
