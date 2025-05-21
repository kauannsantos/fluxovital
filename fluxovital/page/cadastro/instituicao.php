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
      background: url('https://i.imgur.com/GgL1bsq.jpeg') no-repeat center center fixed;
      background-size: cover;
    }

    .bg-overlay {
      background-color: rgba(255, 255, 255, 0.92);
      border-radius: 10px;
      padding: 30px;
      margin-top: 30px;
    }

    footer {
      margin-top: 50px;
      background-color: #a40000;
      color: white;
      text-align: center;
      padding: 20px 0;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <div class="container text-center mt-4">
    <h1 class="display-4 text-white fw-bold bg-danger p-3 rounded">FLUXO VITAL</h1>
  </div>

  <!-- Formulário -->
  <div class="container bg-overlay shadow-lg">
    <h2 class="mb-4 text-center text-danger">Cadastro </h2>
    <form>
      <div class="row mb-3">
        <div class="col-md-6">
          <label for="nome" class="form-label">Nome </label>
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
            <option>Posto de Saúde</option>
            <option>Clínica</option>
            <option>Laboratório</option>
            <option>Banco de Sangue</option>
            <option>Banco de Leite</option>
            <option>Hemocentro</option>
            <option>Outro</option>
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

      <div class="row mb-3">
        <div class="col-md-4">
          <label for="bairro" class="form-label">Bairro</label>
          <input type="text" id="bairro" class="form-control" required>
        </div>
        <div class="col-md-4">
          <label for="uf" class="form-label">UF</label>
          <select id="uf" class="form-select" required>
            <option value="">-- Selecione --</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="cidade" class="form-label">Cidade</label>
          <select id="cidade" class="form-select" required>
            <option value="">-- Selecione o estado primeiro --</option>
          </select>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-4">
          <label for="cep" class="form-label">CEP</label>
          <input type="text" id="cep" class="form-control" placeholder="00000-000" required>
        </div>
        <div class="col-md-4">
          <label for="telefone" class="form-label">Telefone</label>
          <input type="text" id="telefone" class="form-control" placeholder="(00) 0000-0000" required>
        </div>
        <div class="col-md-4">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" id="email" class="form-control" required>
        </div>
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

      <button class="btn btn-danger w-100 btn-lg" type="submit">Cadastrar-se aqui </button>
    </form>
  </div>

  <!-- Footer -->
  <footer>
    <p class="mb-0">© 2025 Fluxo Vital - Todos os direitos reservados</p>
  </footer>

  <!-- Script modificado: apenas Maranhão e suas cidades -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const ufSelect = document.getElementById("uf");
      const cidadeSelect = document.getElementById("cidade");

      // Adiciona apenas Maranhão
      const optionMA = document.createElement("option");
      optionMA.value = "MA";
      optionMA.textContent = "Maranhão";
      optionMA.selected = true;
      ufSelect.appendChild(optionMA);

      // Carrega automaticamente as cidades do Maranhão
      fetch("https://servicodados.ibge.gov.br/api/v1/localidades/estados/MA/municipios")
        .then(response => response.json())
        .then(cidades => {
          cidadeSelect.innerHTML = "<option value=''>-- Selecione a cidade --</option>";
          cidades.forEach(cidade => {
            const option = document.createElement("option");
            option.value = cidade.nome;
            option.textContent = cidade.nome;
            cidadeSelect.appendChild(option);
          });
        });
    });
  </script>
</body>
</html>
