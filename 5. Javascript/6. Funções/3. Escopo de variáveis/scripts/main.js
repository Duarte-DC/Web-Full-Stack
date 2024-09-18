/* 
    O javascript possui 3 escopos: 
        » Global - é o escopo do script como um todo
        » De função - corresponde ao conteúdo inserido dentro de um bloco da função
        » De bloco - são as instruções contidas dentro de comandos
*/

// Escopo global
var serie = 'Friends' 


// Escopo de bloco
if (true) {
    var serie2 = 'Lupin'

    document.write (serie)
    document.write (`<br> ${serie2} <br>`)
}

document.write (`<br> ${serie2} <br> <br>`)

// Escopo de função
function x () {
    var serie3 = 'Good Times'

    document.write (serie)
    document.write (`<br> ${serie2} <br>`)
    document.write (serie3)
}
x ()

/* 
    as variaveis definidas dentro do ecopo de bloco podem ser acessadas dentro e fora do bloco, 
    enquanto que os escopos de função só podem ser acessados dentro da função no qual a variável foi definida
*/ 