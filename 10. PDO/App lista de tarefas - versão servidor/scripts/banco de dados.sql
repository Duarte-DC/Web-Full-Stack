/*
CREATE DATABASE IF NOT EXISTS listaTarefas;

USE listaTarefas;

CREATE TABLE IF NOT EXISTS estados (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    estado VARCHAR (25) NOT NULL
);

INSERT INTO estados (estado) values ('Pendente');
INSERT INTO estados (estado) values ('Realizado');

CREATE TABLE IF NOT EXISTS tarefas (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    idEstado INT NOT NULL DEFAULT 1,
    tarefa TEXT NOT NULL,
    dataCadastro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    
    FOREIGN KEY (idEstado)
        REFERENCES estado (id)
);

*/

SELECT
    *
FROM
    tarefas