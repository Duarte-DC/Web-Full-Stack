<?php
    class Humano implements MamiferoInterface, TerrestreInterface {
        public function conversar () {
            echo 'Bla bla bla';
        }
        public function respirar () {
            echo 'Respirou';
        }
        public function andar () {
            echo 'Andou';
        }
    }
    class Baleia implements  MamiferoInterface, AquaticoInterface {
        public function esquinchar () {
            echo 'Esguinchou';
        }
        public function respirar () {
            echo 'Respirou';
        }
        public function nadar () {
            echo 'Nadou';
        }
    }

    interface MamiferoInterface {
        public function respirar ();
    }
    interface TerrestreInterface {
        public function andar ();
    }
    interface AquaticoInterface {
        public function nadar ();
    }

    $x = new Humano ();
    $y = new Baleia ();
?>