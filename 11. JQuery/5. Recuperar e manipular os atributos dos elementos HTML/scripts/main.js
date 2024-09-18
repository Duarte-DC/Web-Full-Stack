$ (() => {
    //$ ('img').attr (<atributo a ser trabalhado>, <valor (opcional)>)

    console.log ($ ('img').attr ('src'))
    console.log ($ ('img').attr ('class'))

    console.log ($ ('img').attr ('src', 'assets/images/esfera_2.png'))

    console.log ($ ('div:last').attr ('class', 'estilo2 mb-3'))

    console.log ($ ('input').attr ('value', 'Eu continuo sendo um input'))
    console.log ($ ('input').attr ('type', 'password'))
})