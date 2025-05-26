USE fluxovital; 
-- Tabela referente ao questionário da doação de sangue
CREATE TABLE questionario_sangue (
    id INT AUTO_INCREMENT PRIMARY KEY, -- id
    nome VARCHAR(255) NOT NULL, -- nome completo
    idade INT NOT NULL, -- idade do doador
    tipo_sang VARCHAR(3) NOT NULL, -- tipo sanguineo
    bebe_alcool ENUM('Sim', 'Não') NOT NULL, -- consome bebida alcoolica
    resfriado ENUM('Sim', 'Não') NOT NULL, -- esta resfriado
    cirurgia_6m ENUM('Sim', 'Não') NOT NULL, -- realizou cirurgia nos últimos 6 meses
    transfusao ENUM('Sim', 'Não') NOT NULL, -- realizou transfusão anteriormente
    doenca_infecciosa ENUM('Sim', 'Não') NOT NULL, -- possui doença infecciosa
    hepatite_11_anos ENUM('Sim', 'Não') NOT NULL, -- possui hepatite depois dos 11 anos
    hiv_hepatite ENUM('Sim', 'Não') NOT NULL, -- possui HIV
    fuma_droga ENUM('Sim', 'Não') NOT NULL, -- usa ou usou droga
    peso_50kg ENUM('Sim', 'Não') NOT NULL, -- pesa mais de 50kg
    estado_geral ENUM('Bem', 'Doente') NOT NULL DEFAULT 'Bem', -- estado atualmente do doador
    obs VARCHAR(250) -- observações
);
SELECT id, nome, idade, tipo_sang, bebe_alcool, resfriado, cirurgia_6m, transfusao, doenca_infecciosa, hepatite_11_anos, 
hiv_hepatite, fuma_droga, peso_50kg, estado_geral, obs FROM questionario_sangue;