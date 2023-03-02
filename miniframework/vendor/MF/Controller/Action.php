<?php
namespace MF\Controller;

abstract class Action
{
    protected $view = 'teste';

    public function __construct()
    {
        $this->view = new \stdClass();
    }

    protected function render($view,$layout)
    {
        $this->view->page = $view;

        if(file_exists("../App/Views/".$layout.".phtml")){
            require_once("../App/Views/".$layout.".phtml");
        }
    }

    protected function content($view)
    {
        $className = get_class($this); //retorna da classe
        $className = str_replace('App\\Controllers\\', '', $className); //substituir App\\Controllers\\ para nada ('') 
        $className = strtolower(str_replace('Controller', '', $className)); //substituir o controller para nada , e utilizando strtolower para deixar o nome Index para minusculo index
        require_once '../App/Views/' . $className . '/' . $view . '.phtml';
    }
}




?>