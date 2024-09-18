function carregar ()
{
    var x = new Date ()
    var hora = x.getHours ()
    
    var marcadorHora = document.getElementById ('relogio')
    var imagemHorario = document.getElementById ('foto')
    var msg = document.getElementById ('mensagem')

    marcadorHora.innerHTML = `Agora são ${hora} horas`

    if (hora < 12)
    {
        foto.src = 'assets/images/dia.png'
        document.body.style.background = '#f1c787';
        msg.innerHTML = 'Bom Dia!'
    }
    else if (hora < 18)
    {
        foto.src = 'assets/images/tarde.png'
        document.body.style.background = '#96b7c8'
        msg.innerHTML = 'Boa Tarde!'
    }
    else
    {
        foto.src = 'assets/images/noite.png'
        document.body.style.background = '#4c3442'
        msg.innerHTML = 'Boa Noite!'
    }
}