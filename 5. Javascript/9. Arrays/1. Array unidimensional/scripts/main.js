/*
let numero = [5, 8, 2, 9, 3]


console.log (`O nosso vector é ${numero} com o tamanho de ${numero.length} elementos`)
console.log (`O primeiro valor do vector é ${numero [0]}`)

let posicao = numero.indexOf (7) // procura a posição do número 7 dentro do Array
    if (posicao == -1) 
        console.log (`O valor não foi encontrado`)
    else
        console.log (`O valor está na ${posicao}ª posição`)

console.log (``)

for (i = 0; i < numero.length; i++)
{
    console.log (`A posição ${i} tem o valor ${numero [i]}`)


for (i in numero) // for simplificado que pode ser usado para Variáveis compostas e Objectos em Javascript
    console.log (`A posição ${i} tem o valor ${numero[i]}`)}


************************************************************************************************************

var lista = []

lista ['a'] = 'Banana'
lista ['b'] = 'Maçã'
lista ['c'] = 'Morango'
lista ['d'] = 'Uva'
*/

var lista = ['Uva', 'Morango', 'Maçã', 'Banana']

console.log (lista)
console.log ('-----------------------------------------------------------\n')

lista [4] = 'Manga' // acrescenta o valor 'Manga' na posição 4+1
console.log (lista)
console.log ('-----------------------------------------------------------\n')

lista.push ('Melancia') // acrescenta o valor 'Melancia' na ultima posição
console.log (lista)
console.log ('-----------------------------------------------------------\n')

lista.unshift ('Cereja', 'Amora') //acrescenta os valores 'Cereja' e 'Amora' no inicio
console.log (lista)
console.log ('-----------------------------------------------------------\n')

lista.shift () // remove o primeiro elemento do array
console.log (lista)
console.log ('-----------------------------------------------------------\n')


lista.pop () // remove o ultimo elemento do Array
console.log (lista)
console.log ('-----------------------------------------------------------\n')

//para saber o comprimento do Array
console.log (`O array tem ${lista.length + 1} posições`)
console.log ('-----------------------------------------------------------\n')

lista.sort () // organiza os elementos em ordem crescente
console.log (lista)
console.log ('-----------------------------------------------------------\n')