<?php
session_start();
if (!isset($_SESSION['doador_id'])) {
    header("Location: ../../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Formulário - Doação de Leite Materno</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap e Ícones -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    :root {
      --vinho: #9d040e;
      --vinho-dark: #6a0207;
    }

    body {
      background: linear-gradient(135deg, #fff3f3, #fdfdfd);
      font-family: "Segoe UI", sans-serif;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    header, footer {
      background-color: var(--vinho);
      color: white;
      text-align: center;
      padding: 1rem;
    }

    footer {
      background-color: var(--vinho-dark);
      margin-top: auto;
    }

    .form-container {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 2rem 1rem;
    }

    .card-custom {
      width: 100%;
      max-width: 700px;
      background: #ffffffee;
      border-radius: 1.5rem;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      padding: 2rem;
    }

    .form-label {
      font-weight: 500;
    }

    .btn-primary {
      background-color: var(--vinho);
      border-color: var(--vinho);
    }

    .btn-primary:hover {
      background-color: var(--vinho-dark);
      border-color: var(--vinho-dark);
    }

    a {
      color: var(--vinho-dark);
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<header>
  <h2><i class="bi bi-droplet-fill me-2"></i>Fluxo Vital</h2>
</header>

<main class="form-container">
  <div class="card-custom">
    <h3 class="text-center mb-4">Formulário - Doação de Leite Materno</h3>
    <form method="POST" action="processa_leite_materno.php">
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Nome Completo</label>
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

        <div class="col-md-6">
          <label class="form-label">Está amamentando?</label>
          <select name="amamentando" class="form-select" required>
            <option value="" disabled selected>Selecione</option>
            <option value="Sim">Sim</option>
            <option value="Não">Não</option>
          </select>
        </div>

        <div class="col-md-6">
          <label class="form-label">Tempo de amamentação (meses)</label>
          <input type="number" name="tempo_amamentacao_meses" class="form-control">
        </div>

        <div class="col-md-6">
          <label class="form-label">Usa medicamentos?</label>
          <select name="usa_medicamentos" class="form-select" required>
            <option value="" disabled selected>Selecione</option>
            <option value="Sim">Sim</option>
            <option value="Não">Não</option>
          </select>
        </div>

        <div class="col-md-6">
          <label class="form-label">Quais medicamentos?</label>
          <input type="text" name="descreva_medicamentos" class="form-control">
        </div>

        <div class="col-md-6">
          <label class="form-label">Possui doenças crônicas?</label>
          <select name="possui_doencas_cronicas" class="form-select" required>
            <option value="" disabled selected>Selecione</option>
            <option value="Sim">Sim</option>
            <option value="Não">Não</option>
          </select>
        </div>

        <div class="col-md-6">
          <label class="form-label">Quais doenças?</label>
          <input type="text" name="descreva_doencas" class="form-control">
        </div>

        <div class="col-md-6">
          <label class="form-label">Fuma ou usa drogas?</label>
          <select name="fuma_droga" class="form-select" required>
            <option value="" disabled selected>Selecione</option>
            <option value="Sim">Sim</option>
            <option value="Não">Não</option>
          </select>
        </div>

        <div class="col-md-6">
          <label class="form-label">Estado Geral</label>
          <select name="estado_geral" class="form-select" required>
            <option value="" disabled selected>Selecione</option>
            <option value="Bem">Bem</option>
            <option value="Doente">Doente</option>
          </select>
        </div>

        <div class="col-12">
          <label class="form-label">Observações</label>
          <textarea name="observacoes" class="form-control" rows="3" placeholder="Se desejar, adicione alguma informação relevante..."></textarea>
        </div>
      </div>

      <div class="d-grid mt-4">
        <button type="submit" class="btn btn-primary btn-lg">
          <i class="bi bi-send-check me-1"></i> Enviar
        </button>
      </div>

      <div class="mt-3 text-center">
        <a href="escolher_categoria_doacao.php"><i class="bi bi-arrow-left"></i> Voltar para categorias</a>
      </div>
    </form>
  </div>
</main>

<footer>
  <p>&copy; <?= date("Y") ?> Fluxo Vital • Todos os direitos reservados.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
