<?php
    class Produto {
        public $categoria = null;
        public $titulo = null;
        public $descricao = null;
        public $valor = null;

        // getters & setters
        function getCategoria () {
            return $this -> categoria;
        }
        function setCategoria ($categoria) { 
            $this -> categoria = $categoria; 
        }
        function getTitulo () {
            return $this -> titulo;
        }
        function setTitulo ($titulo) { 
            $this -> titulo = $titulo;
        }
        function getDescricao () {
            return $this -> descricao;
        }
        function setDescricao ($descricao) {
            $this -> descricao = $descricao;
        }
        function getValor () {
            return $this -> valor;
        }
        function setValor ($valor) {
            $this -> valor = $valor;
        }

        function resumirCadastroProduto () {
            return 'Resumo do cadastro do produto:' .
                '<br> <br> - Categoria: ' . $this -> categoria . 
                '<br> - Titulo: ' . $this -> titulo . 
                '<br> - Descrição: ' . $this -> descricao .
                '<br> - Preço: ' . $this -> valor . ', 00 MT' .
                    '<hr>';
        }
    }
    $produto1 = new Produto ();
    $produto1 -> setCategoria ('Eletrodomestico');
    $produto1 -> setTitulo ('Geleira');
    $produto1 -> setDescricao ('Henessy, 50L');
    $produto1 -> setValor ('100.000');
    echo $produto1 -> resumirCadastroProduto ();

    $produto2 = new Produto ();
    $produto2 -> setCategoria ('Eletrodomestico');
    $produto2 -> setTitulo ('Tv');
    $produto2 -> setDescricao ('Samsung Smart TV 8k - 65 polegadas');
    $produto2 -> setValor ('250.000');
    echo $produto2 -> resumirCadastroProduto ();

    echo $produto1 -> getValor () . '<br>' . $produto2 -> getValor ();
?>