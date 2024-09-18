<?php
    namespace MF\Model;

    use App\Connection;

    class Container {
        public static function getModel ($model) {
            // retornar o modelo solicitado ja instanciado, inclusive com a conexao estabelecida
            $class = "\\App\\Models\\" . ucfirst($model);

            // instância da conexão
            $connection = Connection::getDataBase ();

            return new $class ($connection);
        }
    }
?>