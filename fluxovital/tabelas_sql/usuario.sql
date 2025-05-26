USE fluxovital;
-- Tabela referente ao cadastro de usuário e seus dados
CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY, -- ID 
    nome VARCHAR(100) NOT NULL, -- nome completo 
    email VARCHAR(150) NOT NULL UNIQUE, -- email vinculado 
    senha VARCHAR(255) NOT NULL, -- armazenar senha criptografada
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- registro da criação
);
SELECT id, nome, email, senha, data_criacao FROM usuario; -- função para selecionar os atributos
