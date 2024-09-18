// modelo do objeto

class ContaBancaria {
    /*  
        agencia
        numeroConta
        saldo
        limite
    */
    constructor () {
        this.agencia = 1075
        this.numeroConta = 12346937
        this.saldo = 20
        this.limite = 100
    }
    depositar (valorDeposito) {
        this.saldo += valorDeposito
    }
    sacar (valorSaque) {
        this.saldo -= valorSaque
    }
    consultarSaldo () {
        return this.saldo
    }
}

let x = new ContaBancaria ()
let y = new ContaBancaria ()


y.depositar (70)
x.sacar (10)

console.log (x.consultarSaldo ())

console.log (y.consultarSaldo ())
