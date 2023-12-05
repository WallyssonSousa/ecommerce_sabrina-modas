function abrirWhatsapp(){
    var produto = document.getElementById('nome_produto').value;
    var quantidade = document.getElementById('quantidade').value;
    var valor = document.getElementById('valor_total').value;
    var nome = document.getElementById('nome').value;
    var telefone = document.getElementById('telefone').value;
    var email = document.getElementById('email').value;
    var cep = document.getElementById('cep').value;
    var endereco = document.getElementById('endereco').value;
    var numero = document.getElementById('numero').value;
    var cidade = document.getElementById('cidade').value;
    var estado = document.getElementById('estado').value;
    var url = "https://wa.me/5511997135477?text=" // número

    + "Nota fiscal" + "%0a"
    + "===============" + "%0a" // Mensagem personalizada
    + "Produtos: " + "%0a"
    + produto + "(" + quantidade + ")" + "%0a"
    + "Valor final: " + valor + ",0" + "%0a"
    + "===============" + "%0a"
    + "Dados do Cliente e Entrega" + "%0a"
    + "Nome: " + nome + "%0a" // Dados do formulÃ¡rio
    + "Telefone: " + telefone + "%0a"
    + "Email: " + email + "%0a" 
    + "Cep: " + cep + "%0a" 
    + "Endereço: " + endereco + "%0a" 
    + "Numero: " + numero + "%0a" 
    + "Cidade: " + cidade + "%0a" 
    + "Estado: " + estado + "%0a" 

    window.open(url, '_blank').focus();
}