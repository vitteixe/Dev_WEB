//Capiturando Altura e Largura do objeto Window.
var height;
var width;

function ajustaTamanhoPalcoJogo(){
    height = window.innerHeight;
    width = window.innerWidth;  

    console.log(height,width);
}

ajustaTamanhoPalcoJogo();

// Posições aleatórias
var positionX = Math.floor(Math.random() * width) - 90; // transformar em número decimal .floor
var positionY = Math.floor(Math.random() * height) - 90;

positionX = positionX < 0 ? 0 : positionX; //se posição for menor que zero; se for recebe 0; se não for recebe ela mesma
positionY = positionY < 0 ? 0 : positionY;

console.log(positionX, positionY);

//criar elemento html
var mosquito = document.createElement('img');
mosquito.src = 'images/mosquito.png';
mosquito.className = tamanhoAleatorio();
mosquito.style.position = 'absolute'
mosquito.style.left = positionX + 'px';
mosquito.style.top = positionY + 'px';

//adicionar 'mosquito' como filho do body
document.body.appendChild(mosquito);


//função para classes de tamanhos diferentes
function tamanhoAleatorio(){
    var classe = Math.floor(Math.random() * 3);
    
    switch(classe){
        case 0:
            return 'mosquito1';

        case 1:
            return 'mosquito2';

        case 2:
            return 'mosquito3';

    }

}