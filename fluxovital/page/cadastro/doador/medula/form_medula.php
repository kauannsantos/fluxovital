<?php
session_start();
if (!isset($_SESSION['doador_id'])) {
    header("Location: ../../login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário - Doação de Medula Óssea</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="min-height: 100vh;">
  <div class="card p-4" style="width: 100%; max-width: 600px;">
    <h3 class="text-center mb-4">Doação de Medula Óssea</h3>
    <form action="processa_medula.php" method="POST">
      <div class="mb-3">
        <label>Nome:</label>
        <input type="text" name="nome" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Idade:</label>
        <input type="number" name="idade" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Tipo Sanguíneo:</label>
        <input type="text" name="tipo_sang" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Doença crônica?</label>
        <select name="possui_doenca_cronica" class="form-select" required>
          <option value="Sim">Sim</option>
          <option value="Não">Não</option>
        </select>
      </div>
      <div class="mb-3">
        <label>Quais doenças?</label>
        <input type="text" name="descreva_doencas" class="form-control">
      </div>
      <div class="mb-3">
        <label>Usa medicamentos?</label>
        <select name="usa_medicamentos" class="form-select" required>
          <option value="Sim">Sim</option>
          <option value="Não">Não</option>
        </select>
      </div>
      <div class="mb-3">
        <label>Quais medicamentos?</label>
        <input type="text" name="descreva_medicamentos" class="form-control">
      </div>
      <div class="mb-3">
        <label>Fumante?</label>
        <select name="fumante" class="form-select" required>
          <option value="Sim">Sim</option>
          <option value="Não">Não</option>
        </select>
      </div>
      <div class="mb-3">
        <label>Já fez transplante?</label>
        <select name="ja_fez_transplante" class="form-select" required>
          <option value="Sim">Sim</option>
          <option value="Não">Não</option>
        </select>
      </div>
      <div class="mb-3">
        <label>Tem doença autoimune?</label>
        <select name="tem_doenca_autoimune" class="form-select" required>
          <option value="Sim">Sim</option>
          <option value="Não">Não</option>
        </select>
      </div>
      <div class="mb-3">
        <label>Estado Geral:</label>
        <select name="estado_geral" class="form-select" required>
          <option value="Bem">Bem</option>
          <option value="Doente">Doente</option>
        </select>
      </div>
      <div class="mb-3">
        <label>Observações:</label>
        <textarea name="observacoes" class="form-control" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-success w-100">Enviar</button>
    </form>
    <div class="mt-3 text-center">
      <a href="escolher_categoria_doacao.php">← Voltar para categorias</a>
    </div>
  </div>
</body>
</html>
