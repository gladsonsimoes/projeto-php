<?php
namespace App\Controllers;

use MF\Controller\Action;

class IndexController extends Action
{
    public function index()
    {
        $this->view->dados=array('Sofá' , 'Cama' , 'Traveseeiro'); //simulacao de query do banco de dados
        $this->render('index');
    }

    public function sobreNos()
    {
        $this->view->dados=array('Celular' , 'Computador' , 'Monitor');
        $this->render('sobreNos');
    }  
}

?>