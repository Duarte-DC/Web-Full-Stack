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

            $this -> setRoutes ($routes);
        }        
    }
?>