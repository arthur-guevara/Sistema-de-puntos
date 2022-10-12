<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuarios extends Model
{
    protected $table      = 'usuarios';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
    public function obtenerUsuario($data)
    {
        $Usuario = $this->db->table('usuarios');
        $Usuario -> where($data);
        return $Usuario->get()->getResultArray();
    }
}
