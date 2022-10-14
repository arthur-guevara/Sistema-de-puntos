<?php

namespace App\Controllers;

use App\Models\Usuarios;
use CodeIgniter\Controller;

class Admin extends Controller
{
    public function dashboard()
    {
        $players = new Usuarios();
        $data = array();
        $footer = view('elements/footer');
        $header = view('elements/header');
        $data = array('data' => $players->obtenerPuntajes(), 'footer' => $footer, 'header' => $header);
        return view('admin/puntaje.php', $data);
    }

    public function playersAdmin()
    {
        $players = new Usuarios();
        $data = array();
        $footer = view('elements/footer');
        $header = view('elements/header');
        $data = array('data' => $players->obtenerJugadores(), 'footer' => $footer, 'header' => $header);
        return view('admin/usuarios.php', $data);
    }
}
