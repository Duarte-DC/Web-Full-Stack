function getFilmes () {

    let jsonHttp = new XMLHttpRequest ();

    jsonHttp.open ('GET', 'http://localhost/Ajax/4.%20Refactoring%20da%20comunica%c3%a7%c3%a3o%20com%20o%20back-end%20utilizando%20JSON/filmes.json')
    
    jsonHttp.onreadystatechange = () => {

        if (jsonHttp.readyState == 4 && jsonHttp.status == 200) {

            let jsonFilmes = jsonHttp.responseText

            let objetoJSON = JSON.parse (jsonFilmes)
            
            console.log (objetoJSON)

            for (let i in objetoJSON.filmes) {
                let item = objetoJSON.filmes [i]
                
                let divRow = document.createElement ('div')
                divRow.className = 'row'

                let divCol = document.createElement ('div')
                divCol.className = 'col'

                let p1 = document.createElement ('p')
                p1.innerHTML = '<strong>Título: </strong>' + item ['titulo']

                let p2 = document.createElement ('p')
                p2.innerHTML = '<strong>Resumo: </strong>' + item ['resumo']

                let genero = ''
                if (item && item.generos)
                    for (let j in item.generos) {
                        if (genero)
                            genero += ', '
                        genero += item.generos [j].genero
                    }
                let p3 = document.createElement ('p')
                p3.innerHTML = '<strong>Gênero: </strong>' + genero

                let elenco = ''
                if (item && item.elenco)
                    for (let j in item.elenco) {
                        if (elenco)
                            elenco += ', '
                        elenco += item.elenco [j].ator
                    }
                let p4 = document.createElement ('p')
                p4.innerHTML = '<strong>Elenco: </strong>' + elenco

                let p5 = document.createElement ('p')
                p5.innerHTML = '<strong>Data de lançamento: </strong>' + item.dataLancamento.data + ' (' + item.dataLancamento.pais + ')'

                let hr = document.createElement ('hr')
                hr.className = 'my-3'

                divRow.appendChild (divCol)
                divCol.appendChild (p1)
                divCol.appendChild (p2)
                divCol.appendChild (p3)
                divCol.appendChild (p4)
                divCol.appendChild (p5)
                divRow.appendChild (hr)

                document.getElementById ('lista').appendChild (divRow)
            }
        }   else if (jsonHttp.readyState == 4 && jsonHttp.status == 404) {
                //..
            }
    }
    
    jsonHttp.send ()
}