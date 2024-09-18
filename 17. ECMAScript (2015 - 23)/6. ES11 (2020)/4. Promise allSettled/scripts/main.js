const promise1 = new Promise ((resolve, reject) => {
    setTimeout (() => {
        resolve ('Promise 1 resolvida');
    }, 2000)
})

const promise2 = new Promise ((resolve, reject) => {
    setTimeout (() => {
        reject ('Promise 2 rejeitada');
    }, 2000)
})

const promise3 = new Promise ((resolve, reject) => {
    setTimeout (() => {
        resolve ('Promise 3 resolvida');
    }, 2000)
})

const promises = [promise1, promise2, promise3]

Promise.allSettled (promises)

    .then ((resultados) => {

        resultados.forEach (resultado => {

            if (resultado.status === 'fulfilled') {

                console.log (resultado.value)

            }   else {

                    console.log (resultado.reason)
                }
        })
    })