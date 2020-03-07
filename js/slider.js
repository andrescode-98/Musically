let slider = document.querySelector(".slider-contenedor")//contiene el slider
let sliderIndividual = document.querySelectorAll(".contenido-slider")//selecciona todos los elementos de contenido slider
let contador = 1;
let width = sliderIndividual[0].clientWidth;
let intervalo = 5500;

window.addEventListener("resize", function(){//Esto hace que sea adaptable a dispositivos moviles
    width = sliderIndividual[0].clientWidth;//si cambian el dispositivo movil de horizontal a vertical se cambia el tamaño
})

setInterval(function(){
    slides();
},intervalo);

function slides(){
    slider.style.transform = "translate("+(-width*contador)+"px)";
    slider.style.transition = "transform .8s";
    contador++;

    if(contador == sliderIndividual.length){
        setTimeout(function(){
            slider.style.transform = "translate(3px)";
            slider.style.transition = "transform 0s";
            contador=1;
        },4000)
    }
}