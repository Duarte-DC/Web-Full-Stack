/*
    SUM (<coluna>) - Retorna a soma dos valores de todos os registros com base em uma coluna

    COUNT (<coluna>) - Retorna a quantidade de todos os registros de uma tabela
*/
SELECT
    COUNT (*)
FROM
    tabelaCursos
    WHERE
        ativo != TRUE