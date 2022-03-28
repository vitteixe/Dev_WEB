/*
var data = new Date();

//adicionar / remover dias
document.write(data.toString());
document.write('<hr>');
data.setDate(data.getDate() + 1230);

document.write(data.toString());

//adicionar / remover meses
document.write(data.toString());
data.setMonth(data.getMonth() + 1);
document.write('<br><br> meses <hr> <br>' + data.toString());


//adicionar / remover anos
document.write(data.toString());
data.setFullYear(data.getFullYear() + 3);
document.write('<br> <br><br> anos <hr> <br> ' + data.toString());
*/


//17/04/2002
var data1 = new Date(2002, 3, 17);

//17/04/2022
var data2 = new Date(2022, 3, 17);

document.write(data1.toString());
document.write('<hr>');
document.write(data2.toString());

document.write('<br><hr><br>');

//converter datas para algo que possamos calcular
document.write('Datas em Milisegundos <br>')
document.write(data1.getTime());
document.write('<hr>');
document.write(data2.getTime());

document.write('<br><hr><br>');

document.write('encontrar a qtde de milissegundos entre a data1 e a data2: <br>');

var milisegundos_entre_datas = Math.abs(data1.getTime() - data2.getTime())
document.write(milisegundos_entre_datas);

document.write('<br><hr><br>');

/* 1 dia = 24hr
1 min = 60 segundos
1 seg = 1000 milissegundos
Quantos milissegundos existem em um dia? */
var milisegundos_dia = (1*24*60*60*1000)
document.write ('1 dia tem: ' + milisegundos_dia + ' milisegundos');

document.write('<br><hr><br>');

document.write(milisegundos_entre_datas / milisegundos_dia + ' dias, desde 17/04/2002  até 17/04/2022')





//doc = https://www.w3schools.com/jsref/jsref_obj_date.asp
