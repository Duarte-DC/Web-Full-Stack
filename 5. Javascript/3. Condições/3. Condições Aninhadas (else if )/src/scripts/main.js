function verFaixa ()
{
    var x = document.getElementById ('txt1')
    var idade = Number (x.value)

    var resposta = document.getElementById ('result')
    resposta.innerHTML = `<p>A sua idade é ${idade}</p>`

    if (idade < 10)
    {
        resposta.innerHTML += 'Criança'
    }
    else if (idade < 14)
    {
        resposta.innerHTML += 'Pre-Adolescente'
    }
    else if (idade < 18)
    {
        resposta.innerHTML += 'Adolescente'
    }
    else if (idade < 40)
    {
        resposta.innerHTML += 'Jovem'
    }
    else if (idade < 60)
    {
        resposta.innerHTML += 'Adulto'
    }
    else
    {
        resposta.innerHTML += 'Idoso'
    }
}