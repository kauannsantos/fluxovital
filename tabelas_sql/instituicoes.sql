USE fluxovital;
-- Tabela referente ao cadastro de instituição 
CREATE TABLE instituicoes (
    id INT AUTO_INCREMENT PRIMARY KEY, -- id 
    nome VARCHAR(255) NOT NULL, -- nome da instituição 
    cnpj VARCHAR(18) NOT NULL UNIQUE, -- CNPJ 
    email VARCHAR(255) NOT NULL, -- email referente ao responsável ou a instituição 
    senha VARCHAR(255) NOT NULL, -- senha criptografada
    telefone VARCHAR(20), -- contato 
    categoria ENUM('Bancos de Doação', 'Hospitais', 'ONGs', 'Outros') NOT NULL, -- categoria do tipo de instituição 
    endereco VARCHAR(255) NOT NULL, -- endereço da instituição 
    cidade VARCHAR(100) NOT NULL, -- cidade da instituição 
    estado VARCHAR(2) NOT NULL, -- Estado	
    cep VARCHAR(10) NOT NULL, -- CEP
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- data de cadastro
);
SELECT id, nome, cnpj, email, telefone, categoria, endereco, cidade, estado, cep, data_cadastro FROM instituicoes;