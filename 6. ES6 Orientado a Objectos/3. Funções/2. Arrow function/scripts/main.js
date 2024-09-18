    /*
    let quadrado = function (x = 2) {
        return x * x
    }

    console.log (quadrado (10))
*/

let quadrado = x => {
    return x * x
}
console.log (quadrado (4))

// em caso de estar a ser passado mais de 1 parametro ou parametros default, usamos parenteses     
let retangulo = (x = 2, y = 4) => {
    return x * y
}
console.log (retangulo (6, 8))

// em caso de nao receber nenhum parametro 
let triangulo = () => {
    let ladoA = 2
    let ladoB = 3
    let ladoC = 4
    
    return ladoA * ladoB * ladoC
}
console.log (triangulo ())

// --------------------------------------------------------------------

let parOuImpar = numero => {
    if (numero % 2 === 0)
        return 'par'
    else
        return 'impar'
}
console.log (parOuImpar (9))