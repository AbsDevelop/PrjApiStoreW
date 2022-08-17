<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Produtos extends Seeder
{
    public function run()
    {
        $nome = ['Conjunto Feminino All Black','Vestido Sólido Vermelho com Torção Frontal','Camisa Xadrez com Bolso Duplo Multicolorida','Calça Cargo com Bolsos Fita','Camiseta Confort Manga Curta com Estampa','Óculos de Sol Boho Multicolorido'];
        $tamanho = ['P. M. G.','P. M. G.','P. M. G.','P. M. G.','P. M. G.','Tam. Único'];
        $material = ['Algodão','Poliéster','Poliéster','Poliéster','Algodão','Acetato'];
        $valor = ['60.00','122.90','109.99','95.90','59.99','1499.99'];
        $quantidade = ['1000','600','500','900','400','300'];
        $marca = ['Zara','SKU','Rowmie','C&A','Marfinno','Gucci'];

        for($x = 0; $x < 6; $x++)
        {
            $data = [
                'nome'       => $nome[$x], 
                'tamanho'    => $tamanho[$x],
                'material'   => $material[$x],
                'valor'      => $valor[$x],
                'quantidade' => $quantidade[$x],
                'marca'      => $marca[$x]
            ];
            $this->db->table('produtos')->insert($data);
        }
    }
}    
    