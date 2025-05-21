CREATE TABLE IF NOT EXISTS TipoSanguineo (
    id_tipo INT AUTO_INCREMENT PRIMARY KEY,
    tipo VARCHAR(5) NOT NULL
);

INSERT INTO TipoSanguineo (tipo) VALUES 
('A+'), ('A-'), ('B+'), ('B-'), ('AB+'), ('AB-'), ('O+'), ('O-');
