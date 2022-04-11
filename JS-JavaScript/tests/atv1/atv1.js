var aluno = document.getElementById("aluno");
aluno.style.display = "none";

var num1 = prompt('Digite o primeiro número: ');
var num2 = prompt('Digite o segundo número: ');


var equality = (num1 == num2);
var identical = (num1 === num2);
var different = (num1 != num2);
var notIdentical = (num1 !== num2);
var smaller = (num1 < num2);
var bigger = (num1 > num2);
var smallerEquality = (num1 <= num2);
var biggerEquality = (num1 >= num2);

var button = document.getElementById ('comparar');


button.addEventListener("click", function() {

    document.getElementById("num1").value = num1;
    document.getElementById("num2").value = num2;

    document.getElementById("igualdade").value = equality;
    document.getElementById("identico").value = identical;
    document.getElementById("diferente").value = different;
    document.getElementById("NIdentico").value = notIdentical;
    document.getElementById("menor").value = smaller;
    document.getElementById("maior").value = bigger;
    document.getElementById("menori").value = smallerEquality;
    document.getElementById("maiori").value = biggerEquality;
    

    if(aluno.style.display === "none") {
        aluno.style.display = "block";
    } 
});
