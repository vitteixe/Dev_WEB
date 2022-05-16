var x = 0

document.write('INICIO <br>');

while(x <= 10){
    
    x ++;
    
    if(x === 5) {
        continue
    }
    
    document.write(x + '<br>');

}

document.write('FIM <br>');