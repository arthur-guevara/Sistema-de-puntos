<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Admin extends Controller
{
    public function dashboard()
    {
        $data = array();
        $footer = view('elements/footer');
        $data = array('data' => '', 'elements' => $footer);
        return view('admin/puntaje.php', $data);
    }
}
