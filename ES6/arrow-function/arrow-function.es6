/*
let quadrado = function(x){
    return x * x;
}


let quadrado = x => x * x //return implícito 

document.write(quadrado(3));



let parOuImpar = numero =>{
    if(numero % 2 === 0){
        return "par"
    }else {
        return "impar"
    }
}
*/

let parOuImpar = numero => numero % 2 === 0 ? `O número ${numero}, é par` : `O número ${numero}, é impar` //return implícito


console.log(parOuImpar(987))
