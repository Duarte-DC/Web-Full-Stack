SELECT
	*
FROM
	tabelaAlunos
    WHERE
        interesse
    NOT IN
        ('Jogos', 'Esporte', 'informatica')