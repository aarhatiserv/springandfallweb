<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');
           
    }
}



?>