function typeWrite(element) {

    const textoArray = element.innerHTML.split("");
    element.innerHTML = "";

    textoArray.forEach((letra, i) => {
        setTimeout(function() {
            element.innerHTML += letra;
        }, 90 * i);
    });

}

const titulo = document.querySelector(".textoBanner");
typeWrite(titulo);