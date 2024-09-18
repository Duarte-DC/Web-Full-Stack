<?php
    namespace App\Controllers;
    
    // recursos do miniframework
    use MF\Controller\Action;
    use MF\Model\Container;

    // os models
    use App\Models\Produto;
    use App\Models\Info;

    class IndexController extends Action {
        public function index () {
            // $this -> view -> dados = ['Sofá', 'Cadeira', 'Cama'];

            $produto = Container::getModel ('Produto');

            $produtos = $produto -> getProdutos ();

            $this -> view -> dados = $produtos;

            $this -> render ('index', 'layout2');
        }
        public function sobreNos () {
            // $this -> view -> dados = ['Notebook', 'Impressora', 'Processador', 'Teclado', 'Monitor', 'Mouse'];

            $info = Container::getModel ('Info');

            $informacoes = $info -> getInfo (); 

            $this -> view -> dados = $informacoes;

            $this -> render ('index', 'layout2');
        }
    }
?>
