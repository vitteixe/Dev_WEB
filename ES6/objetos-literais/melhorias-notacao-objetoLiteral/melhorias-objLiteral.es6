let nome = 'Julia';
let idade = 18;
let sexo = 'Feminino';
let profissao = 'Psicologa';

let objeto = {
    nome: nome,
    idade: idade,
    sexo: sexo,
    profissao: profissao,
    exibirResumo: function () {
        console.log(`${this.nome}, ${this.idade} anos, ${this.sexo} é ${this.profissao}`)
    }
}

console.log(objeto)
objeto.exibirResumo();

//--------------------------------

let obj = {
    //nome = nome variável | valor = valor da variavel (TUDO EM UM SÓ)
    nomeTeste: nome,
    idade,
    sexo,
    profissao,
    exibirResumo() {
        console.log(`${this.nomeTeste}, ${this.idade} anos, ${this.sexo} é ${this.profissao}`)
    }
}

console.log(obj)
obj.exibirResumo();