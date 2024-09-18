/*
let biscicleta = {
    cor: 'Branca',
    marcha: 'única',
    aro: 12,

    pedalar () {
        console.log ('Método pedalar executado')
    }
}
console.log (biscicleta)
biscicleta.pedalar ()

let biscicleta2 = {
    cor: 'Azul',
    marcha: '18',
    aro: 26,

    pedalar () {
        console.log ('Método pedalar executado')
    }
}
console.log (biscicleta2)
biscicleta2.pedalar () */

// ------------------------------------------------------------------------------------------------------

let BiscicletaFactory = function (cor, marcha, aro) {
    /*  Lógica 
        »   requisição http
        »   resposta http
    */
    return {
        cor,
        marcha,
        aro,

        pedalar () {
            console.log ('Método pedalar executado')
        }
    }
}
let x = BiscicletaFactory ('Vermelho', 'única', 18)
console.log (x)

console.log (`Cor: ${x.cor}`)
x.pedalar ()

let y = BiscicletaFactory ('Preto', '21', 26)
console.log (y)



