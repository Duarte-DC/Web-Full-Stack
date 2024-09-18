
// Contexto spread >> para espalhar os dados

    //String
    let tituloArtigo = 'Como utilizar o operador rest/spread'

    console.log (tituloArtigo)
    console.log (...tituloArtigo)
    console.log ([...tituloArtigo]) // de modo a colocar cada caracter num indice do array

    // arrays
    let listaCursos1 = ['Node JS e MongoDB', 'ES6, Typescript e Angular 4']
    let listaCursos2 = ['Multiplataforma Android/IOS', 'Introdução ao GNU/Linux']
    let listaCursosCompleto = [...listaCursos1, 'Web completo', 'Android Completo', ...listaCursos2]

    console.log (listaCursosCompleto)
    console.log ()

    // objetos 
    let pessoa = {
        nome: 'Duarte Charles',
        idade: 23,
        sexo: 'masculino'
    }
    let clone = {
        ...pessoa,
        endereco: 'Matola C, Casa 162'
    }

    console.log (clone)
    console.log ()

// Contexto rest >> para juntar os dados

    function soma (...parametro) {
        let resultado = 0

        console.log (parametro)

        parametro.forEach (x => resultado += x)

        return resultado
    }
    console.log (soma (3, 8, 5, 7, -8, 10, 115))

    console.log ()

    function multiplicacao (parametro1, ...parametro2) {
        let resultado = 0

        console.log (parametro1)
        console.log (parametro2)

        parametro2.forEach (x => resultado += parametro1 * x)

        return resultado
    }
    console.log (multiplicacao (5, 7, 12, 3, 49))