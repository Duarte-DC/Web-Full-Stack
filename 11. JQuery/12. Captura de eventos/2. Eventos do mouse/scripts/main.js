$ (() => {
    let div = $ ('#div1')
    let botao1 = $ ('#botao1')
    let botao2 = $ ('#botao2')
    
    let verde = 'bg-success my-4'
    let vermelho = 'bg-danger my-4'

    botao1. mousedown (() => {
        div. removeClass ()
        div. addClass (verde)
    })
    
    botao1. mouseup (() => {
        div. removeClass ()
        div. addClass (vermelho)
    })
    
    div. click (function () {
        div. removeClass ()
        div. addClass (vermelho)
    }) 

    div. dblclick (() => {
        div. removeClass ()
        div. addClass (verde)
    })
    
    botao2. dblclick (() => {
        div. removeClass ()
        div. addClass (verde)
    })
    
    let divExterna = $ ('#divExterna')
    let divInterna = $ ('#divInterna')
    let texto3 = $ ('#resultadoExterna')
    let texto4 = $ ('#resultadoInterna')

    divExterna. mouseover (() => {
        texto3. html ('Entrou')
        console.log ('Div interna entrou')
    })
    divExterna. mouseout (() => {
        texto3. html ('Saiu')
        console.log ('Div interna saiu')
    })

    divInterna. mouseover (() => {
        texto4. html ('Entrou')
        console.log ('Div externa entrou')
    })

    divInterna. mouseout (() => {
        texto4. html ('Saiu')
        console.log ('Div externa saiu')
    })

    let texto = $ ('#resultado')
    let texto2 = $ ('#spanOculta')
    
    div. mousemove ((e) => {
        console.log (e.offsetX, e.offsetY) // retorna a posição do mouse no eixo X e eixo Y
        texto. html (`X: ${e.offsetX} <br> Y: ${e.offsetY}`)
    })

    div. mouseenter (() => {
        texto2. html ('Mouse sobre a div: <br>')
    })

    div. mouseleave (() => {
        texto2. html ('')
        texto. html ('')
    })

})