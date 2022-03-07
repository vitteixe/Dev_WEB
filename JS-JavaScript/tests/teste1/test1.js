var a = 10;
var b = 20;
var c = null;

document.write('A: '+ a + '<br>');
document.write('B: '+ b + '<br>');
document.write('C: '+ c + '<br>');

document.write('<hr>');

c = a;      //utilizada a variável C para armazenar temporariamente o valor da variável A
a = b;      //sobrepõe o valor da variável A com o valor da variável B
b = c;      //sobrepõe o valor da variável B com o valor da variável C (C nesse momento contém o valor da variável A)
c = null;   //opcional: remove o valor contido na variável C

document.write('A: '+ a + '<br>')
document.write('B: '+ b + '<br>')
document.write('C: '+ c + '<br>')