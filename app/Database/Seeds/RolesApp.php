<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RolesApp extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'id_rol' => '1',
                'tipo'   => 'Administrador'
            ],
            [
                'id_rol' => '2',
                'tipo'   => 'Jugador'
            ]
        ];

        $builder = $this->db->table('roles');
        $builder->insertBatch($roles);
    }
}
