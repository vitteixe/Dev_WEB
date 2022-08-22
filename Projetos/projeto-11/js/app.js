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

            despesa.id = i;    
            despesas.push(despesa);
            
        }

        return despesas;

    }

    pesquisar(despesa){

        let despesasFiltradas = [];

        despesasFiltradas = this.recuperarTodosRegistros();

        //ano
        if(despesa.ano != ''){
            despesasFiltradas = despesasFiltradas.filter(d => d.ano == despesa.ano);
        }

        //mes
        if(despesa.mes != ''){
            despesasFiltradas = despesasFiltradas.filter(d => d.mes == despesa.mes);
        }

        //dia
        if(despesa.dia != ''){
            despesasFiltradas = despesasFiltradas.filter(d => d.dia == despesa.dia);
        }

        //tipo
        if(despesa.tipo != ''){
            despesasFiltradas = despesasFiltradas.filter(d => d.tipo == despesa.tipo);
        }

        //descricao
        if(despesa.descricao != ''){
            despesasFiltradas = despesasFiltradas.filter(d => d.descricao == despesa.descricao);
        }

        //valor
        if(despesa.valor != ''){
            despesasFiltradas = despesasFiltradas.filter(d => d.valor == despesa.valor);
        }

        return despesasFiltradas
    }

    remover(id){
        localStorage.removeItem(id)
    }

}

let bd = new Bd()

//--------------------------
const btnCadastro = document.querySelector('#btn-cadastro');
const btnPesquisa = document.querySelector('#btn-search');

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
        
        ano.value = '';
        mes.value = '';
        dia.value = '';
        tipo.value = '';
        descricao.value = '';
        valor.value = '';

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

carregaListaDespesas = (despesas = [], filtro = false) => {

    if(despesas.length == 0 && filtro == false){
		despesas = bd.recuperarTodosRegistros() 
	}

    // TBODY
    const listaDespesas = document.querySelector('#listaDespesas');
    listaDespesas.innerHTML = ''

    despesas.forEach(function(objDespesas) {

        //criação do <tr>
        let linha = listaDespesas.insertRow();

        //criação das colunas <td>
        linha.insertCell(0).innerHTML = `${objDespesas.dia}/${objDespesas.mes}/${objDespesas.ano}`;
        //ajustar o tipo
        switch(objDespesas.tipo){
            case '1' : objDespesas.tipo = 'Alimentação';
                break;
            case '2' : objDespesas.tipo = 'Educação';
                break;
            case '3' : objDespesas.tipo = 'Lazer';
                break;
            case '4' : objDespesas.tipo = 'Saúde';
                break;
            case '5' : objDespesas.tipo = 'Transporte';
                break;          
        }
        linha.insertCell(1).innerHTML = objDespesas.tipo;
        linha.insertCell(2).innerHTML = objDespesas.descricao;
        linha.insertCell(3).innerHTML = objDespesas.valor;

        //botão de exclusão
        let btn = document.createElement('button');
        btn.className = 'btn btn-danger';
        btn.innerHTML = '<i class="fas fa-times"></i>';
        btn.id = `id_despesa_${objDespesas.id}`

        linha.insertCell(4).append(btn)

        //Função de remoção
        if(document.body.contains(btn)){
            btn.addEventListener('click', function(){
                
                // substituindo 'id_despesa_' por vazio
                let id = this.id.replace('id_despesa_','');

                bd.remover(id);

                window.location.reload()
            })
        }

    })

}

pesquisarDespesa = () => {
    
    let ano = document.querySelector('#ano').value;
    let mes = document.querySelector('#mes').value;
    let dia = document.querySelector('#dia').value;
    let tipo = document.querySelector('#tipo').value;
    let descricao = document.querySelector('#descricao').value;
    let valor = document.querySelector('#valor').value;

    let despesa = new Despesa(ano, mes, dia, tipo, descricao, valor);

    let despesas = bd.pesquisar(despesa)
	 
	this.carregaListaDespesas(despesas, true)
    
}


if(document.body.contains(btnCadastro)){
    btnCadastro.addEventListener('click', cadastrarDespesa);
} else if(document.body.contains(btnPesquisa)){
    btnPesquisa.addEventListener('click', pesquisarDespesa);
} 