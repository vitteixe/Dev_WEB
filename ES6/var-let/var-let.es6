//3 escopos: GLOBAL, FUNÇÃO E BLOCO

var serie = "Friends";

{
    let serie = "THE WALKING DEAD";   // caso seja declarado como VAR, a variável irá para o escopo global
    console.log('Dentro do bloco: ' + serie)
}

console.log('Fora do bloco: ' + serie)