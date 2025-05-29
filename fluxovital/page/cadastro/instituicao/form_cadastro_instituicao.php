<?php
session_start();

$categoria = $_GET['categoria'] ?? null;
if (!$categoria) {
    header("Location: escolha_categoria.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cadastro da Instituição - Fluxo Vital</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    :root {
      --vinho-dark: #7B1B1B;
      --rosa-claro: #FBE5E5;
      --branco: #fff;
      --cinza-claro: #f8f9fa;
      --cinza-escuro: #6c757d;
    }

    body {
      background-color: var(--rosa-claro);
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    header {
      background-color: var(--vinho-dark);
      color: var(--branco);
      text-align: center;
      padding: 1rem 0;
      font-weight: 700;
      font-size: 1.5rem;
      box-shadow: 0 2px 8px rgb(157 4 14 / 0.3);
      user-select: none;
    }

    .form-container {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 2.5rem 1rem;
    }

    .form-card {
      background-color: var(--branco);
      padding: 2.5rem 2rem;
      border-radius: 1.5rem;
      box-shadow: 0 6px 20px rgba(0,0,0,0.12);
      transition: transform 0.3s ease;
    }
    .form-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 30px rgba(0,0,0,0.18);
    }

    .form-card h3 {
      color: var(--vinho-dark);
      font-weight: 700;
      margin-bottom: 1.8rem;
    }

    .btn-primary {
      background-color: var(--vinho-dark);
      border: none;
      font-weight: 600;
      padding: 0.55rem 0;
      border-radius: 0.75rem;
      transition: background-color 0.3s ease, transform 0.15s ease;
    }

    .btn-primary:hover,
    .btn-primary:focus {
      background-color: var(--vinho-dark);
      transform: scale(1.05);
      box-shadow: 0 0 8px rgba(106,2,7,0.5);
    }

    footer {
      background-color: var(--vinho-dark);
      color: var(--branco);
      text-align: center;
      padding: 0.9rem 1rem;
      font-size: 0.9rem;
      user-select: none;
      box-shadow: 0 -2px 8px rgb(106 2 7 / 0.3);
    }
  </style>

  <script>
    function validarFormulario() {
      const senha = document.getElementById("senha").value;
      const confirma = document.getElementById("confirma_senha").value;
      if (senha !== confirma) {
        alert("As senhas não coincidem.");
        return false;
      }
      return true;
    }
  </script>
</head>
<body>

  <header>
    <i class="bi bi-building me-2"></i>Fluxo Vital
  </header>

  <main class="form-container">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
          <div class="form-card" role="main" aria-labelledby="tituloForm">
            <h3 id="tituloForm" class="text-center">
              Cadastro da Instituição - Categoria: <?= htmlspecialchars(ucfirst($categoria)) ?>
            </h3>

            <?php if (isset($_SESSION['erro'])): ?>
              <div class="alert alert-danger" role="alert" tabindex="0">
                <?= htmlspecialchars($_SESSION['erro']); unset($_SESSION['erro']); ?>
              </div>
            <?php endif; ?>

            <form method="POST" action="processa_cadastro_instituicao.php" onsubmit="return validarFormulario()" novalidate>
              <input type="hidden" name="categoria" value="<?= htmlspecialchars($categoria) ?>" />

              <!-- Campos de entrada -->
              <?php
                $campos = [
                  ['id' => 'nome', 'icon' => 'bi-building', 'placeholder' => 'Nome da Instituição', 'type' => 'text', 'required' => true],
                  ['id' => 'cnpj', 'icon' => 'bi-file-earmark-text', 'placeholder' => 'CNPJ', 'type' => 'text', 'required' => true, 'pattern' => '\d{14}', 'title' => 'Informe o CNPJ com 14 dígitos numéricos, sem pontos ou traços'],
                  ['id' => 'email', 'icon' => 'bi-envelope-fill', 'placeholder' => 'Email', 'type' => 'email', 'required' => true],
                  ['id' => 'senha', 'icon' => 'bi-lock-fill', 'placeholder' => 'Senha', 'type' => 'password', 'required' => true, 'minlength' => 6],
                  ['id' => 'confirma_senha', 'icon' => 'bi-lock-fill', 'placeholder' => 'Confirme a senha', 'type' => 'password', 'required' => true],
                  ['id' => 'telefone', 'icon' => 'bi-telephone-fill', 'placeholder' => 'Telefone', 'type' => 'tel'],
                  ['id' => 'endereco', 'icon' => 'bi-geo-alt-fill', 'placeholder' => 'Endereço', 'type' => 'text', 'required' => true],
                  ['id' => 'cidade', 'icon' => 'bi-building', 'placeholder' => 'Cidade', 'type' => 'text', 'required' => true],
                  ['id' => 'estado', 'icon' => 'bi-signpost-2-fill', 'placeholder' => 'Estado (UF)', 'type' => 'text', 'required' => true, 'maxlength' => 2, 'pattern' => '[A-Za-z]{2}', 'title' => 'Informe a sigla do estado com 2 letras'],
                  ['id' => 'cep', 'icon' => 'bi-mailbox', 'placeholder' => 'CEP', 'type' => 'text', 'required' => true, 'pattern' => '\d{5}-?\d{3}', 'title' => 'Informe o CEP no formato 00000-000 ou 00000000']
                ];

                foreach ($campos as $campo) {
                  echo '<div class="input-group mb-3">';
                  echo '<span class="input-group-text"><i class="bi ' . $campo['icon'] . '"></i></span>';
                  echo '<input class="form-control"';
                  echo ' id="' . $campo['id'] . '"';
                  echo ' name="' . $campo['id'] . '"';
                  echo ' placeholder="' . $campo['placeholder'] . '"';
                  echo ' type="' . $campo['type'] . '"';
                  echo isset($campo['required']) ? ' required' : '';
                  echo isset($campo['minlength']) ? ' minlength="' . $campo['minlength'] . '"' : '';
                  echo isset($campo['maxlength']) ? ' maxlength="' . $campo['maxlength'] . '"' : '';
                  echo isset($campo['pattern']) ? ' pattern="' . $campo['pattern'] . '"' : '';
                  echo isset($campo['title']) ? ' title="' . $campo['title'] . '"' : '';
                  echo ' />';
                  echo '<div class="invalid-feedback">Preencha corretamente o campo ' . $campo['placeholder'] . '.</div>';
                  echo '</div>';
                }
              ?>

              <button type="submit" class="btn btn-primary w-100" aria-label="Cadastrar instituição">
                Cadastrar
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer>
    &copy; <?= date('Y'); ?> Fluxo Vital - Todos os direitos reservados
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    (() => {
      'use strict';
      const forms = document.querySelectorAll('form');
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    })();
  </script>
</body>
</html>
