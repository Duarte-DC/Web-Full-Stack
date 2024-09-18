/* 
    Constantes são declaradas em LETRAS MAIÚSCULAS e sempre com valor inicial
        »   São utilizadas para definir valores que não serão alterados durante a instância da nossa aplicação, 
            geralmente usadas para armazenar senhas de banco de dados, 
            links para APIs e parâmetros de configuração da nossa aplicação
*/
const ANIME = 'Good Times'

function x () {
    const ANIME = 'One Piece'

    console.log (`Função: ${ANIME}`)
}
x ()

console.log (`Global: ${ANIME}`)