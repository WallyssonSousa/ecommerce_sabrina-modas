function mostrarSenha(){
    const senha = document.getElementById('senha');
    senha.type = senha.type === "password" ? "text" : "password"; 

    const confirmarSenha = document.getElementById('confirmarSenha');
    confirmarSenha.type = confirmarSenha.type === "password" ? "text" : "password";
}