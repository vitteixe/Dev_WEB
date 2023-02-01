getCEP = (cep) => {

    let url = "https://viacep.com.br/ws/" + cep + "/json/";

    let xmlHttp = new XMLHttpRequest();
    xmlHttp.open("GET", url);

    xmlHttp.onreadystatechange = () => {

        if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
            let dadosJSONText = xmlHttp.responseText;
            let dadosJSONObj = JSON.parse(dadosJSONText);

            let endereco = document.querySelector("#endereco");
            let bairro = document.querySelector("#bairro");
            let cidade = document.querySelector("#cidade");
            let uf = document.querySelector("#uf");

            endereco.value = dadosJSONObj.logradouro; 
            bairro.value = dadosJSONObj.bairro; 
            cidade.value = dadosJSONObj.localidade; 
            uf.value = dadosJSONObj.uf;        

        }

    }

    xmlHttp.send();

}