<?php

session_start();

include_once('../connection/conexao.php');

if(!empty($_GET['id_usuario']))
{
    $id = $_GET['id_usuario'];
    $sqlSelect = "SELECT * FROM usuarios WHERE id_usuario=$id";
    $result = $conexao->query($sqlSelect);
    if($result->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result))
        {
            $nome = $user_data['nome_usuario'];
            $email = $user_data['email_usuario'];
            $senha = $user_data['senha'];
        }
    }
    else
    {
        
    }
}
else
{
    
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabrina Modas | Editar</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        :root {
            --fontPrincipal: 'Rubik', sans-serif;
            --corTextPrincipal: #393939;
            --corPrimaria: #ffffff;
            --corRosa: #FFA7DE;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            font-family: var(--fontPrincipal);
            list-style: none;
            overflow-x: hidden;
        }


        body {
            background-color: #fafafa;
            color: #2a2c2b;
            transition: background 0.8s linear;
            text-decoration: none;
        }

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
                color: #393939;
            }

            .button-esqueci-senha {
                color: var(--corPrimaria);
            }
        }

        header {
            margin: 1em 3em;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .container-buttonVoltar {
            background-color: transparent;
            border: 1px solid #FFA7DE;
            padding: 10px;
            border-radius: 4px;
        }

        .button-voltar {
            color: #FFA7DE;
            font-weight: 400;
        }

        .container-buttonVoltar:hover {
            opacity: 0.7;
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

        /**/

        .main {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container-form-cadastro {
            margin-top: 1rem;
        }

        .formulario {
            display: flex;
            flex-direction: column;
            text-align: start;
            border: 1px solid #F1F0FA;
            border-radius: 2px;
            padding: 2rem 4rem;
        }

        .container-logo-form {
            display: grid;
            place-items: center;
        }

        .logo-form {
            width: 135px;
            position: relative;
            bottom: 0.5rem;
        }

        .form-titulo {
            text-align: center;
            position: relative;
            bottom: 2rem;
            font-weight: 500;
        }

        .input-wrapper {
            position: relative;
            width: 200px;
            margin: 10px auto;
        }

        .input-box {
            font-size: 16px;
            padding: 10px 0;
            border: none;
            border-bottom: 2px solid #F1F0FA;
            color: var(--corTextPrincipal);
            width: 100%;
            background-color: transparent;
            transition: border-color 0.3s ease-in-out;
        }

        .underline {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: var(--corRosa);
            transform: scaleX(0);
            transition: transform 0.3s ease-in-out;
        }

        .input-box:focus {
            border-color: var(--corRosa);
            outline: none;
        }

        .input-box:focus+.underline {
            transform: scaleX(1);
        }

        #icon {
            background: url('../img/olho-aberto.png');
            width: 24px;
            height: 24px;
            position: absolute;
            left: 10.5rem;
            bottom: 0.5rem;
            cursor: pointer;
            background-size: cover;
        }

        .container-button-form {
            display: flex;
            flex-direction: column;
        }

        .container-button-form--header {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 1.5em 0;
        }

        .button-cadastro {
            width: 50%;
            display: flex;
            justify-content: center;
            position: relative;
            background-color: #FFA7DE;
            color: #ffffff;
            font-weight: 400;
            border: none;
            padding: 12px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 14px;
            transition: 0.5s all;
        }

        .button-cadastro:hover {
            background-color: #f589cc;
        }
    </style>
</head>

<body>
    <header>
        <div class="container-buttonVoltar">
            <a href="administrador.php" class="button-voltar">Volta</a>
        </div>
        <div>
            <label class="switch">
                <input type="checkbox" checked="checked" id="chk" />
                <span class="slider"></span>
            </label>
        </div>
    </header>

    <main class="main">

        <div class="container-form-cadastro">
            <form action="" method="POST" class="formulario">

                <div class="container-logo-form">
                    <img class="logo-form" src="../img/logo.png" alt="logo">
                </div>

                <div class="input-wrapper">
                    <input class="input-box" type="text" name="nome" value="<?php echo $nome; ?>" placeholder="Nome" required>
                    <span class="underline"></span>
                </div>

                <div class="input-wrapper">
                    <input class="input-box" type="email" name="email" value="<?php echo $email; ?>" placeholder="E-mail" required>
                    <span class="underline"></span>
                </div>

                <div class="input-wrapper">
                    <input class="input-box" type="password" name="senha" value="<?php echo $senha; ?>" placeholder="Senha" id="senha" required>
                    <span class="underline"></span>
                </div>

                <div class="container-button-form">
                    <div class="container-button-form--header">
                        <input type="submit" name="submit" value="Cadastrar" class="button-cadastro">
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>

</html>