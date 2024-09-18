/*
DELETE FROM
    tabelaAlunos
    WHERE 
        idade IN (10, 18, 22, 28, 34)
        AND interesse = 'Esporte'
*/

SELECT 
    *
FROM
    tabelaAlunos
    WHERE 
        idade IN (10, 18, 22, 28, 34)
        AND interesse = 'Esporte'