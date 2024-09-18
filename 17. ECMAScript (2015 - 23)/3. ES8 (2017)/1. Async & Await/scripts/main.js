let processoAssincrono = new Promise ((resolve, reject) => {

    setTimeout (() => resolve ('Sucesso no processo assincrono'), 3000)
})
async function recuperarDados () {

    await processoAssincrono.then (resposta => console.log (resposta))

    console.log ('Processamento assicrono 1')

    await fetch ('https://jsonplaceholder.typicode.com/comments')

        .then (resposta => resposta.json ())
        .then (dados => console.log ('Comentarios: ', dados))

    console.log ('Processamento assicrono 2')

    await fetch ('https://jsonplaceholder.typicode.com/posts')

        .then (resposta => resposta.json ())
        .then (dados => console.log ('Posts: ', dados))

    console.log ('Processamento assicrono 3')

    return 'Fim'
}
recuperarDados ()   .then (parametro => console.log (parametro))
