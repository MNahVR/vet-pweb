CREATE TABLE cliente(
    nome varchar(200),
    email varchar(50) unique,
    senha varchar(50)
);

CREATE TABLE veterinario(
    nome varchar(200),
    email varchar(50) unique,
    senha varchar(50)
);

CREATE TABLE animal(
    id integer not null primary key auto_increment,
    nome varchar(100),
    raca varchar(30),
    idade int,
    doencas varchar(200),

);