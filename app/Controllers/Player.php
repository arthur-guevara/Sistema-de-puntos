<?php

namespace App\Controllers;

use App\Models\Usuarios;
use CodeIgniter\Controller;

class Player extends BaseController
{
    public function home()
    {
        $score = new Usuarios();
        $name = session('name');
        return view('users/home', [
            'name' => $name, 'score' =>  $score->obtenerPuntosJugador(session('id'))
        ]);
    }

    public function sumarPuntos(){
        $id  = $this->request->getPost('id');
        $score = $this->request->getPost('score');
        $player = new Usuarios();
        $response = $player->sumarPuntos($id, $score);
        return view('users/home', ['response' => $response]);
    }
}
