<?php
    namespace App\Models;

    use MF\Model\Model;

    class Tweet extends Model {
        private $id;
        private $idUsuario;
        private $tweet;
        private $dataTweet;

        public function __get ($atributo) {
            return $this -> $atributo;
        }
        public function __set ($atributo, $valor) {
            $this -> $atributo = $valor;
        }

        // salvar
        public function salvar () {
            $query = '
                insert into tweets (
                    idUsuario,
                    tweet
                )   values (
                        :idUsuario,
                        :tweet
                    )
            ';

            try {
                $statement = $this -> dataBase -> prepare ($query);

                $statement -> bindValue (':idUsuario', $this -> __get ('idUsuario'));
                $statement -> bindValue (':tweet', $this -> __get ('tweet'));

                $statement -> execute ();

                return $this;

            }   catch (\PDOException $e) {
                    echo 'Erro: '. $e -> getMessage ();
                }

        }
        // recuperar
        public function getAll () {

            $query = "
                select 
                    x.id,
                    x.idUsuario,
                    y.nome,
                    x.tweet,
                    DATE_FORMAT(x.dataTweet, '%d/%m/%Y %H:%i') as dataTweet
                from
                    tweets as x
                    left join usuarios as y
                        on (x.idUsuario = y.id)
                    where
                        x.idUsuario = :idUsuario
                        or x.idUsuario in (
                            select
                                idUsuarioSeguir
                                from
                                    usuariosSeguidores
                                    where
                                        idUsuario = :idUsuario
                        )
                        order by
                            x.dataTweet desc
            ";
            try {
                $statement = $this -> dataBase -> prepare ($query);
    
                $statement -> bindValue (':idUsuario', $this -> __get ('idUsuario'));
    
                $statement -> execute ();
    
                return $statement -> fetchAll (\PDO::FETCH_ASSOC);

            }   catch (\PDOException $e) {
                    echo 'Erro: '. $e -> getMessage ();
                }
        }
        public function getPorPagina ($limit, $offset) {

            $query = "
                select 
                    x.id,
                    x.idUsuario,
                    y.nome,
                    x.tweet,
                    DATE_FORMAT(x.dataTweet, '%d/%m/%Y %H:%i') as dataTweet
                from
                    tweets as x
                    left join usuarios as y
                        on (x.idUsuario = y.id)
                    where
                        x.idUsuario = :idUsuario
                        or x.idUsuario in (
                            select
                                idUsuarioSeguir
                                from
                                    usuariosSeguidores
                                    where
                                        idUsuario = :idUsuario
                        )
                        order by
                            x.dataTweet desc
                        limit
                            $limit
                        offset
                            $offset
            ";
            try {
                $statement = $this -> dataBase -> prepare ($query);
    
                $statement -> bindValue (':idUsuario', $this -> __get ('idUsuario'));
    
                $statement -> execute ();
    
                return $statement -> fetchAll (\PDO::FETCH_ASSOC);

            }   catch (\PDOException $e) {
                    echo 'Erro: '. $e -> getMessage ();
                }
        }
        public function removerTweet ($idTweet) {

            $query = '
                delete from
                    tweets
                    where
                        idUsuario = :idUsuario
                        and
                        id = :id    
            ';

            try {
                $statement = $this -> dataBase -> prepare ($query);

                $statement -> bindValue (':idUsuario', $this -> __get ('idUsuario'));
                $statement -> bindValue (':id', $idTweet);

                $statement -> execute ();

                return true;

            }   catch (\PDOException $e) {
                    echo ''. $e -> getMessage ();
                }
        }
        public function getTotalRegistros() {

            $query = '
                select
                    count(*) as total
                from
                    tweets as x
                    left join usuarios as y
                        on (x.idUsuario = y.id)
                    where
                        x.idUsuario = :idUsuario
                        or x.idUsuario in (
                            select
                                idUsuarioSeguir
                                from
                                    usuariosSeguidores
                                    where
                                        idUsuario = :idUsuario
                        )
            ';
            try {
                $statement = $this -> dataBase -> prepare ($query);

                $statement -> bindValue (':idUsuario', $this -> __get ('idUsuario'));

                $statement -> execute ();

                return $statement -> fetch (\PDO::FETCH_ASSOC);

            }   catch (\PDOException $e) {
                    echo 'Erro: '. $e -> getMessage ();
                }
        }
    }
?>