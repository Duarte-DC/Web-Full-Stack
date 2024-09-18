var lista = []

lista ['frutas'] = []
lista ['frutas'] ['citricas'] = ['Turanja', 'Laranja', 'Tangerina', 'Limão']
lista ['frutas'] ['pastosas'] = ['Banana', 'Uva', 'Morango', 'Maça']

lista ['pessoas'] = ['Duarte', 'Ana']

console.log (lista)
console.log ('-----------------------------------------------------------\n')

console.log (lista ['frutas'] ['citricas'] [0])
console.log ('-----------------------------------------------------------\n')

console.log (lista ['pessoas'] [0])
console.log ('-----------------------------------------------------------\n')

// adicionar um elemento no final do array
lista ['pessoas'].push ('Aida')
console.log (lista ['pessoas'])
console.log ('-----------------------------------------------------------\n')

// adicionar um elemento no inicio do array
lista ['pessoas'].unshift ('Isabel', 'Artur')
console.log (lista ['pessoas'])
console.log ('-----------------------------------------------------------\n')

// remover um elemento no final do array
lista ['frutas'] ['citricas'].pop ()
console.log (lista ['frutas'])
console.log ('-----------------------------------------------------------\n')

// remover um elemento no inicio do array 
lista ['frutas'] ['pastosas'].shift ()
console.log (lista ['frutas'])
console.log ('-----------------------------------------------------------\n')

// Ordenar elementos
lista ['frutas'] ['citricas'].sort ()
lista ['frutas'] ['pastosas'].sort ()
lista ['pessoas'].sort ()
console.log (lista)