class Pessoa {
    id = null
}

class PessoaFisica extends Pessoa {
    nome = 'Duarte Charles'
}

class PessoaJuridica extends Pessoa {
    razaoSocial = 'Argus Academy'
}

const pessoaFisica = new PessoaFisica ()
const pessoaJuridica = new PessoaJuridica ()

// console.log (pessoaFisica, pessoaJuridica)

console.log (Object.hasOwn (pessoaFisica, 'id'))   //   true
console.log (Object.hasOwn (pessoaFisica, 'nome'))   //   true

console.log (Object.hasOwn (pessoaJuridica, 'id'))   //   true
console.log (Object.hasOwn (pessoaJuridica, 'nome'))   //  false