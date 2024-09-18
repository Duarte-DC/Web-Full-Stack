let objeto = {
    
    nome: 'Duarte Artut Chamo Charles',
    profissional: {
        site: 'duartecharles.com',
        profissao: 'Engenheiro de Software'
    },
    hobbies: [
        {id: 1, hobby: 'Fazer musculação'},
        {id: 2, hobby: 'Dormir'}
    ],
    pais: 'Moçambique'
}

// console.log (objeto)
// console.log ('\n')

//  descritores de propriedades
console.log (Object.getOwnPropertyDescriptors (objeto))
console.log ('\n')

/*
    descritor writable: 
        »   quando definido como false ele indica que o valor da propriedade não pode ser modificado

    Object.defineProperty (objeto, 'nome', {
        value: 'Duarte Artur Chamo Charles',
        writable: false
    })
*/

/*
    descritor enumerable:
        »   quando definido como false, a propriedade em questão não é exibida em laços de repetição
        for (let propriedade in objeto) {
            
        console.log (propriedade, objeto [propriedade])
    }

    console.log ('\n')
    
    Object.defineProperty (objeto, 'hobbies', {
        enumerable: false
    })
    
    Object.defineProperty (objeto, 'profissional', {
        enumerable: false
    })

    for (let propriedade in objeto) {
        
    console.log (propriedade, objeto [propriedade])
    }
*/

/* 
    descritor configurable:
        »   quando definido como false indica que a propriedade não pode ser removida e também não podemos 
        mais modificar os descritores, excepto a mudança de writeble para false
*/

    Object.defineProperty (objeto, 'pais', {
        configurable: false
    })
