CREATE DATABASE
    db_curso_web;

CREATE TABLE 
    tb_cursos;

DROP TABLE 
    tb_cursos;

CREATE TABLE tb_cursos (
		idCurso int NOT NULL,
  	    imagemCurso varchar (100) NOT NULL,
 		nomeCurso char (50) NOT NULL,
 		resumo text NULL,
 		dataCadastro dateTime NOT NULL,
 		ativo boolean DEFAULT 1,
 		investimento float (8, 2) DEFAULT 0
);

SELECT 
    * 
FROM tb_cursos;

RENAME TABLE 
    tb_cursos 
    TO 
        tabelaCursos;
