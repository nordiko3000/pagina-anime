

//variables del buscador
 

 const icon = document.getElementById("icon");
 const ctn = document.getElementById("box");
 const input = document.getElementById("input");
 const cover = document.getElementById("cover");


//funciones del buscador 

document.getElementById("icon").addEventListener("click", mostrar_buscador);

function mostrar_buscador(){
  
  input.style.top="80px";
  
}

//fucniones del carrusel
const carrusel = document.querySelector(".lista");

let maxScrollLeft = carrusel.scrollWidth - carrusel.clientWidth;
let intervalo = null;
let step = 1;
const start = () => {
  intervalo = setInterval(function () {
    carrusel.scrollLeft = carrusel.scrollLeft + step;
    if (carrusel.scrollLeft === maxScrollLeft) {
      step = step * -1;
    } else if (carrusel.scrollLeft === 0) {
      step = step * -1;
    }
  }, 10);
};

const stop = () => {
  clearInterval(intervalo);
};

carrusel.addEventListener("mouseover", () => {
  stop();
});

carrusel.addEventListener("mouseout", () => {
  start();
});

start();


