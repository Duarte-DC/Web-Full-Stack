<?php

use App\View;
use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;
    use Slim\Factory\AppFactory;

    require __DIR__ . '/../vendor/autoload.php';

    $app = new \Slim\App ([
        'settings' => [
            'displayErrorDetails' => true
        ]
    ]);

/*  Container dependecy injection  */
    class Servico {

    }
    /*  Container pimple   */
    $container = $app -> getContainer ();

    $container ['servico'] = function () {
        return new Servico;
    };

    $app -> get ('/servico', function (Request $request, Response $response) {

        $servico = $this -> get ('servico');

        var_dump ($servico);
    });

/*  Controllers como serviço  */
    // $container = $app -> getContainer ();

    // $container ['view'] = function () {
    //     return new App\View;
    // };
    // $app -> get ('/usuario', '\App\Controllers\Home:index');

    $container = $app -> getContainer ();

    $container ['Home'] = function () {
        return new App\Controllers\Home (new App\View);
    };
    $app -> get ('/usuario', 'Home:index');

    $app -> run ();