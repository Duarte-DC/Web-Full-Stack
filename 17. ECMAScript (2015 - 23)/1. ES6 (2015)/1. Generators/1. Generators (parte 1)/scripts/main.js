function* testeGenerator () {

    yield `Teste 1`
    yield `Teste 2`
    yield `Teste 3`

    return 'Teste 4'
}

let meuGenerator = testeGenerator ()

console.log (meuGenerator.next ())

console.log ('\n----------\n\n')

console.log (meuGenerator.next ())

console.log ('\n----------\n\n')

console.log (meuGenerator.next ())

console.log ('\n----------\n\n')
console.log (meuGenerator.next ())