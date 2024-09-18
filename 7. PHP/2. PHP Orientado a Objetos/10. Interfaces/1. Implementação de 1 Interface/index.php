<?php
    interface EletronicoInterface {
        public function ligar ();
        public function desligar (); 
    }
    class Geleira implements EletronicoInterface {

        public function abrirPorta () {
            echo 'Abrir a porta';
        }
        public function ligar () {
            echo 'Ligado';
        }
        public function desligar () {
            echo 'Desligado';
        }
    }
    class Tv implements EletronicoInterface {
        public function trocarCanal () {
            echo 'Trocar de canal';
        }
        public function ligar () {
            echo 'Ligado';
        }
        public function desligar () {
            echo 'Desligado';
        }
    }

    $x = new Geleira ();
    $y = new Tv ();
?>