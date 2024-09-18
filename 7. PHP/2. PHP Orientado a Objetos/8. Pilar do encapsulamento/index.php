<?php
    class Pai {
        private $nome = 'Duarte';
        protected $sobrenome = 'Charles';
        public $humor = 'Feliz';
    
    
        public function __get ($atributo) {
            return $this -> $atributo;
        }
        public function __set ($atributo, $valor) {
            if (strlen ($valor) >= 3)
                $this -> $atributo = $valor;
        }
    

        private function executarMania () {
            echo 'Assobiar';
        }
        protected function responder () {
            echo 'Oi';
        }
        public function executarAcao () {

            $x = rand (1, 10);

            if ($x >= 1 && $x <= 8)
                $this -> responder ();
            else
                $this -> executarMania ();
        }
    }
    
    $pai = new Pai ();

/*
    echo $pai -> __get ('nome');
    echo '<br>';
    $pai -> __set ('nome', 'Duarte Artur');
    echo $pai -> __get ('nome');

    echo '<br> <br>';

    echo $pai -> __get ('sobrenome');
    echo '<br>';
    $pai -> __set ('sobrenome','Chamo Charles');
    echo $pai -> __get ('sobrenome');

    echo '<br> <br>';

    echo $pai -> humor;
    $pai -> humor = 'Triste';
    echo '<br>';
    echo $pai -> humor;

    echo '<br> <br>';

    $pai -> executarAcao ();
*/

    class Filho extends Pai {
        public function __construct () {
            // exibir os metodos do objeto
            echo '<pre>';
            print_r (get_class_methods ($this));
            echo '</pre>';
        }

    /*
        public function getAtributo ($atributo) {
            return $this -> $atributo;
        }
        public function setAtributo ($atributo, $valor) {
            $this -> $atributo = $valor;
        } 
    */
    /*
        public function __get ($atributo) {
            return $this -> $atributo;
        }
        public function __set ($atributo, $valor) {
            if (strlen ($valor) >= 3)
                $this -> $atributo = $valor;
        }
    */
        private function executarMania () {
            echo 'Cantar';
        }
        protected function responder () {
            echo 'Olá';
        }
        public function x () {
            $this -> executarMania ();
        }
    }
    $filho = new Filho ();

    echo '<pre>';
    print_r ($filho);
    echo '</pre>';

/* 
    echo $filho -> getAtributo ('nome');
    $filho -> setAtributo ('nome', 'Edward'); // cria um novo atributo 'nome' dinámicamente, porque o 'nome' em questão é um atributo privado
    
    echo '<pre>';
    print_r ($filho);
    echo '</pre>';

    echo $filho -> getAtributo ('nome');


    // exibir os metodos do objeto
    echo '<pre>';
    print_r (get_class_methods ($filho));
    echo '</pre>';
 
    echo $filho -> __get ('nome');
    $filho -> __set ('nome', 'Duarte Artur');
    echo '<br>' . $filho -> __get ('nome');

    echo '<pre>';
    print_r ($filho);
    echo '</pre>'
*/  
    $filho -> executarAcao ();
    echo '<br>';
    $filho -> x ();
?>