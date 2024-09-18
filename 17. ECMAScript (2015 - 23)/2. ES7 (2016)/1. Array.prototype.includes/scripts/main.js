let array = [
    'Banana',
    'Maçã',
    'Uva'
]

//  existe um determinado elemento
let retorno = array.find (item => item == 'Abacaxi')
//  find retorna o valor pesquisado se existente e undefined quando não existente
console.log (retorno)

retorno = array.includes ('Abacaxi')
// includes retorna true se existente e false se não existente

console.log (retorno)