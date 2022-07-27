let Carro = function (){
    this.cor = 'Amarelo';
    this.modelo = 'Chevette';
    this.velocidadeAtual = 0;
    this.velocidadeMaxima = 140;

    this.acelerar = () => {
        //this.velocidadeAtual += 10;

        let velocidade = this.getVelocidadeAtual() + 10;
        this.setVelocidadeAtual(velocidade);
    }

    this.getVelocidadeAtual = () => this.velocidadeAtual;

    this.setVelocidadeAtual = (velocidadeAtual) => {
        this.velocidadeAtual = velocidadeAtual;
    }
}

let carro = new Carro()

console.log(`A velocidade atual é: ${carro.getVelocidadeAtual()}`);


for(var y = 1; y<=10; y++){
    if(carro.velocidadeAtual <= 100){
        carro.acelerar();
        console.log(`A velocidade atual é: ${carro.getVelocidadeAtual()}`);
    }
}



