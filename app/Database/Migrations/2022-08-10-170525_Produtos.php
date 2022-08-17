<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produtos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'auto_increment' => true
            ],
            'nome' => [
                'type' => 'varchar',
                'constraint' => 100
            ],
            'tamanho' => [
                'type' => 'varchar',
                'constraint' => 100
            ],
            'material' => [
                'type' => 'varchar',
                'constraint' => 100
            ],
            'valor' => [
                'type' => 'decimal(6,2)'
            ],
            'quantidade' => [
                'type' => 'decimal(10,0)'
            ],
            'marca' => [
                'type' => 'varchar',
                'constraint' => 100
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('produtos');
    }

    public function down()
    {
        $this->forge->dropTable('produtos');
    }
}
