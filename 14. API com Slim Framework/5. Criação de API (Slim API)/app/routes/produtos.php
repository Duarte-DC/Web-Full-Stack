<?php
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Slim\Interfaces\RouteCollectorProxyInterface as Group;
    use src\Models\Produto;

    $app -> group ('/api/v1', function (Group $group) {

        $group -> get ('/produtos/lista', function ($request, $response) {
            $produtos = Produto::get ();
    
            $response = $response -> withHeader ('Content-type', 'application/json');
    
            $response -> getBody () -> write (json_encode ($produtos));
    
            return $response;
        });

    });