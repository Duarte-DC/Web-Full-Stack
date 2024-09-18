let aviao = {
    cor: 'Branco',
    modelo: 'Airbus a380',

    levantarVoo: () => {
        console.log ('Levantar Voo')
    }
}

let AviaoF = function () {
    this.cor = 'Azul'
    this.modelo = 'Boeng 787'

    this.levantarVoo = () => {
        console.log ('Levantar Voo')
    }
}
let aviao2 = new AviaoF ()

class AviaoC {
    constructor () {
        this.cor = 'Preto'
        this.modelo = 'Embraer E-Jets'
    }
    levantarVoo () {
        console.log ('Levantar Voo')
    }
}
let aviao3 = new AviaoC ()

console.log (aviao)
console.log (aviao2)
console.log (aviao3)