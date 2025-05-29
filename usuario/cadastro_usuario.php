<?php session_start(); ?> <!-- Inicia a sessão PHP para armazenar dados temporários, como mensagens -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" /> <!-- Define a codificação de caracteres para UTF-8 -->
  <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- Ajusta o layout para dispositivos móveis -->
  <title>Cadastro - Fluxo Vital</title> <!-- Título da página exibido na aba do navegador -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" /> <!-- Importa o CSS do Bootstrap -->

  <script>
    // Função para validar o formulário antes do envio
    function validarFormulario() {
      const senha = document.getElementById("senha").value;
      const confirmaSenha = document.getElementById("confirma_senha").value;
      if (senha !== confirmaSenha) {
        alert("As senhas não coincidem."); // Exibe alerta se as senhas forem diferentes
        return false; // Impede o envio do formulário
      }
      return true; // Permite o envio do formulário
    }
  </script>
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">
  <!-- Corpo com fundo claro e centralização do conteúdo -->

  <div class="card p-4" style="max-width: 400px; width: 100%;">
    <!-- Cartão centralizado com padding e largura máxima definida -->
    
    <h3 class="text-center mb-3">Cadastro de Usuário</h3> <!-- Título centralizado -->

    <!-- Formulário de cadastro -->
    <form method="POST" action="processa_usuario.php" onsubmit="return validarFormulario()">
      <!-- Ao enviar, chama a função de validação em JavaScript -->

      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" required /> <!-- Campo obrigatório para o nome -->
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" name="email" class="form-control" required /> <!-- Campo obrigatório para o e-mail -->
      </div>

      <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" name="senha" id="senha" class="form-control" required /> <!-- Campo obrigatório para a senha -->
      </div>

      <div class="mb-3">
        <label for="confirma_senha" class="form-label">Confirmar Senha</label>
        <input type="password" name="confirma_senha" id="confirma_senha" class="form-control" required /> <!-- Campo obrigatório para confirmar a senha -->
      </div>

      <button type="submit" class="btn btn-primary w-100">Cadastrar</button> <!-- Botão de envio do formulário -->

      <div class="text-center mt-3">
        <a href="login_usuario.php">Já tem conta? Faça login</a> <!-- Link para página de login -->
      </div>
    </form>
  </div>
</body>
</html>
