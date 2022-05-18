var listaFuncionarios = ['Viviane','Roberto', 'Lucas', 'Miguel', 'Fernanda'];


var f = function(valor,indice){
    console.log(valor, indice);
}

listaFuncionarios.forEach(f);



/*
console.log(listaFuncionarios);
document.write(listaFuncionarios[2] + '<br>');

listaFuncionarios.forEach(function(valor, indice, array){
    
    console.log('Índice: ' + indice + ' | Valor: ' + valor);

    if(valor == 'Lucas'){
        array[indice] = 'um novo valor'
    }

    console.log(array)

}) 
    

document.write(listaFuncionarios[2] + '<br>');
*/