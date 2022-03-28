var num1 = prompt('Digite o primeiro número: ');

var opr = prompt('1.Soma OU 2.Subtração');

var num2 = prompt('Digite o segundo número: ');



function calc(num1, num2, opr){

    num1 = parseFloat(num1);
    num2 = parseFloat(num2);
   
    var result = 0;
   
    if(opr == 1){
    result = num1 + num2;
    }
   
    if(opr == 2){
    result = num1 - num2;
    }
   
    return result;
} 


document.write('O resultado é: ' + calc(num1, num2, opr));
