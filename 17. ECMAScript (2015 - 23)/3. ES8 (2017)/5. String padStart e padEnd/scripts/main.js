//  padStart (preenchimento a esquerda)

let codigo = '1000'
    //  expectativa ******1000

codigo = codigo.padStart (10, '*')

console.log (codigo)

//  padEnd (preenchimento a direita)

let codigo2 = '8888'
    //  expectativa 8888******
codigo2 = codigo2.padEnd (10, '*')

console.log (codigo2)