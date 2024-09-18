var frutas = []

frutas [0] = 'Banana'
frutas [1] = 'Maçã'
frutas [2] = 'Morango'
frutas [3] = 'Uva'

var posicao = frutas.indexOf ('Morango')

if (posicao === -1)
    console.log ('Elemento não existe!')
else 
    console.log (`O elemento se encontra na ${posicao + 1}ª posição`)


