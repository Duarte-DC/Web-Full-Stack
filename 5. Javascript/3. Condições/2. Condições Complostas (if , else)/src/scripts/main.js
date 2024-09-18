function gerarResultado ()
{
    var pais = document.getElementById ('txt1').value
    var resultado = document.getElementById ('result')


    resultado.innerHTML = `<p>Nascido em ${pais}</p>`

    if (pais == 'Mozambique')
    {
        resultado.innerHTML += '<p>Você é Moçambicano</p>'
    }
    else
    {
        resultado.innerHTML += '<p>Você é Estrangeiro</p>'
    }
}