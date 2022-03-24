<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RendemenGiling extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'JGabah'       => [
                'type'       => 'INT',
                'constraint' => '100',
            ],
            'JBeras'       => [
                'type'       => 'INT',
                'constraint' => '100',
            ],
            'rendemen'       => [
                'type'       => 'INT',
                'constraint' => '100',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('rendemenGiling');
    }

    public function down()
    {
        $this->forge->dropTable('rendemenGiling');
    }
}
