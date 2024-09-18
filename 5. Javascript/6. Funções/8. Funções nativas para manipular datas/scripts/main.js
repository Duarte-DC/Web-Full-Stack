var data = new Date ()

    console.log (data.getDate ()) // Dia
    console.log (data.getMonth () + 1) // Mes + 1: porque a contagem dos meses em Javascript é feita de 0 a 11
    console.log (data.getFullYear ()) // ano

    console.log (`\n${data.getDate ()}/${data.getMonth () + 1}/${data.getFullYear ()}`)

    console.log (`\n\n--------------------------------------------`)
    console.log (`${data.toString ()}`)

// Adicionar ou remover dias
    console.log (`\nAdicionar ou remover dias`)
    data.setDate (data.getDate () + 216)
    console.log (data.toString ())

// Adicionar ou remover meses
    console.log (`\nAdicinar ou remover meses`)
    data.setMonth (data.getMonth () + 8)
    console.log (data.toString ())

// Adicionar ou remover anos 
    console.log (`\nAdicionar ou remover anos`)
    data.setFullYear (data.getFullYear () - 1)
    console.log (data.toString ())

/* 
    Calculo entre 2 datas diferentes

    Estrutura de datas:
        var data = new Date ()
        var data = new Date (milliseconds)
        var data = new Date (dateString)
        var data = new Date (year, month, day, hours, minutes, seconds, miliseconds)
*/ 
    var data1 = new Date ()
    var data2 = new Date (2024, 8, 23)

    console.log (`\n\n--------------------------------------------`)
    console.log (`Calculo entre 2 datas diferentes\n`)
    console.log (data1.toString ())
    console.log (`--------------------------------------------`)
    console.log (data2.toString ())

// 1º Passo - converter datas para números que possamos calcular
    console.log (`\n--------------------------------------------`)

    var x = data1.getTime () // recupera o numero de milissegundos desde 1 de janeiro de 1970 até a data em questão
    var y = data2.getTime ()

    console.log (x) 
    console.log (y)

// 2º Passo - descobrir a quantidade de millisegundos entre data1 e data2
    console.log (`--------------------------------------------`)

    var quantidadeMilissegundos
    if (x > y)
        quantidadeMilissegundos = x - y
    else
        quantidadeMilissegundos = y - x

    console.log (quantidadeMilissegundos)
    /* 
        1 dia = 24 horas
        1 hora = 60 min
        1 min = 60 segundos
        1 segundo = 1000 milisegundos
    */
    var millisegundosDia = 1*24*60*60*1000

    console.log (`1 dia tem: ${millisegundosDia} milissegundos`)

// 3º Passo - dividir a quantidade de millisegundos entre a data1 e data2 por quantidade de milissegundos por dia
    var quantidadeDias = quantidadeMilissegundos / millisegundosDia

    console.log (`--------------------------------------------`)
    console.log (`Faltam ${Math.ceil(quantidadeDias)} dias`)