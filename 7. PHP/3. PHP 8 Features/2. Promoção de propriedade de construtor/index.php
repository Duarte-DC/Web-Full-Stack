<?php
/*
    class Produto {
        public string $nome = "";
        public float $valor = 0;
        
        public function __construct($nome, $valor) {
            $this -> nome = $nome;
            $this -> valor = $valor;
        }
    }
*/
    class Produto {
        public function __construct (
            public string $nome = "",
            public float $valor = 0
        ) {}
    }

    $produto = new Produto ('Smartphone', 25000);

    echo 'Produto: ' . $produto -> nome;
    echo '<br>';
    echo 'Valor: ' . $produto -> valor . ', 00MT';

    echo '<br> <hr> <br>';

    $produto2 = new Produto ('Geleira', 45000);

    echo 'Produto: ' . $produto2 -> nome;
    echo '<br>';
    echo 'Valor: ' . $produto2 -> valor . ', 00MT';
?>
