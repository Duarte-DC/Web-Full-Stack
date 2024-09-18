<?php
    namespace App;

    class Connection {
        public static function getDataBase () {

            try {
                $connection = new \PDO (
                    "mysql:host=127.0.0.1;dbname=twitterClone;charset=utf8",
                    "root",
                    ""
                );

                return $connection;

            }   catch (\PDOException $e) {
                echo "Erro: " . $e -> getMessage ();
            }
        }
    }
?>