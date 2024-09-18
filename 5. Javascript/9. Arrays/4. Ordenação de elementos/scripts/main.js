// Ordenação alfanumérica
var frutas = []

frutas [0] = 'Uva'
frutas [1] = 'Maçã'
frutas [2] = 'Banana'
frutas [3] = 'Morango'

frutas.sort ()
console.log (frutas)

// Ordenação de números
var numeros = []

numeros [0] = 12
numeros [1] = 40
numeros [2] = 1
numeros [3] = 2
numeros [4] = 13
numeros [5] = 3

numeros.sort ()
console.log (numeros)

    // Ordem crescente
    numeros.sort (function (x, y) {
        return x - y
        /*
            < 0 = x ordenado antes do y
            > 0 = y ordenado antes do x
            == a ordem é mantida
        */
    })
    console.log (numeros)

    // Ordem descrescente
    numeros.sort (function (x, y) {
        return y - x
    })
    console.log (numeros)

