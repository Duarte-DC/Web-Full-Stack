class Animal {
    constructor (cor, tamanho) {
        this.cor = cor
        this.tamanho = tamanho
    }
    dormir () {
        console.log ('Dormir')
    }
}

class Passaro extends Animal {
    constructor (cor, tamanho, bico) {
        super (cor, tamanho)
        this.bico = bico
    }
    voar () {
        console.log ('Voar')
    }
}

class Papagaio extends Passaro {
    constructor (cor, tamanho, bico, falar) {
        super (cor, tamanho, bico)
        this.falar = falar
    }
    falar () {
        console.log ('Falar')
    }
}

class Avestruz extends Passaro {
    constructor (cor, tamanho, bico) {
        super (cor, tamanho, bico)
    }
    enterrarCabeca () {
        console.log ('Enterrar cabeça')
    }
    voar () { // Metodo sobrescrito
        console.log ('Não voa')
    }
}

let x = new Papagaio ('Azul e vermelho', 20, 'Medio', true)
console.log (x)
x.voar ()

console.log ('')

let y = new Avestruz ('Castanho', 80, 'Comprido')
console.log (y)
y.enterrarCabeca ()
y.voar ()