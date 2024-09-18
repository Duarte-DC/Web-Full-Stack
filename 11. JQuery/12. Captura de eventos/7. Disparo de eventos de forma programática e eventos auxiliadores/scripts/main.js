$ (() => {
/*
    trigger ():
        »   Aciona evento de modo programático

    toggleClass ():
        »   Função auxiliar para inclusão e remoção de classe
*/
    let botao1 = $ ('#botao1')
    let botao2 = $ ('#botao2')

    botao2. on ('click', () => {
        botao2. toggleClass ('btn-outline-secondary btn-primary')
    })

    botao1. on ('click', () => {
        botao2. trigger ('click')
    })

/*
    hover ():
        »   Função auxiliar para captura dos eventos 
            mouseenter ()   -   mouseleave ()
            mouseover ()    -   mouseout ()
*/

    let div = $ ('#div1')

/*
    div. on ('mouseenter', e => {
        $ (e.target). toggleClass ('bg-danger')
    })
    div. on ('mouseleave', e => {
        $ (e.target). toggleClass ('bg-danger'),
    })
*/

    div. hover (
        e => $ (e.target). toggleClass ('bg-danger')
    )

})