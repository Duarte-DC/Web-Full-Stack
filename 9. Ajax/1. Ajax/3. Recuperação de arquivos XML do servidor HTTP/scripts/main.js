function getFilmes () {

    let xmlHttp = new XMLHttpRequest ();

    xmlHttp.open ('GET', 'http://localhost/Ajax/3.%20Recupera%c3%a7%c3%a3o%20de%20arquivos%20XML%20do%20servidor%20HTTP/filmes.xml')
    
    xmlHttp.onreadystatechange = () => {

        if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {

            let xmlFilmes = xmlHttp.responseText
            let parser = new DOMParser ()

            domFilmes = parser.parseFromString (xmlFilmes, 'text/xml')

            // console.log (domFilmes)

            jsonFilmes = xmlToJson (domFilmes)

            // console.log (jsonFilmes)

            for (let i in jsonFilmes ['filmes']['filme']) {
                let item = jsonFilmes ['filmes']['filme'] [i]
                
                let divRow = document.createElement ('div')
                divRow.className = 'row'

                let divCol = document.createElement ('div')
                divCol.className = 'col'

                let p1 = document.createElement ('p')
                p1.innerHTML = '<strong>Título: </strong>' + item ['titulo']['#text']

                let p2 = document.createElement ('p')
                p2.innerHTML = '<strong>Resumo: </strong>' + item ['resumo']['#text']

                let genero = ''
                if (item && item.genero)
                    for (let j in item.genero) {
                        if (genero)
                            genero += ', '
                        genero += item.genero [j]['#text']
                    }
                let p3 = document.createElement ('p')
                p3.innerHTML = '<strong>Gênero: </strong>' + genero

                let elenco = ''
                if (item && item.elenco.ator)
                    for (let j in item.elenco.ator) {
                        if (elenco)
                            elenco += ', '
                        elenco += item.elenco.ator [j]['#text']
                    }
                let p4 = document.createElement ('p')
                p4.innerHTML = '<strong>Elenco: </strong>' + elenco

                let p5 = document.createElement ('p')
                p5.innerHTML = '<strong>Data de lançamento: </strong>' + item.dataLancamento ['#text'] + ' (' + item.dataLancamento ['@attributes']['pais'] + ')'

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

        }   else if (xmlHttp.readyState == 4 && xmlHttp.status == 404) {
                //..
            }
    }
    
    xmlHttp.send ()
}