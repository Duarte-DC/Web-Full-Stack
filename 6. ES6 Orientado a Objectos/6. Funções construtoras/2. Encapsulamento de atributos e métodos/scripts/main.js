let Carro = function () {
    let velocidadeMaxima = 340
    let quilometrosRodados = 0

    this.cor = 'preto'
    this.modelo = 'maybach s600'
    this.velocidadeAtual = 0

    this.acelerar = () => {
        let velocidade = this.getVelocidadeAtual () + 50

        if (velocidade > velocidadeMaxima)
            velocidade = velocidadeMaxima
    
        this.setVelocidadeAtual (velocidade)

        setQuilometrosRodados (0.5)
        console.log (quilometrosRodados)
    }
    this.getVelocidadeAtual = () => {
        return this.velocidadeAtual
    }
    this.setVelocidadeAtual = velocidade => {
        this.velocidadeAtual = velocidade
    }
    let setQuilometrosRodados = (quilometros) => {
        quilometrosRodados += quilometros
    }
}
let x = new Carro ()
console.log (x.velocidadeAtual)
x.acelerar ()
console.log (x.velocidadeAtual)
x.acelerar ()