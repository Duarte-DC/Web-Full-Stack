/*  
    trimStart (trimLeft):
        »   Remove espaços no começo de Strings
*/
let texto = '       teste'

// texto = texto.trimStart ()

console.log ('.', texto.trimStart ())
console.log ('.', texto)

console.log ('\n')
/*  
    trimEnd (trimRight):
        »   Remove espaços no final de Strings
*/

let texto1 = 'teste          '

// texto1 = texto.trimEnd ()
console.log (texto1.trimEnd (), '.')
console.log (texto1, '.')

console.log ('\n')

let texto2 = '           teste             '

console.log ('.', texto2, '.')
console.log ('.', texto2.trimStart ().trimEnd (), ".")