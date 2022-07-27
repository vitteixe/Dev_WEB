let pessoa= {
    nome: 'Katarina',
    idade: 23
}

console.log(pessoa);

//-----------------------------

pessoa.sexo = 'Feminino';

console.log(pessoa);

pessoa.dizerOi = () => console.log(`Olá, eu sou a ${pessoa.nome}, tudo bem?`);

pessoa.dizerOi()