class Animal {
    constructor (cor, tamanho, peso) {
        this.cor = cor
        this.tamanho = tamanho
        this.peso = peso
    }
    dormir () {
        console.log ('Dormir')
    }
}

class Passaro extends Animal {
    constructor (cor, tamanho, peso, bico) {
        super (cor, tamanho, peso)
        this.bico = bico
    }
    voar () {
        console.log ('Voar')
    }
}
class Papagaio extends Passaro {
    constructor (cor, tamanho, peso, bico, fala) {
        super (cor, tamanho, peso, bico)
        this.fala = fala
    }
    falar () {
        console.log ('Falar')
    }
}
let x = new Papagaio ('Azul e Vermelho', 20, 300, 'Pequeno', false)
console.log (x)

let y = new Papagaio ('Amarelo, Azul e verde', 25, 350, 'Medio', true)
console.log (y)

