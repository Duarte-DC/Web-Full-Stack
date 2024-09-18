$ (() => {
    let nome = $ ('#nome')
    let email = $ ('#email')
    let opcao = $ ('#motivo')
    let resultado = $ ('#resultado')
    let formulario = $ ('#formulario')

    let texto

    nome. focus ((e) => {
        $ (e.target). addClass ('bg-primary text-white')
    })
    nome. blur ((e) => {        
        $ (e.target). removeClass ('bg-primary text-white')
        
        texto = $ (e.target). val ()
        console.log (texto)
    })
    
    email. focus ((e) => {
        $ (e.target). addClass ('bg-primary text-white')
    })
    email. blur ((e) => {
        $ (e.target). removeClass ('bg-primary text-white')
        
        texto = $ (e.target). val ()

        console.log (texto)
    })

    opcao. change ((e) => {
        if ($ (e.target). val () == 'duvida') {
            resultado. html ('Motivo do contacto: Dúvida')
            
        }   else if ($ (e.target). val () == 'sugestao') {
                
                resultado. html ('Motivo do contacto: Sugestão')

            }   else if ($ (e.target). val () == '') {
                    resultado. html ('Selecione o motivo')
                }
    })

    formulario. submit ((e) => {
        e.preventDefault ()
        console.log ('Formulario enviado')
    })
})