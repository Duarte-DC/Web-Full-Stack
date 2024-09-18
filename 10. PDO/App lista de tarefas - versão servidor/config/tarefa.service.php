<?php 
    class TarefaService {
        private $conexao;
        private $tarefa;

        public function __construct (Conexao $conexao, Tarefa $tarefa) {
            $this -> conexao = $conexao -> conectar ();
            $this -> tarefa = $tarefa;
        }
        //  Create
        public function inserir () {

            $query = '
                insert into tarefas (
                    tarefa
                )   values (:tarefa)
            ';

            try {
                $statement = $this -> conexao -> prepare ($query);
                $statement -> bindValue (':tarefa', $this -> tarefa -> __get ('tarefa'));
                $statement -> execute ();

            }   catch (PDOException $e) {
                    echo 'Erro: ' . $e -> getMessage ();
                }
        }

        //  Read
        public function recuperar () {
            $query = '
                select
                    x.id,
                    y.estado,
                    x.tarefa
                from
                    tarefas as x left join estados as y
                    on (x.idEstado = y.id);
            ';

            try {
                $statement = $this -> conexao -> prepare ($query);
                $statement -> execute ();
        
                return $statement -> fetchAll (PDO :: FETCH_OBJ);

            }   catch (PDOException $e) {
                    echo 'Erro: ' . $e -> getMessage ();
                }
        }
        //  Update
        public function atualizar () {
            $query = '
                update 
                    tarefas
                    set
                        tarefa = :tarefa
                    where
                        id = :id
            ';

            try {
                $statement = $this -> conexao -> prepare ($query);
                $statement -> bindValue (':tarefa', $this -> tarefa -> __get ('tarefa'));
                $statement -> bindValue (':id', $this -> tarefa -> __get ('id'));
                $statement -> execute ();

            }   catch (PDOException $e) {
                    echo 'Erro'. $e -> getMessage ();
                }
        }
        //  Delete
        public function remover () {
            $query = '
                delete from 
                    tarefas
                    where
                        id = :id
            ';

            try {
                $statement = $this -> conexao -> prepare ($query);
                $statement -> bindValue (':id', $this -> tarefa -> __get ('id'));
                $statement -> execute ();

            }   catch (PDOException $e) {
                    echo 'Erro'. $e -> getMessage ();
                }

        }

        public function marcarRealizada () {
            $query = '
                update
                    tarefas
                    set
                        idEstado = :idEstado
                    where
                        id = :id
            ';
            try {
                $statement = $this -> conexao -> prepare ($query);
                $statement -> bindValue (':idEstado', $this -> tarefa -> __get ('idEstado'));
                $statement -> bindValue (':id', $this -> tarefa -> __get ('id'));
                $statement -> execute ();

            }   catch (PDOException $e) {
                    echo 'Erro:'. $e -> getMessage ();
                }


        }
    }
?>