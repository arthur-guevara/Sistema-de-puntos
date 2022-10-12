<?php

namespace App\Controllers;

use App\Models\Usuarios;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function  login()
    {
        $url = '';
        $user = $this->request->getPost('username');
        $password = $this->request->getPost(('password'));
        $Usuarios = new Usuarios();
        $response = $Usuarios->obtenerUsuario(array('usuario' => $user));

        if (count($response) == 0) {
            return redirect()->to(base_url('/'))->with('status', '0');
        }

        if (password_verify($password, $response[0]['password'])) {
            switch ($response[0]['rol']) {
                case '1':
                    $url = 'admin';
                    break;

                case '2':
                    $url = 'players';
                    break;
            }
        }

        $info = array(
            'id' => $response[0]['id'],
            'name' => $response[0]['user'] . ' ' . $response[0]['apaterno'] 
        );

        $session = session();
        $session->set($info);
        return redirect()->to(base_url($url))->with('status', '1');

    }
}
