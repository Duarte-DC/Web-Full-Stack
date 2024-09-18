class Despesa {
    constructor (ano, mes, dia, tipo, descricao, valor) {
        this.ano = ano
        this.mes = mes
        this.dia = dia
        this.tipo = tipo
        this.descricao = descricao
        this.valor = valor
    }
    validarDados () {
        for (let i in this) 
            if (this [i] == undefined || this [i] == '' || this [i] == null) 
                return false

        return true
    }
}
class BancoDados {
    //  Local storage
    constructor () {
        let id = localStorage.getItem ('id')

        if (id === null || id === '' || id === undefined)
            localStorage.setItem ('id', 0)
    }

    getProximoID () {
        let proximoId = localStorage.getItem ('id')
        return parseInt (proximoId) + 1
    }

    gravar (x) {
        let id = this.getProximoID ()
        
        localStorage.setItem (id, JSON.stringify (x))
        
        localStorage.setItem ('id', id)
    }

    recuperarTodosRegistros () {
        // Array de despesas
        let despesas = []

        let id = localStorage.getItem ('id')

        // recuperar todas as despesas cadastradas em localStorage
        for (let i = 1; i <= id; i++) {
            // recuperar as despesas
            let despesa = JSON.parse (localStorage.getItem (i))

            /*  verificar se existe a possibilidade de haver indices que foram pulados/removidos
                nesses casos vamos pular esses indices
            */
            if (despesa === null)
                continue
            
            despesa.id = i
            despesas.push (despesa)
        }
        return despesas
    }

    pesquisar (despesa) {
        let filtroDespesas = []

        filtroDespesas = this.recuperarTodosRegistros ()
        
        //  ano
        if (despesa.ano != '')
            filtroDespesas = filtroDespesas.filter (x => x.ano === despesa.ano)
        //  mes
        if (despesa.mes != '')
            filtroDespesas = filtroDespesas.filter (x => x.mes === despesa.mes)
        //  dia
        if (despesa.dia != '')
            filtroDespesas = filtroDespesas.filter (x => x.dia === despesa.dia)
        //  tipo
        if (despesa.tipo != '')
            filtroDespesas = filtroDespesas.filter (x => x.tipo === despesa.tipo)
        //  descricao
        if (despesa.descricao != '')
            filtroDespesas = filtroDespesas.filter (x => x.descricao === despesa.descricao)
        //  valor
        if (despesa.valor != '')
            filtroDespesas = filtroDespesas.filter (x => x.valor === despesa.valor)        
        
        return filtroDespesas
    }

    remover (id) {
        localStorage.removeItem (id)
    }
}

let bd = new BancoDados ()

function cadastrarDespesa () {
    let ano = document.getElementById ('ano')
    let mes = document.getElementById ('mes')
    let dia = document.getElementById ('dia')
    let tipo = document.getElementById ('tipo')
    let descricao = document.getElementById ('descricao')
    let valor = document.getElementById ('valor')
    
    let despesa = new Despesa (
        ano.value, 
        mes.value,
        dia.value,
        tipo.value,
        descricao.value,
        valor.value
    )

    if (despesa.validarDados () == true) {
        //  gravar dados
        bd.gravar (despesa) 
        $ ('#modalRegistro').modal ('show')

        ano.value = ''
        mes.value = ''
        dia.value = ''
        tipo.value = ''
        descricao.value = ''
        valor.value = ''
    }
    else {
        let titulo = document.getElementById ('tituloModal')
        let texto = document.getElementById ('textoModal')
        let botao = document.getElementById ('botaoModal')

        titulo.innerHTML = 'Erro de gravação'
        texto.innerHTML = 'Existem campos obrigatórios que não foram preenchidos'
        botao.innerHTML = 'Voltar e corrigir'

        document.getElementById ('cabecalho').className = 'modal-header text-danger'
        botao.className = 'btn btn-danger'

        $ ('#modalRegistro').modal ('show')
    }
}

function carregarDespesas (despesas = [], filtro = false) {
    if (despesas.length == 0 && filtro == false) {
        despesas = bd.recuperarTodosRegistros ()
    }

    // selecionando o elemento tbody da tabela
    let tabela = document.getElementById ('listaDespesas')
    tabela.innerHTML = ''

    // percorrer o array, listando cada dispesa de forma dinâmica
    despesas.forEach (d => {
        
        // criando linha (tr)
        let linha = tabela.insertRow ()

        // ajustar o tipo
        switch (parseInt (d.tipo)) {
            case 1: d.tipo = 'Alimentação' 
                break
            case 2: d.tipo = 'Educação'
                break
            case 3: d.tipo = 'Lazer'
                break
            case 4: d.tipo = 'Saúde'
                break
            case 5: d.tipo = 'Transporte'
                break
        }

        // criar colunas (td)
        linha.insertCell (0).innerHTML = `${d.dia}/${d.mes}/${d.ano}`
        linha.insertCell (1).innerHTML = d.tipo
        linha.insertCell (2).innerHTML = d.descricao
        linha.insertCell (3).innerHTML = d.valor

        //criar botao de exclusão
        let botao = document.createElement ('button')
        botao.className = 'btn btn-sm'
        botao.innerHTML = '<i class="fa-solid fa-circle-minus text-danger"></i>'
        botao.onclick = () => {
            bd.remover (d.id)

            /*document.getElementById ('tituloModal').innerHTML = 'Remoção bem sucedida'
            document.getElementById ('textoModal').innerHTML = 'A despesa foi removida com sucesso!'

            $ ('#modalRegistro').modal ('show')*/

            window.location.reload ()
        }
        linha.insertCell (4).append (botao)
    })
}

function pesquisarDespesa () {
    let ano = document.getElementById ('ano')
    let mes = document.getElementById ('mes')
    let dia = document.getElementById ('dia')
    let tipo = document.getElementById ('tipo')
    let descricao = document.getElementById ('descricao')
    let valor = document.getElementById ('valor')

    let despesa = new Despesa (
        ano.value,
        mes.value,
        dia.value,
        tipo.value,
        descricao.value,
        valor.value
    )

    let filtroDespesas = bd.pesquisar (despesa)

    carregarDespesas (filtroDespesas, true)
}
