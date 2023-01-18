function requisitarPagina(url){

    let ajax = new XMLHttpRequest();

    // Requisição não iniciada, state = 0
    console.log(ajax.readyState) 
    
    ajax.open("GET", url);

    // conexão estabelecida com o servidor, state = 1
    console.log(ajax.readyState)
    

    // lógica que fica olhando para o progresso da req
    ajax.onreadystatechange = () => {
        console.log(ajax.readyState)
    }

    ajax.send();
    //console.log(ajax) 

}

