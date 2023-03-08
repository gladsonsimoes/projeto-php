<?php
namespace App\Models;


use MF\Model\Model;

class Info extends Model{
  
    //metodo do controlador sobre_nos
    public function getInformacoes(){
        $query = 'SELECT id, titulo, descricao from tb_info';
        return $this->db->query($query)->fetchAll();
    }
}
?>