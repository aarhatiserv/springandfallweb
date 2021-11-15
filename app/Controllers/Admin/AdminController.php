<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;

class AdminController extends Controller
{
	public function index()
	{
		//echo view('admin/home');
	}
	// public function viewPage($page = 'home')
	// {
	// 	echo view('admin/layout/stylesheet');
	// 	echo view('admin/' . $page);
	// 	echo view('admin/layout/script');

	// }

	public function home()
	{
		echo view('admin/layout/stylesheet');
		echo view('admin/home');
		echo view('admin/layout/script');
	}
	public function home2()
	{
		echo view('admin/layout/stylesheet');
		echo view('admin/home2');
		echo view('admin/layout/script');
	}

	public function home3()
	{
		echo view('admin/layout/stylesheet');
		echo view('admin/home3');
		echo view('admin/layout/script');
	}

	public function colleges()
	{
		echo view('admin/layout/stylesheet');
		echo view('admin/colleges');
		echo view('admin/layout/script');
	}

}
