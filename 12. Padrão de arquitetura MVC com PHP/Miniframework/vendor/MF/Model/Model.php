<?php
    namespace MF\Model;

    abstract class Model {
        protected $dataBase; 
        public function __construct (\PDO $dataBase) {
            $this -> dataBase = $dataBase;
        }
    }
?>