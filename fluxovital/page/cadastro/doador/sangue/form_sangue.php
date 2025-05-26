<?php
session_start();

if (!isset($_SESSION['doador_id'])) {
    header("Location: cadastro_doador.php");
    exit();
}
?>
<?php
session_start();

if (!isset($_SESSION['doador_id'])) {
    header("Location: cadastro_doador.php");
    exit();
}

$msg = '';
if (isset($_SESSION['msg_sucesso'])) {
    $msg = $_SESSION['msg_sucesso'];
    unset($_SESSION['msg_sucesso']); // limpa a mensagem para não repetir
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Formulário - Doação de Sangue</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light d-flex flex-column align-items-center justify-content-center" style="min-height: 100vh;">
  <div class="card p-4" style="max-width: 600px; width: 100%;">
    <h3 class="text-center mb-3">Formulário - Doação de Sangue</h3>
    <form method="POST" action="processa_sangue.php">
      <div class="mb-3">
        <label for="nome" class="form-label">Nome Completo</label>
        <input type="text" name="nome" id="nome" class="form-control" required />
      </div>
      <div class="mb-3">
        <label for="idade" class="form-label">Idade</label>
        <input type="number" name="idade" id="idade" class="form-control" min="16" max="70" required />
      </div>
      <div class="mb-3">
        <label for="tipo_sang" class="form-label">Tipo Sanguíneo</label>
        <input type="text" name="tipo_sang" id="tipo_sang" class="form-control" maxlength="3" required />
      </div>
      
      <div class="mb-3">
        <label for="bebe_alcool" class="form-label">Ingeriu bebida alcoólica?</label>
        <select name="bebe_alcool" id="bebe_alcool" class="form-select" required>
          <option value="">Selecione</option>
          <option value="Sim">Sim</option>
          <option value="Não">Não</option>
        </select>
      </div>
      
      <div class="mb-3">
        <label for="resfriado" class="form-label">Está resfriado?</label>
        <select name="resfriado" id="resfriado" class="form-select" required>
          <option value="">Selecione</option>
          <option value="Sim">Sim</option>
          <option value="Não">Não</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="cirurgia_6m" class="form-label">Teve cirurgia nos últimos 6 meses?</label>
        <select name="cirurgia_6m" id="cirurgia_6m" class="form-select" required>
          <option value="">Selecione</option>
          <option value="Sim">Sim</option>
          <option value="Não">Não</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="transfusao" class="form-label">Teve transfusão de sangue?</label>
        <select name="transfusao" id="transfusao" class="form-select" required>
          <option value="">Selecione</option>
          <option value="Sim">Sim</option>
          <option value="Não">Não</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="doenca_infecciosa" class="form-label">Possui doença infecciosa?</label>
        <select name="doenca_infecciosa" id="doenca_infecciosa" class="form-select" required>
          <option value="">Selecione</option>
          <option value="Sim">Sim</option>
          <option value="Não">Não</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="hepatite_11_anos" class="form-label">Teve hepatite após 11 anos?</label>
        <select name="hepatite_11_anos" id="hepatite_11_anos" class="form-select" required>
          <option value="">Selecione</option>
          <option value="Sim">Sim</option>
          <option value="Não">Não</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="hiv_hepatite" class="form-label">Teve HIV ou hepatite?</label>
        <select name="hiv_hepatite" id="hiv_hepatite" class="form-select" required>
          <option value="">Selecione</option>
          <option value="Sim">Sim</option>
          <option value="Não">Não</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="fuma_droga" class="form-label">Fuma ou usa drogas?</label>
        <select name="fuma_droga" id="fuma_droga" class="form-select" required>
          <option value="">Selecione</option>
          <option value="Sim">Sim</option>
          <option value="Não">Não</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="peso_50kg" class="form-label">Peso maior que 50kg?</label>
        <select name="peso_50kg" id="peso_50kg" class="form-select" required>
          <option value="">Selecione</option>
          <option value="Sim">Sim</option>
          <option value="Não">Não</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="estado_geral" class="form-label">Estado Geral</label>
        <select name="estado_geral" id="estado_geral" class="form-select" required>
          <option value="Bem">Estou bem</option>
          <option value="Doente">Estou doente</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="obs" class="form-label">Observações</label>
        <textarea name="obs" id="obs" class="form-control" rows="3" placeholder="Opcional"></textarea>
      </div>

      <button type="submit" class="btn btn-danger w-100">Enviar Formulário</button>
    </form>
    <div class="mt-3 text-center">
      <a href="escolher_categoria_doacao.php">Voltar para categorias</a>
    </div>
  </div>
</body>
<?php if ($msg): ?>
  <div class="alert alert-success" role="alert">
    <?= htmlspecialchars($msg) ?>
  </div>
<?php endif; ?>

</html>
