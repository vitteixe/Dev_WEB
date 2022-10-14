// BOTÃO DE NAVEGAÇÃO
const btnMobile = document.querySelector('#btn-mobile');

function toggleMenu(){
    const nav = document.querySelector('nav');
    nav.classList.toggle('active');
}

if(document.body.contains(btnMobile)){
    btnMobile.addEventListener('click', toggleMenu);
}


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

    //MÉTODO DE VALIDAÇÃO DE DADOS
    validateDate(){
        //percorrer os atributos do objeto despesa
        for(let attr in this){
            //retornando false caso algum campo esteja vazio
            if(this[attr] == undefined || this[attr] == '' || this[attr] == null){
                return false;
            }
        }

        //caso nenhum attr esteja vazio, retornará true
        return true;

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
    
    // MÉTODO PARA ATUALIZAÇÃO DE ÍNDICE
    getNextId(){

        let nextId = localStorage.getItem('id');
        return parseInt(nextId) + 1;
    }

    // MÉTODO DE GRAVAÇÃO DE NOVA DESPESA
    toRecord(d){
    
        //chamando o método de soma do id
        let id = this.getNextId();

        localStorage.setItem(id, JSON.stringify(d));

        //atualizando valor do id
        localStorage.setItem('id', id);
    }

    // MÉTODO PARA RECUPERAR TODOS REGISTROS
    allRecords(){
        
        //array de despesas
        let expenseArray = [];
        
        let id = localStorage.getItem('id');

        //loping para recuperar as despesas dos respectivos ID's cadastrados em local storage
        for(let i = 1; i <= id; i++){
            
            //recuperando a despesas
            let expense = JSON.parse(localStorage.getItem(i)); //convertendo JSON em objeto literal

            //verificando ID's removidos, ==> em seguida iremos pular esse indices
            if(expense == null){
                continue;  
            }

            //criando atributo de id
            expense.id = i;

            //acrescentando despesas (recuperada a cima), no array 
            expenseArray.push(expense);

        }

        return expenseArray

    }

    //MÉTODO DE PESQUISA
    search(expenseSH){

        let filterExpense = []

        //recuperando todos os registros através do método criado a cima
        filterExpense = this.allRecords();

        //ano só entra no bloco se o resultado for diferente de vazio ''
        if(expenseSH.year != ''){
            //verificando se cada objeto literal corresponde ao filtro solicitado
            console.log("ano");
            filterExpense = filterExpense.filter(d => d.year == expenseSH.year);
        }

        //mes
        if(expenseSH.month != ''){
            console.log("mês");
            filterExpense = filterExpense.filter(d => d.month == expenseSH.month);
        }

        //dia
        if(expenseSH.day != ''){
            console.log("dia");
            filterExpense = filterExpense.filter(d => d.day == expenseSH.day);
        }

        //tipo
        if(expenseSH.type != ''){
            console.log("tipo");
            filterExpense = filterExpense.filter(d => d.type == expenseSH.type);
        }

        //descricao
        if(expenseSH.description != ''){
            console.log("desc");
            filterExpense = filterExpense.filter(d => d.description == expenseSH.description);
        }

        //valor
        if(expenseSH.value != ''){
            console.log("filtr");
            filterExpense = filterExpense.filter(d => d.value == expenseSH.value);
        }

        return filterExpense

    }

    remove(idDelete){
        localStorage.removeItem(idDelete);
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

    // TAGS MODAL
    let title = document.querySelector('#modal-title');
    let colorText = document.querySelector('#modal-header');
    let btnModal = document.querySelector('#btn-modal');
    let modalBody = document.querySelector('.modal-body');

    if(objExpense.validateDate()){
        //CHAMANDO FUNÇÃO/MÉTODO DE GRAVAÇÃO 
        bd.toRecord(objExpense);

        title.innerHTML = 'Registro inserido com sucesso!';
        colorText.className = 'modal-header text-success';
        modalBody.innerHTML = 'Despesa cadastrada com sucesso!';
        btnModal.innerHTML = 'Registrar nova despesa';
        btnModal.className = 'btn btn-success';

        //clear nos campos, após em 'registrar uma nova tarefa'
        btnModal.addEventListener('click',function(){
            year.value = '';
            month.value = '';
            day.value = '';
            type.value = '';
            description.value = '';
            value.value = '';
        })

    } else {

        title.innerHTML = 'Erro na inclusão do registro!';
        colorText.className = 'modal-header text-danger';
        modalBody.innerHTML = 'Erro na gravação! <br> Existem campos obrigatórios que não foram preenchidos.';
        btnModal.innerHTML = 'Voltar e corrigir';
        btnModal.className = 'btn btn-danger';
    }
    $("#modalRegistroDespesa").modal('show');

}


//-----------------------------------------------------------------------
// TELA DE LOGIN
LoginConsult = () => {

    let userADM = 'admin';
    let passADM = 'admin';

    let user = document.querySelector('#user');
    let pass = document.querySelector('#password');


    if(user.value != userADM){
        user.classList.add('incorrect');
    }else{
        user.classList.add('correct');
    }

    if(pass.value != passADM){
        pass.classList.add('incorrect');
    }else{
        pass.classList.add('correct');
    }

    if(user.value == userADM && pass.value == passADM){
        document.querySelector('#link-login').href = '../pages/consult.html';
    }

}



//-----------------------------------------------------------------------
// MÉTODO CARREGAR LISTA DESPESAS
loadExpenseList = (finalExpenses = Array(), filter = false) => {

    if(finalExpenses.length == 0 && filter == false) {
        // chamando método para carregar todas as despesas
        finalExpenses = bd.allRecords();
    }

    // TBODY
    let tBody = document.querySelector('#listExpenses');
    tBody.innerHTML = '';

    // percorrendo o array finalExpenses
    finalExpenses.forEach(function(expense){

        // inserindo linhas (TR ==> TBODY)
        let row = tBody.insertRow();

        // ajustar tipo (númerico para string)
        switch(expense.type){
            case '1': expense.type = 'Alimentação'
                break
            case '2': expense.type = 'Educação'
                break
            case '3': expense.type = 'Lazer'
                break
            case '4': expense.type = 'Saúde'
                break
            case '5': expense.type = 'Transporte'
                break  
        }

        // criar colunas (TD ==> TR) >>>>> inserindo dados em cada coluna
        row.insertCell(0).innerHTML = `${expense.day}/${expense.month}/${expense.year}` ;
        row.insertCell(1).innerHTML = `${expense.type}`;
        row.insertCell(2).innerHTML = `${expense.description}`;
        row.insertCell(3).innerHTML = `R$ ${expense.value}`;
        

        //botão de exclusão
        let btnDelete = document.createElement('button');
        btnDelete.className = 'btn btn-danger';
        btnDelete.innerHTML = '<i class="fas fa-times"></i>';
        btnDelete.id = `id_despesa_${expense.id}`

        row.insertCell(4).append(btnDelete);

        //Função de remoção
        if(document.body.contains(btnDelete)){
            btnDelete.addEventListener('click', function(){
                
                // substituindo 'id_despesa_' por vazio
                let id = this.id.replace('id_despesa_','');

                bd.remove(id);

                window.location.reload()
            })
        }

    })
}


// PESQUISA DE DESPESAS  (consulta)
SearchExpense = () => {

    let year = document.querySelector('#year').value;
    let month = document.querySelector('#month').value;
    let day = document.querySelector('#day').value;
    let type = document.querySelector('#type').value;
    let description = document.querySelector('#description').value;
    let value = document.querySelector('#value').value;   

    let expenseSH = new Expense(year, month, day, type, description, value);

    console.log(expenseSH)

    //chamando método de pesquisa
    filterBdExpense = bd.search(expenseSH);

    loadExpenseList(filterBdExpense, true)
    
}



//-----------------------------------------------------------------
const btnRegister = document.querySelector('#btn-register');
const btnSearch = document.querySelector('#btn-search');
const btnLogin = document.querySelector('#btn-login');

if(document.body.contains(btnRegister)){
    btnRegister.addEventListener('click', RegisterExpense);
} else if(document.body.contains(btnSearch)){
    btnSearch.addEventListener('click', SearchExpense);
} else if(document.body.contains(btnLogin)){
    btnLogin.addEventListener('click', LoginConsult)
}


