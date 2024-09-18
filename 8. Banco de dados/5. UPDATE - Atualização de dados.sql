/*
UPDATE
    tabelaAlunos
    SET
        nome = 'João ', 
        interesse = 'informatica'
    WHERE
        idAluno = 13

SELECT
    *
FROM
    tabelaAlunos
    WHERE 
        idade >= 80

UPDATE
    tabelaAlunos
    SET
        interesse = 'Saúde'
    WHERE
        idade >= 80

SELECT
    *
FROM
    tabelaAlunos
    WHERE 
        idade >= 80

UPDATE
    tabelaAlunos
    SET 
        nome = 'José',
        idade = 25,
        email = 'jose@gmail.com'
    WHERE 
        idAluno = 18

UPDATE
    tabelaAlunos
    SET
        nome = 'Maria'
    WHERE
        idade BETWEEN 18 AND 25
        AND estado = 'PA'
*/

SELECT
    *
FROM
    tabelaAlunos
    WHERE
        idade BETWEEN 18 AND 25
        AND estado = 'PA'