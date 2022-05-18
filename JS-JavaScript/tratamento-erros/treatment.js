

//netflix

var video = Array();

video[1] = [];
video[1]['nome'] = 'Fullmetal Alchemist';
video[1]['categoria'] = 'anime';

function getVideo (video) {

    try{
        console.log(video[0]['nome']);
    } catch(e){

        tratarErro(e);
        console.log('Agora sim podemos tratar esse erro')
        throw new Error('Houve um erro, mas não se preocupe. Estamos trabalhando nele agora');

    } finally{
        console.log('Sempre passa por aqui (try / catch)')
    }



    console.log('A aplicação não morreu!');

}


function tratarErro(e){
    console.log(e);
}

getVideo(video);