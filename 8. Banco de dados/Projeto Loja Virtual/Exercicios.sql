/*
SELECT
    *
FROM
    clientes
    WHERE
        idade >= 29
        ORDER BY
            nome ASC;
ALTER TABLE
    clientes
    ADD COLUMN        
        sexo CHAR (1) NOT NULL;

ALTER TABLE
    clientes
    ADD COLUMN
        endereço VARCHAR (150) NOT NULL;


UPDATE
    clientes
    SET
        sexo = 'M'
    WHERE
        idCliente
        IN 
            (1, 5, 8, 9, 10);

UPDATE
    clientes
    SET
        sexo = 'F'
    WHERE
        idCliente
        IN 
            (2, 3, 4, 6, 7);
*/

SELECT
    clientes.idCliente,
    clientes.nome,
    clientes.idade,
    produtos.produto,
    produtos.valor,
    pedidos.dataHora
FROM
    clientes INNER JOIN pedidos
    ON
        (clientes.idCliente = pedidos.idCliente)
        
        INNER JOIN produtosPedidos
        ON
            (pedidos.idPedido = produtosPedidos.idPedido)

            INNER JOIN produtos
            ON
                (produtosPedidos.idProduto = produtos.idProduto)
    ORDER BY
        dataHora ASC
            


            