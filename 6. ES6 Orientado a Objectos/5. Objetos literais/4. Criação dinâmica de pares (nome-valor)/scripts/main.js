let pessoa = {
    nome: 'Duarte Charles',
    idade: 24
}
console.log (pessoa)

pessoa.sexo = 'Masculino'

pessoa.saudacao = () => {
    console.log ('Olá mundo!')
}

console.log (pessoa)
pessoa.saudacao ()