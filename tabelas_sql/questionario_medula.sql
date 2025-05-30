USE fluxovital;
-- Tabela referente ao questionário da doação de médula óssea 
CREATE TABLE IF NOT EXISTS questionario_medula (
    id INT AUTO_INCREMENT PRIMARY KEY, -- id
    nome VARCHAR(255) NOT NULL, -- nome completo 
    idade INT NOT NULL, -- idade 
    tipo_sang VARCHAR(3) NOT NULL, -- tipo sanguineo
    possui_doenca_cronica ENUM('Sim', 'Não') NOT NULL, -- possui doença crônica
    usa_medicamentos ENUM('Sim', 'Não') NOT NULL, -- usa medicamentos
    fumante ENUM('Sim', 'Não') NOT NULL, -- se é fumante
    ja_fez_transplante ENUM('Sim', 'Não') NOT NULL, -- ja fez algum transplante
    tem_doenca_autoimune ENUM('Sim', 'Não') NOT NULL, -- tem alguma doença auto imune
    estado_geral ENUM('Bem', 'Doente') NOT NULL DEFAULT 'Bem', -- estado geral da mãe
    observacoes VARCHAR(250) DEFAULT NULL, -- obersavações
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- data de cadastro
);
SELECT id, nome, idade, tipo_sang, possui_doenca_cronica, usa_medicamentos, fumante, ja_fez_transplante, tem_doenca_autoimune,
estado_geral, observacoes, data_cadastro FROM questionario_medula;