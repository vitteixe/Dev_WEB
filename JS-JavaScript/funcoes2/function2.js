function soma(){
    var results = 0;

    for( var i in arguments){
        results += arguments[i]
    }

    return results
}

console.log(soma(7, 5 ,3.2, 0.8, 'texto'));