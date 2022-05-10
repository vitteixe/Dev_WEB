var lista_frutas = [];

lista_frutas[0] = 'Banana';
lista_frutas[1] = 'Uva';
lista_frutas[2] = 'Pera';
lista_frutas[3] = 'Maçã';
lista_frutas[4] = 'Goiaba';
lista_frutas[5] = 'Kiwi';

var posicao = lista_frutas.indexOf('morango')

if(posicao === -1){
    console.log('Essa fruta não esta na lista!')
} else {
    console.log('A fruta esta na posição ' + posicao)
}