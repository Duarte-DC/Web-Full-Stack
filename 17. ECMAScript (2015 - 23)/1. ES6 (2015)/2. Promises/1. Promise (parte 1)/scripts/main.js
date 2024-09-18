let resposta = {}

let promise = new Promise ((resolve, reject) => {

    try {

        //throw new Error('Opa, houve um erro!');

        setTimeout (() => {

            resposta = {
                dados: {
                    mensagem: 'Recuperamos os dados com sucesso'
                }
            }

            resolve ('Sucesso!')

        }, 3000)

    }   catch (e) {

            setTimeout (() => {
                reject (e)
            }, 3000)
        }
})

console.log (promise)

setTimeout (() => {
    console.log (promise)
    console.log (resposta.dados.mensagem)
}, 5000)