/*
var lista_frutas = [];

lista_frutas[0] = 'Banana';
lista_frutas[1] = 'Maçã';

/incluir elemento no inicio array
lista_frutas.unshift('Morango');

/incluir elemento no final array
lista_frutas.push('Uva');

/excluir elemento no inicio array
lista_frutas.shift();

/excluir elemento no final array
lista_frutas.pop();


*/

var lista_coisas = []

lista_coisas['frutas'] = []
lista_coisas['pessoas'] = []

lista_coisas['frutas'].push('Banana');
lista_coisas['frutas'].push('Uva');
lista_coisas['frutas'].push('Pera');
lista_coisas['frutas'].unshift('Maracujá');

lista_coisas['pessoas'].push('Vitor');
lista_coisas['pessoas'].push('Julia');
lista_coisas['pessoas'].unshift('Denise');
lista_coisas['pessoas'].push('Katarina');
lista_coisas['pessoas'].push('Leonardo');

console.log(lista_coisas)