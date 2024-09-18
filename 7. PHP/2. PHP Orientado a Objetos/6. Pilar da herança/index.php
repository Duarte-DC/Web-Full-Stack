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
    }
    class Carro extends Veiculo {
        public $tetoSolar = null;

        function __construct ($matricula, $cor, $tetoSolar) {
            $this -> matricula = $matricula;
            $this -> cor = $cor;
            $this -> tetoSolar = $tetoSolar;
        }

        function abrirTetoSolar () {
            echo 'Abriu teto solar';
        }
        function alterarPosicaoVolante () {
            echo 'Posição alterada';
        }
    }
    class Moto extends Veiculo {
        public $ContraPesoVolante = null;

        function __construct ($matricula, $cor, $ContraPesoVolante) {
            $this -> matricula = $matricula;
            $this -> cor = $cor;
            $this -> ContraPesoVolante = $ContraPesoVolante;
        }

        function empinar () {
            echo 'Empinou';
        }
    }

    $carro = new Carro ('ADA 080 MP', 'Cinzento', 'Nao');

    echo '<pre>';
    print_r ($carro);
    echo '</pre>';

    $carro -> acelerar ();
    echo '<br>';
    $carro -> travar ();

    echo '<hr>';

    $moto = new Moto ('CRF 500', 'Amarelo', 'Sim');

    echo '<pre>';
    print_r ($moto);
    echo '</pre>';

    $moto -> empinar ();
?>
