USE slim;

CREATE TABLE IF NOT EXISTS produtos (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR (100) NOT NULL,
    descricao TEXT NOT NULL,
    preco DECIMAL (11, 2) NOT NULL,
    fabricante VARCHAR (60),
    dataCriacao DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO produtos (
    titulo,
    descricao,
    preco,
    fabricante
)   VALUES 
    ('Smartphone Motorola Moto G6 32GB Dual Chip', 'Android Oreo - 8.0 Tela 5.7" Octa-core 1.8 GHz 4G Câmera 12 + 5MP (Dual Traseira) - Índigo', 899.00, 'Motorola'),
    ('Iphone X Cinza Espacial 64GB', 'Tela 5.8" IOS 12 4GB Wi-fi Câmera 12MP - Apple', 4999.00, 'Apple');
