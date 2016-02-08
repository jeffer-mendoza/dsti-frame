<?php

require_once __DIR__.'/../vendor/autoload.php';

require_once __DIR__.'/../Controller/Controller.php';
//registrar cada uno de las clases que se necesiten

$app = new Silex\Application();//registrar la aplicacion

$app['debug'] = true;//activar el degug

//$app->register(new Silex\Provider\UrlGeneratorServiceProvider());//usar el enrutamiento
//$app->register(new Silex\Provider\SessionServiceProvider());


//registrando twig
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/../Resources/views',
));
 
$app->get('/', 'dsti\Controller\Controller::indexAction');
 
$app->run();
