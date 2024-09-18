function* conversar () {

    // 1o bloco
    let opcao = yield 'E ai, tudo bem?'

    // 2o bloco
    // O parametro enviado no next
    if (opcao == 'Sim' || opcao == 'sim') {

        yield 'Otimo, fico feliz'
        opcao = yield 'Como posso te ajudar? Quer uma piada para começar?'

        if (opcao == 'Sim' || opcao == 'sim') {

            fetch ('piadas.json')
                .then (resposta => resposta.json ())
                .then (piadas => {

                    let texto = document.getElementById ('texto')

                    let indice = Math.floor (Math.random () * 10) - 1

                    indice = indice < 0 ? 0: indice

                    let piada  = piadas [indice]

                    texto.innerHTML = piada.piada

                    setTimeout (() => {

                        texto.innerHTML = piada.resposta

                    }, 4000)
                }) 

            yield 'Digite (1) para compras, (2) para vendas ou (3) para falar com um agente'

        }   else {

                yield 'Digite (1) para compras, (2) para vendas ou (3) para falar com um agente'
            }

    }   else {

            yield 'Respire fundo e tenha paciência'
            yield 'Digite (1) para compras, (2) para vendas ou (3) para falar com um agente'
        }

}

let conversa = conversar () // objeto iterator

function acao () {

    let iteracao
    let resposta = document.getElementById ('resposta').value
    let texto = document.getElementById ('texto')
    
    iteracao = conversa.next (resposta)
    texto.innerHTML = iteracao.value

    if (iteracao.done) {
        texto.innerHTML = 'Terminado!'
        document.getElementById ('botao').style.display = 'none'
    }
}