-- CREATE DATABASE IF NOT EXISTS twitterClone COLLATE utf8_unicode_ci;

USE twitterClone;

-- CREATE TABLE usuarios (
--     id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
--     nome VARCHAR (100) NOT NULL,
--     email VARCHAR (150) NOT NULL,
--     senha VARCHAR (32) NOT NULL
-- );

-- UPDATE 
--     usuarios 
--     SET 
--         senha = md5 (senha);

-- CREATE TABLE tweets (
--  	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
--  	idUsuario INT NOT NULL,
--  	tweet VARCHAR (140) NOT NULL,
--  	dataTweet DATETIME DEFAULT CURRENT_TIMESTAMP,

--     FOREIGN KEY (idUsuario)
--         REFERENCES usuarios (id)
-- );

-- CREATE TABLE usuariosSeguidores (
--     id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
--     idUsuario INT NOT NULL,
--     idUsuarioSeguir INT NOT NULL,

--     FOREIGN KEY (idUsuario)
--         REFERENCES usuarios (id),
--     FOREIGN KEY (idUsuarioSeguir)
--         REFERENCES usuarios (id)
-- );

-- INSERT INTO tweets (
--     idUsuario,
--     tweet
-- )   VALUES 
--     (1, 'TWEET 1'),
--     (1, 'TWEET 2'),
--     (1, 'TWEET 3'),
--     (1, 'TWEET 4'),
--     (1, 'TWEET 5'),
--     (2, 'TWEET 6'),
--     (2, 'TWEET 7'),
--     (2, 'TWEET 8'),
--     (2, 'TWEET 9'),
--     (2, 'TWEET 10'),
--     (1, 'TWEET 11'),
--     (1, 'TWEET 12'),
--     (1, 'TWEET 13'),
--     (1, 'TWEET 14'),
--     (1, 'TWEET 15'),
--     (3, 'TWEET 16'),
--     (3, 'TWEET 17'),
--     (3, 'TWEET 18'),
--     (3, 'TWEET 19'),
--     (3, 'TWEET 20'),
--     (2, 'TWEET 21'),
--     (2, 'TWEET 22'),
--     (2, 'TWEET 23'),
--     (2, 'TWEET 24'),
--     (2, 'TWEET 25')