<?php
// Inicia a sessão para permitir o uso de variáveis de sessão como mensagens de erro ou tipo de doação.
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <!-- Metadados básicos de codificação e responsividade -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cadastro do Doador - Fluxo Vital</title>

  <!-- Estilos e ícones do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Estilização personalizada usando variáveis CSS -->
  <style>
    :root {
      --vinho-dark: #9d040e;
      --rosa-claro: #ffe9ec;
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

    /* Cabeçalho com cor temática */
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

    /* Centraliza e estiliza o conteúdo do formulário */
    main.form-wrapper {
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
      width: 100%;
      max-width: 480px;
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

    .alert {
      font-size: 0.9rem;
    }

    /* Estilo dos campos com ícones */
    .input-group-text {
      background-color: var(--branco);
      border-right: 0;
      color: #aaa;
      font-size: 1.25rem;
    }

    .form-control {
      border-left: 0;
    }

    .form-control:focus {
      border-color: var(--vinho-dark);
      box-shadow: 0 0 0 0.25rem rgba(157,4,14,0.25);
    }

    /* Botão de envio */
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

    .btn-primary:focus-visible {
      outline-offset: 3px;
      outline-color: var(--vinho-dark);
      outline-style: solid;
      outline-width: 2px;
    }

    /* Texto adicional abaixo do formulário */
    p.text-muted {
      font-size: 0.9rem;
      color: var(--cinza-escuro);
      margin-bottom: 1.5rem;
    }

    p.text-muted a {
      color: var(--vinho-dark);
      font-weight: 600;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    p.text-muted a:hover,
    p.text-muted a:focus {
      color: var(--vinho-dark);
      text-decoration: underline;
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

  <!-- Valida se as senhas digitadas são iguais -->
  <script>
    function validarFormulario() {
      const senha = document.getElementById("senha").value;
      const confirma = document.getElementById("confirma_senha").value;
      if (senha !== confirma) {
        alert("As senhas não coincidem.");
        return false; // Impede o envio do formulário
      }
      return true;
    }
  </script>
</head>
<body>

  <!-- Cabeçalho do site -->
  <header>
    <i class="bi bi-droplet-half me-2"></i>Fluxo Vital
  </header>

  <!-- Corpo principal com o formulário -->
  <main class="form-wrapper">
    <div class="form-card" role="main" aria-labelledby="tituloForm">
      <h3 id="tituloForm" class="text-center">Cadastro do Doador</h3>

      <!-- Exibe alerta de erro armazenado na sessão -->
      <?php if (isset($_SESSION['erro'])): ?>
        <div class="alert alert-danger" role="alert" tabindex="0">
          <?= htmlspecialchars($_SESSION['erro']); unset($_SESSION['erro']); ?>
        </div>
      <?php endif; ?>

      <!-- Mensagem contextual baseada no tipo de doação -->
      <p class="text-center text-muted">
        Após este cadastro, você será direcionado a um pequeno questionário sobre sua doação de <strong><?= htmlspecialchars(ucfirst($_SESSION['tipo_doacao'] ?? 'sangue')); ?></strong>.
      </p>

      <!-- Início do formulário -->
      <form method="POST" action="processa_doador.php" onsubmit="return validarFormulario()" novalidate>

        <!-- Campo: Nome -->
        <div class="input-group mb-3">
          <span class="input-group-text" id="nome-addon">
            <i class="bi bi-person-fill"></i>
          </span>
          <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo" required aria-describedby="nome-addon" autofocus />
          <div class="invalid-feedback">Informe seu nome completo.</div>
        </div>

        <!-- Campo: Email -->
        <div class="input-group mb-3">
          <span class="input-group-text" id="email-addon">
            <i class="bi bi-envelope-fill"></i>
          </span>
          <input type="email" class="form-control" id="email" name="email" placeholder="Seu e-mail" required aria-describedby="email-addon" />
          <div class="invalid-feedback">Informe um e-mail válido.</div>
        </div>

        <!-- Campo: Telefone -->
        <div class="input-group mb-3">
          <span class="input-group-text" id="telefone-addon">
            <i class="bi bi-telephone-fill"></i>
          </span>
          <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone" required aria-describedby="telefone-addon" />
          <div class="invalid-feedback">Informe um telefone para contato.</div>
        </div>

        <!-- Campo: Senha -->
        <div class="input-group mb-3">
          <span class="input-group-text" id="senha-addon">
            <i class="bi bi-lock-fill"></i>
          </span>
          <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" minlength="6" required aria-describedby="senha-addon" />
          <div class="invalid-feedback">A senha deve ter pelo menos 6 caracteres.</div>
        </div>

        <!-- Campo: Confirmação da senha -->
        <div class="input-group mb-4">
          <span class="input-group-text" id="confirma-addon">
            <i class="bi bi-lock-fill"></i>
          </span>
          <input type="password" class="form-control" id="confirma_senha" name="confirma_senha" placeholder="Confirme a senha" required aria-describedby="confirma-addon" />
          <div class="invalid-feedback">Confirme sua senha.</div>
        </div>

        <!-- Botão de envio do formulário -->
        <button type="submit" class="btn btn-primary w-100" aria-label="Cadastrar doador">
          Cadastrar
        </button>

        <!-- Link para página de login -->
        <p class="text-center text-muted mt-3">
          Já tem conta? <a href="/fluxovital/page/cadastro/doador/login/login_doador.php">Faça login</a>
        </p>
      </form>
    </div>
  </main>

  <!-- Rodapé do site -->
  <footer>
    &copy; <?= date('Y'); ?> Fluxo Vital - Todos os direitos reservados
  </footer>

  <!-- JS do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Script para aplicar a validação visual do Bootstrap -->
  <script>
    (() => {
      'use strict';
      const forms = document.querySelectorAll('form');

      // Para cada formulário, adiciona escuta de envio
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault(); // Impede envio
            event.stopPropagation(); // Impede propagação de evento
          }
          form.classList.add('was-validated'); // Ativa feedbacks visuais
        }, false);
      });
    })();
  </script>

</body>
</html>
