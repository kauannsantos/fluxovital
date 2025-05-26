<?php
session_start();

$categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);

if (!$categoria) {
    header("Location: escolha_categoria.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Cadastro Instituição - <?= htmlspecialchars($categoria, ENT_QUOTES, 'UTF-8') ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    body {
      background: linear-gradient(135deg, #ffe6e6 0%, #f5f8fa 100%);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      margin: 0;
      color: #333;
    }
    header {
      background-color: #7B1B1B; /* vermelho escuro */
      color: white;
      padding: 1.5rem 1rem;
      text-align: center;
      font-weight: 700;
      font-size: 1.8rem;
      letter-spacing: 1px;
      box-shadow: 0 3px 8px rgb(0 0 0 / 0.1);
      user-select: none;
      flex-shrink: 0;
    }
    main {
      flex-grow: 1;
      display: flex;
      justify-content: center;
      align-items: start;
      padding: 3rem 1rem;
    }
    .form-container {
      background: white;
      padding: 2rem 2.5rem;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgb(0 0 0 / 0.12);
      max-width: 900px; /* container mais largo */
      width: 100%;
    }
    h2 {
      text-align: center;
      margin-bottom: 2.5rem;
      font-weight: 700;
      color: #7B1B1B; /* vermelho escuro */
      user-select: none;
    }
    label {
      font-weight: 600;
      margin-top: 0.8rem;
      display: block;
    }
    button.btn-primary {
      background-color: #7B1B1B; /* vermelho escuro */
      border-color: #7B1B1B;
      font-weight: 700;
      padding: 0.7rem;
      border-radius: 10px;
      box-shadow: 0 4px 14px rgb(123 27 27 / 0.4);
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }
    button.btn-primary:hover,
    button.btn-primary:focus {
      background-color: #5A1313;
      border-color: #5A1313;
      box-shadow: 0 6px 18px rgb(90 19 19 / 0.6);
      outline: none;
    }
    .link-back {
      display: block;
      margin-top: 2rem;
      text-align: center;
      font-weight: 600;
      color: #7B1B1B; /* vermelho escuro */
      text-decoration: none;
      user-select: none;
      transition: color 0.25s ease;
    }
    .link-back:hover,
    .link-back:focus {
      color: #5A1313;
      text-decoration: underline;
      outline: none;
    }
    input.text-uppercase {
      text-transform: uppercase;
    }
    footer {
      background-color: #7B1B1B; /* vermelho escuro */
      color: white;
      text-align: center;
      padding: 1rem 1rem;
      font-size: 0.9rem;
      flex-shrink: 0;
      user-select: none;
      box-shadow: 0 -3px 8px rgb(0 0 0 / 0.1);
    }
    @media (max-width: 576px) {
      .form-container {
        padding: 1.8rem 1.5rem;
      }
      h2 {
        font-size: 1.5rem;
        margin-bottom: 2rem;
      }
    }
  </style>
</head>
<body>

<header role="banner" aria-label="Cabeçalho do site Fluxo Vital">
  Fluxo Vital - Cadastro de Instituição
</header>

<main role="main">
  <section class="form-container" aria-labelledby="titulo-form">
    <h2 id="titulo-form">Cadastro para Instituição: <?= htmlspecialchars($categoria, ENT_QUOTES, 'UTF-8') ?></h2>

    <form method="POST" action="processa_instituicao.php" novalidate autocomplete="off" aria-describedby="form-desc">
      <p id="form-desc" class="visually-hidden">Preencha os dados para cadastro da instituição. Campos obrigatórios estão marcados com *</p>
      <input type="hidden" name="categoria" value="<?= htmlspecialchars($categoria, ENT_QUOTES, 'UTF-8') ?>" />

      <div class="row g-3">
        <div class="col-md-6">
          <label for="nome">Nome da Instituição *</label>
          <input type="text" id="nome" name="nome" class="form-control" required autocomplete="organization" autofocus aria-required="true" />
        </div>

        <div class="col-md-6">
          <label for="cnpj">CNPJ * (somente números, 14 dígitos)</label>
          <input type="text" id="cnpj" name="cnpj" class="form-control" required pattern="\d{14}" title="Digite 14 números sem pontos ou traços" maxlength="14" inputmode="numeric" aria-required="true" />
        </div>

        <div class="col-md-6">
          <label for="email">E-mail *</label>
          <input type="email" id="email" name="email" class="form-control" required autocomplete="email" aria-required="true" />
        </div>

        <div class="col-md-6">
          <label for="senha">Senha * (mínimo 6 caracteres)</label>
          <input type="password" id="senha" name="senha" class="form-control" required minlength="6" autocomplete="new-password" aria-required="true" />
        </div>

        <div class="col-md-6">
          <label for="telefone">Telefone (opcional, somente números, 10 ou 11 dígitos)</label>
          <input type="tel" id="telefone" name="telefone" class="form-control" pattern="\d{10,11}" title="Digite somente números (10 ou 11 dígitos)" maxlength="11" autocomplete="tel" inputmode="numeric" />
        </div>

        <div class="col-md-6">
          <label for="endereco">Endereço *</label>
          <input type="text" id="endereco" name="endereco" class="form-control" required autocomplete="street-address" aria-required="true" />
        </div>

        <div class="col-md-6">
          <label for="cidade">Cidade *</label>
          <input type="text" id="cidade" name="cidade" class="form-control" required autocomplete="address-level2" aria-required="true" />
        </div>

        <div class="col-md-3">
          <label for="estado">Estado (UF) * (ex: SP, RJ)</label>
          <input type="text" id="estado" name="estado" class="form-control text-uppercase" required pattern="[A-Z]{2}" title="Use a sigla do estado (ex: SP, RJ)" maxlength="2" autocomplete="address-level1" aria-required="true" />
        </div>

        <div class="col-md-3">
          <label for="cep">CEP * (somente números, 8 dígitos)</label>
          <input type="text" id="cep" name="cep" class="form-control" required pattern="\d{8}" title="Digite 8 números do CEP sem hífen" maxlength="8" autocomplete="postal-code" aria-required="true" inputmode="numeric" />
        </div>
      </div>

      <button type="submit" class="btn btn-primary w-100 mt-4" aria-label="Cadastrar Instituição">
        Cadastrar Instituição
      </button>
    </form>

    <a href="escolha_categoria.php" class="link-back" tabindex="0">&larr; Voltar para escolha de categoria</a>
  </section>
</main>

<footer role="contentinfo">
  &copy; <?= date('Y') ?> Fluxo Vital — Todos os direitos reservados.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
  function mascaraCNPJ(cnpj) {
    cnpj = cnpj.replace(/\D/g, "");
    if (cnpj.length > 14) cnpj = cnpj.slice(0,14);
    return cnpj;
  }
  document.getElementById('cnpj').addEventListener('input', function(e){
    this.value = mascaraCNPJ(this.value);
  });

  document.getElementById('telefone').addEventListener('input', function(e){
    this.value = this.value.replace(/\D/g, "").slice(0,11);
  });

  function mascaraCEP(cep) {
    cep = cep.replace(/\D/g, "");
    if (cep.length > 8) cep = cep.slice(0,8);
    return cep;
  }
  document.getElementById('cep').addEventListener('input', function(e){
    this.value = mascaraCEP(this.value);
  });
</script>

</body>
</html>
  