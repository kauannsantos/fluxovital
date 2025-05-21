USE fluxovital;

-- Tabela de tipos sanguíneos
CREATE TABLE IF NOT EXISTS TipoSanguineo (
    id_tipo INT AUTO_INCREMENT PRIMARY KEY,
    tipo VARCHAR(5) NOT NULL
);

-- Inserir tipos se ainda não existirem
INSERT INTO TipoSanguineo (tipo)
SELECT * FROM (SELECT 'A+' UNION ALL SELECT 'A-' UNION ALL SELECT 'B+' UNION ALL
SELECT 'B-' UNION ALL SELECT 'AB+' UNION ALL SELECT 'AB-' UNION ALL SELECT 'O+' UNION ALL SELECT 'O-') AS tipos
WHERE NOT EXISTS (SELECT 1 FROM TipoSanguineo);

-- Tabela de formulário de doadores
CREATE TABLE IF NOT EXISTS form_sangue (
    id_doador INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    idade INT NOT NULL,
    id_tipo INT NOT NULL,
    bebida_alcolica ENUM('Sim', 'Não') NOT NULL,
    fez_parto ENUM('Sim', 'Não') NOT NULL,
    gestante_amamentando ENUM('Sim', 'Não') NOT NULL,
    usou_drogas ENUM('Sim', 'Não') NOT NULL,
    medicamento ENUM('Sim', 'Não') NOT NULL,
    possui_doenca ENUM('Sim', 'Não') NOT NULL,
    tempo_apos_11 ENUM('Sim', 'Não') NOT NULL,
    peso_mais_50kg ENUM('Sim', 'Não') NOT NULL,
    contato_doenca ENUM('Sim', 'Não') NOT NULL,
    problema_saude ENUM('Sim', 'Não') NOT NULL,
    observacoes VARCHAR(250),
    FOREIGN KEY (id_tipo) REFERENCES TipoSanguineo(id_tipo)
);
SELECT 
    f.id_doador,
    f.nome,
    f.idade,
    t.tipo AS tipo_sanguineo,
    f.bebida_alcolica,
    f.fez_parto,
    f.gestante_amamentando,
    f.usou_drogas,
    f.medicamento,
    f.possui_doenca,
    f.tempo_apos_11,
    f.peso_mais_50kg,
    f.contato_doenca,
    f.problema_saude,
    f.observacoes
FROM form_sangue f
JOIN TipoSanguineo t ON f.id_tipo = t.id_tipo;

