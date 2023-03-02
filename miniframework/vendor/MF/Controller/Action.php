<?php 
namespace MF\Controller;

abstract class Action{
    private $view;

    public function __construct(){
        $this->view = new \stdClass();
    }

    public function render($view)
    {
        $className = get_class($this); //retorna da classe
        $className = str_replace('App\\Controllers\\', '', $className); //substituir App\\Controllers\\ para nada ('') 
        $className = strtolower(str_replace('Controller', '', $className)); //substituir o controller para nada , e utilizando strtolower para deixar o nome Index para minusculo index
        require_once '../App/Views/'. $className.'/'. $view . '.phtml';
    }
}




?>