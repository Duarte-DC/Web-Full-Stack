/*
SELECT
    *
FROM
    produtos AS x LEFT JOIN descricoes AS y
    ON
        (x.idProduto = y.idProduto)
*/

SELECT
    x.idProduto,
    x.produto,
    x.valor,
    y.descricao
FROM
    produtos AS x LEFT JOIN descricoes AS y
    ON
        (x.idProduto = y.idProduto)
    WHERE
        x.valor > 1000
    ORDER BY
        x.valor ASC 
