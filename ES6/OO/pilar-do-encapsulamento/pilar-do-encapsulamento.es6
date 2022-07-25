class Tv {
    constructor(){
        this._relacaoCanais = [2, 4, 5, 7, 10];
        this._canalAtivo = 5;
        this._volume = 13;
    }

    //getters setters
    get canalAtivo(){
        return this._canalAtivo;
    }
    
    set canalAtivo(canal){
        
        let ativo = this._relacaoCanais.indexOf(canal);
        
        if(ativo !== -1){
            this._canalAtivo = canal;
            console.log(`A tv1 esta com o canal ${canal} ativo`);
        } else{
            console.log(`O canal ${canal} não esta disponivel!`)
        }
        
    }
    
}

let tv1 = new Tv();

tv1.canalAtivo = 3;
