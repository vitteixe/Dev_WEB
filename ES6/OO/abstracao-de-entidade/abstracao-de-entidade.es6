//Software de marcenaria
//cadeira e sofá

/*paradigma procedural
let cadeiras= []

cadeiras[0] = [];
cadeiras[0][`qtdePernas`] = 4;
cadeiras[0][`giratoria`] = false;
cadeiras[0][`cor`] = "azul";

cadeiras[1] = [];
cadeiras[1][`qtdePernas`] = 1;
cadeiras[1][`giratoria`] = true;
cadeiras[1][`cor`] = "vermelha";

function girar_cadeira(indice){
    if(cadeiras[indice]["giratoria"] == true){
        console.log(`girou`);
    } else{
        console.log(`A cadeira não é giratória!`);
    }
}

function adicionar_cadeira(qtdePernas, giratoria, cor){
    let cadeira = [];
    
    cadeira['qtdePernas'] = qtdePernas;
    cadeira['giratoria'] = giratoria;
    cadeira['cor'] = cor;

    cadeiras.push(cadeira)
}

adicionar_cadeira(3, false, 'verde');

console.log(cadeiras);
*/

//paradigma de OO

class Cadeira{
    constructor(qtdePernas, giratoria, cor){
        this.qtdePernas = qtdePernas;
        this.giratoria = giratoria;
        this.cor = cor;
    }

    girarCadeira(){
        if(this.giratoria === true){
            console.log(`girou`);
        } else {
            console.log(`A cadeira não é giratória!`);
        }
    }
}

let cadeiras = []

cadeiras.push(cadeira1 = new Cadeira(4, false, "verde"));
cadeiras.push(cadeira2 = new Cadeira(1, true, "vermelha"));

console.log(cadeiras);



class Sofa{
    constructor(qtdeLugares, cor, reclinavel){
        this.qtdeLugares = qtdeLugares;
        this.cor = cor;
        this.reclinavel = reclinavel;
    }

    reclinarSofa(){
        if(this.reclinavel === true){
            console.log('Ufa! o sofá reclina, hora de descansar!');
        }else {
            console.log('O sofá não é reclinavel');
        }
    }
}

sofa1 = new Sofa(8, "preto", true);
sofa2 = new Sofa(6, "marrom", false);

sofa1.reclinarSofa();