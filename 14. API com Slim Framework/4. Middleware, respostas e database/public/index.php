<?php

    use App\View;
    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;
    use Slim\Factory\AppFactory;
    use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Support\Facades\Schema;

    require __DIR__ . '/../vendor/autoload.php';

    $app = new \Slim\App ([
        'settings' => [
            'displayErrorDetails' => true
        ]
    ]);
/*  
    Tipos de respostas
    »   cabeçalho
    »   texto
    »   Json
    »   XML
*/
/*
    //  Cabeçalho
    $app -> get ('/header', function (Request $request, Response $response,) {

        $response -> write ('Esse é um retorno header');

        return $response 
            -> withHeader ('allow', 'PUT') 
            -> withAddedHeader ('Content-Length', 30);
    });

    //  Json
    $app -> get ('/json', function (Request $request, Response $response,) {

        return $response -> withJson ([
            'nome' => 'Duarte Charles',
            'email' => 'duartecharles.dc@gmail.com'
        ]);
    });

    //  XML
    $app -> get ('/xml', function (Request $request, Response $response,) {

        $xml = file_get_contents ('arquivo');
        $response -> write ($xml);

        return $response -> withHeader ('Content-Type', 'application/xml');
    });
*/

/*  Middleware  */
/*
    $app -> add (function ($request, $response, $next) {

        $response -> write ('Inicio camada 1 + ');

        // return $next ($request, $response);

        $response = $next ($request, $response);

        $response -> write (' + Fim camada 1');

        return $response;
    });

    $app -> add (function ($request, $response, $next) {

        $response -> write ('Inicio camada 2 + ');

        $response = $next ($request, $response);

        $response -> write (' + Fim camada 2');

        return $response;
    });

    $app -> get ('/usuarios', function (Request $request, Response $response) {

        $response -> write ('Lista de usuarios');
    });

    $app -> get ('/posts', function (Request $request, Response $response) {

        $response -> write ('Lista de posts');
    });
*/

/*  Database */    

    $container = $app -> getContainer ();

    $container ['database'] = function () {
        
        $capsule = new Capsule;

        $capsule -> addConnection ([
            'driver'    => 'mysql',
            'host'      => '127.0.0.1',
            'database'  => 'slim',
            'username'  => 'root',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]);

        $capsule -> setAsGlobal ();
        $capsule -> bootEloquent ();

        return $capsule;
    };

    $app -> get ('/usuarios', function (Request $request, Response $response) {

        $database = $this -> get ('database');

    //  Criar tabela
    /*
        $database  -> schema () -> dropIfExists ('usuarios');

        $database  -> schema () -> create ('usuarios', function ($table) {

            $table -> increments ('id'); // auto_increment
            $table -> string ('nome');
            $table -> string ('email') -> unique (); 
            $table -> timestamps ();

        });

        $response -> getBody () -> write ("Tabela 'usuarios' criada com sucesso!");
    */

    //  Inserir dados na tabela
    /*
        $database -> table ('usuarios') -> insert ([
            'nome' => 'Charles Dc',
            'email' => 'chamocharles@gmail.com'
        ]);

        $response -> getBody () -> write ('Dados inseridos com sucesso');
    */
        
    //  Atualizar dados da tabela
    /*
        $database -> table ('usuarios') 
            -> where ('id', 1)
            -> update ([
                'nome' => 'Duarte Dc',
                'email' => 'duartecharles226@gmail.com',
            ]);

        $response -> getBody () -> write ('Dados atualizados com sucesso');
    */

    //  Apagar dados da tabela
    /*
        $database -> table ('usuarios')
            -> where ('id', 1)
            -> delete ();

        $response -> getBody () -> write ('Dados elimidados com sucesso');
    */

    //  Listar dados da tabela
        $usuarios = $database -> table ('usuarios') -> get ();

        foreach ($usuarios as $usuario) {
            echo $usuario -> nome . '<br>';
        }

        // return $response; 
    });

    $app -> run ();