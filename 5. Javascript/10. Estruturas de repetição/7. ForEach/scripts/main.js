// var funcionarios = ['Duarte Charles', 'Isabel Eunice', 'Ana Cristina', 'Aida Chamo', 'Artur Duarte']
var equipamento = ['Monitores', 'Processadores', 'Teclados', 'Mouse']

var funcionarios = []

// O forEach so atua em valores numericos maiores que 0
funcionarios [23] = ['Duarte Charles']
funcionarios [false] = ['Isabel Eunice']
funcionarios ['x'] = ['Ana Cristina']
funcionarios [4] = ['Aida Chamo']
funcionarios [-2] = ['Artur Duarte']

/*funcionarios.forEach (function (valor, i, funcionarios) {
    //logica
    console.log (`indice: ${i} \n\t- valor: ${valor}`)
    
    if (valor == 'Duarte Charles')
        funcionarios [i] = 'Duarte DC'
    
}) 

console.log (funcionarios)
*/

var x = function (valor, i) {
    //logica
    console.log (`indice: ${i} \n\t- valor: ${valor}`)
}
funcionarios.forEach (x)

console.log ('\n------------------------------------------')

equipamento.forEach (x)