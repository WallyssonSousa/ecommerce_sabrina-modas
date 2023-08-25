// Função para mostrar/ocultar o menu quando o ícone for clicado
document.querySelector('.menu-icon').addEventListener('click', function() {
  document.querySelector('nav.menu').classList.toggle('show');
});

const chk = document.getElementById('chk')

chk.addEventListener('change', () => {
  document.body.classList.toggle('dark')
})