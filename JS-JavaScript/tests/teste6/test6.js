var listaObjetos = ['Cadeira', 'Impressora', 'Garfo'];

function adicionarObjetos(){

    //recuperar o objeto do input
    var objeto = document.getElementById('objeto').value;

    //caso possua alguma valor preenchido entrará no if
    if(objeto != ''){

        //verificar se o valor esta vazio
        //caso contrario adicionar 
        if(listaObjetos.indexOf(objeto) !== -1) {
            alert('Esse objeto já foi adiconado')
        } else {
            
            listaObjetos.push(objeto)
            console.log(listaObjetos)

            //limpar valor do campo
            document.getElementById('objeto').value = '';

        }

    }else{
        alert('informe um objeto válido!')
    }
}

function ordenarObjetos(){

    listaObjetos.sort();
    console.log(listaObjetos);

}




 