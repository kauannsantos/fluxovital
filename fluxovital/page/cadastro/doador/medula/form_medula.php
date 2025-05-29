<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

if (!isset($_SESSION['doador_id'])) {
    header("Location: cadastro_doador.php");
    exit();
}

$msg = '';
if (isset($_SESSION['msg_sucesso'])) {
    $msg = $_SESSION['msg_sucesso'];
    unset($_SESSION['msg_sucesso']);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Formulário - Doação de Medula Óssea | Fluxo Vital</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background: linear-gradient(135deg, #ffe6e6 0%, #f5f8fa 100%);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    header, footer {
      background-color: #7B1B1B;
      color: white;
      padding: 1rem;
      text-align: center;
      font-weight: bold;
      user-select: none;
    }
    main.form-container {
      background: white;
      padding: 2.5rem;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      max-width: 900px;
      margin: 2rem auto 4rem auto;
      flex-grow: 1;
    }
    label {
      font-weight: 600;
      margin-top: 0.8rem;
    }
    button.btn-vinho {
      background-color: #7B1B1B;
      border: none;
      color: white;
      font-weight: 600;
      transition: background-color 0.3s ease;
    }
    button.btn-vinho:hover, button.btn-vinho:focus {
      background-color: #5A1313;
      color: white;
    }
    .alert-success {
      font-weight: 600;
    }
    a {
      color: #7B1B1B;
      text-decoration: none;
      font-weight: 600;
    }
    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <header>Fluxo Vital – Doação de Medula Óssea</header>

  <main class="form-container">
    <h2 class="text-center mb-4">Formulário - Doação de Medula Óssea</h2>

    <?php if ($msg): ?>
      <div class="alert alert-success text-center" role="alert">
        <?= htmlspecialchars($msg) ?>
      </div>
    <?php endif; ?>

    <form method="POST" action="/fluxovital/page/cadastro/doador/medula/processa_medula.php" novalidate>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="nome">Nome Completo *</label>
          <input type="text" name="nome" id="nome" class="form-control" required />
        </div>

        <div class="col-md-6 mb-3">
          <label for="idade">Idade *</label>
          <input type="number" name="idade" id="idade" class="form-control" min="18" max="65" required />
        </div>

        <div class="col-md-6 mb-3">
          <label for="tipo_sang">Tipo Sanguíneo *</label>
          <input type="text" name="tipo_sang" id="tipo_sang" class="form-control" maxlength="3" required />
        </div>

        <div class="col-md-6 mb-3">
          <label for="possui_doenca_cronica">Possui doença crônica? *</label>
          <select name="possui_doenca_cronica" id="possui_doenca_cronica" class="form-select" required>
            <option value="">Selecione</option>
            <option value="Sim">Sim</option>
            <option value="Não">Não</option>
          </select>
        </div>

        <div class="col-md-6 mb-3">
          <label for="descreva_doencas">Quais doenças?</label>
          <input type="text" name="descreva_doencas" id="descreva_doencas" class="form-control" placeholder="Opcional" />
        </div>

        <div class="col-md-6 mb-3">
          <label for="usa_medicamentos">Usa medicamentos? *</label>
          <select name="usa_medicamentos" id="usa_medicamentos" class="form-select" required>
            <option value="">Selecione</option>
            <option value="Sim">Sim</option>
            <option value="Não">Não</option>
          </select>
        </div>

        <div class="col-md-6 mb-3">
          <label for="descreva_medicamentos">Quais medicamentos?</label>
          <input type="text" name="descreva_medicamentos" id="descreva_medicamentos" class="form-control" placeholder="Opcional" />
        </div>

        <div class="col-md-6 mb-3">
          <label for="fumante">Fumante? *</label>
          <select name="fumante" id="fumante" class="form-select" required>
            <option value="">Selecione</option>
            <option value="Sim">Sim</option>
            <option value="Não">Não</option>
          </select>
        </div>

        <div class="col-md-6 mb-3">
          <label for="ja_fez_transplante">Já fez transplante? *</label>
          <select name="ja_fez_transplante" id="ja_fez_transplante" class="form-select" required>
            <option value="">Selecione</option>
            <option value="Sim">Sim</option>
            <option value="Não">Não</option>
          </select>
        </div>

        <div class="col-md-6 mb-3">
          <label for="tem_doenca_autoimune">Tem doença autoimune? *</label>
          <select name="tem_doenca_autoimune" id="tem_doenca_autoimune" class="form-select" required>
            <option value="">Selecione</option>
            <option value="Sim">Sim</option>
            <option value="Não">Não</option>
          </select>
        </div>

        <div class="col-md-6 mb-3">
          <label for="estado_geral">Estado Geral *</label>
          <select name="estado_geral" id="estado_geral" class="form-select" required>
            <option value="">Selecione</option>
            <option value="Bem">Estou bem</option>
            <option value="Doente">Estou doente</option>
          </select>
        </div>

        <div class="col-12 mb-3">
          <label for="observacoes">Observações</label>
          <textarea name="observacoes" id="observacoes" class="form-control" rows="3" placeholder="Opcional"></textarea>
        </div>
      </div>

      <button type="submit" class="btn btn-vinho w-100">Enviar Formulário</button>
    </form>

    <div class="mt-4 text-center">
      <a href="/fluxovital/page/cadastro/escolha_categoria.php">&larr; Voltar para categorias</a>
    </div>
  </main>

  <footer>&copy; 2025 Fluxo Vital - Todos os direitos reservados.</footer>
</body>
</html>
