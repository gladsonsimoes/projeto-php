<?php
    namespace App\Controllers;
    use MF\Controller\Action; 

    use App\Connection;

    use App\Models\Produto;

    class IndexController extends Action{
        public function index(){
            //$this->view->dados=array('Sofá', 'Cama','Travesseiro');

            //instanciar conexão
            $conn = Connection::getDb();
            //instanciar modelo
            $produto = new Produto($conn);

            $produtos = $produto->getProdutos();

            $this->view->dados = $produtos;

            $this->render('index','layout1');    
        }
        
        public function sobreNos(){
            //$this->view->dados=array('Celular', 'Computador','Monitor');
            $this->render('sobreNos','layout2');             
        }      
    }

?>