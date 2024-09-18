<!DOCTYPE html>
<html lang = "pt-pt">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        
        <title>Funões nativas para manipulação de datas</title>
    </head>

    <body>
        <?php
            /*
                Funções nativas para manipular datas:
                »   date (formato)  »   Recupera a data atual
                        d » dia do mês
                        j » dia do mês (abreviado)
                        D » dia da semana (abreviado)
                        l » dia da semana
                        N » dia da semana númerico 

                        w » semana no ano

                        F » mês em texto
                        M » mês em texto (abreviado)
                        m » mês representação numérica
                        n » mês representação numérica (abreviado)

                        o » ano
                        y » ano (abreviado)

                        H » formato 24 horas
                        h » formato 12 horas
                        a » am/pm
                        A » AM/PM
                        i » minutos
                        s » segundos
                        u » microsegundos
                        v » millisegundos

                »   date_default_timezone_get (timezone)    »   Recupera o timezone default da aplicação
                »   date_default_timezone_set (timezone)    »   Atualiza o timezone default da aplicação
                »   strtotime (data)    »   Transformar datas textuais em segudnos
                
            */     

            
            //date_default_timezone_set ('Africa/Maputo');
        ?>
        <h1>Funções nativas para manipular datas</h1>
        
        <p>
            Date: <br>
            <?=
                date ('l - d F o - H:i:s')
                ?>
        </p>

        <hr>

        <p>
            Timezone: <br>
            <?= date_default_timezone_get () ?>
        </p>

        <hr>
        
        <?php
            $dataInicial = '2024-01-01';
            $dataFinal = '2024-07-15';

            // timestamp retorna os segundos desde 01/01/1970 até a data definida

            $timeInicial = strtotime ($dataInicial);
            $timeFinal = strtotime ($dataFinal);

            $diferençaSegundos = abs ($timeFinal - $timeInicial);

            $segundosNumDia = 24 * 60 * 60;

            $diferencaDias = $diferençaSegundos / $segundosNumDia
        ?>
        <p>
            Diferença entre <?= $dataInicial ?> e <?= $dataFinal ?>:
            <br> <br>

            » A diferença é de <?= $diferençaSegundos ?> segundos
            <br>

            » Um dia tem <?= $segundosNumDia ?> segundos
            <br>

            » A diferença entre as datas é de <?= $diferencaDias ?> Dias
        </p>
    </body>
</html>