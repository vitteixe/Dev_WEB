if(document.getElementById('start')){
    //Botão de START 
    var buttonStart = document.getElementById('start');
    
    buttonStart.onclick = function (){
        
        //capturando nivel
        var nivel = document.getElementById('nivel').value;
        
        if(nivel === ''){
            alert('Selecione um nível para iniciar o jogo!');
            return false
        }

        alert(nivel);
    }



} else{
    //Botão de reset (Game Over)
    var buttonReset = document.getElementById('reset');
    buttonReset.onclick = function(){
        window.location.href = '../index.html';
    }

}








