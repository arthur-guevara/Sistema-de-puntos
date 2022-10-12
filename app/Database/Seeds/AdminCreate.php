<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminCreate extends Seeder
{
    public function run()
    {
        $admin = [
            [
                'id_usuario' => '',
                'usuario'    => 'admin',
                'pass'       => 'admin',
                'nombre'     => '',
                'apaterno'   => '',
                'amaterno'   => '',
                'id_rol'     => '1'
            ]

        ];

        $builder = $this->db->table('usuarios');
        $builder->insertBatch($admin);
    }
}
