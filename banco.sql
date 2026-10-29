drop database bellaspa;

create database bellaspa;

use bellaspa;

create table artigos (
    idartigo int primary key auto_increment,
    titulo varchar (30),
    autor varchar (30),
    foto varchar (30), //*rem blob*//
        artigo text
    );
drop table servicos;
create table servicos (
    idservico int primary key auto_increment,
    titulo varchar (30),
    foto varchar (30),
        servico text
    );

create table cliente (
    idcliente int primary key auto_increment,
    nome varchar(60),
    email varchar(60), 
    dtnasc date,
    cpf varchar(14) unique,
    idservico int,
    idend int,
    idpet int,
    foreign key (idservico) references servico(idservico),
    foreign key (idend) references endereco(idend),
    foreign key (idpet) references pet(idpet)
);

create table endereco (
idend int primary key auto_increment,
endereco varchar(250),
numero varchar (5),
complemento varchar (250),
bairro varchar(250),
cep varchar(10),
estado char(2),
cidade varchar (80),
id_cliente int,
foreign key (id_cliente) references cliente(idcliente)
on delete cascade # deleta o cliente e o endereco na sequencia
);

create table pet (
    idpet int primary key auto_increment,
    nomepet varchar (30),
    raca varchar (30),
    idade char(2),
    fotopet varchar (30),
    descpet text,
    id_cliente int,
foreign key (id_cliente) references cliente(idcliente)
on delete cascade # deleta o cliente e o endereco na sequencia
    );

create table newsletter(
idcliente int primary key auto_increment,
nome varchar(50),
email varchar(50),
telefone varchar(18)
);

create table usuarios(
idusuario int primary key auto_increment,
login varchar (30) unique, # campo de valor unico
senha varchar (32),
perfil enum ('adm', 'user')
);

insert into usuarios values (null, 'admin', md5('123'), 'adm');
insert into usuarios values (null, 'usuario', md5('abc'), 'user');
