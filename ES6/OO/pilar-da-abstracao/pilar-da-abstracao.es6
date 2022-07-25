//modelo da objeto
class ContaBancaria {
    //agencia
    //numeroConta
    //saldo
    //limite

    //CONSTRUCTOR serve para definir os atributos do objeto ContaBancaria
    constructor(){
        this.agencia = 1075;
        this.numeroConta = 8351125;
        this.saldo = 50;
        this.limite = 450;
    }

    //Definição dos MÉTODOS do objeto ContaBancaria
    depositar(valorDeposito){
        this.saldo += valorDeposito;
    }

    sacar(valorSaque){
        this.saldo -= valorSaque;
    }

    consultarSaldo(){
        return this.saldo;
    }
}

//Criando objetos
let x = new ContaBancaria();
let y = new ContaBancaria();


console.log(`O saldo da conta X é R$${x.consultarSaldo()}`);

x.depositar(450);
console.log(`
O saldo da conta X é R$${x.consultarSaldo()}`);

x.sacar(320.45);
console.log(`
O saldo da conta X R$${x.consultarSaldo()}`);



console.log(`
O saldo da conta Y é de R$${y.consultarSaldo()}`);