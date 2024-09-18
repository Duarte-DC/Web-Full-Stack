SELECT
    *
FROM
    tabelaAlunos
    WHERE
        nome
    LIKE
        '%tt_'

/* 
	% indica que pode haver a existência de qualquer conjunto de caracter no texto
  	
    LIKE 'C%'			-> 		no início
    LIKE '%a%' 		-> 		no meio
    LIKE '%e' 		-> 		no fim
    
  _	indica que pode haber a existência de um ou mais caractêres em uma posição expecífica do texto
  
  	LIKE '_riel' 		->			um unico caracter no inicio
    LIKE '_ru_'			->			um caracter no inicio e um no fim
    LIKE 'I__'			->			dois caracteres no fim


		LIKE '%tt_' conjuto de caracteres no inicio e um no fim
*/