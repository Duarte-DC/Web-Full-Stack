$ (() => {

    let foco = $ ('#nome, #email')
    let texto = ''

    foco. focus ((e) => {
        $ (e.target). addClass ('bg-primary text-white')
    })
    foco. blur ((e) => {
        $ (e.target). removeClass ('bg-primary text-white')
        
        texto = $ (e.target). val ()
        console.log (texto)
    })
})