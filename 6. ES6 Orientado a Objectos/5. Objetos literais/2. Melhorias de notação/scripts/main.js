let nome = 'Duarte' // document.getElementByID ('nome')
let idade = 23 // document.getElementByID ('idade')
let sexo = 'masculino' // document.getElementByID ('sexo')
let profissao = 'Programador' // document.getElementByID ('profissao')

// Usuario (ES5)
let objetoES5 = {
    nome: nome,
    idade: idade,
    sexo: sexo,
    profissao: profissao,

    exibirResumo: function () {
        console.log (`${this.nome}, de ${idade} anos de idade, do sexo ${this.sexo}, é ${this.profissao}`)
    }
}
console.log (objetoES5)

objetoES5.exibirResumo ()

// Usuario (ES6)
let objetoES6 = {
    nome, // nome = nome variável / valor = valor da variável
    idade,
    sexo,
    profissao,

    exibirResumo: function () {
        console.log (`${this.nome}, de ${idade} anos de idade, do sexo ${this.sexo}, é ${this.profissao}`)
    }
}

console.log (objetoES6)

objetoES6.exibirResumo ()