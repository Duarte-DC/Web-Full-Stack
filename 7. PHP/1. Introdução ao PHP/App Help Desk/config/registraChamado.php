<?php
    session_start ();

    // verifica campos vazios
    if (empty ($_POST ['titulo']))
        header ('Location: ../abrirChamado.php?chamado=erro1');
    else
        $titulo = str_replace ('#', '-', $_POST ['titulo']); // substitui qualquer # no texto por -
    
    if ($_POST ['categoria'] == 1)
        $categoria = 'Criação de Usuário';

        else if ($_POST ['categoria'] == 2)
            $categoria = 'Impressora';

            else if ($_POST ['categoria'] == 3)
                $categoria = 'Hardware';
                
            else if ($_POST ['categoria'] == 4)
            $categoria = 'Software';
        
                    else if ($_POST ['categoria'] == 5)
                        $categoria = 'Rede';

                        else if ($_POST ['categoria'] == 0)
                            header ('Location: ../abrirChamado.php?chamado=erro2');
        
    if (empty ($_POST ['descricao']))
        header ('Location: ../abrirChamado.php?chamado=erro3');
    else
        $descricao = str_replace ('#', '-', $_POST ['descricao']);

    $texto = $_SESSION ['id'] . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;
    // PHP_EOL  »   end of line
    echo $texto . '<br>';echo '<pre>';
    print_r ($_POST);
    echo '</pre>';

    header ('Location: ../abrirChamado.php');
    
    // Verificar se a variável $texto está definida
    if (isset($texto)) {
        // Caminho do arquivo
        $nomeDoArquivo = "arquivo.hd";

        // Verificar se o diretório é válido e gravável
        $diretorio = dirname ($nomeDoArquivo);
        if (! is_dir ($diretorio)) {
            echo "O diretório não existe: $diretorio";
            exit;
        }

        if (! is_writable ($diretorio)) {
            echo "O diretório não é gravável: $diretorio";
            exit;
        }

        // Escrevendo o texto no arquivo (modo append)
        $resultado = file_put_contents($nomeDoArquivo, $texto, FILE_APPEND);

        // Verificar se a escrita foi bem-sucedida
        if ($resultado !== false) {
            echo "Texto escrito com sucesso!";
        } else {
            echo "Erro ao escrever no arquivo!";
        }
    } else {
        echo "A variável \$texto não está definida!";
    }

?>