CREATE DATABASE fluxo_vital;
USE fluxo_vital;

-- Tabela de usuários genérica (base inicial)
CREATE TABLE usuarios (
id int auto_increment primary key, 
email varchar(80) unique not null, 
senha varchar(200) not null, 
tipo ENUM('doador', 'instituicoes') not null, 
data_cadastro timestamp default current_timestamp 
);

-- Tabela de cadastro referente aos doadores 
CREATE TABLE doadores (
id int auto_increment primary key,
usuario_id int not null, 
nome varchar(200),
cpf varchar(14),
idade int,
telefone varchar(20),
endereco text, 
foreign key (usuario_id) references usuarios(id) on delete cascade 
);

-- Tabela de cadastro referente as instituições 
CREATE TABLE instituicoes (
id int auto_increment primary key,
usuario_id int not null, 
nome_instituicao varchar(100),
cnpj varchar(20),
telefone varchar(20),
endereco TEXT,
responsavel varchar(100),
foreign key (usuario_id) references usuarios(id) on delete cascade 
);


