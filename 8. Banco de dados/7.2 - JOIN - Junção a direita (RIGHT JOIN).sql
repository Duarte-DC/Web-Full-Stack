SELECT
    *
FROM
    produtos RIGHT JOIN imagens
    ON
        (produtos.idProduto = imagens.idProduto)