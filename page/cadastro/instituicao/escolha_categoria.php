<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Escolher Categoria - Instituição | Fluxo Vital</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    body {
      background: #ffe6e6;
      font-family: 'Segoe UI', sans-serif;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      margin: 0;
    }

    header, footer {
      background-color: #9d040e;
      color: white;
      padding: 1rem;
      text-align: center;
      font-weight: bold;
      user-select: none;
    }

    main {
      flex: 1;
      max-width: 800px;
      margin: 3rem auto;
      background: white;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgb(123 27 27 / 0.3);
    }

    h2 {
      color: #9d040e;
      font-weight: 700;
      margin-bottom: 2rem;
      text-align: center;
      user-select: none;
    }

    form {
      margin-top: 1rem;
    }

    .card-categoria {
      background: white;
      border: 2px solid #9d040e;
      border-radius: 16px;
      cursor: pointer;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 1.5rem 1rem;
      transition: background-color 0.3s ease, border-color 0.3s ease, transform 0.2s ease;
      user-select: none;
      color: #6a0207;
      font-weight: 600;
      box-shadow: 0 3px 8px rgb(123 27 27 / 0.2);
      height: 100%;
      width: 100%;
    }

    .card-categoria:hover,
    .card-categoria:focus-visible {
      background-color: #9d040e;
      color: white;
      border-color: #6a0207;
      transform: translateY(-4px);
      outline: none;
      box-shadow: 0 6px 16px rgb(90 19 19 / 0.6);
    }

    .icon-categoria {
      font-size: 3.5rem;
      margin-bottom: 1rem;
      pointer-events: none;
    }

    .titulo-categoria {
      font-size: 1.25rem;
      margin-bottom: auto;
      text-align: center;
      pointer-events: none;
    }

    .btn-categoria {
      margin-top: 1.5rem;
      background-color: #6a0207;
      color: white;
      padding: 0.5rem 1.2rem;
      border-radius: 12px;
      font-size: 1rem;
      pointer-events: none;
      user-select: none;
      box-shadow: 0 3px 8px rgb(90 19 19 / 0.6);
      transition: background-color 0.3s ease;
    }

    .card-categoria:hover .btn-categoria,
    .card-categoria:focus-visible .btn-categoria {
      background-color: #6a0207;
    }
  </style>
</head>
<body>
  <header>Fluxo Vital – Categoria da Instituição</header>

  <main>
    <h2>Escolha a Categoria da Instituição</h2>
    <form action="/fluxovital/page/cadastro/instituicao/login_instituicao.php" method="post" class="row row-cols-1 row-cols-md-2 g-4 justify-content-center" aria-label="Escolha a categoria da instituição">
      
      <div class="col">
        <button type="submit" name="categoria" value="Bancos de Doação" class="card-categoria" aria-describedby="desc-banco">
          <i class="bi bi-droplet icon-categoria" aria-hidden="true"></i>
          <div class="titulo-categoria" id="desc-banco">Bancos de Doação</div>
          <div class="btn-categoria">Selecionar</div>
        </button>
      </div>

      <div class="col">
        <button type="submit" name="categoria" value="Hospitais" class="card-categoria" aria-describedby="desc-hospital">
          <i class="bi bi-hospital icon-categoria" aria-hidden="true"></i>
          <div class="titulo-categoria" id="desc-hospital">Hospitais</div>
          <div class="btn-categoria">Selecionar</div>
        </button>
      </div>

      <div class="col">
        <button type="submit" name="categoria" value="ONGs" class="card-categoria" aria-describedby="desc-ongs">
          <i class="bi bi-people icon-categoria" aria-hidden="true"></i>
          <div class="titulo-categoria" id="desc-ongs">ONGs Parceiras</div>
          <div class="btn-categoria">Selecionar</div>
        </button>
      </div>

      <div class="col">
        <button type="submit" name="categoria" value="Outros" class="card-categoria" aria-describedby="desc-outros">
          <i class="bi bi-building icon-categoria" aria-hidden="true"></i>
          <div class="titulo-categoria" id="desc-outros">Outros (UBS, Clínicas etc.)</div>
          <div class="btn-categoria">Selecionar</div>
        </button>
      </div>

    </form>
  </main>

  <footer>&copy; 2025 Fluxo Vital - Todos os direitos reservados.</footer>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
