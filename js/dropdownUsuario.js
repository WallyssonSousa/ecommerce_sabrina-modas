const dropdown = document.querySelector(".dropdown");

dropdown.addEventListener("mouseenter", () => {
  dropdown.querySelector(".dropdown-content").style.display = "block";
});