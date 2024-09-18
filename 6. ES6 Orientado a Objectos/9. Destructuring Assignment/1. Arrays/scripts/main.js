let frutas = ['Abacaxi', 'Uva', 'Pera', 'Mamão']

/*
let a = frutas [0]
let b = frutas [1]
let c = frutas [2]
*/

let [a, b, , c] = frutas
console.log (a, b, c)

let [a1, b1, c1, d1, e1 = 'Banana'] = frutas
console.log (a1, b1, c1, d1, e1)

let coisas = [['Abacate', 'Uva', 'Banana', 'Abacaxi'], ['Duarte', 'Cristina']]
let [,[,x]] = coisas 

console.log (x)