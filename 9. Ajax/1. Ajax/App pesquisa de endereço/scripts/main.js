function getDadosEndereco (cep) {

    let url = 'https://viacep.com.br/ws/' + cep + '/json/unicode'

    let xmlHTTP = new XMLHttpRequest ()

    xmlHTTP.open ('GET', url)

    xmlHTTP.onreadystatechange = () => {
        if (xmlHTTP.readyState == 4 && xmlHTTP.status == 200) {
            let dadosJSONTexto = xmlHTTP.responseText
            let dadosJSONObjeto = JSON.parse (dadosJSONTexto)

            document.getElementById ('endereco').value = dadosJSONObjeto.logradouro
            document.getElementById ('bairro').value = dadosJSONObjeto.bairro
            document.getElementById ('cidade').value = dadosJSONObjeto.localidade
            document.getElementById ('uf').value = dadosJSONObjeto.uf

            console.log (dadosJSONObjeto)
        }   else if (xmlHTTP.readyState == 4 && xmlHTTP.status == 404) {

            }
    }
    xmlHTTP.send ()
}