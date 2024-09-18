$ (() => {
/*  
    checked:
        retorna o campo selecionado

*/
    $ ('.sexo:checked'). val ()
    
//  $.each (<array>, <função de callback>)

    $.each ($ ('.interesse:checked'), (indice, valor) => {
        console.log (indice.value, valor.value)
    })
})