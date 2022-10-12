<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Puntaje extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_usuario' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => false
            ],
            'puntos' => [
                'type'          => 'INT',
                'constraint'    => '11',
                'unsigned'      => true,
                'null'          => false
            ]
        ]);


        $this->forge->addForeignKey('id_usuario', 'usuarios', 'id_usuario', 'CASCADE', 'CASCADE');
        $this->forge->createTable('puntaje');
    }

    public function down()
    {
        $this->forge->dropTable('puntaje');
    }
}
