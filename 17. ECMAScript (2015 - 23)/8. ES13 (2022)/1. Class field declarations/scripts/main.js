/*  
    codigo anterior ao ES13

class Funcionario {

    constructor () {

        this.departamento = 'RH'
        this.salario = 255_000.50
    }
}
*/

class Funcionario {
    
    departamento = 'RH'
    salario = 255_000.50
}

const funcionario = new Funcionario ()
console.log (funcionario)