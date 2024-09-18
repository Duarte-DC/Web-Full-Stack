<?php
    namespace App\Controllers;
    
    // recursos do miniframework
    use MF\Controller\Action;
    use MF\Model\Container;

    class AppController extends Action {
        public function timeline () {

            $this -> validaAutenticacao ();
            // recuperacao dos tweets
            $tweet = Container::getModel ('Tweet');

            $tweet -> __set ('idUsuario', $_SESSION ['id'] );

            $pagina = isset ($_GET ['pagina']) ? $_GET ['pagina'] : 1;
            $totalRegistrosPorPagina = 10;
            $deslocamento = ($pagina - 1) * $totalRegistrosPorPagina;

            $tweets = $tweet -> getPorPagina ($totalRegistrosPorPagina, $deslocamento);
            $totalTweets = $tweet -> getTotalRegistros ();

            $this -> view -> totalPaginas = ceil ($totalTweets ['total'] / $totalRegistrosPorPagina);
            $this -> view -> paginaAtiva = $pagina;

            $this -> view -> tweets = $tweets;

            $this -> informacaoUsuario ();

            $this -> render ('timeline');
        }
        public function tweet () {

            $this -> validaAutenticacao ();
                
            $tweet = Container::getModel ('Tweet');

            $tweet -> __set ('tweet', $_POST ['tweet']);
            $tweet -> __set ('idUsuario', $_SESSION ['id']);

            $tweet -> salvar ();

            header ('Location: /timeline');
        }
        public function removerTweet () {

            
            $this -> validaAutenticacao ();

            $idTweet = isset ($_GET ['idTweet']) ? $_GET ['idTweet'] : '';

            $tweet = Container::getModel ('Tweet');

            $tweet -> __set ('idUsuario', $_SESSION ['id']);
    
            $tweet -> removerTweet ($idTweet);

            header ('Location: /timeline');
        }
        public function validaAutenticacao () {
            session_start ();

            if (!isset ($_SESSION ['id']) || $_SESSION ['id'] == '' || !isset ($_SESSION ['nome']) || $_SESSION ['nome'] == '') {
                header ('Location: /?login=erro');
            }
        }
        public function quemSeguir () {

            $this -> validaAutenticacao ();

            $pesquisar = isset ($_GET ['pesquisar']) ? $_GET ['pesquisar'] : '';
            
            $usuarios = [];

            if ($pesquisar != '') {

                $usuario = Container::getModel ('Usuario');

                $usuario -> __set ('nome', $pesquisar);
                $usuario -> __set ('id', $_SESSION ['id']);

                $usuarios = $usuario -> getAll ();
            }

            $this -> view -> usuarios = $usuarios;

            $this -> informacaoUsuario ();

            $this -> render ('quemSeguir');
        }
        public function acao () {

            $this -> validaAutenticacao ();
    
            $acao = isset ($_GET ['acao']) ? $_GET ['acao'] : '';
            $idUsuarioSeguir = isset ($_GET ['idUsuario']) ? $_GET ['idUsuario'] : '';

            $usuario = Container::getModel ('Usuario');

            $usuario -> __set ('id', $_SESSION ['id']);

            if ($acao == 'seguir') 
                $usuario -> seguirUsuario ($idUsuarioSeguir);

                else if ($acao == 'deixar_de_seguir')
                    $usuario -> deixarSeguirUsuario ($idUsuarioSeguir);
            
            header ('Location: /quemSeguir');
        }
        public function informacaoUsuario () {

            $usuario = Container::getModel ('Usuario');

            $usuario -> __set ('id', $_SESSION ['id']);

            $this -> view -> infoUsuario = $usuario -> getInfoUsuario ();
            $this -> view -> totalTweets = $usuario -> getTotalTweets ();
            $this -> view -> totalASeguir = $usuario -> getTotalASeguir ();
            $this -> view -> totalSeguidores = $usuario -> getTotalSeguidores ();
        }
    }
?>