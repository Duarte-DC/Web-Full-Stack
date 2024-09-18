// ---------------------------------------- metodo construtor -----------------------------------

console.log ('\t\t\t ---- Metodo Construtor ----')

class CarroConstrutor {
    constructor (cor, modelo, velocidadeAtual, velocidadeMaxima) {
        this.cor = cor
        this.modelo = modelo
        this.velocidadeAtual = velocidadeAtual
        this.velocidadeMaxima = velocidadeMaxima
    }
    acelerar () {
        this.velocidadeAtual += 20
    }
    get velocidadeAtual (){
        return this.velocidadeAtual
    }
    set velocidadeAtual (velocidade) {
        // this.velocidadeAtual = velocidade
    }
}
let construtor = new CarroConstrutor ('preto', 'camaro', 200, 320)
console.log (construtor)

// ----------------------------------------- Objeto literal ---------------------------------------

console.log ('\n\n\t\t\t---- Objeto Literal ----')

let cor = 'preto'
let modelo = 'camaro'
let velocidadeAtual = 200
let velocidadeMaxima = 320

let carroLiteral = {
    cor,
    modelo,
    velocidadeAtual,
    velocidadeMaxima,

    acelerar () {
        this.velocidadeAtual += 20
    },
    getVelocidadeAtual () {
        return this.velocidadeAtual
    },
    setVelocidadeAtual (velocidadeAtual) {
        this.velocidadeAtual = velocidadeAtual
    }
}

console.log (carroLiteral)

// --------------------------------------- Função construtora ---------------------------------------

console.log ('\n\n\t\t\t---- Função construtora ----')

let Carro = function () { 
    this.cor = 'Amarelo'
    this.modelo = 'Camaro'
    this.velocidadeAtual = 200
    this.velocidadeMaxima = 320

    this.acelerar = () => {
        let velocidade = this.getVelocidadeAtual () + 10
        
        this.setVelocidadeAtual (velocidade)
    }
    this.getVelocidadeAtual = () => {
        return this.velocidadeAtual
    }
    this.setVelocidadeAtual = velocidadeAtual => {
        this.velocidadeAtual = velocidadeAtual
    }
}

let x = new Carro ()
console.log (x)
console.log (`A velocidade atual é ${x.getVelocidadeAtual ()}`)

x.acelerar ()
console.log (`Depois da aceleração a velocidade ficou ${x.getVelocidadeAtual ()}`)