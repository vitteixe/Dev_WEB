class Produto {
    constructor(descricao, preco){
        this.descricao = descricao;
        this.preco = preco;
    }

    verDescricao(){
        console.log(`${this.descricao}, por apenas: R$${this.preco}`);
    }
}

let produto = new Produto('Notebook', 2200.00);
produto.verDescricao();

//------------------------------------------------------------------------------------//

let produtoLiteral = {

    descricao: "Geladeira",
    preco: 1800,

    verDescricao: function(){
        console.log(`${this.descricao}, por apenas: R$${this.preco}`);
    }
}

produtoLiteral.verDescricao()