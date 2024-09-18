class Pessoa {

    #humor = null
    #mensagens = [
        'Seja Feliz',
        'Não estou para conversa hoje'
    ]

    constructor (nome) {
        this.#mudarHumor ()
        this.nome = nome
    }
    dizerOi () {
        return `Olá, meu nome é ${this.nome}`
    }

    getHumor () {
        return this.#humor
    }
    #mudarHumor () {
        //  numero aleatorio entre 0 a 1
        this.#humor = Math.floor (Math.random () * 2)
    }
    getMensagem () {
        return this.#mensagens [this.#humor]
    }
}
let pessoa = new Pessoa ('Duarte Charles')

console.log (pessoa.dizerOi ())
console.log (pessoa.getHumor ())
console.log (pessoa.getMensagem ())