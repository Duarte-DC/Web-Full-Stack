SELECT
    estado,
    COUNT (*) AS totalPorEstado
FROM
    tabelaAlunos
    WHERE
        interesse != 'Esporte'
        GROUP BY
            estado
            HAVING
                /* totalPorEstado >= 5 */
                /*estado IN ('CE', 'SC') AND */ totalPorEstado >= 4