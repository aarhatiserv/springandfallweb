<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Models\AdminModel;
use CodeIgniter\RESTful\ResourceController;
use Exception;
use \Firebase\JWT\JWT;

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
		$session = session();
		if(!empty($session->get('username'))){

		echo view('admin/layout/stylesheet');
		echo view('admin/home');
		echo view('admin/layout/script');
		}else{
			return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}
	}

	public function forgotPassword()
	{
		echo view('admin/forgotPassword');
	}

	public function forgotPasswordPost()
	{
		$email = $this->request->getVar('email');
		$model = new AdminModel();
		$data['data'] = $model->where('email = ',$email)->findAll();

		if(empty($data)){
			$data['message'] = "Email Not Found";
			echo view('admin/forgotPassword', $data);
		}else{
		echo view('admin/forgotPasswordData', $data);
		}
	}

	public function admin()
	{
		$session = session();
		if(!empty($session->get('username'))){

		echo view('admin/layout/stylesheet');
		echo view('admin/AddAdmin');
		echo view('admin/layout/script');
		}else{
			return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}
	}


	public function addAdminPost()
	{
		$session = session();

		$rules = [
			"username" => "required",
			"email" => "required|valid_email|min_length[6]",
			"password" => "required",
			"types" => "required",
		];

		$messages = [
			"username" => [
				"required" => "username is required"
			],
			"email" => [
				"required" => "Email required",
				"valid_email" => "Email address is not in format"
			],
			"password" => [
				"required" => "password is required"
			],
			"types" => [
				"required" => "types is required"
			],
		];

		if (!$this->validate($rules, $messages)) {

			$response = [
				'status' => 500,
				'error' => true,
				'message' => $this->validator->getErrors(),
				'data' => []
			];
             print_r('validate error');
			// return $this->respondCreated($response);
		} else {
			$data = [
                "username" => $this->request->getVar("username"),
                "email" => $this->request->getVar("email"),
                "password" => $this->request->getVar("password"),
				"types" => $this->request->getVar("types"),
                "active" => 1,
            ];
			$model = new AdminModel();
			if ($model->insert($data)) {
                $response = [
                    'status' => 200,
                    'messages' => 'Successfully Admin Added',
                    'data' => [],
                ];

                return redirect()->to('https://springandfall.in/admin/home');
                // return redirect()->to('http://localhost:8080/admin/home');

            } else {

                $response = [
                    'status' => 500,
                    "error" => true,
                    'messages' => 'Failed to add Admin',
                    'data' => [],
                ];
            }
		}
	}

	public function home2()
	{
		$session = session();
		if(!empty($session->get('username'))){

		echo view('admin/layout/stylesheet');
		echo view('admin/home2');
		echo view('admin/layout/script');
		}else{
			return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}
	}

	public function home3()
	{
		$session = session();
		if(!empty($session->get('username'))){

		echo view('admin/layout/stylesheet');
		echo view('admin/home3');
		echo view('admin/layout/script');
		}else{
			return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}
	}
	public function login()
	{
		$session = session();
		$session->destroy();
		echo view('admin/layout/stylesheet');
		echo view('admin/login');
		echo view('admin/layout/script');	
	}
	public function loginPost()
	{
		$session = session();

		$rules = [
			"email" => "required|valid_email|min_length[6]",
			"password" => "required",
		];

		$messages = [
			"email" => [
				"required" => "Email required",
				"valid_email" => "Email address is not in format"
			],
			"password" => [
				"required" => "password is required"
			],
		];

		if (!$this->validate($rules, $messages)) {

			$response = [
				'status' => 500,
				'error' => true,
				'message' => $this->validator->getErrors(),
				'data' => []
			];
           print_r('validate error');
			// return $this->respondCreated($response);
		} else {
			$model = new AdminModel();

			$data = $model->where("email = ", $this->request->getVar("email"))->findAll();
			if (!empty($data)) {

				if ($this->request->getVar("password") === $data[0]['password']) {
					// print_r($data);
					// $key = $this->getKey();

					// $iat = time(); // current timestamp value
					// $nbf = $iat + 10;
					// $exp = $iat + 3600;

					// $payload = array(
					// 	"iss" => "The_claim",
					// 	"aud" => "The_Aud",
					// 	"iat" => $iat, // issued at
					// 	"nbf" => $nbf, //not before in seconds
					// 	"exp" => $exp, // expire time in seconds
					// 	"data" => $data,
					// );

					// $token = JWT::encode($payload, $key);
					
					// $session->set("token", $token);
					$session->set("username", $data[0]['username']);
					$session->set("adminTypes", $data[0]['types']);

					// $response = [
					// 	'status' => 200,
					// 	'error' => false,
					// 	'messages' => 'User logged In successfully',
					// 	'data' => [
					// 		'token' => $token
					// 	]
					// ];
					// return $this->respondCreated($response);
					// return redirect()->to('https://springandfall.in/admin/home');
					// return redirect()->to('https://springandfall.in/admin/colleges');
					return redirect()->to('http://localhost:8080/admin/colleges');
				} else {

					$session->destroy();
				$data['message'] = 'Incorrect Password';
				echo view('admin/layout/stylesheet');
		        echo view('admin/login', $data);
		        echo view('admin/layout/script');
					// return redirect()->to('http://localhost:8080/admin/');
					// return $this->respondCreated($response);
				}
			} else {
				$session->destroy();
				$data['message'] = 'user not found';
				echo view('admin/layout/stylesheet');
		        echo view('admin/login', $data);
		        echo view('admin/layout/script');	
				// return redirect()->to('http://localhost:8080/admin/');
				// return $this->respondCreated($response);
			}
		}
	}

	public function logout(){

		$session = session();
		if(!empty($session->get('username'))){
			$session = session();
			$session->destroy();
		    return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}else{
			return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}
      
	}

}
