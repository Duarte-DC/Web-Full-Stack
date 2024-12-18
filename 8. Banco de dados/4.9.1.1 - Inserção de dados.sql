TRUNCATE 
    tabelaCursos; -- limpar todos os registros existentes na tabela

INSERT INTO tabelaCursos (
    idCurso,
    imagemCurso,
    nomeCurso,
    resumo,
    dataCadastro,
    ativo,
    investimento
)   VALUES (
            1,
            'curso_node.jpg',
            'Curso Completo do Desenvolvedor NodeJS e MongoDB',
            'Resumo do curso de NodeJS',
            '2018-01-01',
            1,
            159.99
        ),(
            2,
            'curso_react_native.jpg',
            'Multiplataforma Android/IOS com React e Redux',
            'Resumo do curso de React Native',
            '2018-02-01',
            1,
            204.99
        ),(
            3,
            'angular.jpg',
            'Desenvolvimento WEB com ES6, TypeScript e Angular',
            'Resumo do curso de ES6, TypeScript e Angular',
            '2018-03-01',
            1,
            579.99
        ),(
            4,
            'web_completo_2.jpg',
            'Web Completo 2.0',
            'Resumo do curso de Web Completo 2.0',
            '2018-04-01',
            1,
            579.99
        ),(
            5,
            'linux.jpg',
            'Introdução ao GNU/Linux',
            'Resumo do curso de GNU/Linux',
            '2018-05-01',
            0,
            0
        )