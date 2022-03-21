// 3 escopos: global, função e o bloco

var serie = 'HIMYM';


//escopo de bloco
if (true){
    var serie2 = 'Game of Thrones';
    document.write(serie);
}

document.write('<br>');

document.write(serie2);

document.write('<br><br>');

function x () {
    var serie3 = 'The Walking Dead';
    document.write(serie);
    document.write('<br>');
    document.write(serie2);
}

x()