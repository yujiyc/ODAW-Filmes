create database horafilme;
use horafilme;

create table Ator(
    id varchar(20) primary key,
    nome varchar(50),
    dataNascimento varchar(20),
    sexo varchar(20)
);

create table filme(
    id varchar(20) primary key,
    nome varchar(50),
    nota double precision,
    ano int,
    elenco ator[]
);

create table usuario(
    email varchar(50),
    senha varchar(30),
    filmes filme[]
);