//  Testando com o operador lógico OR
let teste1 = null || 'valor a direita'
let teste2 = 0 || 'valor a direita'
let teste3 = undefined || 'valor a direita'
let teste4 = '' || 'valor a direita'
let teste5 = 'Valor a esquerda' || 'valor a direita'

console.log (
    'Teste 1: ', teste1,
    '\nTeste 2: ', teste2,
    '\nTeste 3: ', teste3,
    '\nTeste 4: ', teste4,
    '\nTeste 5: ', teste5
)

console.log ('\n------------------------------------------')


//  Teste com nullish coaliscing (??)

teste1 = null ?? 'valor a direita'
teste2 = 0 ?? 'valor a direita'    //  Utilizavel
teste3 = undefined ?? 'valor a direita'
teste4 = '' ?? 'valor a direita'    //  Utilizavel
teste5 = 'Valor a esquerda' ?? 'valor a direita'

console.log (
    'Teste 1: ', teste1,
    '\nTeste 2: ', teste2,
    '\nTeste 3: ', teste3,
    '\nTeste 4: ', teste4,
    '\nTeste 5: ', teste5
)
