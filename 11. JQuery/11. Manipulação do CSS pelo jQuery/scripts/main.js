$ (() => {
/*
    css ():
        »   adiciona propriedades de estilo inline
        exemplo:
            <div style = 'color: red; font-size: 20px'> </div>

*/
    $ ('body'). css ({
        'margin' : '0px'
    })

    $ ('#topo'). css ({
        'background' : '#155661',
        'margin' : '0px',
        'padding' : '10px 20px'
    })

    $ ('h1'). css ({
        'color' : '#fff',
        'margin' : '0px'
    })

/*
    addClass ():
        »   adicona classes
    hasClass ():
        »   verifica a existência de uma classe no elemento HTML
    removeClass ():
        »   remove classes

        <div class = 'classe1 classe2 classe3'> </div>
*/
    $ ('div:last'). addClass ('container mt-5')
    $ ('section'). addClass ('input-group')
    $ ('label'). addClass ('input-group-text')
    $ ('input'). addClass ('form-control')
    $ ('textarea').addClass ('form-control bg-danger')

    if ($ ('textarea'). hasClass ('bg-danger')) {
        $ ('textarea'). removeClass ('bg-danger')
    }
})