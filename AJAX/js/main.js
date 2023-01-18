function requisitarPagina(url){

    let ajax = new XMLHttpRequest();

    ajax.open("GET", url);
    ajax.send();

    console.log(ajax)

}

