obj1 = {
    nome: 'Duarte Artur Chamo Charles',
    profissao: 'Engenheiro de Software'
}
obj2 = {
    nome: 'Ana Cristina Chamo Charles',
    profissao: 'Arquiteta'
}

// Coleção WeakMap

const objetos = new WeakMap ()

objetos.set (obj1, 'Informações do objeto 1: ')
objetos.set (obj2, 'Informações do objeto 2: ')

//  Não podemos percorrer esse WeakMap
console.log (objetos)

obj1 = null;

console.log (objetos)