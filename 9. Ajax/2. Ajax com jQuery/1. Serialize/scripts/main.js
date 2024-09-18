$ (() => {
    let botao = $ ('button')
    let formulario = $ ('form')

    botao. on ('click', e => {
        e. preventDefault ()

        let dados = formulario. serialize ()

        console. log (dados)

        // ajax
        $. ajax ({
            type: 'GET',
            url: 'config/config.php',
            data: dados,
            dataType: 'json',
            success: dados => {
                console. log (dados)
            },
            error: erro => {console. log (erro)} 
        })
    })
})