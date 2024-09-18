
function distribuiCaracter () {
    // selecionar o valor digitado 
    var entrada = document.getElementById ('caracterEntrada').value

    //limpar o campo de digitação
    document.getElementById ('caracterEntrada').value = ''

    console.log (entrada)

    //limpar espaços em branco nas entradas da string
    entrada.trim ()

    if (entrada == '0' || entrada == '1' ||
        entrada == '2' || entrada == '3' ||
        entrada == '4' || entrada == '5' ||
        entrada == '6' || entrada == '7' ||
        entrada == '8' || entrada == '9')
    { // adicionar o caracter no campo referente a numeros
        document.getElementById ('numero').value += entrada
    }
    else // adicionar o caracter no campo referente a letras
    {
        document.getElementById ('letra').value += entrada
    }
}