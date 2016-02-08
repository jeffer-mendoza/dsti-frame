<?php

namespace dsti\Controller;

use Symfony\Component\HttpFoundation\Request;
use Silex\Application;

class Controller {

    public function indexAction(Application $app) {

        return $app['twig']->render('index.html.twig', array());
    }
    
//   crear nuevos metodos, cada uno seria una página nueva dentro del sitio

}
