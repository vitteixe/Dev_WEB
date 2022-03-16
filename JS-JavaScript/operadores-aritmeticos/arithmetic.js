var num1 = prompt('digite o num1');
var num2 = prompt('digite o num2');

num1 = parseInt(num1);
num2 = parseInt(num2);

document.write('A soma ente ' + num1 + ' e ' + num2 + ' é: '   + (num1 + num2) + '<br><br>');
document.write('A subtração ente ' + num1 + ' e ' + num2 + ' é: '   + (num1 - num2) + '<br><br>');
document.write('A multiplicação ente ' + num1 + ' e ' + num2 + ' é: '   + (num1 * num2) + '<br><br>');
document.write('A divisão ente ' + num1 + ' e ' + num2 + ' é: '   + (num1 / num2) + '<br><br>');
document.write('O módulo ente ' + num1 + ' e ' + num2 + ' é: '   + (num1 % num2) + '<br><br>');
document.write('O incremento de ' + num1 + ' é ' + (++num1) + '<br><br>');
document.write('O decremento de ' + num2 + ' é ' + (--num2) + '<br><br>');