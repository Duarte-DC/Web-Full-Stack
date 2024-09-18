obj1 = {
    nome: 'Duarte Artur Chamo Charles',
    profissao: 'Engenheiro de Software'
}
obj2 = {
    nome: 'Ana Cristina Chamo Charles',
    profissao: 'Arquiteta'
}

// WeakMap - Referência e vazamento de memória

const objetos = [obj1, obj2]    //  Referência

console.log ('Original')
objetos.map ((value, index) => console.log (index, value))

obj2 = null;

//  obj2.nome = 'Ana Charles'
objetos [1].nome = 'Ana Charles'    //  vazamento de memória

console.log ('Resultado')
objetos.map ((value, index) => console.log (index, value))
console.log (obj2)