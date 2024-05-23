<?php

namespace Controllers;
use MVC\Router;

class PagesController
{
  public static function index(Router $router)
  {

    $app = 'Hola';
    
    $router->render('pages/index', [
      'inicio' => true,
    ]);
  }

}
