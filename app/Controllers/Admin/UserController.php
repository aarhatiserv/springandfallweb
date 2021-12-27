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
    public function getAllUserDetails()
    {
        $session = session();
        if(!empty($session->get('username'))){
 
            $model = new UserModel();
        $data = $model->findAll();
        echo json_encode(["status" => 1, "data" => $data]);
        // print_r($data);
            
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

        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM spring_users WHERE registered >= "'.$this->request->getVar("filter").'" AND registered < "'.$this->request->getVar("today").'" ');
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

            $db = \Config\Database::connect();
            $query = $db->query('SELECT * FROM spring_users WHERE registered >= "'.$this->request->getVar("filter").'" AND registered < "'.$this->request->getVar("today").'" ');
            $data = $query->getResult();

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
 
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM spring_users WHERE registered >= "'.$this->request->getVar("filter").'" AND registered < "'.$this->request->getVar("today").'" ');
        $data = $query->getResult();

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
 
            $db = \Config\Database::connect();
            $query = $db->query('SELECT * FROM spring_users WHERE registered >= "'.$this->request->getVar("filter").'" AND registered < "'.$this->request->getVar("today").'" ');
            $data = $query->getResult();

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
 
           $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM spring_users WHERE registered >= "'.$this->request->getVar("filter").'" AND registered < "'.$this->request->getVar("today").'" ');
        $data = $query->getResult();

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
 
            $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM spring_users WHERE registered >= "'.$this->request->getVar("filter").'" AND registered < "'.$this->request->getVar("today").'" ');
        $data = $query->getResult();

        echo json_encode(["status" => 1, "data" => $data]);
        // print_r($data);
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}
    }

    public function editUser($id)
    {
        $session = session();
		if(!empty($session->get('username'))){
            $model = new UserModel();
            $data['userDatabyId'] = $model->where('id = ', $id)->findAll();
            echo view('admin/User/EditUser', $data);
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}
       
    }

    public function deleteUser($id)
    {
        $session = session();
		if(!empty($session->get('username'))){

            $model = new UserModel();
        $model->where("id = ", $id)->delete();
        return redirect()->to('https://springandfall.in/admin/user');
        // return redirect()->to('http://localhost:8080/admin/subscribe');
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}
       
    }
}