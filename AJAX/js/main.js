function requisitarPagina(url){

    document.querySelector("#conteudo").innerHTML = "";

    // incluir o gif de loading na página
    if(!document.querySelector("#loading")){
        let imgLoading = document.createElement("img");
        imgLoading.id = "loading";
        imgLoading.src = "../img/loading.gif";
        imgLoading.className = "rounded mx-auto d-block";

        document.querySelector("#conteudo").appendChild(imgLoading);
    }

    
    let ajax = new XMLHttpRequest();

    // Requisição não iniciada, state = 0
    //console.log(ajax.readyState) 
    
    ajax.open("GET", url);

    // conexão estabelecida com o servidor, state = 1
    //.log(ajax.readyState)
    

    // lógica que fica olhando para o progresso da req
    ajax.onreadystatechange = () => {
        if(ajax.readyState == 4 && ajax.status == 200){

            document.querySelector("#conteudo").innerHTML = ajax.responseText
            
            console.log("sucesso");
            //document.querySelector("#loading").remove();
        }

        if(ajax.readyState == 4 && ajax.status == 404){

            document.querySelector("#conteudo").innerHTML = "...Tente novamente mais tarde"

            console.log("sucesso");
            //document.querySelector("#loading").remove();
        }
    }

    ajax.send();
    //console.log(ajax) 

}

