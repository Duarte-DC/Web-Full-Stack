SELECT
	*
FROM
    tabelaAlunos
    WHERE
        idade 
        BETWEEN
            18 AND 59
        ORDER BY
            nome ASC, 
            idade DESC,
            estado ASC