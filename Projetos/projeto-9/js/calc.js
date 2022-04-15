function calcular(tipo, valor){
    

    if (tipo === 'acao'){

        if(valor === 'c'){
            //limpar o visor (id results)
            document.getElementById('results').value = '';
        }

        if(valor === '+' || valor === '-' || valor === '*' || valor === '/' || valor === '.'){
            document.getElementById('results').value += valor;
        }

        if(valor === '='){
            var valor_camp = eval(document.getElementById('results').value)

            document.getElementById('results').value = valor_camp;
        }

    } else if (tipo === 'valor'){

        document.getElementById('results').value += valor;
    }
}