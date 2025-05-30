<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Recuperar Senha - Fluxo Vital</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

  <style>
    :root {
      --primary-color: #9d040e;
      --primary-dark: #6a0207;
      --secondary-color: #f8f9fa;
      --light-gray: #e9ecef;
      --text-color: #343a40;
    }
    
    body {
      background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding: 1rem;
    }

    .password-card {
      background: white;
      padding: 2.5rem;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 450px;
      transition: all 0.3s ease;
    }

    .password-card:hover {
      box-shadow: 0 15px 35px rgba(0,0,0,0.15);
    }

    .password-card h2 {
      margin-bottom: 1.5rem;
      color: var(--primary-color);
      text-align: center;
      font-weight: 600;
    }
    
    .card-icon {
      display: flex;
      justify-content: center;
      margin-bottom: 1.5rem;
    }
    
    .card-icon i {
      font-size: 3.5rem;
      color: var(--primary-color);
      background: rgba(157, 4, 14, 0.1);
      width: 80px;
      height: 80px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .btn-reset {
      background-color: var(--primary-color);
      border: none;
      padding: 0.75rem;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .btn-reset:hover {
      background-color: var(--primary-dark);
      transform: translateY(-2px);
    }

    .btn-back {
      background-color: var(--light-gray);
      color: var(--text-color);
      border: none;
      margin-top: 1rem;
    }
    
    .btn-back:hover {
      background-color: #dcdcdc;
    }

    .form-control:focus {
      border-color: var(--primary-color);
      box-shadow: 0 0 0 0.2rem rgba(157, 4, 14, 0.2);
    }
    
    .password-toggle {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      color: #6c757d;
    }
    
    .step-indicator {
      display: flex;
      justify-content: space-between;
      margin-bottom: 1.5rem;
    }
    
    .step {
      flex: 1;
      text-align: center;
      padding: 0.5rem;
      position: relative;
    }
    
    .step:not(:last-child):after {
      content: '';
      position: absolute;
      top: 20px;
      right: 0;
      width: 100%;
      height: 2px;
      background: #dee2e6;
      z-index: 1;
    }
    
    .step-number {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: #dee2e6;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 0.5rem;
      position: relative;
      z-index: 2;
    }
    
    .step.active .step-number {
      background: var(--primary-color);
      color: white;
    }
    
    .step.active .step-label {
      color: var(--primary-color);
      font-weight: 500;
    }
    
    .info-box {
      background-color: rgba(157, 4, 14, 0.05);
      border-left: 4px solid var(--primary-color);
      padding: 1rem;
      border-radius: 0 4px 4px 0;
      margin-bottom: 1.5rem;
    }
    
    .success-message {
      background-color: rgba(40, 167, 69, 0.1);
      border-left: 4px solid #28a745;
      padding: 1rem;
      border-radius: 0 4px 4px 0;
      margin-bottom: 1.5rem;
      display: none;
    }
  </style>
</head>
<body>

  <div class="password-card">
    <div class="card-icon">
      <i class="bi bi-shield-lock"></i>
    </div>
    
    <div class="step-indicator">
      <div class="step active">
        <div class="step-number">1</div>
        <div class="step-label">Informe o E-mail</div>
      </div>
      <div class="step">
        <div class="step-number">2</div>
        <div class="step-label">Redefina a Senha</div>
      </div>
    </div>
    
    <h2>Recuperação de Senha</h2>
    
    <div class="info-box">
      <p class="mb-0">Digite seu e-mail cadastrado. Enviaremos um link para você redefinir sua senha.</p>
    </div>
    
    <form id="passwordResetForm">
      <div class="mb-3">
        <label for="email" class="form-label">E-mail cadastrado</label>
        <input
          type="email"
          class="form-control"
          id="email"
          name="email"
          placeholder="seu@email.com"
          required
        />
        <div class="invalid-feedback">
          Por favor, insira um e-mail válido.
        </div>
      </div>
      
      <button type="submit" class="btn btn-reset w-100 text-white">Enviar Link de Recuperação</button>
      <a href="/fluxovital/page/cadastro/usuario/login_usuario.php" class="btn btn-back w-100">Voltar ao Login</a>
    </form>
    
    <div class="success-message" id="successMessage">
      <h5><i class="bi bi-check-circle-fill text-success me-2"></i> E-mail enviado!</h5>
      <p class="mb-0">Um link para redefinição de senha foi enviado para o e-mail informado. Verifique sua caixa de entrada.</p>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
    // Função para alternar visibilidade da senha
    function togglePassword(fieldId) {
      const passwordField = document.getElementById(fieldId);
      const toggleIcon = passwordField.nextElementSibling.querySelector('i');
      
      if (passwordField.type === 'password') {
        passwordField.type = 'text';
        toggleIcon.classList.remove('bi-eye');
        toggleIcon.classList.add('bi-eye-slash');
      } else {
        passwordField.type = 'password';
        toggleIcon.classList.remove('bi-eye-slash');
        toggleIcon.classList.add('bi-eye');
      }
    }
    
    // Validação do formulário
    (() => {
      'use strict';
      const form = document.getElementById('passwordResetForm');
      
      form.addEventListener('submit', event => {
        event.preventDefault();
        
        if (!form.checkValidity()) {
          event.stopPropagation();
          form.classList.add('was-validated');
          return;
        }
        
        // Simular envio bem-sucedido
        form.classList.remove('was-validated');
        form.reset();
        
        // Mostrar mensagem de sucesso
        document.getElementById('successMessage').style.display = 'block';
        
        // Ocultar mensagem após alguns segundos (opcional)
        setTimeout(() => {
          document.getElementById('successMessage').style.display = 'none';
        }, 5000);
      });
    })();
  </script>
</body>
</html>