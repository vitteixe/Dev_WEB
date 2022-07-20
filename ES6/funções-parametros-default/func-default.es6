//Caso ao chamar a função, não for estabelecido parâmetros, será chamado o padrão.
function contarUmaHistoria(personagem = 'Fubá', atividade = 'correr no parque', nome_dono = 'João'){
    document.write(`Era uma vez um cachorro chamado <b><i>${personagem}</i></b>, ele adorava <b><i>${atividade}</i></b>, 
    seu dono era o <b><i>${nome_dono}</i></b> e eles viveram felizes para sempre`)
}

contarUmaHistoria('Verão', undefined, 'Julia Rosa')