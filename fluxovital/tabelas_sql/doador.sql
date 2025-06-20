USE fluxovital;
-- Tabela referente ao cadastro do doador
CREATE TABLE doador (
  id INT AUTO_INCREMENT PRIMARY KEY, -- id 
  nome VARCHAR(150) NOT NULL, -- nome completo
  email VARCHAR(150) NOT NULL UNIQUE, -- email vinculado
  telefone VARCHAR(20) NOT NULL, -- contato
  senha VARCHAR(255) NOT NULL, -- senha com criptografia
  status ENUM('ativo', 'inativo') DEFAULT 'ativo', -- status do usuário
  criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- data de criação
);
SELECT id, nome, email, telefone, senha, status, criado_em FROM doador; -- função de atributo