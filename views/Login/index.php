<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabrina Modas | Login</title>
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./login.css">
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
            <form action="" class="formulario">

                <div class="container-logo-form">
                    <img class="logo-form" src="../../img/logo.png" alt="logo">
                </div>

                <div class="input-wrapper">
                    <input class="input-box" type="text" placeholder="Nome" required>
                    <span class="underline"></span>
                </div>

                <div class="input-wrapper">
                    <input class="input-box" type="email" placeholder="E-mail" required>
                    <span class="underline"></span>
                </div>

                <div class="input-wrapper">
                    <input class="input-box" type="password" placeholder="Senha" id="senha" required>
                    <div id="icon" onclick="mostrarSenha()"></div>
                    <span class="underline"></span>
                </div>

                <div class="container-button-form">
                    <div class="container-button-form--header">
                        <button class="button-login">Entrar</button>
                        <a class="button-esqueci-senha" href="../RecuperarSenha/index.php">Esqueci senha</a>
                    </div>

                    <div class="container-hr">
                        <hr class="hr">
                    </div>

                    <div class="container-button-form--footer">
                        <a href="../Cadastro/index.php" class="button-criar-conta">Criar Conta</a>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <script src="../../js/modoNoturno.js"></script>
    <script src="../../js/mostrarSenha.js"></script>
</body>

</html>