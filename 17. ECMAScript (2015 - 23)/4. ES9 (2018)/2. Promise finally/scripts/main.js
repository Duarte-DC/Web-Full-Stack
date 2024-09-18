let promise = new Promise ((resolve, reject) => {

    if (false) {

        reject ('Rejeitado')
    }
    resolve ('Resolvido')

})  .then ((resultado) => console.log (resultado))  
    .catch ((rejeitado) => console.log (rejeitado))  
    .finally (() => console.log ('Ciclo terminado!'))
    .then (() => console.log ('Then apos o finally'))