/*
    -   MIN (<coluna>) - Retorna o menor valor de todos os 
    registros com base em uma coluna

    -   MAX (<coluna>) - Retorna o maior valor de todos os 
    registros com base em uma coluna

    -   AVG (<coluna>) - Retorna a média de todos os registros
    com base em uma coluna
*/

SELECT
    AVG (investimento)
FROM
    tabelaCursos
    WHERE
        ativo != 0