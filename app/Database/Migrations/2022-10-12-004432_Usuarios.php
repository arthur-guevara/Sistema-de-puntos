<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_usuario' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
                'null'           => false
            ],
            'usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => false
            ],
            'pass' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
                'null'       => false
            ],
            'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
                'null'       => true
            ],
            'apaterno' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
                'null'       => true
            ],
            'amaterno' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
                'null'       => true
            ],
            'adscripcion' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
                'null'       => true,
                'default'    => 'León'
            ],
            'id_rol' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'null'           => false
            ]
        ]);

        $this->forge->addKey('id_usuario', true);
        $this->forge->addForeignKey('id_rol', 'roles', 'id_rol', 'CASCADE', 'CASCADE');
        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('usuarios');
    }
}
