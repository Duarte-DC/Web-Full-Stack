let assinatura = {
    idCliente: 1000,
    descricao: 'Acesso a internet',

    estado () {
        console.log ('Ativo')
    }
}
console.log (assinatura.descricao)

let x = assinatura
console.log (x.descricao)

console.log ()

x.descricao = 'internet + tv + telefone'

console.log (assinatura.descricao)
console.log (x.descricao)