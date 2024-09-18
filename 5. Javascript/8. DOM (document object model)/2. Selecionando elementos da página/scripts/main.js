/*
    Selecionando elementos para poder navegar dentro da Árvore DOM
        Metodos de acesso:
            - por Marca/Tag
                getElementsByTagName () - sendo possível selecionar vários objetos
            - por ID
                getElementById () 
            - poe Nome
                getElementsByName ()
            - por Classe
                getElementByClassName ()
            - por Seletor
                querySelector ()
                querySelectorAll ()
*/

console.log (document.getElementsByTagName ('input'))
console.log (document.getElementById ('nomeUsuario'))
console.log (document.getElementsByName ('nome'))
console.log (document.getElementsByClassName ('campoTexto'))