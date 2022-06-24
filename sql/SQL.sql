create database bd_nike;
use bd_nike;

create table usuario(
	id_usuario int not null auto_increment,
    email varchar(100) unique,
    senha varchar(32),
    primary key (id_usuario)
);

/*
insert into usuario(email,senha) values('lorena.martins.farias@hotmail.com', md5('123456789'));*/
select * from usuario;

create table produto(
	id_produto int not null auto_increment,
    fk_usuario int not null,
    nome varchar(100),
    quantidade varchar(3),
    tamanho varchar(3),
    preco float,
    primary key (id_produto),
    foreign key (fk_usuario) references usuario(id_usuario)
);