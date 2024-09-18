var x = document.getElementById ('mensagem')
var y = document.getElementById ('botao')
function modificaClasse () {
    x.className = 'estilo2'
    y.className = 'btn btn-outline-dark'
}
function devolverClasse () {
    x.className = 'estilo1'
    y.className = 'btn btn-danger'
}