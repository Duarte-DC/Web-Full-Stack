// throw new Error ('Houve um erro, mas nao se preocupe, estamos a trabalhar nisso')

// netflix
var video = []

video [1] = []
video [1] ['nome'] = 'Good Times'
video [1] ['categoria'] = 'Animie'

function getVideo (video) {
    // lógica
    // http
    try {
        console.log (video [0] ['nome'])

    } catch (excepcao) {   
        tratarErro (excepcao)

        console.log ('Agora podemos tratar esse erro')
        console.log ('-------------------------------------------\n\n')

        throw new Error ('Houve um erro, mas nao se preocupe, estamos a trabalhar nisso')
    } finally {
        console.log ('Sempre passa por aqui')
        console.log ('-------------------------------------------\n\n')
    }

    function tratarErro (erro) {
        // logica para registrar o erro no servidor
        console.log (erro)
        console.log ('-------------------------------------------\n')
    }
    console.log ('A aplicacao nao morreu\n\n')
}

getVideo (video)