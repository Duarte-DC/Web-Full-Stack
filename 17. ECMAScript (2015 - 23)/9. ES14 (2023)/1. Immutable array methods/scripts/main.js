const numeros = [5, 3, 2, 4, 1]

//  const arrayInvertido = numeros.reverse ()
//  toReversed (baseado no reverse)
const arrayInvertido = numeros.toReversed ()

console.log (numeros)
console.log (arrayInvertido)
console.log ('\n')

//  toSorted (baseado no sort)
const arrayOrdenado = numeros.toSorted ()

console.log (numeros)
console.log (arrayOrdenado)
console.log ('\n')

// toSpliced (baseado no splice)

const arrayFatiado = numeros.toSpliced (1, 3)   //   (inicio, fim)   ->   intervalo de valores a serem removidos

console.log (numeros)
console.log (arrayFatiado)
console.log ('\n')

//  with (baseado na notação de colchetes)
const arrayAleradoCom = numeros.with (2, 20)   //   (indice, valor)  ->  
console.log (numeros)
console.log (arrayAleradoCom)