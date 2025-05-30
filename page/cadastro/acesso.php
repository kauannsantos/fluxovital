<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<style>
  body {
    background: linear-gradient(to right, #ffe6e6, #f8f9fa);
    font-family: 'Segoe UI', sans-serif;
  }

  .card {
    border: none;
    border-radius: 20px;
    background-color: #ffe9ec;
  }

  .form-control {
    border-radius: 10px;
  }

  .btn-primary {
    background-color: #9d040e;
    border-color: #9d040e;
    border-radius: 10px;
    font-weight: bold;
  }

  .btn-primary:hover {
    background-color: #9d040e;
  }

  .logo {
    display: block;
    margin: 0 auto 10px auto;
    height: 60px;
  }

  h3.card-title {
    font-weight: 600;
    color: #9d040e;
  }
</style>

<div class="d-flex justify-content-center align-items-center vh-100">
  <div class="card shadow p-4" style="width: 380px;">
    
    <!-- Logo do Fluxo Vital -->
    <img src="/fluxovital/assets/images/logo1.png" alt="Fluxo Vital" class="logo">

    <h3 class="card-title text-center mb-2">Fluxo Vital</h3>
    <p class="text-center text-muted mb-4">Acesse sua conta ou cadastre-se</p>

    <form method="post" action="/fluxovital/page/cadastro/processa_acesso.php" class="needs-validation" novalidate>
      <div class="mb-3">
        <label for="email" class="form-label">E-mail:</label>
        <input type="email" name="email" id="email" class="form-control" required>
        <div class="invalid-feedback">
          Por favor, insira um e-mail válido.
        </div>
      </div>

      <div class="mb-3">
        <label for="senha" class="form-label">Senha:</label>
        <input type="password" name="senha" id="senha" class="form-control" required minlength="6">
        <div class="invalid-feedback">
          A senha deve ter pelo menos 6 caracteres.
        </div>
      </div>

      <button type="submit" class="btn btn-primary w-100 mt-2">
        <i class="bi bi-box-arrow-in-right me-1"></i> Continuar
      </button>
    </form>
  </div>
</div>

<!-- Bootstrap Form Validation Script -->
<script>
(() => {
  'use strict'
  const forms = document.querySelectorAll('.needs-validation')
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }
      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
