// destructuring

let frutas = ["Abacaxi", "Uva", "Pera", "Mamão"];

// Usa-se o [] ao lado esquerdo da string
// let [a, b, , c] = frutas  // , , pular o índice

let [a, b = "abacate", c, d, e = "banana"] = frutas;

// console.log(a, b, c, d, e);

let coisas = [
  ["Abacaxi", "Uva", "Pera", "Mamão"],
  ["José", "Maria"],
];


let [[,,x],[,n2]] = coisas;

console.log(x , n2)

