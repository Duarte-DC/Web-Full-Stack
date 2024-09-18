<?php
    namespace App\Models;

    use MF\Model\Model;
    class Info extends Model {
        public function getInfo () {
            $query = '
                select
                    titulo,
                    descricao
                from
                    info
            ';

            return $this -> dataBase -> query ($query) -> fetchAll ();
        }
    }
?>