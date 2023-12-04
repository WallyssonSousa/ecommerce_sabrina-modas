<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabrina Modas | Login</title>
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./login.css">
    <style>
        body.dark{
            .input-box::placeholder{
                color: #6a6a6a;
            }

            .hr{
                border-color: #393939;
            }
        }

        .container-form-login{
            margin-bottom: 2em;
        }
    </style>
</head>

<body>

    <header>
        <div class="container-buttonVoltar">
            <a href="../../index.php" class="button-voltar">Volta</a>
        </div>
        <div>
            <label class="switch">
                <input type="checkbox" checked="checked" id="chk" />
                <span class="slider"></span>
            </label>
        </div>
    </header>

    <main class="main">

        <div class="container-form-login">
            <form action="testeLogin.php" method="POST" class="formulario">

                <div class="container-logo-form">
                    <img class="logo-form" src="../../img/logo.png" alt="logo">
                </div>

                <div class="input-wrapper">
                    <input class="input-box" type="text" name="nome" placeholder="Nome do usuário" required >
                    <span class="underline"></span>
                </div>

                <div class="input-wrapper">
                    <input class="input-box" type="text" name="email" placeholder="E-mail" required >
                    <span class="underline"></span>
                </div>

                <div class="input-wrapper">
                    <input class="input-box" type="password" name="senha" placeholder="Senha" required >
                    <span class="underline"></span>
                </div>
                <div class="container-button-form">
                    <div class="container-button-form--header">
                    <input class="button-login" type="submit" name="submit" value="Login">
                        <a class="button-esqueci-senha" href="../RecuperarSenha/index.php">Esqueci senha</a>
                    </div>

                    <div class="container-hr">
                        <hr class="hr">
                    </div>

                    <div class="container-button-form--footer">
                        <a href="../Cadastro/cadastro.php" class="button-criar-conta">Criar Conta</a>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <script src="../../js/modoNoturno.js"></script>
    <script src="../../js/mostrarSenha.js"></script>
</body>

</html>