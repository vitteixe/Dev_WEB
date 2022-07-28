//Contexto Rest (Juntar)

soma = (...number) => {
    let resultado = 0;

    console.log(number);

    number.forEach(valor => resultado += valor);

    return resultado;
}

console.log(`Essa é a soma: ${soma(3, 8, 5, 7, -8, 10, 115)}`);


multiplicacao = (multp, ...param) => {
    console.log(multp);
    let resultado = 0;
    console.log(param)

    param.forEach(valor => resultado += multp * valor);

    return resultado
}

console.log(multiplicacao(5, 7, 12, 3, 49));