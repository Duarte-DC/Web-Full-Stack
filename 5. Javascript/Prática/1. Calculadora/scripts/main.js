function calcular (tipo, valor) {
    console.log (tipo, valor)

    var result = document.getElementById ('resultado')

    // saber qual é o tipo de da 

    if (tipo === 'acao') {

        if (valor === 'c') {
            // Limpar o valor (result)
            result.value = ''

        }   else if (valor === '+' || valor === '-' 
                    || valor === '*' || valor === '/'
                    || valor === '.') {

                result.value += valor

            }   else if (valor === "=") {
                var valorCalculado = eval (result.value)
                result.value = valorCalculado
            }

    }   else if (tipo === 'valor')
        {
            result.value += valor
        }
}