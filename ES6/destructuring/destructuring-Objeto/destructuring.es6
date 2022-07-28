//objeto

let produto = {
  descricao: 'notebook',
  preco: 1800,
  detalhes: {
    fabricante: 'abc',
    modelo: 'xyz'
  }
}

// Usa-se o {} ao lado esquerdo da string

// let { descricao, preco } = produto;

// let { descricao: d, preco: p } = produto; //mudando o nome da variável 


/* let { descricao: d, preco: p, desconto = 5} = produto;
 console.log(d, p, desconto) */

let {detalhes:{fabricante, modelo: m}} = produto;
console.log (fabricante, m)
