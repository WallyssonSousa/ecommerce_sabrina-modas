function scrollToTop() {
    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth",
    });
}

const footer = document.querySelector(".footer");
const button = document.querySelector(".btn-voltar-topo");

window.addEventListener("scroll", function () {
    if (window.pageYOffset >= footer.getBoundingClientRect().top) {
        button.style.display = "block";
    } else {
        button.style.display = "none";
    }
});