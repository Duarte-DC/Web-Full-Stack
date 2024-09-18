//Tipos de referência

/*Método costrutor
let pessoa = new Object ()*/

//Método literal
let pessoa = { nome: 'Duarte', 
    sexo: 'M',
    peso: '61.2',
    engordar (p = 0) // os objectos além de armazenar valores, também podem armazenar arrays e funcionalidades
    {
        console.log ('Engordou')
        this.peso += p
    }
}
console.log (pessoa)
pessoa.engordar (5)
console.log (`${pessoa.nome} pesa ${pessoa.peso}`)

let produtos = {
    descricao: [],
    preco: []
}
console.log (produtos)

const carros = {
    marca: ['Ford', 'Mazda', 'Toyota'],
    modelo: ['Ranger', 'BT-50', 'Hilux'],
    ano: [2024, 2021, 2023]
}
console.log (carros)


//METODOS DE ACESSO
    //Forma convencional
        pessoa.nome
        pessoa.sexo
        pessoa.peso
        pessoa.engordar (20)

    //Usando colchetes ['']
        pessoa ['nome']
        pessoa ['sexo']
        pessoa ['peso']
        pessoa ['engordar (20)']

//ATUALIZAR VALORES
    produtos.descricao = ['Arroz']
    produtos.preco = [1000]

    //usando spreed operator
        produtos.descricao = [...produtos.descricao, 'Feijão', 'Trigo']
        produtos.preco = [...produtos.preco, 200, 80]

    //usando spreed operator em objetos
        carros.marca = [...carros.marca, 'Nissan']
        carros.modelo = [...carros.modelo, 'Navara']
        carros.ano = [...carros.ano, 2022]

        console.log (carros)