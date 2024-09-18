function requisitarPagina (url) {
// remover qualquer conteudo contido na Div    
    document.getElementById ('conteudo').innerHTML = ''

// incluir o gif de loading na página
    if (! document.getElementById ('loading')) {
        let imagem = document.createElement ('img')

        imagem.id = 'loading'
        imagem.src = 'assets/images/loading.gif'
        imagem.className = 'rounded mx-auto d-block'

        document.getElementById ('conteudo').appendChild (imagem)
    }

    let ajax = new XMLHttpRequest ()
    
// requisição não iniciada (state = 0)
    console.log (ajax.readyState)
    
    ajax.open ('GET', url)
// conexão estabelecida com o servidor (state = 1)
    console.log (ajax.readyState)

// lógica que controla o processo da requisição
    ajax.onreadystatechange = () => {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById ('conteudo'). innerHTML = ajax.responseText

        }   else if (ajax.readyState == 4 && ajax.status == 404) {
                document.getElementById ('conteudo'). innerHTML = '<h1 class = "display-4">404 Not Found<h1>'
            }
    }

    ajax.send ()

    // console.log (ajax)
}