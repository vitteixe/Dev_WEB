let Bike1 = {
    cor: 'Branca',
    marcha: 'única',
    aro: 12,
    pedalar(){console.log('Método pedalar executada!')}
}

let Bike2 = {
    cor: 'Vermelha',
    marcha: '18',
    aro: 26,
    pedalar(){console.log('Método pedalar executada!')}
}

console.log(Bike1);
console.log(Bike2);

//------------------------------------

let bikeFactory = (cor, marcha, aro) => {
    return {
        cor,
        marcha,
        aro,
        pedalar(){console.log('Método pedalar executada!')}
    }
}

let Bike3 = bikeFactory('vermelha', '18', 26);
console.log(Bike3);

console.log(`Cor: ${Bike3.cor}`)

let Bike4 = bikeFactory('preta', '21', 29);
console.log(Bike4);