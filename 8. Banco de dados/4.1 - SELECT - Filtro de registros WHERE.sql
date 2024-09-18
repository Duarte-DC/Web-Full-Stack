SELECT 
		idCurso, nomeCurso, investimento 
FROM 
    tabelaCursos 
    WHERE 
        investimento < 800 
        AND 
            idCurso < 10

/*
    Operadores de comparação: [...] WHERE investimento < 800
        = 	valor da esquerda igual ao valor da direita
        < 	valor da esquerda menor que o valor da direita
        <= 	valor da esquerda menor ou igual ao valor da direita
        >	 	valor da esquerda maior que o valor da direita
        >= 	valor da esquerda maior ou igual ao valor da direita

    Operadores lógicos: [...] WHERE investimento < 800 AND idCurso < 10
        AND 	Todas as operações de comparação devem ser verdadeiras
        OR		Pelo menos uma das operações de comparação deve ser verdadeira
*/