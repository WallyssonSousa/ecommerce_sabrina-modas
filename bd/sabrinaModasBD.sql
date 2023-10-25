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

insert into produtos 
values (2, 'Conjunto Teste', 
'Conjunto teste', 
'https://drive.google.com/file/d/18Kr3ISNE2wjNTodbDOs_rpeEaErxFKhr/view?usp=drive_link', 
'Teste', 'preto', 'Planet Girls', 190.0) ;

select nome_produto, imagem_produto, preco_produto from produtos;