<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Player extends Controller{
    public function home (){
        $name = session('name');
        return view('users/home', ['name' => $name]);
    }
}