<?php
    // modelo
    class Funcionario {
        // atributos
        public $nome = 'Duarte Charles';
        public $telefoe = 829774797;
        public $numeroFilhos = 0;


        // metodos
        function resumirCadastroFuncionario () {
            return 'Esse é o resumo o cadastro do funcionário:' .
                    '<br> <br> - Nome: ' . $this -> nome . 
                    '<br> - Numero de telefone: ' . $this -> telefoe . 
                    '<br> - Numero de filhos: ' . $this -> numeroFilhos;
        }
        function modificarNumeroFilhos ($numeroFilhos) {
            // afetar um atributo do objeto
            $this -> numeroFilhos = $numeroFilhos;
        }
    }

    $x = new Funcionario ();
    echo $x -> resumirCadastroFuncionario ();

    echo '<hr>';

    $x -> modificarNumeroFilhos (1);
    echo $x -> resumirCadastroFuncionario ();
?>