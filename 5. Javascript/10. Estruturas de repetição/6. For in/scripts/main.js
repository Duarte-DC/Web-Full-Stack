// var convidados = ['Isabel', 'Ana', 'Aida', 'Artur', 'Duarte']

var convidados = []

convidados ['a'] = 'Isabel'
convidados [2] = 'Ana'
convidados ['chamo'] = 'Aida'
convidados [-1] = 'Artur'
convidados [false] = 'Duarte'


for (var i in convidados)
    console.log (`Indice: ${i} \n\t- Valor: ${convidados [i]}`)