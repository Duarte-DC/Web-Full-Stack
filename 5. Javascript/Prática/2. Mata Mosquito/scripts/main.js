var altura = 0
var largura = 0
var vidas = 1
var tempo = 50
var criaMosquitoTempo = 1500

// Recuperar a altura e a largura da pagina
function ajustaTamanhoTela () {
    altura = window.innerHeight
    largura = window.innerWidth

    console.log (altura, largura)
}

ajustaTamanhoTela ()

// cronometro
var cronometro = setInterval (function () {
    tempo --
    if (tempo < 0) {
        clearInterval (cronometro)
        clearInterval (criaMosquito)

        window.location.href = 'vitoria.html'
    }
    else 
        document.getElementById ('contador').innerHTML = tempo

}, 1000)
document.getElementById ('contador').innerHTML = tempo

// nivel de dificuldade selecionado
var nivel = window.location.search
nivel = nivel.replace ('?', '')

if (nivel === 'facil') {
    // 1,5 segundo
    criaMosquitoTempo = 1500
}   else if (nivel === 'dificil') {
        // 1 segundo
        criaMosquitoTempo = 1000
    }   else if (nivel === 'chucknorris') {
            // 0,75 segundos
            criaMosquitoTempo = 750
        }


// Posições randômicas
function posicaoRandomica () {

    // remover o mosquito anterior caso exista
    if (document.getElementById ('mosquito')) {
        document.getElementById ('mosquito').remove ()
        
        // controle de vidas
        if (vidas > 3) {
            window.location.href = 'gameOver.html'
        }
        else {
            document.getElementById ('vida' + vidas).src = 'assets/images/coracao_vazio.png'
            vidas ++ 
        }
    }
    
    var posicaoX = Math.floor (Math.random () * largura) - 90
    var posicaoY = Math.floor (Math.random () * altura) - 90

    posicaoX = posicaoX < 0 ? 0 : posicaoX
    posicaoY = posicaoY < 0 ? 0 : posicaoY
    
    console.log (posicaoX, posicaoY)
    
    // Criar o elemento HTML
    var mosquito = document.createElement ('img')
    mosquito.src = 'assets/images/mosca.png'
    mosquito.className = tamanhoAleatorio () + ' ' + ladoAleatorio ()
    mosquito.style.left = posicaoX + 'px'
    mosquito.style.top = posicaoY + 'px'
    mosquito.style.position = 'absolute'
    mosquito.id = 'mosquito'

    mosquito.onclick = function () {
        this.remove ()
    }

    document.body.appendChild (mosquito)
    
}


// Tamanhos randomicos
function tamanhoAleatorio () {
    var classe = Math.floor (Math.random () * 3)

    switch (classe) {
        case 0: return 'mosquito1'
        case 1: return 'mosquito2'
        case 2: return 'mosquito3'
    }
}

// Lado A e Lado B

function ladoAleatorio () {
    var classe = Math.floor (Math.random () * 2)

    switch (classe) {
        case 0: return 'ladoA'
        case 1: return 'ladoB'
    }
}

//Criar e remover mosquitos a cada ciclo de tempo 
var criaMosquito = setInterval (function () {
    posicaoRandomica ()
}, criaMosquitoTempo)
