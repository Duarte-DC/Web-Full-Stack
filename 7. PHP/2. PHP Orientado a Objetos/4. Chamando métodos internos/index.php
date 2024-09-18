<?php
    class Produto {
        public $categoria = null;
        public $titulo = null;
        public $descricao = null;
        public $preco = null;

        // getters & setters (overloading / sobrecarga)
        function __get ($atributo) {
            return $this -> $atributo;
        }
        function __set ($atributo, $valor) { 
            $this -> $atributo = $valor; 
        }

        function resumirCadastroProduto () {
            return 'Resumo do cadastro do produto:' .
                '<br> <br> - Categoria: ' . $this -> __get ('categoria') . 
                '<br> - Titulo: ' . $this -> __get ('titulo') . 
                '<br> - Descrição: ' . $this -> __get ('descricao') .
                '<br> - Preço: ' . $this -> __get ('preco') . ', 00 MT' .
                '<hr>';
        }
    }
    $produto1 = new Produto ();
    $produto1 -> __set ('categoria','Eletrodomestico');
    $produto1 -> __set ('titulo', 'Geleira');
    $produto1 -> __set ('descricao', 'Henessy, 50L');
    $produto1 -> __set ('preco', '100.000');

    echo $produto1 -> resumirCadastroProduto ();

    $produto2 = new Produto ();
    $produto2 -> __set ('categoria', 'Eletrodomestico');
    $produto2 -> __set ('titulo', 'Tv');
    $produto2 -> __set ('descricao', 'Samsung Smart TV 8k - 65 polegadas');
    $produto2 -> __set ('preco', '250.000');
    
    echo $produto2 -> resumirCadastroProduto ();
?>