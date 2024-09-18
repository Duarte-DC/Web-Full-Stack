<?php
    declare(strict_types=1);

    use App\Application\Settings\SettingsInterface;
    use DI\ContainerBuilder;
    use Monolog\Handler\StreamHandler;
    use Monolog\Logger;
    use Monolog\Processor\UidProcessor;
    use Psr\Container\ContainerInterface;
    use Psr\Log\LoggerInterface;
    use Illuminate\Database\Capsule\Manager as Capsule;
    use Slim\Factory\AppFactory;

    return function (ContainerBuilder $containerBuilder) {
        
        $containerBuilder -> addDefinitions ([

            LoggerInterface::class => function (ContainerInterface $c) {

                $settings = $c -> get (SettingsInterface::class);

                $loggerSettings = $settings -> get ('logger');
                $logger = new Logger ($loggerSettings ['name']);

                $processor = new UidProcessor ();
                $logger -> pushProcessor ($processor);

                $handler = new StreamHandler ($loggerSettings ['path'], $loggerSettings ['level']);
                $logger -> pushHandler ($handler);
                
                return $logger;
            },
        ]);
        
        $app = AppFactory::create();
        
        $container = $app -> getContainer();

        $container ['database'] = function ($x) {
            
            $capsule = new Capsule;

            $capsule -> addConnection ($x -> get ('settings')['database']);

            $capsule -> setAsGlobal ();
            $capsule -> bootEloquent ();

            return $capsule;
        };
    };
