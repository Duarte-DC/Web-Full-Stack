$ (() => {
    $ ('#onload'). html ('Página carregada!')

    $ (window). scroll (() => {
        $ ('#scroll'). html ('Scroll acionado')
    })

    $ (window). resize (() => {
        $ ('#resizeWindow'). html ('Tamanho da tela reajustado')
            . css ({
                'background-color' : 'red'
            })
    })

    $ ('#div1'). scroll (function () {
        $ (this). css ({
            'background-color' : 'blue'
        })
    })
    
})