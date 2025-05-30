<!-- gerenciar_funcionarios.php -->
<?php
// Assumindo que $instituicao['id'] e $funcionarios[] já foram carregados
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Funcionários - Fluxo Vital</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
</head>
<body class="bg-light text-dark">

  <header class="bg-danger text-white text-center py-4 shadow-sm mb-4">
    <h1 class="m-0">FLUXO VITAL</h1>
    <p class="lead mb-0">Gerenciar Funcionários</p>
  </header>

  <main class="container">
    <!-- Adicionar Funcionário -->
    <div class="bg-white rounded p-4 shadow-sm mb-4">
      <h4 class="mb-4 text-danger">Adicionar Novo Funcionário</h4>
      <form action="adicionar_funcionario.php" method="POST">
        <input type="hidden" name="instituicao_id" value="<?php echo $instituicao['id']; ?>">

        <div class="mb-3">
          <label for="nomeFunc" class="form-label">Nome</label>
          <input type="text" name="nome" id="nomeFunc" class="form-control" required>
        </div>

        <div class="mb-3">
          <label for="cpfFunc" class="form-label">CPF</label>
          <input type="text" name="cpf" id="cpfFunc" class="form-control" required>
        </div>

        <div class="mb-3">
          <label for="cargoFunc" class="form-label">Cargo</label>
          <input type="text" name="cargo" id="cargoFunc" class="form-control">
        </div>

        <button type="submit" class="btn btn-success w-100">
          <i class="fas fa-user-plus me-2"></i>Adicionar Funcionário
        </button>
      </form>
    </div>

    <!-- Lista de Funcionários -->
    <div class="bg-white rounded p-4 shadow-sm">
      <h4 class="mb-4 text-danger">Funcionários Cadastrados</h4>
      <table class="table table-hover table-bordered">
        <thead class="table-light">
          <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Cargo</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php if (!empty($funcionarios)): ?>
            <?php foreach ($funcionarios as $func): ?>
              <tr>
                <td><?php echo htmlspecialchars($func['nome']); ?></td>
                <td><?php echo htmlspecialchars($func['cpf']); ?></td>
                <td><?php echo htmlspecialchars($func['cargo']); ?></td>
                <td>
                  <a href="editar_funcionario.php?id=<?php echo $func['id']; ?>" class="btn btn-warning btn-sm me-2" title="Editar">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a href="excluir_funcionario.php?id=<?php echo $func['id']; ?>&id_instituicao=<?php echo $instituicao['id']; ?>" class="btn btn-danger btn-sm" title="Excluir" onclick="return confirm('Tem certeza que deseja excluir este funcionário?');">
                    <i class="fas fa-trash-alt"></i>
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php else: ?>
            <tr>
              <td colspan="4" class="text-center text-muted">Nenhum funcionário cadastrado.</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </main>

  <footer class="bg-dark text-white text-center py-3 mt-5">
    &copy; <?php echo date("Y"); ?> FLUXO VITAL - Todos os direitos reservados.
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
