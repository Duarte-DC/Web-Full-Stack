<?php
    // $objeto = null;
/*
    if (isset ($objeto) && $objeto != null) {
        $objeto -> total;
    }
*/
    // $objeto ?-> total ();

    class Funcionario {
        public function __construct (
            private string $nome = "",
            private float $salario = 0
        ) {}
        public function info () : string {
            return 'Nome: ' . $this -> nome . '<br>'
                . 'Salário: ' . $this -> salario . '<br> <hr>';
        }
    }
    class FolhaPagamentos {
        private $funcionarios = null;
        public function __construct () {
            $this -> funcionarios = [
                new Funcionario ('Maria', 90000),
                new Funcionario ('Isabel', 150000),
                new Funcionario ('Ana Cristina', 145000),
                new Funcionario ('Duarte', 180000)
            ];
        }
        public function getTotalFuncionarios () {
            return count ($this -> funcionarios);
        }
        public function getFuncionario ($numero) {
            return $this -> funcionarios [$numero];
        }
    }
    $folha = new FolhaPagamentos ();

    echo $folha ?-> getTotalFuncionarios () . '<br> <hr>';

    echo '<pre>';
    print_r ($folha ?-> getFuncionario (0) -> info ());
    echo '</pre>';
?>