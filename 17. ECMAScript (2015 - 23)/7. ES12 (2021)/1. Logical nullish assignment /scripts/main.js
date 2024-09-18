let valor1 = 10
let valor2 = null //    null ou undefined

//  logical nullish assignment
valor1 ??= 50
valor2 ??= 100

console.log(`Valor 1: ${valor1}\nValor 2: ${valor2}`)

//  -------------------------------------------------

let carro = {
    marca: 'Volkswagen'
}

carro.marca ??= 'Toyota'
carro.modelo ??= 'Golf GTI R MK7.5'
carro.ano ??= 2020

console.log (carro)

//  -------------------------------------------------

let array = [
    'uva',
    'Duarte',
    null,
    undefined,
    5,
    []
]

array.forEach ((item, indice) => {
    array [indice] ??= '<não informado>'
})

console.log (array)