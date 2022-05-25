
var height = window.screen.availHeight;

var width = window.screen.availWidth;

/*
document.write('A altura do navegador é: ' + height + '<br>');
document.write('A largura do navegador é: ' + width);
*/

if(width <= 500){
    document.write('Lógica para impressão versão mobile');
} else{
    document.write('Lógica para impressão versão web');
}