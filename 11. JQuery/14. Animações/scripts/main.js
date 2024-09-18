$ (() => {

    let botao = $ ('button')
    let div = $ ('#div')

    botao. on ('click', () => {
        div. animate (
        {
            'border-radius': '20px',

            'width': '200px',
            'height': '200px',

            'margin-left': '200px',
            'margin-top': '200px'

        },
        {
            duration: 3500,
            start: () => {
                botao. html ('Animação iniciada')
            }, 
            complete: () => {
                botao. html ('Animação finalizada')
            }
        })
    })
})