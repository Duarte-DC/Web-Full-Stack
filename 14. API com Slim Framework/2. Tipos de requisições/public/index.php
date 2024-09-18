<?php

    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;
    use Slim\Factory\AppFactory;

    require __DIR__ . '/../vendor/autoload.php';

    $app = AppFactory::create ();
    
/*  Padrão PRS7  */
    $app -> get ('/postagem', function (Request $request, Response $response, array $args) {

    /*  Escreve no corpo da resposta ulilizando o padrão PSR7   */
        $response -> getBody () -> write ('Lista de postagens');

        return $response;
    }); 

/*
    Tipos de requisição ou Verbos HTTP

        get:     
            »   serve para recuperar recursos do servidor (Select)

        post:
            »   serve para criar dados no servidor (Insert)

        put:
            »   serve para atualizar dados no servidor (Update)

        delete:
            »   serve para deletar dados do servidor (Delete)
*/

    $app -> post ('/usuarios/adiciona', function (Request $request, Response $response, array $args) {

    /*  Recuperar o post ($_POST)   */
        $post = $request -> getParsedBody ();

        $id = $post ['id'];
        $nome = $post ['nome'];
        $email = $post ['email'];

        /*   Salvar num banco de dados com INSERT INTO    */

        $response -> getBody () -> write ($id . ' - ' . $nome . ' - ' . $email);

        return $response;
    }); 

    $app -> put ('/usuarios/atualiza', function (Request $request, Response $response, array $args) {

        $put = $request -> getParsedBody ();

        $id = $put ['id'];
        $nome = $put ['nome'];
        $email = $put ['email'];

        /*  Atualizar no banco de dados com UPDATE    */

        $response -> getBody () -> write ('Sucesso ao atualizar: ' . $id);

        return $response;
    });

    $app -> delete ('/usuarios/remove/{id}', function (Request $request, Response $response, array $args) {

        $id = $request -> getAttribute ('id');

        /*  apagar no banco de dados com DELETE    */

        $response -> getBody () -> write ('Sucesso ao remover: '. $id);

        return $response;
    });

    $app -> run ();