$ (() => {
    
    let pagina = $ ('#pagina')
    let documentacao = $ ('#documentacao')
    let suporte = $ ('#suporte')
    
    documentacao. on ('click', () => {
    /* 
        pagina. load ('documentacao.html')

        $. get ('documentacao.html', dados => {
            pagina. html (dados)
        })
    */

        $. post ('documentacao.html', dados => {
            pagina. html (dados)
        })
    })

    suporte. on ('click', () => {
    /*  
        pagina. load ('suporte.html')

        $. get ('suporte.html', dados => {
            pagina. html (dados)
        })
    */
        $. post ('suporte.html', dados => {
            pagina. html (dados)
        })
    })

    // ajax 

    let dataMesAno = $ ('#dataMesAno')
    let numeroVendas = $ ('#numeroVendas')
    let totalVendas = $ ('#totalVendas')
    let clientesAtivos = $ ('#clientesAtivos')
    let clientesInativos = $ ('#clientesInativos')
    let totalReclamacoes = $ ('#totalReclamacoes')
    let totalElogios = $ ('#totalElogios')
    let totalSugestoes = $ ('#totalSugestoes')
    let totalDespesas = $ ('#totalDespesas')

    dataMesAno. on ('change', e => {
        // console.log ($ (e.target). val ())
        let dataMesAno = $ (e. target). val()
        console. log (dataMesAno)
        $. ajax ({
            // metodo, url, dados, sucesso, erro
            type: 'GET',
            url: 'config/config.php',
            data: `dataMesAno=${dataMesAno}`, // x-www-form-urlencoded
            dataType: 'json',
            success: dados => {
                numeroVendas. html (dados. numeroVendas)
                totalVendas. html (dados. totalVendas)
                clientesAtivos. html (dados. clientesAtivos)
                clientesInativos. html (dados. clientesInativos)
                totalReclamacoes. html (dados. totalReclamacoes)
                totalElogios. html (dados. totalElogios)
                totalSugestoes. html (dados. totalSugestoes)
                totalDespesas. html (dados. totalDespesas)
            },
            error: erro => {console. log (erro)}
        })
    })
})