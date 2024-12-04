document.addEventListener("DOMContentLoaded", function () {
  const dropdown = document.querySelector(".dropdown");

  dropdown.addEventListener("click", function () {
    const menu = this.querySelector(".dropdown-content");

    // Cambiar el estado del menú, mostrando u ocultando
    if (menu.style.display === "block") {
      menu.style.display = "none"; // Ocultar
    } else {
      menu.style.display = "block"; // Mostrar
    }
  });
});
