<?php
namespace App\Models;


class Info{
    protected $db;

    public function __construct(\PDO $db){
        $this->db = $db;
    }
    
    //metodo do controlador sobre_nos
    public function getInformacoes(){
        $query = 'SELECT id, titulo, descricao from tb_info';
        return $this->db->query($query)->fetchAll();
    }
}
?>