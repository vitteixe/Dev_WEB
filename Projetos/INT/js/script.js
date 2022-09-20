// BOTÃO DE NAVEGAÇÃO
const btnMobile = document.querySelector('#btn-mobile');

function toggleMenu(){
    const nav = document.querySelector('nav');
    nav.classList.toggle('active');
}

btnMobile.addEventListener('click', toggleMenu);


//---------------------------------------------------------------------//
// OBJETO DESPESA
class Expense {
    
    constructor(year, month, day, type, description, value){
        this.year = year;
        this.month = month;
        this.day = day;
        this.type = type;
        this.description = description;
        this.value = value;    
    }

}

//OBJETO BD (localStorage)
class BD{

    constructor(){
        let id = localStorage.getItem('id');

        //verificação se existe um id(chave) em local storage
        if(id === null){
            //setando valor inicial ao id
            localStorage.setItem('id',0);
        }
    }
    
    // FUNÇÃO/MÉTODO PARA ATUALIZAÇÃO DE ÍNDICE
    getNextId(){

        let nextId = localStorage.getItem('id');
        return parseInt(nextId) + 1;
    }

    // FUNÇÃO/MÉTODO DE GRAVAÇÃO DE NOVA DESPESA
    toRecord(d){
    
        //chamando o método de soma do id
        let id = this.getNextId();

        localStorage.setItem(id, JSON.stringify(d));

        //atualizando valor do id
        localStorage.setItem('id', id);
    }   

}

let bd = new BD();



// REGISTRO DE NOVA DESPESA
RegisterExpense = () => {
    
    let year = document.querySelector('#year');
    let month = document.querySelector('#month');
    let day = document.querySelector('#day');
    let type = document.querySelector('#type');
    let description = document.querySelector('#description');
    let value = document.querySelector('#value');

    let objExpense = new Expense(
        year.value, 
        month.value, 
        day.value, 
        type.value, 
        description.value, 
        value.value
    );
    
    //CHAMANDO FUNÇÃO/MÉTODO DE GRAVAÇÃO 
    bd.toRecord(objExpense);

}





const btnRegister = document.querySelector('#btn-register');
const btnSearch = document.querySelector('#btn-search');

if(document.body.contains(btnRegister)){
    btnRegister.addEventListener('click', RegisterExpense);
} else if(document.body.contains(btnSearch)){
    btnSearch.addEventListener('click', RegisterExpense);
}



