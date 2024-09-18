//   false  ->  null, undefined, 0, ''

let valor1 = 10
let valor2 = undefined  // fals
let valor3 = null   // false
let valor4 = 0  // false
let valor5 = ''   // false
let valor6 = '1M'

valor1 ||= 50
valor2 ||= 100
valor3 ||= 1000
valor4 ||= 10000
valor5 ||= 100000
valor6 ||= 1000000

console.log ('Valor 1:', valor1)
console.log ('Valor 2:', valor2)
console.log ('Valor 3:', valor3)
console.log ('Valor 4:', valor4)
console.log ('Valor 5:', valor5)
console.log ('Valor 6:', valor6)