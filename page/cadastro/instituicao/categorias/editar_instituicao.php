<?php
session_start();
include_once(__DIR__ . '/../../../../config/db.php');

if (!isset($_SESSION['instituicao_id'])) {
    header("Location: ../../login.php");
    exit;
}

$id = $_SESSION['instituicao_id'];

// Buscar dados da instituição no banco
$sql = "SELECT id, nome, cnpj, email, telefone, endereco, cep FROM instituicoes WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$instituicao = $result->fetch_assoc();

if (!$instituicao) {
    header("Location: ../painel_instituicao.php?error=nao_encontrado");
    exit;
}

// Tratamento de mensagens
$msg = $_GET['msg'] ?? '';
$error = $_GET['error'] ?? '';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Editar Instituição - Fluxo Vital</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body { background-color: #ffe9ec; }
    .container {
      margin-top: 40px;
      max-width: 600px;
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 0 12px rgba(0,0,0,0.1);
    }
    .btn-custom {
      background-color: #9d040e;
      color: #fff;
      border-radius: 0.75rem;
      padding: 0.6rem 1.2rem;
    }
    .btn-custom:hover {
      background-color: #9d040e;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2 class="mb-4">Editar Dados da Instituição</h2>

    <?php if ($msg === 'sucesso'): ?>
      <div class="alert alert-success">Dados atualizados com sucesso!</div>
    <?php elseif ($error): ?>
      <div class="alert alert-danger">
        <?php
          if ($error === 'campos_obrigatorios') echo "Por favor, preencha todos os campos obrigatórios.";
          elseif ($error === 'erro_cnpj') echo "CNPJ inválido.";
          elseif ($error === 'erro_email') echo "E-mail inválido.";
          elseif ($error === 'erro_bd') echo "Erro ao atualizar os dados.";
          elseif ($error === 'erro_excecao') echo "Erro inesperado, tente novamente.";
          elseif ($error === 'nao_autorizado') echo "Acesso negado.";
          else echo "Erro desconhecido.";
        ?>
      </div>
    <?php endif; ?>

    <form action="atualizar_instituicao.php" method="post">
      <input type="hidden" name="id" value="<?= htmlspecialchars($instituicao['id']) ?>" />
      <div class="mb-3">
        <label for="nome" class="form-label">Nome da Instituição *</label>
        <input type="text" class="form-control" id="nome" name="nome" required value="<?= htmlspecialchars($instituicao['nome']) ?>" />
      </div>
      <div class="mb-3">
        <label for="cnpj" class="form-label">CNPJ *</label>
        <input type="text" class="form-control" id="cnpj" name="cnpj" required value="<?= htmlspecialchars($instituicao['cnpj']) ?>" />
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">E-mail *</label>
        <input type="email" class="form-control" id="email" name="email" required value="<?= htmlspecialchars($instituicao['email']) ?>" />
      </div>
      <div class="mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="text" class="form-control" id="telefone" name="telefone" value="<?= htmlspecialchars($instituicao['telefone']) ?>" />
      </div>
      <div class="mb-3">
        <label for="endereco" class="form-label">Endereço</label>
        <input type="text" class="form-control" id="endereco" name="endereco" value="<?= htmlspecialchars($instituicao['endereco']) ?>" />
      </div>
      <div class="mb-3">
        <label for="cep" class="form-label">CEP</label>
        <input type="text" class="form-control" id="cep" name="cep" value="<?= htmlspecialchars($instituicao['cep']) ?>" />
      </div>
      <div class="mb-3">
        <label for="senha" class="form-label">Nova senha (deixe em branco para não alterar)</label>
        <input type="password" class="form-control" id="senha" name="senha" />
      </div>

      <button type="submit" class="btn btn-custom">Salvar Alterações</button>
      <a href="/fluxovital/page/cadastro/instituicao/categorias/atualizar_instituicao.php" class="btn btn-secondary ms-2">Cancelar</a>
    </form>
  </div>
</body>
</html>
