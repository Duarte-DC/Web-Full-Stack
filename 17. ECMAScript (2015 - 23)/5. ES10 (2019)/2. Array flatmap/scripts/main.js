let nomes = [
    'Duarte, Artur, Charles',
    'Ana Cristina, Christiane',
    'Isabel, Venicious, Jorge'
]
console.log (nomes)

let nomesMap = nomes.map (item => {
    return item.split (', ')
})
console.log (nomesMap)

let nomesFlatMap = nomes.flatMap (item => {
    return item.split (', ')
})
console.log (nomesFlatMap)