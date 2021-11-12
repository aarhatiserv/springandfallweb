<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;

class AdminController extends Controller
{
	public function index()
	{
		echo view('admin/home');
	}
	public function dashboard()
	{
		// echo "dashboard";
		echo view('admin/home2');
	}
}
