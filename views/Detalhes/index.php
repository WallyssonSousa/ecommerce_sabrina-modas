<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabrina Modas | Pagamentos</title>
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./detalhes.css">
    <style>
        .container-img {
            position: relative;
            left: 35px
        }

        .container-detalhes {
            width: 80%;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: start;
            border: 1px solid #F1F0FA;
            padding: 2rem;
        }

        .container-detalhesDoProduto {
            display: flex;
            flex-direction: column;
            align-items: start;
            text-align: start;
            position: relative;
            left: 65px;
        }

        .container-nome-produto,
        .container-detalhes-produto,
        .container-categoria-produto,
        .container-marca-produto,
        .container-preco-produto {
            display: flex;
            flex-direction: column;
            align-items: start;
            justify-content: start;
            margin: 15px 0;
        }

        .container-nome-produto h3,
        .container-detalhes-produto h3,
        .container-categoria-produto h3,
        .container-marca-produto h3,
        .container-preco-produto h3 {
            font-weight: 600;
            font-size: 18px;
            color: #000;
        }

        .nome-produto,
        .detalhes-produto,
        .categoria-produto,
        .marca-produto,
        .preco-produto {
            margin: 5px 0;
            text-align: start;
            font-weight: 400;
        }

        .preco-produto {
            font-weight: 500;
            color: #FFA7DE;
            font-size: 16px;
        }

        .detalhes-produto {
            width: 70%;
        }

        .img-detalhes {
            width: 80%;
            border: 1px solid #F8F7FC;
            border-radius: 5px;
        }

        @media(max-width: 900px) {

            .container-img{
                position: relative;
                left: 0;
            }

            .container-detalhes {
                display: flex;
                flex-direction: column;
            }

            .container-detalhesDoProduto {
                display: flex;
                flex-direction: column;
                align-items: start;
                text-align: start;
                position: relative;
                left: 0px;
            }

            .detalhes-produto {
                width: 100%;
            }

        }
    </style>
</head>

<body>
    <header class="header">
        <a href="../../index.php">
            <img src="../../img/logo.png" alt="logo" class="logo-header">
        </a>
    </header>

    <main class="main">
        <div class="container-detalhes">
            <div class="container-img">
                <img class="img-detalhes" src="../../img/produtos/produto1.png" alt="imagem-produto">
            </div>
            <div class="container-detalhesDoProduto">
                <div class="container-nome-produto">
                    <h3>Nome do Produto </h3>
                    <p class="nome-produto">Conjunto Planet Girls</p>
                </div>
                <div class="container-detalhes-produto">
                    <h3>Detalhes do Produto </h3>
                    <p class="detalhes-produto">Conjunto da Planet Girls para teste de listagem de produtos, pesquisa e
                        etc.
                    </p>
                </div>
                <div class="container-categoria-produto">
                    <h3>Categoria do Produto </h3>
                    <p class="categoria-produto">Teste</p>
                </div>
                <div class="container-marca-produto">
                    <h3>Marca do Produto </h3>
                    <p class="marca-produto">Planet Girls</p>
                </div>
                <div class="container-preco-produto">
                    <h3>Preço do Produto </h3>
                    <p class="preco-produto">R$ 180.00</p>
                </div>

            </div>
        </div>
    </main>
</body>

</html>