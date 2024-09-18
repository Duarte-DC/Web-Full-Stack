CREATE DATABASE dashboard COLLATE utf8_unicode_ci;

USE dashboard;

CREATE TABLE vendas (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	dataVenda DATETIME DEFAULT CURRENT_TIMESTAMP,
	total FLOAT (10, 2) NOT NULL
);

CREATE TABLE clientes (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	clienteAtivo BOOLEAN DEFAULT true
);

CREATE TABLE contatos (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	tipoContato INT NOT NULL
);

CREATE TABLE despesas (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	dataDespesa DATETIME DEFAULT CURRENT_TIMESTAMP,
	total FLOAT (10, 2) NOT NULL
);

INSERT INTO vendas (dataVenda, total) VALUES ('2018-08-15', 150.20);
INSERT INTO vendas (dataVenda, total) VALUES ('2018-08-16', 255.36);
INSERT INTO vendas (dataVenda, total) VALUES ('2018-08-18', 70.95);
INSERT INTO vendas (dataVenda, total) VALUES ('2018-09-01', 35.00);
INSERT INTO vendas (dataVenda, total) VALUES ('2018-09-11', 2047.12);
INSERT INTO vendas (dataVenda, total) VALUES ('2018-09-19', 122.85);
INSERT INTO vendas (dataVenda, total) VALUES ('2018-09-23', 957.14);
INSERT INTO vendas (dataVenda, total) VALUES ('2018-10-01', 333.55);
INSERT INTO vendas (dataVenda, total) VALUES ('2018-10-02', 100.33);
INSERT INTO vendas (dataVenda, total) VALUES ('2018-10-03', 1853.12);
INSERT INTO vendas (dataVenda, total) VALUES ('2018-10-04', 47.47);

-- true/1 = ativo | false/0 = inativo
INSERT INTO clientes (clienteAtivo) VALUES (true);
INSERT INTO clientes (clienteAtivo) VALUES (true);
INSERT INTO clientes (clienteAtivo) VALUES (true);
INSERT INTO clientes (clienteAtivo) VALUES (false);
INSERT INTO clientes (clienteAtivo) VALUES (true);
INSERT INTO clientes (clienteAtivo) VALUES (true);
INSERT INTO clientes (clienteAtivo) VALUES (true);
INSERT INTO clientes (clienteAtivo) VALUES (true);
INSERT INTO clientes (clienteAtivo) VALUES (true);
INSERT INTO clientes (clienteAtivo) VALUES (false);
INSERT INTO clientes (clienteAtivo) VALUES (false);
INSERT INTO clientes (clienteAtivo) VALUES (true);
INSERT INTO clientes (clienteAtivo) VALUES (true);
INSERT INTO clientes (clienteAtivo) VALUES (false);
INSERT INTO clientes (clienteAtivo) VALUES (true);

-- 1 = crítica | 2 = sugestão | 3 = elogio
INSERT INTO contatos (tipoContato) VALUES(1);
INSERT INTO contatos (tipoContato) VALUES(1);
INSERT INTO contatos (tipoContato) VALUES(2);
INSERT INTO contatos (tipoContato) VALUES(1);
INSERT INTO contatos (tipoContato) VALUES(3);
INSERT INTO contatos (tipoContato) VALUES(2);
INSERT INTO contatos (tipoContato) VALUES(1);
INSERT INTO contatos (tipoContato) VALUES(1);
INSERT INTO contatos (tipoContato) VALUES(3);
INSERT INTO contatos (tipoContato) VALUES(3);
INSERT INTO contatos (tipoContato) VALUES(3);
INSERT INTO contatos (tipoContato) VALUES(1);
INSERT INTO contatos (tipoContato) VALUES(2);
INSERT INTO contatos (tipoContato) VALUES(2);
INSERT INTO contatos (tipoContato) VALUES(1);

INSERT INTO despesas (dataDespesa, total) VALUES ('2018-08-20', 93.47);
INSERT INTO despesas (dataDespesa, total) VALUES ('2018-09-01', 350.27);
INSERT INTO despesas (dataDespesa, total) VALUES ('2018-09-04', 108.12);
INSERT INTO despesas (dataDespesa, total) VALUES ('2018-09-20', 15.66);
INSERT INTO despesas (dataDespesa, total) VALUES ('2018-10-03', 83.55);