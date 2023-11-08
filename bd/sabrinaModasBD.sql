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
values (1, 'Blusa e Short', 
'Blusa e Short para teste de listagem de produtos, pesquisa e etc.', 
'https://lh3.googleusercontent.com/pw/ADCreHe9ShgEfB9tSl8dSmn4uBxc4_AS2gYtC63J-8SdrIvCkKFV_UTqdPubeaKZhexk6OP6cdSnN0kCTroueIaMdTGntPOZLKgk2aAS_dz4SZy9y39G4cqgOWHEPVYxQd_sdKmXTJnYf5Dvem27X_h095Q=w322-h566-s-no-gm?authuser=1',  
'Teste', 'não definida', 'Planet Girls', 80.0) ;


/* 

https://lh3.googleusercontent.com/pw/ADCreHe0yfkfEIlUeykedPCzMz4dgNUuhtV4OXnj-1JUla5wl9VabKu29rjIPpTqdWCyGftkE-bnFF3vWQTSahoH3uLHiS_GoygWqWAXveQi3XFMElpNIKuwCfkr-czRK4KluyNWdmDlv1f3-Ckp5VYH7tc=w347-h566-s-no-gm?authuser=0 
https://lh3.googleusercontent.com/pw/ADCreHf1uLd6lyN-lmJ23-uEWGFWA15cPAuepui57IWD4avyq55rRkeUl1jbZNkwmls1Ob3Q7nh6NYtIRncqgl6sjmqGYhDpErnyIz3sF2FiMeB9yjBTfgh6Tm_ZM6vgrpo3pC89fS8eGy2ODkfaB98AGR0=w400-h567-s-no-gm?authuser=1
https://lh3.googleusercontent.com/pw/ADCreHdIXJxkm-Pdx0hSwiG6vn_SyWjcNHj6Kdwl786GDuOCwpbin1im1u9ni47nwPIQj03adFbctBhTjMMIAHJBVcOe5BYaiUAhf-AHAOnv2ooMkP7b1MW8XjXk7vMtS4thWatgZOq6bYttS51TVS6EyXs=w322-h566-s-no-gm?authuser=1
https://lh3.googleusercontent.com/pw/ADCreHe9ShgEfB9tSl8dSmn4uBxc4_AS2gYtC63J-8SdrIvCkKFV_UTqdPubeaKZhexk6OP6cdSnN0kCTroueIaMdTGntPOZLKgk2aAS_dz4SZy9y39G4cqgOWHEPVYxQd_sdKmXTJnYf5Dvem27X_h095Q=w322-h566-s-no-gm?authuser=1

*/



select * from produtos;