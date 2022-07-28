//array
/*
let array = [10, 20, 30, 40];

teste = ([ a,b,,c, d=100 ]) => {
  console.log(a, b, c, d)
}

teste(array)
*/


//objeto

let obj ={
  a: 10,
  b: 20,
  c: 30,
  d: 40
}

teste = ({ a:x, d, z= 60 }) => {
  console.log(x, d, z);
}

teste(obj);
