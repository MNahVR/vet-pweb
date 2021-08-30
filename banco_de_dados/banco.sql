CREATE TABLE usuario(
    id integer not null primary key auto_increment,
    nome varchar(200),
    nomeu varchar(100) unique,
    email varchar(50) unique,
    senha varchar(50)
    endereco varchar(100),
    numero int,
    bairro varchar(50),
    estado varchar(50),
    cidade varchar(50),
    email varchar(50),
    senha varchar(30)
);

CREATE TABLE animais(
    id integer not null primary key auto_increment,
    nome varchar(100),
    tipo varchar(30),
    raca varchar(30),
    idade int,
    nome_dono varchar(100),
    contato varchar(30)

);