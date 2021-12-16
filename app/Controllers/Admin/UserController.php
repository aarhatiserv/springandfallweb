<?php

namespace App\Controllers\Admin;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UserController extends Controller
{
    public function index()
    {
        //
    }
    public function getUserDetails()
    {
        $session = session();
		if(!empty($session->get('username'))){

            $model = new UserModel();
        $data['userData'] = $model->findAll();
        echo view('admin/layout/stylesheet');
        echo view('admin/User/UserDetails', $data);
        echo view('admin/layout/script');
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}
    }

    public function getPreviousDayUserDetails($filter)
    {
        $session = session();
		if(!empty($session->get('username'))){

            $model = new UserModel();
        $data['userDataFilter'] = $model->where("registered = ", $filter)->findAll();
        echo view('admin/layout/stylesheet');
        echo view('admin/User/PreviousDayUserDetails', $data);
        echo view('admin/layout/script');
        // print_r($data);
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}
    }

}