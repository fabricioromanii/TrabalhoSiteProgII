const [...menuItens] = document.querySelectorAll('.altura_js');
menuItens.forEach(item => {item.addEventListener("click", AlteraALturaClick);})
const textobanner = document.querySelector(".button-avaliacao");
textobanner.addEventListener("click", AlteraALturaClick);

function AlteraALturaClick(event) {
    event.preventDefault();
    const elemento = event.target;
    const id = elemento.getAttribute('href');
    const section = document.querySelector(id).offsetTop;
    window.scroll({
        top: section - 120,
        behavior: "smooth",
    });
    checkbox.checked = false;
    minhasopcoesdemenu.style.left = "-100%";
}