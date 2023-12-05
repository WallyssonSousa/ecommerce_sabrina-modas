<?php

include_once('../../connection/conexao.php');

if (!empty($_GET['id_produto'])) {
    include('../../connection/conexao.php');

    $id = $_GET['id_produto'];

    $sqlSelect = "SELECT * FROM produtos WHERE id_produto=$id";

    $result = $conn->query($sqlSelect);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $nome = $row['nome_produto'];
            $descricao = $row['descricao_produto'];
            $categoria = $row['categoria_produto'];
            $cor = $row['cor_produto'];
            $marca = $row['marca_produto'];
            $preco = $row['preco_produto'];
            $imagem = $row['imagem_produto'];
        }
    }
}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="upload.css">
    <title>Sabrina Modas | Admin Produtos</title>
    <style>
        body.dark {

            background: #2a2c2b;
            color: #fafafa;

            .formulario {
                border: 1px solid var(--corTextPrincipal);
            }

            .input-box {
                border-bottom: 2px solid var(--corTextPrincipal);
                color: var(--corPrimaria);
            }

            .input-box::placeholder {
                color: #5a5a5a;
            }

            .container {
                border: 1px solid #393939;
            }

            .input-file-button {
                border-bottom: 2px solid #393939;
                color: #75757d;
            }

            .table {
                width: 90%;
                border-collapse: collapse;
                border: 1px solid #393939;
                border-radius: 5px;
                margin-top: 3em;
            }

            th {
                padding: 15px 20px;
                text-align: left;
                border: 1px solid #393939;
                font-weight: 500;
            }

            td {
                padding: 15px 20px;
                text-align: left;
                border: 1px solid #393939;
                font-weight: 400;
            }
        }

        .switch {
            font-size: 17px;
            position: relative;
            display: inline-block;
            width: 3.5em;
            height: 2em;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            --background: var(--corRosa);
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: var(--corRosa);
            transition: .5s;
            border-radius: 30px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 1.4em;
            width: 1.4em;
            border-radius: 50%;
            left: 10%;
            bottom: 15%;
            box-shadow: inset 8px -4px 0px 0px var(--corPrimaria);
            background: var(--background);
            transition: .5s;
        }

        input:checked+.slider {
            background-color: var(--corRosa);
        }

        input:checked+.slider:before {
            transform: translateX(100%);
            box-shadow: inset 15px -4px 0px 15px var(--corPrimaria);
        }
    </style>
</head>

<body>

    <header>
        <div class="container-buttonVoltar">
            <a href="../upload/uploadDeProduto.php" class="button-voltar">Voltar</a>
        </div>
        <div>
            <label class="switch">
                <input type="checkbox" checked="checked" id="chk" />
                <span class="slider"></span>
            </label>
        </div>
    </header>
    <main>
        <div class="container">
            <form action="salvarProduto.php" method="POST" enctype="multipart/form-data">
                <div class="input-wrapper">
                    <input class="input-box" type="text" name="nome" placeholder="Nome do Produto"
                        value="<?php echo $nome ?>" required>
                    <span class="underline"></span>
                </div>
                <div class="input-wrapper">
                    <input class="input-box" type="text" name="descricao" placeholder="Descrição do Produto"
                        value="<?php echo $descricao ?>" required>
                    <span class="underline"></span>
                </div>
                <div class="input-wrapper">
                    <input class="input-box" type="text" name="categoria" placeholder="Categoria do Produto"
                        value="<?php echo $categoria ?>" required>
                    <span class="underline"></span>
                </div>
                <div class="input-wrapper">
                    <input class="input-box" type="text" name="cor" placeholder="Cor do Produto"
                        value="<?php echo $cor ?>" required>
                    <span class="underline"></span>
                </div>
                <div class="input-wrapper">
                    <input class="input-box" type="text" name="marca" placeholder="Marca do Produto"
                        value="<?php echo $marca ?>" required>
                    <span class="underline"></span>
                </div>
                <div class="input-wrapper">
                    <input class="input-box" type="number" min="0" name="preco" placeholder="Preço do Produto"
                        value="<?php echo $preco ?>" required>
                    <span class="underline"></span>
                </div>
                <div class="input-wrapper-file">
                    <input class="input-box-file" name="imagem" type="file" value="<?php echo $imagem ?>"
                        accept="image/png, image/jpg, image/jpeg" />
                    <div class="input-file-button">Selecione um Arquivo</div>
                </div>
                <div class="container-button-add">
                    <input type="hidden" name="id" value=<?php echo $id ?>>
                    <input class="button-add" name="salvarProduto" id="salvarProduto" type="submit"
                        value="Salvar produto" />
                </div>
            </form>
        </div>
    </main>

    <script src="../../js/modoNoturno.js"></script>
</body>

</html>