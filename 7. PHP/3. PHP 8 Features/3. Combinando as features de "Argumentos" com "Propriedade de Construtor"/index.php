<?php
    class Produto {
        public function __construct(
            public string $nome = '',
            public float $valor = 0
        ) {}
    }
    $x = new Produto (
        nome: 'Smartphone',
        valor: 15000
    );

    $y = new Produto (
        nome: 'Geleira',
        valor: 45000
    );

    echo '<pre>';

    print_r ($x);

    echo '<hr>';
    
    print_r ($y);

    echo '</pre>';
?>