<?php
    class Papagaio implements AveInterface {
        public function comer () {
            echo 'Comeu';
        }
        public function voar () {
            echo 'Voou';
        }
    }
    interface AnimalInterface {
        public function comer ();
    }
    interface AveInterface extends AnimalInterface {
        public function voar ();
    }

    $x = new Papagaio ();
?>