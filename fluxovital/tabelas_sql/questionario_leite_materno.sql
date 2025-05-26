USE fluxovital;
USE fluxovital;
-- Tabela referente ao questionário da doação de leite materno
CREATE TABLE questionario_leite_materno (
    id INT AUTO_INCREMENT PRIMARY KEY, -- id
    nome VARCHAR(255) NOT NULL, -- nome completo 
    idade INT NOT NULL, -- idade
    tipo_sang VARCHAR(3) NOT NULL, -- tipo sanguineo
    amamentando ENUM('Sim', 'Não') NOT NULL, -- se esta amamentando
    tempo_amamentacao_meses INT DEFAULT NULL, -- tempo de amamentação
    usa_medicamentos ENUM('Sim', 'Não') NOT NULL, -- usa medicamentos
    descreva_medicamentos VARCHAR(250) DEFAULT NULL, -- descrição dos medicamentos que usa
    possui_doencas_cronicas ENUM('Sim', 'Não') NOT NULL, -- possui doenças crônicas
    descreva_doencas VARCHAR(250) DEFAULT NULL, -- descrição das doenças
    fuma_droga ENUM('Sim', 'Não') NOT NULL, -- fuma ou já fumou
    estado_geral ENUM('Bem', 'Doente') NOT NULL DEFAULT 'Bem', -- estado geral da mãe
    observacoes VARCHAR(250) DEFAULT NULL, -- observações
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- data de criação 
);
SELECT id, nome, idade, tipo_sang, amamentando, tempo_amamentacao_meses, usa_medicamentos, descreva_medicamentos, possui_doencas_cronicas,
descreva_doencas, fuma_droga, estado_geral, observacoes, data_cadastro FROM questionario_leite_materno;