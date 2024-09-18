// composição 
let produto = { // é um
    descricao: 'Notebook',
    preco: 45000,

    detalhes: { // tem um
        fabricante: 'ASUS',
        modelo: 'Vivobook S15UA'
    }
}
/*
    array >> []
    objeto >> {}
*/
// let {descricao, preco} = produto
let {descricao: d, preco: p, desconto = '5%'} = produto
console.log (d, p, desconto)

let {detalhes: {fabricante: f, modelo: m}} = produto
console.log (f, m)