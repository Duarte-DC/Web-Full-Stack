/* 
    Temos 3 escopos:
        »   global;
        »   função;
        »   bloco .
*/

/* var serie = 'Friends' // global

function x () {

    var serie = 'Game of Thrones'

    console.log (`Função: ${serie}`) // de função

    if (true) {
        console.log (`Bloco dentro defunção: ${serie}`) // de bloco dentro de escopo de função
    }

}
x ()

if (true) {
    console.log (`Bloco: ${serie}`) // de bloco
} */

// -------------------------------------------------------------------------------------------

function x () {
    console.log (`Função: ${serie}`)

    if (true) {
        console.log (`Bloco dentro de função: ${serie}`)
    }
}

if (true) {
    var serie = 'The Walking Dead'

    x ()

    console.log (`Bloco: ${serie}`)
}
console.log (`Global: ${serie}`)

// -------------------------------------------------------------------------------------------


if (true) {
    let animes = 'Good Times'

    console.log (`\n\nBloco: ${animes}`)
}
console.log (`Global: ${animes}`)