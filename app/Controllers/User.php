<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\RESTful\ResourceController;
use Exception;
use \Firebase\JWT\JWT;


class User extends ResourceController
{
	// protected $session;

	// function __construct()
	// {
	// 	$this->session = \Config\Services::session();
	// 	$this->session->start();
	// }
	public function register()
	{
		$rules = [
			"name" => "required",
			"email" => "required|valid_email|is_unique[users.email]|min_length[6]",
			"phone" => "required",
			"password" => "required",
		];

		$messages = [
			"name" => [
				"required" => "Name is required"
			],
			"email" => [
				"required" => "Email required",
				"valid_email" => "Email address is not in format"
			],
			"phone" => [
				"required" => "Phone Number is required"
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
		} else {

			$userModel = new UserModel();
			$data = [
				"name" => $this->request->getVar("name"),
				"email" => $this->request->getVar("email"),
				"phone" => $this->request->getVar("phone"),
				"password" => password_hash($this->request->getVar("password"), PASSWORD_DEFAULT),
				"passtext" => $this->request->getVar("password"),
			];
			// checking user by email id
			$userdata = $userModel->where("email", $this->request->getVar("email"))->first();
			// if exsists
			if (!empty($userdata)) {
				$response = [
					'status' => 500,
					'error' => true,
					'messages' => 'This email id is already registred',
					'data' => []
				];
				return $this->respondCreated($response);
			} else {
				if ($userModel->insert($data)) {
					
					$lastId = $userModel->insertID();

					// print_r($lastid);
					// exit;
					$token = sha1($lastId);
					$email = \Config\Services::email();
					$email->setFrom('support@springandfall.in', 'Spring and Fall');
					$email->setTo($this->request->getVar("email"));
					$email->setSubject('Welcome to Spring and Fall ' . $this->request->getVar('name') . '');
					$url = "http://" . $_SERVER['SERVER_NAME'] . '/verify/' . $lastId . '/' . $token;
					$data = ["username" => $this->request->getVar("name"), "url" => $url];
					$body = view('templates/email', $data);
					$email->setMessage($body);
					if ($email->send()) {
 
						// --------------------------------------------------
					$email1 = \Config\Services::email();
					$email1->setFrom('support@springandfall.in', 'Spring and Fall');
					$email1->setTo('springnfall.20@gmail.com');
					$email1->setSubject('New Leads Register');
					$email1->setMessage('<p>Name :' . $this->request->getVar("name") . '<br> Contact no :' .$this->request->getVar("phone"). '<br> email :' . $this->request->getVar("email") . ' </p>');
					if ($email1->send()) {
						$response = [
							'status' => 200,
							"error" => false,
							'messages' => "Please check your email inbox",
							'data' => []
						];
					} else {
						$response = [
							'status' => 200,
							'error' => true,
							'messages' => 'Please check your email',
							'data' => []
						];
					}
						// -------------------------------------------------- 

						
						// $response = [
						// 	'status' => 200,
						// 	"error" => false,
						// 	'messages' => "Please check your email inbox",
						// 	'data' => []
						// ];
					} else {
						$response = [
							'status' => 200,
							'error' => true,
							'messages' => 'Please check your email',
							'data' => []
						];
					}
				} else {

					$response = [
						'status' => 500,
						"error" => true,
						'messages' => 'Failed to create user',
						'data' => []
					];
				}
			}
		}

		return $this->respondCreated($response);
	}

	private function getKey()
	{
		return "aarhat@123";
	}

	public function login()
	{
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

			return $this->respondCreated($response);
		} else {
			$userModel = new UserModel();

			$userdata = $userModel->where("email", $this->request->getVar("email"))->first();

			if (!empty($userdata)) {

				if (password_verify($this->request->getVar("password"), $userdata['password'])) {


					$key = $this->getKey();

					$iat = time(); // current timestamp value
					$nbf = $iat + 10;
					$exp = $iat + 3600;

					$payload = array(
						"iss" => "The_claim",
						"aud" => "The_Aud",
						"iat" => $iat, // issued at
						"nbf" => $nbf, //not before in seconds
						"exp" => $exp, // expire time in seconds
						"data" => $userdata,
					);

                    // $tokenUpdate = [
					// 	"token" => $token
					// ];
                    // $userModel->update($userdata['id'], $tokenUpdate);

					$token = JWT::encode($payload, $key);
					$session = session();
					$session->set("token", $token);
					$session->set("userId", $userdata['id']);
					$session->set("userNameProfile", $userdata['name']);
					// $session->set("username", 'goutam');

					// $this->session->set("token", $token);
					// $this->session->set("username", "goutam");

					$response = [
						'status' => 200,
						'error' => false,
						'messages' => 'User logged In successfully',
						'data' => [
							'token' => $token
						]
					];
					return $this->respondCreated($response);
				} else {

					$response = [
						'status' => 500,
						'error' => true,
						'messages' => 'Incorrect details',
						'data' => []
					];
					return $this->respondCreated($response);
				}
			} else {
				$response = [
					'status' => 500,
					'error' => true,
					'messages' => 'User not found',
					'data' => []
				];
				return $this->respondCreated($response);
			}
		}
	}

	public function details()
	{
		$key = $this->getKey();
		$authHeader = $this->request->getHeader("Authorization");
		$authHeader = $authHeader->getValue();
		$token = $authHeader;

		try {
			$decoded = JWT::decode($token, $key, array("HS256"));
			if ($decoded) {
				$response = [
					'status' => 200,
					'error' => false,
					'messages' => 'User details',
					'data' => [
						'profile' => $decoded
					]
				];
				return $this->respondCreated($response);
			}
		} catch (Exception $ex) {

			$response = [
				'status' => 401,
				'error' => true,
				'messages' => 'Access denied',
				'data' => []
			];
			return $this->respondCreated($response);
		}
	}


	// verfy email
	public function verify($id, $token)
	{
		# getting id and toke from url arguments 
		// echo $id . "token => " . $token;
		$userModel = new UserModel();
		$userdata = $userModel->where("id", $id)->first();
		// match token
		if (sha1($userdata['id']) == $token) {
			$userModel->set('active', 1);
			$userModel->where('id', $id);
			if ($userModel->update()) {
				$session = session();
				// $session->setFlashdata('message_id', 'Message'); //message rendered
				// $session->setFlashdata('seconds_redirect', 5); //time to be redirected (in seconds)
				// $session->setFlashdata('url_redirect', base_url('controller/method')); //
				$session->setFlashdata(['message_id' => 'Your email verified please wait while redirecting ....', 'second_redirect' => 5, "url_redirect" => 'login']);
				return redirect()->to('/tmp');
			}
		} else {
			echo "not verified";
		}
	}

		// verfy email
		public function verifyGuest($id, $token)
		{
			$session = session();
			$session->set('lastIDGuest', $id);
			# getting id and toke from url arguments 
			// echo $id . "token => " . $token;
			$userModel = new UserModel();
			$userdata = $userModel->where("id", $id)->first();
			// match token
			if (sha1($userdata['id']) == $token) {
				$userModel->set('active', 1);
				$userModel->where('id', $id);
				if ($userModel->update()) {
					$session = session();
					// $session->setFlashdata('message_id', 'Message'); //message rendered
					// $session->setFlashdata('seconds_redirect', 5); //time to be redirected (in seconds)
					// $session->setFlashdata('url_redirect', base_url('controller/method')); //
					$session->setFlashdata(['message_id' => 'Your email verified please wait while redirecting ....', 'second_redirect' => 5, "url_redirect" => 'newPassword']);
					return redirect()->to('/tmp');
				}
			} else {
				echo "not verified";
			}
		}
	
	public function temp()
	{
		return view("templates/temp_view");
	}


	public function logout()
	{

		$session = session();
		$session->destroy();
		return redirect()->to('https://springandfall.in/home');
	}


	public function email()
	{
		$lastId = 1;
		$token = sha1($lastId);
		$email = \Config\Services::email();
		$email->setFrom('support@springandfall.in', 'Spring and Fall');
		$email->setTo("r3ddy03@gmail.com");
		$email->setSubject('Welcome to Spring and Fall ' . $this->request->getVar('name') . '');
		$url = "http://" . $_SERVER['SERVER_NAME'] . '/user/verify.php?id=' . $lastId . '&token=' . $token;
		$data = ["username" => $this->request->getVar("name"), "url" => $url];
		$body = view('templates/email', $data);

		$email->setMessage($body);
		if ($email->send()) {
			echo "email sent";
		} else {
			echo "email failed";
		}
	}

	public function editProfile(){
		$session = session();
		$userId = $this->request->getVar("userId");
		$password = $this->request->getVar("password");
		if($password != ""){
		$data = [
			"name" => $this->request->getVar("name"),
			"email" => $this->request->getVar("email"),
			"phone" => $this->request->getVar("phone"),
			"password" => password_hash($this->request->getVar("password"), PASSWORD_DEFAULT),
			"passtext" => $this->request->getVar("password"),
			"highest_qualification" => $this->request->getVar("profileHQ"),
			"highest_qualification_passing_year" => $this->request->getVar("profileHQY"),
			"higher_secondary" => $this->request->getVar("profileHS"),
			"higher_secondary_passing_year" => $this->request->getVar("profileHSY"),
			"secondary" => $this->request->getVar("profileS"),
			"secondary_passing_year" => $this->request->getVar("profileSY"),
		];
	}else{
		$data = [
			"name" => $this->request->getVar("name"),
			"email" => $this->request->getVar("email"),
			"phone" => $this->request->getVar("phone"),
		];
	}
	$userModel = new UserModel();
	if($userModel->update($userId, $data)){
        $session->remove('userNameProfile');
		$session->set('userNameProfile', $this->request->getVar("name"));
		echo json_encode(["status" => 1, "message" => "Profile Updated"]);
	}else{
		echo json_encode(["status" => 2, "message" => "please try again later"]);
	}


	}

	public function setNewPassword(){

		$session = session();
		$model = new UserModel();
		$id = $session->get('lastIDGuest');
		$newPassword = $this->request->getVar("newPasswordGuest");
		
		$data = [
			"password" => password_hash($newPassword, PASSWORD_DEFAULT),
			"passtext" => $newPassword,
		];
        if($model->update($id, $data)){
			echo json_encode(["status" => 1, "message" =>"New Password set successfully" ]);
		}else{
			echo json_encode(["status" => 2, "message" => "New Password Not Set"]);
		}
		 
	}
}