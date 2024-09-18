/*
INSERT INTO
    produtos (
        produto,
        valor
    )   VALUE
            ('HD Externo Portátil Seagate Expansion 1TB USB 3.0', 5000);

*/
SELECT
    *
FROM
    pedidos INNER JOIN produtosPedidos 
    ON  
        (pedidos.idPedido = produtosPedidos.idPedido)
        INNER JOIN
            produtos
            ON
                (produtosPedidos.idProduto = produtos.idProduto)