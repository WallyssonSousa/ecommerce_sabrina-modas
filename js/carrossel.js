const slider = document.querySelector('#slider');
const slides = slider.querySelectorAll('.slide');
const activeSlide = slides[0];

// Atribui a classe active ao primeiro slide
activeSlide.classList.add('active');

// Define um intervalo para passar para o próximo slide
const interval = setInterval(() => {
  // Atualiza o índice do slide atual
  let currentSlideIndex = slides.indexOf(activeSlide);

  // Verifica se o slide atual é o último
  if (currentSlideIndex === slides.length - 1) {
    // Define o índice do slide atual como o primeiro
    currentSlideIndex = 0;
  } else {
    // Define o índice do slide atual como o próximo
    currentSlideIndex++;
  }

  // Mostra o slide atual
  slides[currentSlideIndex].classList.add('active');
  slides[currentSlideIndex - 1].classList.remove('active');
}, 5000);

// Remove o intervalo quando o usuário clicar no botão
slider.addEventListener('click', () => {
  clearInterval(interval);
});