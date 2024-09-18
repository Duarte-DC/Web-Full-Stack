CREATE DATABASE IF NOT EXISTS lojaVirtual;

USE lojaVirtual;

CREATE TABLE IF NOT EXISTS
    produtos (
        idProduto INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        produto VARCHAR (200) NOT NULL,
        valor FLOAT (8,2) NOT NULL
    );

CREATE TABLE IF NOT EXISTS
    descricoes (
        idDescricao INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        idProduto INT NOT NULL,
        descricao TEXT NOT NULL,

        FOREIGN KEY (idProduto)
            REFERENCES produtos (idProduto)
    );

CREATE TABLE IF NOT EXISTS
    imagens (
        idImagens INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        idProduto INT NOT NULL,
        urlImagem VARCHAR (200) NOT NULL,

        FOREIGN KEY (idProduto)
            REFERENCES produtos (idProduto)
    );

CREATE TABLE IF NOT EXISTS
    clientes (
        idCliente INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        nome VARCHAR (100) NOT NULL,
        idade INT NOT NULL
    );

CREATE TABLE IF NOT EXISTS
    pedidos (
        idPedido INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
        idCliente INT NOT NULL,
        dataHora DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,

        FOREIGN KEY (idCliente)
            REFERENCES clientes (idCliente)
    );

CREATE TABLE IF NOT EXISTS
    produtosPedidos (
        idPedido INT NOT NULL,
        FOREIGN KEY (idPedido)
            REFERENCES pedidos (idPedido),

        idProduto INT NOT NULL,
        FOREIGN KEY (idProduto)
            REFERENCES produtos (idProduto)
    );
