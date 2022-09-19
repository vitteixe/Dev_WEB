const btnMobile = document.querySelector('#btn-mobile');

function toggleMenu(){
    const nav = document.querySelector('nav');
    nav.classList.toggle('active');
}

btnMobile.addEventListener('click', toggleMenu);


//---------------------------------------------------------------------//

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

    toRecord(objExpense);

}

toRecord = (expense) => {
    localStorage.setItem('despesa', JSON.stringify(expense));
}





const btnRegister = document.querySelector('#btn-register');
const btnSearch = document.querySelector('#btn-search');

if(document.body.contains(btnRegister)){
    btnRegister.addEventListener('click', RegisterExpense);
} else if(document.body.contains(btnSearch)){
    btnSearch.addEventListener('click', RegisterExpense);
}



