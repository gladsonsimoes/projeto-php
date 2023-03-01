<?php
namespace App\Controllers;


class IndexController
{
    public function index()
    {
        $dados = array('Sofá', 'Cama', 'Travesseiro'); //simulacao de query do banco de dados
        $this->render('sobreNos', $dados);
    }

    public function sobreNos()
    {
        $dados = array('Celular', 'Notebook', 'Carro');
        $this->render('sobreNos', $dados);
    }


    //funcao para selecionar cada view em vez de escrever monte de require_once dentro das funcoes
    public function render($view, $dados)
    {
        $className = get_class();
        $className = str_replace('App\\Controllers\\', '', $className);
        $className = str_replace('Controller', '', $className); //substituir nome do IndexController para index
        echo $className;
        require_once '../App/Views/index/' . $view . '.phtml';
    }

  
}

?>