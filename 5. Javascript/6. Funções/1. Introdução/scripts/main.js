/* 
    As funções podem ser de dois tipos
    » void - realizam o processamento e não fornecem algum tipo de retorno quando a chamada é feita
    */

var x = prompt (`Digite a largura do terreno: `)
var y = prompt (`Digite o comprimento do terreno: `)
function calcularAreaTerrenoVoid (largura, comprimento) {
    // Logica (estrutura de repetição, condições, operadores, variaveis, etc)
       
    var area = largura * comprimento

    document.write (`O terreno tem ${area} metros quadrados`)
}
    
    // Chamada da função
calcularAreaTerrenoVoid (x, y)
    
    
//  » retorno - retornam um parâmetro quando a chamada do método é feita
function calcularAreaTerrenoReturn (largura, comprimento) {

    return largura * comprimento
}
document.write (`<br><br>O terreno tem ${calcularAreaTerrenoReturn (x, y)} metros quadrados`)
// ou
var area = calcularAreaTerrenoReturn (x, y)
document.write (`<br><br>O terreno tem ${area} metros quadrados`)
