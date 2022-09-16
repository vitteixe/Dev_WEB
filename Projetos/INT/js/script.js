const btnMobile = document.querySelector('#btn-mobile');

function toggleMenu(){
    const nav = document.querySelector('nav');
    nav.classList.toggle('active');
}

btnMobile.addEventListener('click', toggleMenu);


//---------------------------------------------------------------------//
const btnRegister = document.querySelector('#btn-register');
const btnSearch = document.querySelector('#btn-search');


RegisterExpense = () => {
    
    let year = document.querySelector('#year');
    let month = document.querySelector('#month');
    let day = document.querySelector('#day');
    let type = document.querySelector('#type');
    let description = document.querySelector('#description');
    let value = document.querySelector('#value');

    console.log(year.value, month.value, day.value, type.value, description.value, value.value)

}



if(document.body.contains(btnRegister)){
    btnRegister.addEventListener('click', RegisterExpense);
} else if(document.body.contains(btnSearch)){
    btnSearch.addEventListener('click', RegisterExpense);
}



