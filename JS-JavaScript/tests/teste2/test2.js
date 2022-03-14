var idade = prompt('Qual a sua idade?')

if (idade >= 0 && idade <= 14){
    document.write('Você têm ' + idade + ' anos, então você é uma Criança');

} else if(idade >= 15 && idade <= 29) {
    document.write('Você têm ' + idade + ' anos, então você é um Jovem');

} else if(idade >= 30 && idade <= 59) {
    document.write('Você têm ' + idade + ' anos, então você é um Adulto');

} else if(idade >= 60) {
    document.write('Você têm ' + idade + ' anos, então você é um Idoso');

}


