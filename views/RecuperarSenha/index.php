<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabrina Modas | Recuperar Senha</title>
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./recuperarSenha.css">
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

        <div class="container-form-recuperarSenha">
            <form action="" class="formulario">

                <div class="container-logo-form">
                    <img class="logo-form" src="../../img/logo.png" alt="logo">
                </div>

                <div class="container-titulo">
                    <h4 class="form-titulo">ESQUECI MINHA SENHA</h4>
                </div>

                <div class="input-wrapper">
                    <input class="input-box" type="text" placeholder="Digite seu e-mail" required>
                    <span class="underline"></span>
                </div>

                <div class="container-aviso">
                    <p class="form-aviso">Um e-mail será enviado para a redefinição da senha.</p>
                </div>

                <div class="container-button-form">
                    <div class="container-button-form--header">
                        <button class="button-recuperarSenha">Recuperar Senha</button>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <script src="../../js/modoNoturno.js"></script>
    <script src="../../js/mostrarSenha.js"></script>
</body>

</html>