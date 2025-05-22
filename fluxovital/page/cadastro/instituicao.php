<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Cadastro de Instituição - FLUXO VITAL</title>

  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f2e3d5;
    }
  </style>
</head>
<body>

  <!-- Header -->
  
  <div class="bg-danger text-white text-center p-4">
     <h1 class="fw-bold m-0">FLUXO VITAL</h1>
  </div>


  <!-- Formulário -->
  <div class="container mt-4">
    <h2 class="mb-4 text-center text-danger">Cadastro de Instituição</h2>
    <form>

      <div class="row mb-3">
        <div class="col-md-6">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" id="nome" class="form-control" required>
        </div>
        <div class="col-md-6">
          <label for="cnpj" class="form-label">CNPJ</label>
          <input type="text" id="cnpj" class="form-control" placeholder="00.000.000/0000-00" required>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label for="tipo_instituicao" class="form-label">Tipo de Instituição</label>
          <select id="tipo_instituicao" class="form-select" required>
            <option value="">Selecione...</option>
            <option>Hospital Público</option>
            <option>Hospital Particular</option>    
          </select>
        </div>
        <div class="col-md-6">
          <label for="tipo_entidade" class="form-label">Tipo de Entidade</label>
          <select id="tipo_entidade" class="form-select" required>
            <option value="">Selecione...</option>
            <option>Hospital</option>
            <option>Banco de Sangue</option>
            <option>Banco de Leite</option>
            <option>Hemocentro</option>
            <option>Clínica</option>
            <option>Outro</option>
          </select>
        </div>
      </div>

      <label class="form-label">Especialidade ou Serviço</label>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="sangue">
        <label class="form-check-label" for="sangue">Coleta de Sangue</label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="leite">
        <label class="form-check-label" for="leite">Coleta de Leite</label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="medula">
        <label class="form-check-label" for="medula">Cadastro de Medula</label>
      </div>

      <div class="row mb-3">
        <div class="col-md-8">
          <label for="endereco" class="form-label">Endereço</label>
          <input type="text" id="endereco" class="form-control" required>
        </div>
        <div class="col-md-4">
          <label for="numero" class="form-label">Número</label>
          <input type="text" id="numero" class="form-control" required>
        </div>
      </div>

      <div class="mb-3">
        <label for="local" class="form-label">Local da Instituição</label>
        <select id="local" class="form-select" required>
          <option value="">-- Selecione --</option>
          <option>Jordoa - São Luís</option>
          <option>Cohab Anil I - São Luís</option>
          <option>Centro - São Luís</option>
          <option>Monte Castelo - São Luís</option>
          <option>Angelim - São Luís</option>
          <option>Vila Nova - São Luís</option>
          <option>Madre Deus - São Luís</option>
          <option>Bequimão - São Luís</option>
          <option>Apicum - São Luís</option>
          <option>Alto Alegre do Maranhão</option>
          <option>Balsas</option>
          <option>Imperatriz</option>
          <option>Caxias</option>
        </select>
      </div>

      <div class="row mb-3">
        <div class="col-md-4">
          <label for="cep" class="form-label">CEP</label>
          <input type="text" id="cep" class="form-control" placeholder="00000-000" required>
        </div>
        <div class="col-md-4">
          <label for="telefone" class="form-label">Telefone</label>
          <input type="text" id="telefone" class="form-control" placeholder="(DDD) 9XXXX-XXXX" required>
        </div>
        <div class="col-md-4">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" id="email" class="form-control" required>
        </div>
      </div>

      <!-- Campo Senha -->
      <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" id="senha" class="form-control" required placeholder="Digite uma senha">
      </div>

      <div class="mb-3">
        <label for="horario_funcionamento" class="form-label">Horário de Funcionamento</label>
        <input type="text" id="horario_funcionamento" class="form-control" placeholder="Seg a Sex - 08h às 18h" required>
      </div>

      <div class="mb-3">
        <label for="site" class="form-label">Site (opcional)</label>
        <input type="url" id="site" class="form-control">
      </div>

      <div class="mb-3">
        <label for="observacoes" class="form-label">Observações</label>
        <textarea id="observacoes" rows="4" class="form-control"></textarea>
      </div>

      <button class="btn btn-danger w-100 btn-lg" type="submit">Cadastrar-se aqui</button>
    </form>
  </div>

 

  <!-- Script para máscara de telefone -->
  <script>
    const telefoneInput = document.getElementById("telefone");

    telefoneInput.addEventListener("input", function (e) {
      let input = e.target.value.replace(/\D/g, '');
      
      if (input.length > 11) {
        input = input.slice(0, 11);
      }

      if (input.length <= 2) {
        input = '(' + input;
      } else if (input.length <= 7) {
        input = '(' + input.slice(0, 2) + ') ' + input.slice(2);
      } else {
        input = '(' + input.slice(0, 2) + ') ' + input.slice(2, 7) + '-' + input.slice(7);
      }

      e.target.value = input;
    });
  </script>
</body>
</html>