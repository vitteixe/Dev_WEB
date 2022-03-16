
var parametro = prompt('Digite 1 ou 2');


switch (parseInt(parametro)) {
    case 1:
        document.write("<h1>você digitou 1</h1>");
        break

    case 2:
        document.write('<h1>você digitou 2</h1>');
        break

    default:
        document.write('Default');
}
