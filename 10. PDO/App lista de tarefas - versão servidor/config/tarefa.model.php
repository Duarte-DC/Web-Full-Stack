<?php
    class Tarefa {
        private $id;
        private $idEstado;
        private $tarefa;
        private $dataCadastro;

        public function __get ($atributo) {
            return $this -> $atributo;
        }
        public function __set ($atributo, $valor) {
            $this -> $atributo = $valor;
            return $this;
        }
    }
?>