USE fluxovital;

-- Criação da tabela de funcionários vinculados a instituições
CREATE TABLE funcionario (
id INT AUTO_INCREMENT PRIMARY KEY, -- Identificador único do funcionário (chave primária, autoincrementável)
nome VARCHAR(100) NOT NULL, -- Nome completo do funcionário
cpf VARCHAR(14) UNIQUE NOT NULL, -- CPF do funcionário (único e obrigatório)
cargo VARCHAR(30), -- Cargo ou função exercida pelo funcionário (ex: Recepcionista, Enfermeiro, Administrador)
instituicao_id INT, -- ID da instituição à qual o funcionário está vinculado
-- Define a chave estrangeira, referenciando o campo 'id' da tabela 'instituicoes'
-- Caso a instituição seja excluída, todos os funcionários associados a ela também serão deletados
FOREIGN KEY (instituicao_id) REFERENCES instituicoes(id) ON DELETE CASCADE
);


SELECT 
id,           
nome,           
cpf,             
cargo,           
instituicao_id   
FROM 
funcionario;     
