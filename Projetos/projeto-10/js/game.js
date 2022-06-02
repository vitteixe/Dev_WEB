ajustaTamanhoPalcoJogo();

//controle de niveis do game
var nivel = window.location.search;
nivel = nivel.replace('?','');    //substituição de todos caracteres '?' -> ''

if (nivel === 'normal'){

    //inserir elemento (mosquito)
    var breedFly = setInterval(function(){
        posicaoRnadomica();
    }, 1500);

} else if (nivel === 'dificil'){
    
    //inserir elemento (mosquito)
    var breedFly = setInterval(function(){
        posicaoRnadomica();
    }, 1000);

} else if (nivel === 'chucknorris'){
    
    //inserir elemento (mosquito)
    var breedFly = setInterval(function(){
        posicaoRnadomica();
    }, 750);

}


//Capiturando Altura e Largura do objeto Window.
var height;
var width;

var lives = 1;


function ajustaTamanhoPalcoJogo(){
    height = window.innerHeight;
    width = window.innerWidth;  

    console.log(height,width);
}


function posicaoRnadomica(){

    //remover mosquito anterior (caso exista)
    if(document.getElementById('mosquito')){
        document.getElementById('mosquito').remove();
        
        //controlando pontos de vida
        if(lives > 3){

            window.location.href = 'game-over.html'

        }else{
            document.getElementById('l' + lives).src='../images/empty-heart.png';
        }
        
        lives++
    }

    // Posições aleatórias
    var positionX = Math.floor(Math.random() * width) - 90; // transformar em número decimal .floor
    var positionY = Math.floor(Math.random() * height) - 90;

    positionX = positionX < 0 ? 0 : positionX; //se posição for menor que zero; se for recebe 0; se não for recebe ela mesma
    positionY = positionY < 0 ? 0 : positionY;

    console.log(positionX, positionY);
    
    //criar elemento html
    var mosquito = document.createElement('img');
    mosquito.src = '../images/mosquito.png';
    mosquito.className = tamanhoAleatorio() + ' ' + ladoAleatorio();
    mosquito.style.position = 'absolute'
    mosquito.style.left = positionX + 'px';
    mosquito.style.top = positionY + 'px';
    mosquito.id = 'mosquito';

    //adicionar 'mosquito' como filho do body
    document.body.appendChild(mosquito);

    //Função de eliminar o mosquito
    mosquito.onclick = function (){
        this.remove()
    }

}


//Cronometro
var time = 15;

document.getElementById('stopwatch').innerHTML = time

var stopwatch = setInterval(function() {

    time -=1;

    if(time < 0){

        clearInterval(stopwatch);   //limpar cronometro e a função de criar mosca
        clearInterval(breedFly);

        window.location.href = 'victory.html'

    } else {
        document.getElementById('stopwatch').innerHTML = time
    }


}, 1000);



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

//Mosquito com lados aleatórios
function ladoAleatorio(){
    var classe = Math.floor(Math.random() * 2);
    
    switch(classe){
        case 0:
            return 'sideA';

        case 1:
            return 'sideB';
    }

}