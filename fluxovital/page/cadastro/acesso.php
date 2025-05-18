<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="d-flex justify-content-center align-items-center vh-100 bg-light">
  <div class="card shadow-sm p-4" style="width: 380px;">
    <h3 class="card-title text-center mb-4">Login / Cadastro</h3>
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

      <button type="submit" class="btn btn-primary w-100">
        <i class="bi bi-box-arrow-in-right"></i> Continuar
      </button>
    </form>
  </div>
</div>

<script>
// Validação Bootstrap
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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
