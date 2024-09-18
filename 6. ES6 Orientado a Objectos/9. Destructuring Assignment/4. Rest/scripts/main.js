// Array
let array = [10, 20, 30, 40]

let [x, ...restoArray] = array

console.log (x)
console.log (restoArray)

console.log ()
// Objeto

let objeto = {
    a: 10,
    b: 20,
    c: 30,
    d: 40
}
let {a, ...restoObjeto} = objeto

console.log (a)
console.log (restoObjeto)