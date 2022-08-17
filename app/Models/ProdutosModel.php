<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutosModel extends Model
{
    protected $table = 'produtos';
    protected $primaryKey  = 'id';
    protected $allowedFields = ['nome', 'tamanho', 'material', 'valor', 'quantidade', 'marca'];

    public function getProdutos(){
        return $this->findAll();
    }

    public function getProduto($id){
        return $this->asArray()->where(['id'=>$id])->first();
    }

    public function getRegistros(){
        $sql = $db->query('SELECT * FROM produtos LIMIT 3');
        $results = $sql->getResult();

        foreach ($results as $row) {
            echo $row->title;
            echo $row->name;
            echo $row->email;
        }
    }
}