// Array

let array = [10, 20, 30, 40]
/*
function teste (x, y) {
    console.log (x, y)
}
teste (array [0], array [1]) 
*/

function testeArray ([x,,,y, z = 50]) {
    console.log (x, y, z)
}
testeArray (array)

// Objeto

let objeto = {
    a: 10,
    b: 20,
    c: 30,
    d: 40
}
/*
function testeObjeto (x, y) {
    console.log (x, y)
}
testeObjeto (objeto.a, objeto.b)
*/
function testeObjeto ({a: x, d: y, z = 50}) {
    console.log (x, y, z)
}
testeObjeto (objeto)