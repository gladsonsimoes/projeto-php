<?php
namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action
{
    public function index()
    {

        $produto = Container::getModel('Produto');

        $produtos = $produto->getProdutos();

        $this->view->dados = $produtos;

        $this->render('index', 'layout1');
    }

    public function sobreNos()
    {

        $informacoes = Container::getModel('Info');

        $info = $informacoes->getInformacoes();

        $this->view->dados = $info;

        $this->render('sobreNos', 'layout2');
    }
}

?>