SELECT 
    * 
FROM tabelaCursos;

ALTER TABLE 
    tabelaCursos add column cargaHoraria varchar (5) NOT NULL;

ALTER TABLE 
    tabelaCursos change cargaHoraria cargaHora int (5) NULL;

ALTER TABLE 
    tabelaCursos change cargaHoraria cargaHoraria int (5) NULL;

ALTER TABLE 
    tabelaCursos 
    DROP
        cargaHoraria;