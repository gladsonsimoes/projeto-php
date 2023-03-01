<?php
namespace App; //referenciando o diretorio App

use MF\Init\Bootstrap;

class Route extends Bootstrap{
    private $routes;

    public function initRoutes()
    {
        $routes['home'] = array
        (
            'route' => '/' ,
            'controlle' => 'indexController',
            'action' => 'index'
        );

        $routes['sobre_nos'] = array
        (
            'route' => '/sobre_nos',
            'controller' => 'indexController',
            'action' => 'sobreNos'
        );

        $this->setRoutes($routes);
    }

    //chamar o index controller com a url

}

?>