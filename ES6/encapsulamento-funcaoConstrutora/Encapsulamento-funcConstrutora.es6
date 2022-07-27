let Carro = function (){
    this.cor = 'Amarelo';
    this.modelo = 'Chevette';
    this.velocidadeAtual = 0;
    this.velocidadeMaxima = 180;

    this.acelerar = () => {
        let velocidade = this.getVelocidadeAtual() + 50;

        if(velocidade > this.velocidadeMaxima){
            velocidade = this.velocidadeMaxima
        }

        this.setVelocidadeAtual(velocidade);
    }

    this.getVelocidadeAtual = () => this.velocidadeAtual;

    this.setVelocidadeAtual = (velocidadeAtual) => {
        this.velocidadeAtual = velocidadeAtual;
    }
}


let carro = new Carro()

console.log(carro.velocidadeAtual)
carro.acelerar()
console.log(carro.velocidadeAtual)
carro.acelerar()
console.log(carro.velocidadeAtual)
carro.acelerar()
console.log(carro.velocidadeAtual)
carro.acelerar()
console.log(carro.velocidadeAtual)
carro.velocidadeMaxima = 280
carro.acelerar()
console.log(carro.velocidadeAtual)


let Carro2 = function (){
    
    var velocidadeMaxima = 180;
    var kmRodados = 0
    
    this.cor = 'Amarelo';
    this.modelo = 'Chevette';
    this.velocidadeAtual = 0;

    this.acelerar = () => {
        let velocidade = this.getVelocidadeAtual() + 50;

        if(velocidade > velocidadeMaxima){
            velocidade = velocidadeMaxima
        }

        this.setVelocidadeAtual(velocidade);

        setKmRodados(0.07)
        console.log(`
        Km rodados: ${kmRodados}`)
    }

    this.getVelocidadeAtual = () => this.velocidadeAtual;

    this.setVelocidadeAtual = (velocidadeAtual) => {
        this.velocidadeAtual = velocidadeAtual;
    }

    var setKmRodados = (km) => {
        kmRodados += km;
    }
}

let carro2 = new Carro2();
console.log(carro2.velocidadeAtual);
carro2.acelerar();
console.log(carro2.velocidadeAtual);
carro2.acelerar();
console.log(carro2.velocidadeAtual);
carro2.acelerar();
console.log(carro2.velocidadeAtual);
carro2.acelerar();
console.log(carro2.velocidadeAtual);
carro2.acelerar();
console.log(carro2.velocidadeAtual);
carro2.acelerar();



/*
console.log(carro)
console.log(carro2)*/