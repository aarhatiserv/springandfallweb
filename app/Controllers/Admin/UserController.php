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

    public function getTodayUserDetails()
    {
        $session = session();
        if(!empty($session->get('username'))){
 
            $model = new UserModel();
        $data = $model->where("registered = ", $this->request->getVar("filter"))->findAll();
        echo json_encode(["status" => 1, "data" => $data]);
        // print_r($data);
            
        }else{
            return redirect()->to('https://springandfall.in/admin/login');
            // return redirect()->to('http://localhost:8080/admin/login');
        }
    }

    public function getPreviousDayUserDetails()
    {
        $session = session();
		if(!empty($session->get('username'))){
 
            $model = new UserModel();
        $data = $model->where("registered = ", $this->request->getVar("filter"))->findAll();
        echo json_encode(["status" => 1, "data" => $data]);
        // print_r($data);
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}
    }

    public function getLastTwoDaysDataUserDetails()
    {
        $session = session();
		if(!empty($session->get('username'))){

        $currentdate =  date("Y-m-d");
        $CurrDate =  date('Y-m-d', strtotime($currentdate.' - 0 day'));

        // $model = new UserModel();
        // $data = $model->where("registered >= ", $this->request->getVar("filter"), "AND", $CurrDate, "> registered")->findAll();
        print_r($CurrDate);
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM spring_users WHERE registered >='.$this->request->getVar("filter").'AND'.$currentdate.'> registered');
        $data = $query->getResult();

        echo json_encode(["status" => 1, "data" => $data]);
        // print_r($data);
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}
    }

    public function getLastThreeDaysDataUserDetails()
    {
        $session = session();
		if(!empty($session->get('username'))){
 
            $model = new UserModel();
        $data = $model->where("registered = ", $this->request->getVar("filter"))->findAll();
        echo json_encode(["status" => 1, "data" => $data]);
        // print_r($data);
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}
    }

    public function getLastFourDaysDataUserDetails()
    {
        $session = session();
		if(!empty($session->get('username'))){
 
            $model = new UserModel();
        $data = $model->where("registered = ", $this->request->getVar("filter"))->findAll();
        echo json_encode(["status" => 1, "data" => $data]);
        // print_r($data);
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}
    }

    public function getLastFiveDaysDataUserDetails()
    {
        $session = session();
		if(!empty($session->get('username'))){
 
            $model = new UserModel();
        $data = $model->where("registered = ", $this->request->getVar("filter"))->findAll();
        echo json_encode(["status" => 1, "data" => $data]);
        // print_r($data);
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}
    }

    public function getLastSixDaysDataUserDetails()
    {
        $session = session();
		if(!empty($session->get('username'))){
 
            $model = new UserModel();
        $data = $model->where("registered = ", $this->request->getVar("filter"))->findAll();
        echo json_encode(["status" => 1, "data" => $data]);
        // print_r($data);
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}
    }

    public function getLastSevenDaysDataUserDetails()
    {
        $session = session();
		if(!empty($session->get('username'))){
 
            $model = new UserModel();
        $data = $model->where("registered = ", $this->request->getVar("filter"))->findAll();
        echo json_encode(["status" => 1, "data" => $data]);
        // print_r($data);
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}
    }

}