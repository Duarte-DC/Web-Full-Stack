var nome = 'Duarte Artur Chamo Carles'

// *length* - retorna a quantidade de caractéres no String
console.log (`O seu nome tem ${nome.length} caracteres\n`)

// *charAt ()* - retorna o caracter com base na posição do mesmo, dentro da cadeia de caractéres
var x = 13
console.log (`O caracter ${nome.charAt (x)} está na ${x + 1}ª posição`)

// *indexOf ()* - retorna a posição da primeira ocorrencia de um valor especifico dentro da String
var y = 'C'
console.log (`O caracter ${y} está na ${nome.indexOf(y) + 1}ª posição\n`)

// *replace ()* - permite com base num valor de pesquisa e um outro valor de modificação, substituir textos dentro de uma String
console.log (nome.replace ('Carles', 'Charles'))

// *substr ()* - permite extrair parte de uma string com base em uma posição inicial, seguida de um valor que representa a quantidade a frente daquela posição inicial
console.log (`${nome.substr (0, 6)}\n`)

/*  *toUpperCase ()* - converte String para "LETRAS MAIUSCULAS"
    *toLowerCase ()* - converte String para "letras minusculas" */
console.log (`O seu nome em letras maiúsculas: ${nome.toUpperCase ()}`)
console.log (`O seu nome em letras minúsculas: ${nome.toLowerCase ()}`)

// *trim ()* - remove os espaços em branco das extremidades do String 
var nomeApelido = ' Duarte Charles '
console.log (`\n+ ${nomeApelido.trim ()} +`)