const promise1 = new Promise ((resolve, reject) => {
    setTimeout (() => {
        resolve ('Promise 1 Resolvida')
    }, 3000)
})

const promise2 = new Promise ((resolve, reject) => {
    setTimeout (() => {
        resolve ('Promise 2 Resolvida')
    }, 2000)
})

const promise3 = new Promise ((resolve, reject) => {
    setTimeout (() => {
        reject ('Promise 3')
    }, 1000)
})

let promises = [promise1, promise2, promise3]

Promise.any (promises)

    .then ((resolvida) => {

        console.log (resolvida)

    })  .catch ((erro) => {

            console.log (erro)
        })