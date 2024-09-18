$ (() => {
    console.log ('Conteudo div 1: ', $ ('#div1').html ())
    console.log ($ ('#div1').html ('<strong style = "color: red">Eu sou o novo valor</strong>'))

    console.log ('Conteudo div 2: ', $ ('#div2').html ())
})