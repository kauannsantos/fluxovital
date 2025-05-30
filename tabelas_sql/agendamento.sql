USE fluxovital;

-- Criação da tabela de agendamentos
CREATE TABLE agendamento (
id_agendamento INT AUTO_INCREMENT PRIMARY KEY, -- Chave primária, identificador único de cada agendamento
nome_paciente VARCHAR(100) NOT NULL, -- Nome completo do paciente que está realizando o agendamento
rg VARCHAR(20) NOT NULL, -- Documento de identificação do paciente
especialidade VARCHAR(50) NOT NULL COMMENT 'Exemplo: Sangue, Medula, Leite Materno', -- Especialidade médica 
estado VARCHAR(50) NOT NULL, -- Estado onde o atendimento será realizado (limitado ao Maranhão, no projeto)
cidade VARCHAR(100) NOT NULL, -- Cidade onde o atendimento ocorrerá
hospital VARCHAR(100) NOT NULL, -- Nome do hospital ou instituição responsável pelo atendimento
turno ENUM('Manhã', 'Tarde', 'Noite') NOT NULL, -- Turno do agendamento: manhã, tarde ou noite
forma_contato ENUM('Telefone', 'Email', 'WhatsApp') NOT NULL, -- Forma preferencial de contato com o paciente
data_agendamento DATE NOT NULL, -- Data marcada para o agendamento
hora_agendamento TIME NOT NULL -- Horário exato do agendamento
);

-- Consulta para listar todos os agendamentos com detalhes
SELECT 
id_agendamento,            
nome_paciente,             
rg,                         
especialidade,             
estado,                     
cidade,                    
hospital,                   
turno,                      
forma_contato,              
data_agendamento,          
hora_agendamento            
FROM 
agendamento;                
