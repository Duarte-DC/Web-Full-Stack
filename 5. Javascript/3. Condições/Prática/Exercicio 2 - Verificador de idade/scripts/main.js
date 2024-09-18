function verificar ()
{
    var data = new Date ()
    var ano = data.getFullYear ()

    var anoInserido = document.getElementById ('txt1')
    var x = Number (anoInserido.value)

    var resposta = document.getElementById ('resultado')

    if (anoInserido.value.length == 0 || x > ano)
    {
        alert ('Erro, o ano inserido é inválido!')
    }
    else
    {
        var formularioSexo = document.getElementsByName ('sexo')
        var idade = ano - x

        var img = document.createElement ('img')
        img.setAttribute ('id', 'foto')
        
        var gen = ''
        if (formularioSexo[0].checked)
        {
            gen = 'Homem'
            if (idade < 10)
            {
                img.setAttribute ('src', 'assets/images/criançaM.png')
            }
            else if (idade < 21)
            {
                img.setAttribute ('src', 'assets/images/jovemM.png')
            }
            else if (idade < 50)
            {
                img.setAttribute ('src', 'assets/images/adultoM.png')
            }
            else
            {
                img.setAttribute ('src', 'assets/images/IdosoM.png')
            }
        }
        else
        {
            gen = 'Mulher'
            if (idade < 10)
            {
                img.setAttribute ('src', 'assets/images/criançaF.png')
            }
            else if (idade < 21)
            {
                img.setAttribute ('src', 'assets/images/jovemF.png')
            }
            else if (idade < 50)
            {
                img.setAttribute ('src', 'assets/images/adultoF.png')
            }
            else
            {
                img.setAttribute ('src', 'assets/images/idosoF.png')
            }
        }
        resposta.style.textAlign = 'center'
        resposta.innerHTML = `Detectamos <strong>${gen}</strong> com <strong>${idade}</strong> anos de idade`
        resposta.appendChild (img)
    }
}