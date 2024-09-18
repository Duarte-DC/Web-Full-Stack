<?php
// classe App dashboard
    class Dashboard {
        public $dataInicio;
        public $dataFim;
        public $numeroVendas;
        public $totalVendas;
        public $clientesAtivos;
        public $clientesInativos;
        public $totalReclamacoes;
        public $totalElogios;
        public $totalSugestoes;
        public $totalDespesas;
        public function __get ($atributo) {
            return $this -> $atributo;
        }
        public function __set ($atributo, $valor) {
            $this -> $atributo = $valor;
            return $this;
        }
    }

// classe de conexão com o banco de dados
    class Conexao {
        private $dataSourceName = 'mysql:host=localhost;dbname=dashboard';
        private $user = 'root';
        private $password = '';
        public function conectar () {

            try {
                $conexao = new PDO (
                    $this -> dataSourceName,
                    $this -> user,
                    $this -> password
                );

                $conexao -> exec ('set charset utf8');

                return $conexao;

            }   catch (PDOException $e) {
                    echo '<p>Erro: ' . $e -> getMessage () . '</p>';
                }
        }
    }

// classe (model)
    class BancoDados {
        private $conexao;
        private $dashboard;

        public function __construct (Conexao $conexao, Dashboard $dashboard) {
            $this -> conexao = $conexao -> conectar ();
            $this -> dashboard = $dashboard;
        }
        public function getNumeroVendas () {
            $query = '
                select 
                    count(*) as numeroVendas
                from
                    vendas
                    where 
                        dataVenda 
                        between 
                            :dataInicio and :dataFim
            ';
            try {
                $statement = $this -> conexao -> prepare ($query);
                $statement -> bindValue (':dataInicio', $this -> dashboard -> __get ('dataInicio'));
                $statement -> bindValue (':dataFim', $this -> dashboard -> __get ('dataFim'));
                $statement -> execute ();

                return $statement -> fetch (PDO :: FETCH_OBJ) -> numeroVendas;

            }   catch (PDOException $e) {
                    echo 'Erro: ' . $e -> getMessage ();
                }
        }
        public function getTotalVendas () {
            $query = '
                select 
                    sum(total) as totalVendas
                from
                    vendas
                    where 
                        dataVenda 
                        between 
                            :dataInicio and :dataFim
            ';
            try {
                $statement = $this -> conexao -> prepare ($query);
                $statement -> bindValue (':dataInicio', $this -> dashboard -> __get ('dataInicio'));
                $statement -> bindValue (':dataFim', $this -> dashboard -> __get ('dataFim'));
                $statement -> execute ();

                return $statement -> fetch (PDO :: FETCH_OBJ) -> totalVendas;

            }   catch (PDOException $e) {
                    echo 'Erro: ' . $e -> getMessage ();
                }
        }
        public function getClientesAtivos () {
            $query = '
                select 
                    count(clienteAtivo) as clientesAtivos
                from
                    clientes
                    where 
                        clienteAtivo = 1
            ';
            try {
                $statement = $this -> conexao -> prepare ($query);
                $statement -> execute ();

                return $statement -> fetch (PDO :: FETCH_OBJ) -> clientesAtivos;

            }   catch (PDOException $e) {
                    echo 'Erro: ' . $e -> getMessage ();
                }
        }
        public function getClientesInativos () {
            $query = '
                select 
                    count(clienteAtivo) as clientesInativos
                from
                    clientes
                    where 
                        clienteAtivo = 0
            ';
            try {
                $statement = $this -> conexao -> prepare ($query);
                $statement -> execute ();

                return $statement -> fetch (PDO :: FETCH_OBJ) -> clientesInativos;

            }   catch (PDOException $e) {
                    echo 'Erro: ' . $e -> getMessage ();
                }
        }
        public function getTotalReclamacoes () {
            $query = '
                select 
                    count(tipoContato) as totalReclamacoes
                from
                    contatos
                    where 
                        tipoContato = 1
            ';
            try {
                $statement = $this -> conexao -> prepare ($query);
                $statement -> execute ();

                return $statement -> fetch (PDO :: FETCH_OBJ) -> totalReclamacoes;

            }   catch (PDOException $e) {
                    echo 'Erro: ' . $e -> getMessage ();
                }
        }
        public function getTotalElogios () {
            $query = '
                select 
                    count(tipoContato) as totalElogios
                from
                    contatos
                    where 
                        tipoContato = 3
            ';
            try {
                $statement = $this -> conexao -> prepare ($query);
                $statement -> execute ();

                return $statement -> fetch (PDO :: FETCH_OBJ) -> totalElogios;

            }   catch (PDOException $e) {
                    echo 'Erro: ' . $e -> getMessage ();
                }
        }
        public function getTotalSugestoes () {
            $query = '
                select 
                    count(tipoContato) as totalSugestoes
                from
                    contatos
                    where 
                        tipoContato = 2
            ';
            try {
                $statement = $this -> conexao -> prepare ($query);
                $statement -> execute ();

                return $statement -> fetch (PDO :: FETCH_OBJ) -> totalSugestoes;

            }   catch (PDOException $e) {
                    echo 'Erro: ' . $e -> getMessage ();
                }
        }
        public function getTotalDespesas () {
            $query = '
                select 
                    sum(total) as totalDespesas
                from
                    despesas
                    where 
                        dataDespesa 
                        between 
                            :dataInicio and :dataFim
            ';
            try {
                $statement = $this -> conexao -> prepare ($query);
                $statement -> bindValue (':dataInicio', $this -> dashboard -> __get ('dataInicio'));
                $statement -> bindValue (':dataFim', $this -> dashboard -> __get ('dataFim'));
                $statement -> execute ();

                return $statement -> fetch (PDO :: FETCH_OBJ) -> totalDespesas;

            }   catch (PDOException $e) {
                    echo 'Erro: ' . $e -> getMessage ();
                }
        }
    }

$dashboard = new Dashboard ();

$conexao = new Conexao ();

$bancoDados = new BancoDados ($conexao, $dashboard);

$dataMesAno = explode ('-', $_GET ['dataMesAno']);
$ano = $dataMesAno [0];
$mes = $dataMesAno [1];
$diasDoMes = cal_days_in_month (CAL_GREGORIAN, $mes, $ano);

$dashboard -> __set ('dataInicio', $ano . '-' . $mes . '-01');
$dashboard -> __set ('dataFim', $ano . '-' . $mes . '-' . $diasDoMes);

$dashboard -> __set ('numeroVendas', $bancoDados -> getNumeroVendas ());
$dashboard -> __set ('totalVendas', $bancoDados -> getTotalVendas ());
$dashboard -> __set ('clientesAtivos', $bancoDados -> getClientesAtivos ());
$dashboard -> __set ('clientesInativos', $bancoDados -> getClientesInativos ());
$dashboard -> __set ('totalReclamacoes', $bancoDados -> getTotalReclamacoes ());
$dashboard -> __set ('totalElogios', $bancoDados -> getTotalElogios ());
$dashboard -> __set ('totalSugestoes', $bancoDados -> getTotalSugestoes () );
$dashboard -> __set ('totalDespesas', $bancoDados -> getTotalDespesas ());

echo json_encode ($dashboard);

?>