<?php
    namespace App\Controllers;
    use MF\Controller\Action; 

    use App\Connection;

    use App\Models\Produto;

    use App\Models\Info;
    

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
        
              $conn = Connection::getDb();
    
              //novo Objeto Info que foi criado em Models
              $informacoes = new Info($conn);
  
              //novo metodo
              $info = $informacoes->getInformacoes();
  
              $this->view->dados = $info;

            $this->render('sobreNos','layout2');             
        }      
    }

?>