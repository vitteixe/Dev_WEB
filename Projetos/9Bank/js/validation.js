const cpf = document.getElementById('cpf');
const button = document.getElementById('button');

cpf.addEventListener('keypress', () => {
    let inputLength = cpf.value.length;

    if(inputLength === 3 || inputLength === 7){
        cpf.value += '.';
    }else if(inputLength == 11){
        cpf.value += '-';
    }
})


button.addEventListener('click', (event) => {
    
    event.preventDefault();

    const cpf = document.getElementById('cpf');

    if(cpf.value == '' || cpf.value.length <= 12){
        cpf.classList.add('errorInput');   
    }else {
        cpf.classList.add('correctInput');
    } 

})