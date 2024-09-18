$ (() => {

    let botao1 = $ ('#botao1')
    let botao2 = $ ('#botao2')
    let botao3 = $ ('#botao3')
    
    let div1 = $ ('#div1')
    let div2 = $ ('#div2')
    let div3 = $ ('#div3')

    // slow, medium, fast
    botao1. on ('click', () => {
        // div1. show ('slow')
        // div1. hide ('slow')
        div1. toggle ('slow') // metodo inteligente que alterna entre show () e hide ()
    })

    botao2. on ('click', () => {
        // div2. fadeOut ('slow')
        // div2. fadeIn ('slow')
        div1. fadeToggle (2000) // alterna entre fadeOut () e fadeIn ()
        div2. fadeTo ('slow', 0.3)
    })

    botao3. on ('click', () => {
        // div3. slideUp ('slow')
        // div3. slideDown ('slow')
        div3. slideToggle ('slow') // alterna entre slideUp () e slideDown ()
    })
})