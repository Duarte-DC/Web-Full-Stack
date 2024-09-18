<?php 

    if (PHP_SAPI == 'cli') {
        exit ('Rodar via CLI');
    }

    require '/vendor/autoload.php';

    // Instantiate the app

    // Set up settings
    $settings = require __DIR__ . '/app/settings.php';
    $app = new \Slim\App ($settings);

    // Set up dependencies
    $dependencies = require __DIR__ . '/app/dependencies.php';

    $database = $container -> get ('database');
    $schema = $database -> schema ();
    $tabela = 'produtos';

    $schema -> dropIfExists ($tabela);

    $schema -> create ($tabela, function ($table) {

        $table -> increments ('id');
        $table -> string ('titulo', 100);
        $table -> text ('descricao');
        $table -> decimal ('preco', 11, 2);
        $table -> string ('fabricante', 60);
        $table -> date ('dataCriacao');

    });

    // preencher Tabela
    $database -> table ($tabela) -> insert ([
        'titulo' => 'Smartphone Motorola Moto G6 32GB Dual Chip',
        'descricao' => 'Android Oreo - 8.0 Tela 5.7" Octa-core 1.8 GHz 4G Câmera 12 + 5MP (Dual Traseira) - Índigo',
        'preco' => 899.00,
        'fabricante' => 'Motorola'
    ]);
    $database -> table ($tabela) -> insert ([
        'titulo' => 'Iphone X Cinza Espacial 64GB',
        'descricao' => 'Tela 5.8" IOS 12 4GB Wi-fi Câmera 12MP - Apple',
        'preco' => 4999.00,
        'fabricante' => 'Apple'
    ]);
