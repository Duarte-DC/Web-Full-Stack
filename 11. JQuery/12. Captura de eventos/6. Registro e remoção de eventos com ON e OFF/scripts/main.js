$ (() => {
/* 
    on () / off ():
        »   Registra/remove eventos para os elementos html mesmo que 
        eles sejam criados posteriormente a chamada da função
*/

    let body = $ ('body')

    body . on ('focus', 'input', e => {
        $ (e.target). addClass ('bg-success')
    })
    body. on ('blur', 'input', e => {
        $ (e.target). removeClass ('bg-success')
    })

    body. off ('blur', 'input')

    body. append ('<br><div class = "input-group"><label for = "email" class = "input-group-text">E-mail</label><input type = "email" id = "email" class = "form-control"></div>')

})