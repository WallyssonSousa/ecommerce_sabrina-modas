function abrirWhatsapp(){
    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var telefone = document.getElementById('telefone').value;
    var assunto = document.getElementById('assunto').value;
    var url = "https://wa.me/5511997135477?text=" // número

    + "Mensagem da página de Contatos" + "%0a" // Mensagem personalizada
    + "Nome: " + nome + "%0a" // Dados do formulÃ¡rio
    + "E-mail: " + email + "%0a"
    + "Telefone: " + telefone + "%0a" 
    + "Assunto: " + assunto; "%0a" 

    window.open(url, '_blank').focus();
}

/* function enviarMensagemContato(){
    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var telefone = document.getElementById('telefone').value;
    var assunto = document.getElementById('assunto').value;
    var mensagem = document.getElementById('mensagem').value;
    var url = "https://wa.me/5511997135477?text=";

    + "Mensagem da página de Contatos" + "%0a"
    + "Nome do Cliente: " + nome + "%0a" 
    + "Email: " + email + "%0a" 
    + "Telefone: " + telefone + "%0a" 
    + "Assunto: " + assunto + "%0a" 

    window.open(url, '_blank').focus();
} */