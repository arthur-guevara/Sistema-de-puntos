<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Admin extends Controller
{
    public function dashboard()
    {
        $data = array();
        $footer = view('elements/footer');
        $header = view('elements/header');
        $data = array('data' => '', 'footer' => $footer, 'header' => $header);
        return view('admin/puntaje.php', $data);
    }
}
