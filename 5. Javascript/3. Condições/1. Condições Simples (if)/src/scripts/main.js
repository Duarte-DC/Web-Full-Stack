function calcular ()
{
    var veloc = document.getElementById ('txt1')
    var velocidade = Number (veloc.value)
    
    var resultado = document.getElementById ('result')
    resultado.innerHTML = `<p>A sua velocidade é de <strong>${velocidade}km/h</strong></p>`

    if (velocidade > 60)
    {
        
        resultado.innerHTML += '<p>Você ultrapassou a velocidade permitida! Multa de 5000, 00MT</p>'
    }
    resultado.innerHTML += '<p>Dirija sempre com o cinto de segurança!</p>'
}