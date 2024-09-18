Object.prototype.attr50 = 'z'

let animal = {
    attr1: 'a'
}
let vertebrado = {
    __proto__: animal,

    attr2: 'b'
}
let ave = {
    __proto__: vertebrado,

    attr2: 'x',
    attr3: 'c'
}
console.log (ave.attr1, ave.attr2, ave.attr3, ave.attr50)