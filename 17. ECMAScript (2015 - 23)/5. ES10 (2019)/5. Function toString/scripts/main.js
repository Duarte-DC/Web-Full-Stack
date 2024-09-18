class Carro {

    constructor (marca, modelo, ano) {

        this.marca = marca;
        this.modelo = modelo;
        this.ano = ano;
    }
    toString () {
        return `Carro da marca: ${this.marca}\nModelo: ${this.modelo}\nAno: ${this.ano}` 
    }
}
let carro = new Carro ('Mercedes-Benz', 'S63', 2024);

console.log (carro.toString ())