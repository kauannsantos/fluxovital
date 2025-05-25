<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Escolha a Categoria da Instituição - Fluxo Vital</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    :root {
      --vinho: #9d040e;
      --vinho-dark: #6a0207;
      --cinza-claro: #f2e3d5;
      --texto-secundario: #6c757d;
      --foco: #8B0000;
      --font-family-base: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: linear-gradient(135deg, #f8d7da, #f2e3d5);
      font-family: var(--font-family-base);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      margin: 0;
      color: #333;
    }

    header {
      background-color: var(--vinho);
      color: white;
      padding: 1rem 0;
      text-align: center;
      font-weight: 700;
      font-size: 1.8rem;
      user-select: none;
      box-shadow: 0 3px 8px rgb(0 0 0 / 0.1);
    }

    main {
      flex-grow: 1;
      max-width: 900px;
      width: 100%;
      padding: 2.5rem 1.5rem;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    fieldset.container-cards {
      border: none;
      padding: 0;
      margin: 0;
      width: 100%;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 1.8rem;
    }

    legend {
      font-size: 1.5rem;
      font-weight: 700;
      margin-bottom: 2rem;
      color: var(--vinho-dark);
      user-select: none;
      text-align: center;
    }

    button.card-categoria {
      border: none;
      border-radius: 16px;
      cursor: pointer;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      transition: transform 0.25s ease, box-shadow 0.25s ease, background-color 0.25s ease;
      padding: 2rem 1.5rem;
      display: flex;
      flex-direction: column;
      align-items: center;
      height: 100%;
      background-color: white;
      color: var(--vinho-dark);
      user-select: none;
      outline-offset: 4px;
      text-align: center;
    }
    button.card-categoria:focus-visible {
      outline: 3px solid var(--foco);
      transform: translateY(-6px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
      outline-offset: 4px;
    }
    button.card-categoria:hover {
      background-color: #fce9e9;
      color: var(--vinho);
      transform: translateY(-6px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }
    button.card-categoria:active {
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .icon-categoria {
      font-size: 3.5rem;
      margin-bottom: 1rem;
      color: var(--vinho);
      transition: color 0.25s ease;
      user-select: none;
    }
    button.card-categoria:hover .icon-categoria,
    button.card-categoria:focus-visible .icon-categoria {
      color: var(--vinho-dark);
    }

    .titulo-categoria {
      font-size: 1.3rem;
      font-weight: 600;
      margin-bottom: 1.5rem;
      min-height: 50px;
      user-select: none;
    }

    .btn-categoria {
      pointer-events: none;
      background-color: var(--vinho);
      color: white;
      font-weight: 600;
      padding: 0.6rem 0;
      border-radius: 12px;
      font-size: 1.05rem;
      width: 100%;
      user-select: none;
      box-shadow: 0 3px 6px rgb(0 0 0 / 0.15);
      text-align: center;
      transition: background-color 0.25s ease;
      margin-top: auto;
    }
    button.card-categoria:hover .btn-categoria,
    button.card-categoria:focus-visible .btn-categoria {
      background-color: var(--vinho-dark);
      color: #fff;
    }

    footer {
      background-color: var(--vinho-dark);
      color: white;
      padding: 1rem 0;
      text-align: center;
      font-size: 0.9rem;
      margin-top: auto;
      user-select: none;
      box-shadow: inset 0 1px 3px rgb(0 0 0 / 0.1);
    }

    @media (max-width: 575.98px) {
      button.card-categoria {
        padding: 1.5rem 1rem;
      }

      .icon-categoria {
        font-size: 3rem;
      }
    }
  </style>
</head>
<body>

<header>
  Fluxo Vital - Escolha a Categoria da Instituição
</header>

<main>
  <form method="POST" action="cadastro_instituicao.php" aria-label="Escolha a categoria da instituição">
    <fieldset class="container-cards" role="list" aria-labelledby="categoria-legend">
      <legend id="categoria-legend">Categorias disponíveis</legend>

      <button type="submit" name="categoria" value="Bancos de Doação" class="card-categoria" aria-describedby="desc-banco" aria-pressed="false" tabindex="0">
        <i class="bi bi-droplet icon-categoria" aria-hidden="true"></i>
        <div class="titulo-categoria" id="desc-banco">Bancos de Doação</div>
        <span class="btn-categoria" aria-hidden="true">Selecionar</span>
      </button>

      <button type="submit" name="categoria" value="Hospitais" class="card-categoria" aria-describedby="desc-hospital" aria-pressed="false" tabindex="0">
        <i class="bi bi-hospital icon-categoria" aria-hidden="true"></i>
        <div class="titulo-categoria" id="desc-hospital">Hospitais</div>
        <span class="btn-categoria" aria-hidden="true">Selecionar</span>
      </button>

      <button type="submit" name="categoria" value="ONGs" class="card-categoria" aria-describedby="desc-ong" aria-pressed="false" tabindex="0">
        <i class="bi bi-handshake icon-categoria" aria-hidden="true"></i>
        <div class="titulo-categoria" id="desc-ong">ONGs Parceiras</div>
        <span class="btn-categoria" aria-hidden="true">Selecionar</span>
      </button>

      <button type="submit" name="categoria" value="Outros" class="card-categoria" aria-describedby="desc-outros" aria-pressed="false" tabindex="0">
        <i class="bi bi-building icon-categoria" aria-hidden="true"></i>
        <div class="titulo-categoria" id="desc-outros">Outros (UBS, Clínicas etc.)</div>
        <span class="btn-categoria" aria-hidden="true">Selecionar</span>
      </button>
    </fieldset>
  </form>
</main>

<footer>
  © 2025 Fluxo Vital — Todos os direitos reservados
</footer>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
