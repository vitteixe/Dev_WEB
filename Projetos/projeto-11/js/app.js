class Despesa {
    constructor(ano, mes, dia, tipo, descricao, valor){
        this.ano = ano;
        this.mes = mes;
        this.dia = dia;
        this.tipo = tipo;
        this.descricao = descricao;
        this.valor = valor
    }

    validarDados(){

        for(let atributos in this){
            if(this[atributos] == undefined || this[atributos] == '' || this[atributos] == null){
                return false;
            }
        } return true
        

    }

}

//--------------------------
class Bd {

    constructor(){
        let id = localStorage.getItem('id');

        // setando um valor para ID
        if(id === null) {
            localStorage.setItem('id', 0);
        }
    }

    getNextId(){

        let nextId = localStorage.getItem('id');
        return parseInt(nextId) + 1;

    }

    toRecord(Despesas){

        let id = this.getNextId();

        localStorage.setItem(id, JSON.stringify(Despesas));

        localStorage.setItem('id', id);

    }

    recuperarTodosRegistros(){

        // array de despesas
        let despesas = [];

        let id = localStorage.getItem('id');

        // Recuperação de todas as despesas cadastradas em LocalStorage
        for(let i = 1; i <= id; i++){

            // Recuperar UMA despesa
            let despesa = JSON.parse(localStorage.getItem(i));

            if(despesa === null){
                continue
            }
                
            despesas.push(despesa);
            
        }

        return despesas;

    }

}

let bd = new Bd()

//--------------------------
const btnCadastro = document.querySelector('#btn-cadastro');

cadastrarDespesa = () => {

    let ano = document.querySelector('#ano');
    let mes = document.querySelector('#mes');
    let dia = document.querySelector('#dia');
    let tipo = document.querySelector('#tipo');
    let descricao = document.querySelector('#descricao');
    let valor = document.querySelector('#valor');

    let despesa = new Despesa(
        ano.value, 
        mes.value, 
        dia.value, 
        tipo.value, 
        descricao.value, 
        valor.value
    )
    
    let title = document.querySelector('#modal-title');
    let colorText = document.querySelector('#modal-header');
    let btn = document.querySelector('#btn-modal');
    let body = document.querySelector('.modal-body');

    if(despesa.validarDados()){
        
        bd.toRecord(despesa);

        title.innerHTML = 'Registro inserido com sucesso!';
        colorText.className = 'modal-header text-success';
        body.innerHTML = 'Despesa cadastrada com sucesso!';
        btn.className = 'btn btn-success';
        btn.innerHTML = 'Registrar nova despesa';

        $('#modalRegistroDespesa').modal('show');


    } else {

        title.innerHTML = 'Erro na inclusão do registro!';
        colorText.className ='modal-header text-danger';
        body.innerHTML = 'Erro na gravação! <br> Existem campos obrigatórios que não foram preenchidos.';
        btn.className = 'btn btn-danger';
        btn.innerHTML = 'Voltar e corrigir';

        $('#modalRegistroDespesa').modal('show');

    }
    
}

carregaListaDespesas = () => {

    let despesas = [];
    despesas = bd.recuperarTodosRegistros();

    console.log(despesas);
}
