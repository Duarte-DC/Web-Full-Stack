<?php
    namespace App;

    use MF\Init\Bootstrap;
    class Route extends Bootstrap {
        protected function initRoutes () {
            $routes ['home'] = [
                'route' => '/',
                'controller' => 'IndexController',
                'action' => 'index'
            ];

            $routes ['inscreverse'] = [
                'route' => '/inscreverse',
                'controller' => 'IndexController',
                'action' => 'inscreverse'
            ];

            $routes ['registrar'] = [
                'route' => '/registrar',
                'controller' => 'IndexController',
                'action' => 'registrar'
            ];

            $routes ['autenticar'] = [
                'route' => '/autenticar',
                'controller' => 'AuthController',
                'action' => 'autenticar'
            ];

            $routes ['timeline'] = [
                'route' => '/timeline',
                'controller' => 'AppController',
                'action' => 'timeline'
            ];

            $routes ['sair'] = [
                'route' => '/sair',
                'controller' => 'AuthController',
                'action' => 'sair'
            ];

            $routes ['tweet'] = [
                'route' => '/tweet',
                'controller' => 'AppController',
                'action' => 'tweet'
            ];

            $routes ['quemSeguir'] = [
                'route' => '/quemSeguir',
                'controller' => 'AppController',
                'action' => 'quemSeguir'
            ];

            $routes ['acao'] = [
                'route' => '/acao',
                'controller' => 'AppController',
                'action' => 'acao'
            ];

            $routes ['removerTweet'] = [
                'route' => '/removerTweet',
                'controller' => 'AppController',
                'action' => 'removerTweet'
            ];

            $this -> setRoutes ($routes);
        }        
    }
?>