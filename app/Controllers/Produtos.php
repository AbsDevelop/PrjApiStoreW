<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\Database\Query;

class Produtos extends ResourceController
{
    private $produtosModel;

    public function __construct()
    {
        $this->produtosModel = new \App\Models\ProdutosModel();
    }

    public function ListarTabela()
    {
        $data = $this->produtosModel->findAll();
        return $this->response->setJson($data);
    }

    public function Produto($id)
    {
        $data = $this->produtosModel->getProduto($id);
        return $this->response->setJson($data);
    }

    public function ultProdutos()
    {
        $data = $this->produtosModel->findAll(3);
        return $this->response->setJson($data);
    }

}