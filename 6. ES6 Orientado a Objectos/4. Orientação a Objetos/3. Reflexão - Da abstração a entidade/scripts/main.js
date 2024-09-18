/*  software de uma carpintaria
    cadeira e sofá
*/

// paradigma de procedural

/* cadeira
let quantPernas = 1
let giraoria = true
let cor = 'azul' */

/* ------------------------------------------------------------------------

// -- array de cadeiras --

let cadeiras = []

cadeiras [0] = []

cadeiras [0]['quantPernas'] = 4
cadeiras [0]['giratoria'] = false
cadeiras [0]['cor'] = 'azul'

cadeiras [1] = []
cadeiras [1]['quantPernas'] = 1
cadeiras [1]['giratoria'] = true
cadeiras [1]['cor'] = 'vermelha'

function girarCadeira () {
    for (i in cadeiras)
    {
        if (cadeiras [i]['giratoria'] === true) {
            console.log ('A cadeira girou')
        }
        else {
            console.log ('A cadeira não é giratória')
        }
    }
}
girarCadeira ()

function adicionarCadeira (quantPernas, giraoria, cor) {
    let cadeira = []

    cadeira ['quantPernas'] = quantPernas
    cadeira ['giratoria'] = giraoria
    cadeira ['cor'] = cor

    cadeiras.push (cadeira)
}

adicionarCadeira (2, true, 'amarelo')

console.log (cadeiras) 
----------------------------------------------------------------------
*/

// Paradigma de 00

class Cadeira {
    constructor (quantPernas, giraoria, cor) {
        this.quantPernas = quantPernas
        this.giraoria = giraoria
        this.cor = cor
    }
    girarCadeira () {
        if (this.giraoria === true)
            console.log ('A cadeira girou')
        else 
            console.log ('A cadeira não é giratória')
    }
}
/*
let x = new Cadeira (4, false, 'azul')
let y = new Cadeira (1, true, 'vermelho')

console.log (x)
x.girarCadeira ()

console.log (y)
y.girarCadeira () */

let x = []
x.push (new Cadeira (4, false, 'azul'))
x.push (new Cadeira (1, true, 'vermelho'))

console.log (x)