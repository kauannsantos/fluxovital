USE fluxovital;
CREATE TABLE funcionario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(14) UNIQUE NOT NULL,
    cargo VARCHAR(30),
    instituicao_id INT,
    FOREIGN KEY (instituicao_id) REFERENCES instituicoes(id) ON DELETE CASCADE
);
SELECT id, nome, cpf, cargo, instituicao_id FROM funcionario;