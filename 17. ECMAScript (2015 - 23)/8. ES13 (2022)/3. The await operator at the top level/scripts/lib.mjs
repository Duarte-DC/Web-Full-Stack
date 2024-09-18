/* 
export async function aguardarPromessa () {

    console.log ('Inicio do processamento')

    function fetchDados () {
    
        return new Promise (resolve => {
    
            setTimeout (() => {
    
                resolve ('Executou')
            }, 3000)
        })
    }
    
    //  Aguardamos pelo provessamento
    //  no contexto da função

    const dados = await fetchDados ()
    
    console.log (dados)
    
    console.log ('Fim do processamento')
    
}
aguardarPromessa ()
*/
console.log ('Inicio do processamento')

export function fetchDados () {
    
    return new Promise (resolve => {

        setTimeout (() => {

            resolve ('Executou')
        }, 3000)
    })
}

const dados = await fetchDados ()

console.log (dados)

console.log ('Fim do processamento')
