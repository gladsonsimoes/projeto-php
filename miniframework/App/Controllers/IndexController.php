<?php
namespace App\Controllers;


class IndexController
{
    private $view;

    public function __construct(){
        $this->view = new \stdClass();
    }

    public function index()
    {
        $this->view->dados=array('Sofá' , 'Cama' , 'Traveseeiro'); //simulacao de query do banco de dados
        $this->render('index');
    }

    public function sobreNos()
    {
        $this->view->dados=array('hehe' , 'Camaro' , 'Trovao');
        $this->render('sobreNos');
    }


    //funcao para selecionar cada view em vez de escrever monte de require_once dentro das funcoes
    public function render($view)
    {
        $className = get_class($this); //retorna da classe
        $className = str_replace('App\\Controllers\\', '', $className); //substituir App\\Controllers\\ para nada ('') 
        $className = strtolower(str_replace('Controller', '', $className)); //substituir o controller para nada , e utilizando strtolower para deixar o nome Index para minusculo index
        require_once '../App/Views/'. $className.'/'. $view . '.phtml';
    }

  
}

?>