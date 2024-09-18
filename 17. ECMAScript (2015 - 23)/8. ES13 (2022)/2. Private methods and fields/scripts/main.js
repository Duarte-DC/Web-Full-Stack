class Funcionario {
    departamento = 'RH'
    salario = 255_000.50
    #primeiroNome = 'Duarte'
    #ultimoNome = 'Charles'

    #nomeCompleto () {
        return `${this.#primeiroNome} ${this.#ultimoNome}`;
    }
    mostrarNome () {
        return this.#nomeCompleto ()
    }
}

const funcionario = new Funcionario ()

console.log (funcionario.mostrarNome ())