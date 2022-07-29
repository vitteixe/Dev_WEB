const btnCadastro = document.querySelector('#btn-cadastro');

cadastrarDespesa = () => {

    let ano = document.querySelector('#ano');
    let mes = document.querySelector('#mes');
    let dia = document.querySelector('#dia');
    let tipo = document.querySelector('#tipo');
    let descricao = document.querySelector('#descricao');
    let valor = document.querySelector('#valor');

    console.log(ano.value, mes.value, dia.value, tipo.value, descricao.value, valor.value);

}

btnCadastro.addEventListener('click', cadastrarDespesa);