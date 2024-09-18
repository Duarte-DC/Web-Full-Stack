<?php
    class Conexao {
        private $dataSourceName = 'mysql:host=localhost;dbname=listaTarefas';
        private $user = 'root';
        private $password = '';
        public function conectar () {
            try {
                $conexao = new PDO (
                    $this -> dataSourceName,
                    $this -> user,
                    $this -> password
                );

                return $conexao;

            }   catch (PDOException $e) {
                    echo '<p>' . $e -> getMessage () . '</p>';
                }
        }
    }
?>