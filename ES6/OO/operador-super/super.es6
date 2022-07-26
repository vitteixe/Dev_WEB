class Animal{
    constructor(cor, tamanho, peso){
        this.cor = cor;
        this.tamanho = tamanho;
        this.peso = peso;
    }

    dormir(){
        console.log('Dormindo');
    }
}


//extends herda o métodos e atributos da classe pai
class Passaro extends Animal{
    constructor(bico, cor, tamanho, peso){
        //super da acesso ao construtor da classe pai (ANIMAL)
        super (cor, tamanho, peso);
        this.bico = bico;
    }

    voar(){
        console.log('Voar');
    }

}

class Papagaio extends Passaro{
    constructor(sabeFalar, cor, tamanho, peso){
        //super da acesso ao construtor da classe pai (PASSARO)
        super('médio', cor, tamanho, peso);
        this.sabeFalar = sabeFalar;
    }

    falar(){
        console.log("Falando");
    }
}
let passaro = new Passaro();
let papagaio = new Papagaio(true, "verde", 30, 465);
let loro = new Papagaio(false, "esmeralda", 65, 570);

console.log(papagaio);
console.log(loro);
