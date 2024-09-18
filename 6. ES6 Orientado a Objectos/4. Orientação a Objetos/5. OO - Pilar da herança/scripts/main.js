/*
class Cachorro {
    constructor () {
        this.cor = 'Branco e castanho'
        this.tamanho = 30
        this.orelhas = 'Grandes e caídas'
    }
    correr () {
        console.log ('Correr')
    }
    dormir () {
        console.log ('Dormir')
    }
    rosnar () {
        console.log ('Rosnar')
    }
}

class Passaro {
    constructor () {
        this.cor = 'Castanho'
        this.tamanho = 10
        this.bico = 'Curto'
    }
    voar () {
        console.log ('Voar')
    }
    dormir () {
        console.log ('Dormir')
    }
} */

class Animal {
    constructor () {
        this.cor = ''
        this.tamanho = null
    }
    dormir () {
        console.log ('Dormir')
    }
}

class Cachorro extends Animal {
    constructor () {
        super ()
        this.orelhas = 'Grandes e caídas'
    }
    correr () {
        console.log ('Correr')
    }
    
    rosnar () {
        console.log ('Rosnar')
    }
}

class Passaro extends Animal {
    constructor () {
        super ()
        this.bico = 'Curto'
    }
    voar () {
        console.log ('Voar')
    }
}
class Papagaio extends Passaro {
    constructor () {
        super ()
        this.fala = true
    }
    falar () {
        console.log ('Falar')
    }
}

let x = new Cachorro ()
let y = new Passaro ()
let xy = new Papagaio ()

console.log (x)
console.log (y)
console.log (xy)

x.dormir ()