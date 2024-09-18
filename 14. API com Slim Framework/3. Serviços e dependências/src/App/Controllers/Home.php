<?php
    namespace App\Controllers;

    class Home {
        // protected $container;
        // public function __construct ($container) {

        //     $this -> container = $container;
        // }
        // public function index ($request, $response) {

        //     $view = $this -> container -> get ('view');

        //     var_dump ($view);

        //     return $response -> write ('Teste index');
        // }

        protected $view;
        public function __construct ($view) {

            $this -> view = $view;
        }
        public function index ($request, $response) {

            var_dump ($this -> view);

            return $response -> write ('Teste index');
        }
    }