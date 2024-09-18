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

console.log (objeto)
console.log ('\n')

console.log (Object.values (objeto))
console.log ('\n')

console.log (Object.entries (objeto))