create database sabrinaModas;

use sabrinaModas;

create table produtos(
 id_produto int auto_increment primary key,
 nome_produto varchar(200) not null,
 descricao_produto varchar(300) not null,
 imagem_produto varchar(800) not null,
 categoria_produto varchar(100) not null,
 cor_produto varchar (50) not null,
 marca_produto varchar (50) not null,
 preco_produto decimal(15, 2) not null 
);

create table usuarios(
	id_usuario int auto_increment primary key, 
    nome_usuario varchar(500), 
    email_usuario varchar(500), 
    senha varchar (180)
);

create table carrinho(
	id_carrinho int auto_increment primary key, 
    imagem_produto varchar(800) not null,
    nome_produto varchar(200) not null,
    preco_produto decimal(15, 2) not null, 
    quantidade int not null
);

create table checkout(
	id_checkout int auto_increment primary key, 
    nome varchar(255) not null,
    telefone varchar(255) not null,
    email varchar(255) not null,
    cep varchar (100) not null, 
    endereco varchar(150) not null,
    numero_endereco varchar(10) not null,
    cidade varchar (100) not null,
    estado varchar(100) not null
);
