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

            $routes ['sobreNos'] = [
                'route' => '/sobreNos',
                'controller' => 'IndexController',
                'action' => 'sobreNos'
            ];

            $this -> setRoutes ($routes);
        }        
    }
?>