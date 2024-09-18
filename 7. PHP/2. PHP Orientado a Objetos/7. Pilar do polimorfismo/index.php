<?php
    class Veiculo {
        public $matricula = null;
        public $cor = null;

        function acelerar () {
            echo 'Acelerou';
        }
        function travar () {
            echo 'Travou';
        }
        function trocarMarcha () {
            echo 'Desengatar embreagem com o pé e engatar a marcha com a mão';
        }
    }
    class Carro extends Veiculo {
        public $tetoSolar = null;

        function __construct ($matricula, $cor, $tetoSolar) {
            $this -> matricula = $matricula;
            $this -> cor = $cor;
            $this -> tetoSolar = $tetoSolar;
        }
        function abrirTetoSolar () {
            echo 'Abrir teto';
        }
        function alterarPosicaoVolante () {
            echo 'Mudou de direção';
        }
    }
    class Moto extends Veiculo {
        public $contraPesoVolante = null;

        function __construct ($matricula, $cor, $contraPesoVolante) {
            $this -> matricula = $matricula;
            $this -> cor = $cor;
            $this -> contraPesoVolante = $contraPesoVolante;
        } 

        function empinar () {
            echo 'Empinou';
        }
        
        // polimorfismo *sobreposição de um método herdado*
        function trocarMarcha()
        {
            echo 'Desengatar a embreagem com a mão e engatar a marcha com o pé';
        }
    }
    
    $carro = new Carro ('ADA 080 MP', 'Cinzento', 'Nao');

    echo '<pre>';
    print_r ($carro);
    echo '</pre>';

    $carro -> acelerar ();
    echo '<br>';
    $carro -> trocarMarcha ();

    echo '<hr>';

    $moto = new Moto ('CRF 500', 'Amarelo', 'Sim');

    echo '<pre>';
    print_r ($moto);
    echo '</pre>';

    $moto -> trocarMarcha ();
?>