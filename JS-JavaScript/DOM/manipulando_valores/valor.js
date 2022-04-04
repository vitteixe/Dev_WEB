function distribuiCaracter() {

    //selecionar o valor digitado
    var caracter = document.getElementById("login").value;

    //limpar o campo de digitação
    document.getElementById("login").value = "";

    //limpar espaços em brancos nas extremidades da string
    caracter.trim();

    switch (caracter) {
        case '0':
        case '1':
        case '2':
        case '3':
        case '4':
        case '5':
        case '6':
        case '7':
        case '8':
        case '9':
            //adicionar o caracter no campo referente a números
            document.getElementById("numbers").value = caracter;
        break;

        default:
            //adicionar o caracter no campo referente a letras
            document.getElementById("strings").value = caracter;
    }

}