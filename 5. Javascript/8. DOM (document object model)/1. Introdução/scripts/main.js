/*
    Arvore DOM
        a arvore dom começa da raiz *window*
        - tudo em javaScript está dentro de um objeto chamado window

    Exemplo de árvore DOM:
        - dentro do window tem vários outros objeitos
            - locarion: que diz qual é a localização do site (URL, Página atual, Página anterior)
            - document: que é o documento atual 
                - dentro do document temos o objeto html
                    - dentro do html temos 2 objetos: head, body
                        - dentro do head temos várias tags
                            - meta
                            - title
                            - style
                            - etc...
                        - dentro do body também temos várias tags
                            - h1, h2, h3, h4, h5, h6...
                            - p
                                - strong
                            . div
                            . etc...
            - history: que vai guardando o histórico dentro do site (De onde veio, para onde vai)
*/
    window.document.write (`Olá Mundo!<br/>`)
    window.document.write (`${document.characterSet}<br/>`)
    window.document.write (`${window.navigator.appName}<br/>`)
    window.document.write (`${window.document.URL}<br/>`)

/*
    Selecionando elementos para poder navegar dentro da Árvore DOM
        Metodos de acesso:
            - por Marca/Tag
                getElementsByTagName () - sendo possível selecionar vários objetos
            - por ID
                getElementById () 
            - poe Nome
                getElementsByName ()
            - por Classe
                getElementByClassName ()
            - por Seletor
                querySelector ()
                querySelectorAll ()
*/
    // Metodo de acesso por Marca/Tag
            var paragrafos = document.getElementsByTagName ('p') // seleciona todos os paragrafos
            var paragrafo1 = document.getElementsByTagName ('p') [0] // seleciona somente o primeiro
            var paragrafo2 = document.getElementsByTagName ('p') [1] // para selecionar somente o segundo
            var corpo = document.body


            document.write (`No primeiro paragrafo está escrito: ${paragrafo1.innerText}`)

            paragrafo2.style.color = 'blue'
            corpo.style.backgroundColor = 'black'
            
            //alert (paragrafo2.innerText)

    // Metodo de acesso por ID
            var d = document.getElementById ('msg')
            
            d.style.background = 'green'
            //document.getElementById ('msg').innerText = 'Mudando o texto'
            d.innerText = 'Mudando o texto por JS'
        
    // Metodo de acesso por Nome
            var d2 = document.getElementsByName ('msgdiv2') [0]
            
            d2.style.background = 'red'

    // Metodo de acesso por Classe
            var cl = document.getElementsByClassName ('divdeclass') [0]

            cl.style.color = 'yellow'

    // Metodo de acesso por Selector
            var selecao = document.querySelector ('div#msg')
            var selecao2 = document.querySelector ('div.divdeclass')
            
            selecao.style.color = 'black'
            selecao2.style.font = 'Normal 14pt Arial'