<?php

namespace App\Controllers;

use App\Models\Usuarios;

class Home extends BaseController
{
    public function index()
    {
        $mensaje = session('msg');
        return view('index', ['mensaje' => $mensaje]);
    }

    public function  login()
    {
        $url = '';
        $user = $this->request->getPost('username');
        $password = $this->request->getPost(('password'));
        $Usuarios = new Usuarios();
        $response = $Usuarios->obtenerUsuario(array('usuario' => $user));

        if (count($response) == 0) {
            return redirect()->to(base_url('/'))->with('msg', 'Usuario no encontrado');
        }

        if ($password != $response[0]['pass']) {
            return redirect()->to(base_url('/'))->with('msg', 'Contraseña incorrecta');
        }

        $response[0]['id_rol'] == 1 ? $url = 'admin' :  $url = 'player';
        $info = array(
            'id' => $response[0]['id_usuario'],
            'type' => $response[0]['id_rol'],
            'name' => $response[0]['nombre'] . ' ' . $response[0]['apaterno'] . ' ' . $response[0]['amaterno']
        );

        $session = session();
        $session->set($info);
        return redirect()->to(base_url($url))->with('status', '1');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()
            ->to(base_url('/'))
            ->with('msg', 'Sesion cerrada correctamente');
    }
}
