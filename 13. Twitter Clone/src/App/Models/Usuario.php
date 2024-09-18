<?php
    namespace App\Models;

    use MF\Model\Model;

    class Usuario extends Model {
        private $id;
        private $nome;
        private $email;
        private $senha;

        public function __get ($atributo) {
            return $this -> $atributo;
        }
        public function __set ($atributo, $valor) {
            $this -> $atributo = $valor;
        }

        // salvar
        public function salvar () {
            $query = '
                insert into usuarios (
                    nome,
                    email,
                    senha
                )   values (
                        :nome,
                        :email,
                        :senha
                    )
            ';

            try {
                $statement = $this -> dataBase -> prepare ($query);
                
                $statement -> bindValue (':nome', $this -> __get ('nome'));
                $statement -> bindValue (':email', $this -> __get ('email'));
                $statement -> bindValue (':senha', $this -> __get ('senha')); // md5 () -> hash 32 caracteres (criptografia) de modo a guardar no Banco de dados o hash no lugar da senha
                
                $statement -> execute ();

                return $this;

            }   catch (\PDOException $e) {
                    echo 'Erro: '. $e -> getMessage ();
                }
        }
        // validar se um cadastro pode ser feito
        public function validarCadastro () {
            $valido = true;

            if (strlen ($this -> __get ('nome')) < 3 
                || strlen ($this -> __get ('email')) < 3 
                || strlen ($this -> __get ('senha')) < 3) {

                $valido = false;
            }
            
            return $valido;
        }
        // recuperar um usuário por e-mail para verificar se o email inserido existe na base de dados
        public function getUsuarioPorEmail () {
            $query = '
                select 
                    nome, 
                    email
                from
                    usuarios
                    where
                        email = :email
            ';

            try {
                $statement = $this -> dataBase -> prepare ($query);

                $statement -> bindValue (':email', $this -> __get ('email'));

                $statement -> execute ();

                return $statement -> fetchAll (\PDO::FETCH_ASSOC);
                
            }   catch (\PDOException $e) {
                    echo 'Erro: '. $e -> getMessage ();
                }
        }
        // autenticar usuario 
        public function autenticar () {
            $query = '
                select
                    id,
                    nome,
                    email
                from
                    usuarios
                    where
                        email = :email and senha = :senha
            ';
            
            try {
                $statement = $this -> dataBase -> prepare ($query);

                $statement -> bindValue (':email', $this -> __get ('email'));
                $statement -> bindValue (':senha', $this -> __get ('senha'));

                $statement -> execute ();

                $usuario = $statement -> fetch (\PDO::FETCH_ASSOC);

                if (isset ($usuario ['id']) != '' && $usuario ['nome'] != '') {
                    $this -> __set ('id', $usuario ['id']);
                    $this -> __set ('nome', $usuario ['nome']);
                }
                return $this;

            }   catch (\PDOException $e) {
                    echo 'Erro: '. $e -> getMessage ();
                }
        }
        public function getAll () {
            $query = '
                select
                    x.id,
                    x.nome,
                    x.email,
                    (
                        select
                            count(*)
                        from
                            usuariosSeguidores as us
                        where
                            us.idUsuario = :idUsuario
                            and
                                us.idUsuarioSeguir = x.id
                    )   as seguindo_sn
                from
                    usuarios as x
                    where
                        x.nome
                        like
                            :nome
                    and
                        x.id != :idUsuario
            ';

            try {
                $statement = $this -> dataBase -> prepare ($query);

                $statement -> bindValue (':nome', '%' . $this -> __get ('nome') . '%');
                $statement -> bindValue (':idUsuario', $this -> __get ('id'));

                $statement -> execute ();

                return $statement -> fetchAll (\PDO::FETCH_ASSOC);

            }   catch (\PDOException $e) {
                    echo 'Erro: ' . $e -> getMessage ();
                }
        }
        public function seguirUsuario ($idUsuarioSeguir) {
            $query = '
                insert into usuariosSeguidores (
                    idUsuario,
                    idUsuarioSeguir
                )   values (
                        :idUsuario,
                        :idUsuarioSeguir
                    )
            ';
            try {
                $statement = $this -> dataBase -> prepare ($query);

                $statement -> bindValue (':idUsuario', $this -> __get ('id'));
                $statement -> bindValue (':idUsuarioSeguir', $idUsuarioSeguir);

                $statement -> execute ();

                return true;

            }   catch (\PDOException $e) {
                    echo 'Erro: '. $e -> getMessage ();
                }           
        }
        public function deixarSeguirUsuario ($idUsuarioSeguir) {
    
            $query = '
                delete from 
                    usuariosSeguidores
                where
                    idUsuario = :idUsuario
                    and
                        idUsuarioSeguir = :idUsuarioSeguir

            ';
            try {
                $statement = $this -> dataBase -> prepare ($query);

                $statement -> bindValue (':idUsuario', $this -> __get ('id'));
                $statement -> bindValue (':idUsuarioSeguir', $idUsuarioSeguir);

                $statement -> execute ();

                return true;

            }   catch (\PDOException $e) {
                    echo 'Erro: '. $e -> getMessage ();
                }
        }
        public function getInfoUsuario () {
            $query = '
                select 
                    nome
                from 
                    usuarios
                    where 
                        id = :idUsuario
            ';
            try {
                $statement = $this -> dataBase -> prepare ($query);

                $statement -> bindValue (':idUsuario', $this -> __get ('id'));

                $statement -> execute ();

                return $statement -> fetch (\PDO::FETCH_ASSOC);

            }   catch (\PDOException $e) {
                    echo 'Erro: '. $e -> getMessage ();
                }

        }
        public function getTotalTweets () {
            $query = '
                select
                    count(*) as totalTweets
                from
                    tweets
                    where
                        idUsuario = :idUsuario
            ';
            try {
                $statement = $this -> dataBase -> prepare ($query);

                $statement -> bindValue (':idUsuario', $this -> __get ('id'));

                $statement -> execute ();

                return $statement -> fetch (\PDO::FETCH_ASSOC);

            }   catch (\PDOException $e) {
                    echo 'Erro: '. $e -> getMessage ();
                }
        }
        public function getTotalASeguir () {
            $query = '
                select
                    count(*) as totalASeguir
                from
                    usuariosSeguidores
                    where
                        idUsuario = :idUsuario
            ';

            try {
                $statement = $this -> dataBase -> prepare ($query);
                
                $statement -> bindValue (':idUsuario', $this -> __get ('id'));
                
                $statement -> execute ();

                return $statement -> fetch (\PDO::FETCH_ASSOC);

            }   catch (\PDOException $e) {
                    echo 'Erro: '. $e -> getMessage ();
                }
        }
        public function getTotalSeguidores () {
            $query = '
                select
                    count(*) as totalSeguidores
                from
                    usuariosSeguidores
                    where
                        idUsuarioSeguir = :idUsuario
                        
            ';
            try {
                $statement = $this -> dataBase -> prepare ($query);

                $statement -> bindValue (':idUsuario', $this -> __get ('id'));

                $statement -> execute ();

                return $statement -> fetch (\PDO::FETCH_ASSOC);

            }   catch (\PDOException $e) {
                    echo 'Erro: '. $e -> getMessage ();
                }
        }
    }
?>