var x = 1;
var y = 1;

while (x <= 10) {
    
    y = 1;
    
    while (y <= 10) {
        console.log(x + ' x ' + y + ' = ' + x * y);
        document.write(x + ' x ' + y + ' = ' + x * y + '<br>');
        
        y++;
    }
    
    console.log("\n");
    document.write("<hr/>");
    
    x++; 
}