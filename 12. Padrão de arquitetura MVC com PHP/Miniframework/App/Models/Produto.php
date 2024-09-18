<?php
    namespace App\Models;

    use MF\Model\Model;
    class Produto extends Model {
        public function getProdutos () {
            $query = '
                select 
                    id,
                    descricao,
                    preco
                from
                    produtos;
            ';

            return $this -> dataBase -> query ($query) -> fetchAll ();
        }
    }
?>