//contexto spread (espalhar);

//string
let tituloArtigo = 'Como utilizar o operador rest/spread';

console.log(tituloArtigo);
console.log(...tituloArtigo);
console.log([...tituloArtigo]);

//arrays
let listaCursos1 = [
    'NodeJS e MongoDB', 'ES6, TypeScript e Angular 4'
];
let listaCursos2 = [
    'Multiplataformas Android/IOS', 'Introdução ao GNU/Linux'
];
let listaCursosCompleto = [
    ...listaCursos1, 'Web Completo', 'Android Completo',...listaCursos2
];

console.log(listaCursosCompleto);

//objeto
let pessoa = {
    nome: 'João',
    idade: 27
}

let clone = {
    endereco: 'Rua Abc',
    ...pessoa
}

console.log(clone)

