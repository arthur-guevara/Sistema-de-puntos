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

    public function obtenerJugadores(){
        $builder = $this->db->table('usuarios');
        $builder->where('id_rol', '2');
        return $builder->get()->getResultArray();
    }

    public function obtenerPuntajes(){
        $builder = $this->db->table('puntaje');
        $builder->select("usuarios.usuario as jugador, puntaje.puntos");
        $builder->join('usuarios', 'usuarios.id_usuario = puntaje.id_usuario');
        $builder->orderBy('puntaje.puntos', 'DESC');
        return $builder->get()->getResultArray();
    }
}
