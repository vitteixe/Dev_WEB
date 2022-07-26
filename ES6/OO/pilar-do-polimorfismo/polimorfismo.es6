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

class Avestruz extends Passaro{
    constructor(bico, cor, tamanho, peso){
        super(bico, cor, tamanho, peso);
    }

    enterrarCabeca(){
        console.log('Enterrando a cabeça');
    }

    //sobreescrevendo o método do objeto pai(PASSARO)
    voar(){
        console.log('Não sabe voar');
    }
}

let papagaio = new Papagaio(true, "verde", 30, 465);
console.log(papagaio);

let loro = new Papagaio(false, "esmeralda", 65, 570);
console.log(loro);

loro.voar()


let avestruz = new Avestruz('Grande', 'branco e preto', 250, 15000);
console.log(avestruz)
avestruz.enterrarCabeca();
avestruz.voar();