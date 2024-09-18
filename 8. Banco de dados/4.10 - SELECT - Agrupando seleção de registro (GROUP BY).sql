/*
    GROUP BY - Agrupa os registros com base em uma ou mais colunas cujos valores sejam iguais. 
    Permite realizar funções de agregação em cada subconjunto agrupado de registros.
*/

SELECT
    estado, 
    COUNT (*) AS totalPorEstado
FROM
    tabelaAlunos
    GROUP BY
        estado