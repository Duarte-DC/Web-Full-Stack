
document.querySelector ('#botaoSaudar'). addEventListener ('click', async () => {
    
    const modulo = await import ('./saudacao.mjs')   //  Promise

    let texto = document.querySelector ('#texto')

    texto.innerHTML = modulo.saudacao ()
})

document.querySelector ('#botaoCep'). addEventListener ('click', async () => {

    let texto = document.querySelector ('#texto1')
    let cep = document.querySelector ('#cep').value

    if (cep.length == 8) {

        const modulo = await import ('./lib.mjs')   //  Promise

        modulo.getEnderecoByCEP (cep)

            .then (dados => {

                texto.innerHTML = `
                    <strong>CEP</strong>: ${dados.cep}<br><strong>Bairro</strong>: ${dados.bairro}
                    <br><strong>Complemento</strong>: ${dados.complemento}<br><strong>DDD</strong>: ${dados.ddd}
                    <br><strong>Estado</strong>: ${dados.estado}<br><strong>Gia</strong>: ${dados.gia}
                    <br><strong>IBGE</strong>: ${dados.ibge}<br><strong>Localidade</strong>: ${dados.localidade}
                    <br><strong>Logradouro</strong>: ${dados.logradouro}<br><strong>Região</strong>: ${dados.regiao}
                    <br><strong>Siafi</strong>: ${dados.siafi}<br><strong>UF</strong>: ${dados.uf}
                    <br><strong>Unidade</strong>: ${dados.unidade}
                `
            })
    }
})
