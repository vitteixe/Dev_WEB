class Animal{
    constructor(){
        this.cor = '';
        this.tamanho = null;
        this.peso = null
    }

    dormir(){
        console.log('Dormir');
    }
}

//extends herda o métodos e atributos da classe pai
class Cachorro extends Animal{
    constructor(){
        //é necessário utilizar o super() para herança
        super ();
        this.orelhas = 'Grande e caídas';
    }

    correr(){
        console.log('Correr');
    }

    rosnar(){
        console.log('Rosnar');
    }
}

//extends herda o métodos e atributos da classe pai
class Passaro extends Animal{
    constructor(){
        //é necessário utilizar o super() para herança
        super ();
        this.bico = "Curto";
    }

    voar(){
        console.log('Voar');
    }

}

class Papagaio extends Passaro{
    constructor(){
        super();
        this.sabeFalar = true;
    }

    falar(){
        console.log("Falando")
    }
}

let cachorro = new  Cachorro();
let passaro = new Passaro();
let papagaio = new Papagaio();

/*
papagaio.falar()
cachorro.dormir();
papagaio.voar();
passaro.dormir();
*/
console.log(cachorro);
console.log(passaro);
console.log(papagaio);

