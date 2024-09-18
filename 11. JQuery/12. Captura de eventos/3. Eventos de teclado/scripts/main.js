$ (() => {
    let teclado = $ ('#teclado')
    let resultado = $ ('#resultado')
    let texto

    teclado. keyup ((e) => {

        console.log (e.keyCode)

        if (e.keyCode == 13) {
            resultado. html (`Teclou enter`)
            
            texto = $ (e.target). val () // recuperar texto inserido
            $ (e.target). val ('') // limpar

            console.log (texto)
        }   else {
                resultado. html (`Codigo da ultima tecla pressionada: ${e.keyCode}`)
            }
    })

    teclado. keyup ((e) => {
        console.log (e.keyCode)
        
        if (e.keyCode < 47 || e.keyCode > 57) {

            texto = $ (e.target). val ()
            texto = texto.slice (0, -1)

            $ (e.target). val (texto)
        }
    })

    teclado. keydown (() => {
        resultado. html ('Tecla pressionada')
    })
})