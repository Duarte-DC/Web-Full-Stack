/*
class Funcionario {
    departamento = 'RH'
    salario = 255_000.50
    static #primeiroNome = 'Duarte'
    static #ultimoNome = 'Charles'

    static #nomeCompleto () {
        return `${this.#primeiroNome} ${this.#ultimoNome}`;
    }
    static mostrarNome () {
        return this.#nomeCompleto ()
    }
}

console.log (Funcionario.mostrarNome ())
*/

class Filme {
    static proximoIDFilme = 1

    constructor (titulo) {

        this.id = Filme.proximoIDFilme
        this.titulo = titulo

        Filme.proximoIDFilme ++
    }

    static getProximoIDFilme () {
        return Filme.proximoIDFilme
    }
}

const filme1 = new Filme ('O pior vizinho do mundo')
const filme2 = new Filme ('Luta pela fé')
console.log (filme1, filme2)

console.log (Filme.getProximoIDFilme ())