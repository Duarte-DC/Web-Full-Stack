<?php

    use Slim\Factory\AppFactory;

    require __DIR__ . '../vendor/autoload.php';

    $app = AppFactory::create ();

// passagem opcional
    $app -> get ('/usuarios[/{id}]', function ($request, $response) {

        $id = $request -> getAttribute ('id');
        
        if (isset ($id)) {

            echo 'ID do Usuario: ' . $id;

        }   else {
                echo 'Listagem de usuarios';
            }
    });

// passagem opcional dentro de uma passagem opcional
    $app -> get ('/postagens[/{ano}[/{mes}]]', function ($request, $response) {

        $ano = $request -> getAttribute ('ano');
        $mes = $request -> getAttribute ('mes');

        echo 'Listagem de postagens: ';

        if (isset ($ano)) {
            echo $ano;
            if (isset ($mes)) {
                echo '/' . $mes;
            }
        }
    });

// definir parrametro mais dinamico
    // arrays
    $app -> get ('/lista/{itens:.*}', function ($request, $response) {

        $itens = $request -> getAttribute ('itens');

        var_dump (explode ("/", $itens));

        echo 'Itens: ' . $itens;
    });

// nomear rotas
    $app -> get ('/blog/postagens/{id}', function ($request, $response) {

        $id = $request -> getAttribute ('id');

        echo 'Listagem de postagem do ID: ' . $id;

    }) -> setName ('blog');

    $app -> get ('/meusite', function ($request, $response) {

        $router = $request -> getAttribute ('routerParser');

        $retorno = $router -> urlFor (
            'blog', 
            ['id' => '5']
        );

        echo $retorno;
    });

// Agrupar Rotas
    $app -> group ('/v1', function () {

        $this -> get ('/usuarios', function () {

            echo 'Listagem de usuarios';
        });
        $this -> get ('/postagens', function () {
    
            echo 'Listagem de postagens';
        });
    });
   

    $app -> run ();