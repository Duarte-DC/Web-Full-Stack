// Notação de Classe (ES6)
class Produto {
    constructor (descricao, preco) {
        this.descricao = descricao
        this.preco = preco
    }
    verDescricao () {
        console.log (`${this.descricao} por apensas ${this.preco}`)
    }
}

let x = new Produto ('Notebook', 22500)
x.verDescricao ()

// Notação de objeto literal / estático

let produto = {
    descricao: 'Geleira',
    preco: 15000,
    
    verDescricao: function () {
        console.log (`${this.descricao} por apenas ${this.preco}`)
    }
}

produto.verDescricao ()

/*
    formulário » » serivdor
        recupera dados e monta um objeto literal
            objeto literal » » JSON » » HTTP » » servidor » » armazena os dados
*/