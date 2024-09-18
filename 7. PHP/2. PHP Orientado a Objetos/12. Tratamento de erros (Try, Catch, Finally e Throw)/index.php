<?php
    try {
        echo '<h3> *** Try *** </h3>';

        // $sql = 'Select * from clientes';
        // mysql_query ($sql); // erro

        if (!file_exists ('require_arquivo_a.php')) {
            throw new Exception ('O arquivo em questão não existe');
            // throw new Error ('O arquivo em questão não existe');
        }

    }   catch (Error $e) {

            echo '<hr>';
            echo '<h3> *** Catch Error *** </h3>';
            echo '<p style = "color: red">' . $e -> getMessage () . '</p>';

        }   catch (Exception $e) {
                echo '<hr>';
                echo '<h3> *** Catch Exception *** </h3>';
                echo '<p style = "color: red">' . $e -> getMessage () . '</p>';
            }   finally { 

                    echo '<hr>';
                    echo '<h3> *** Finally *** </h3>'; 

                }
?>