<?php

namespace App\Controllers\Admin;

use App\Models\CollegeModel;
use CodeIgniter\Controller;

class CollegeController extends Controller
{
    public function index()
    {
        //echo view('admin/home');
    }

    public function colleges()
    {
        $session = session();
		if(!empty($session->get('username'))){

            $model = new CollegeModel();
            $data['collegeData'] = $model->find();
            echo view('admin/layout/stylesheet');
            echo view('admin/Colleges/Colleges', $data);
            echo view('admin/layout/script');
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}
       
    }

    public function addColleges()
    {
        $session = session();
		if(!empty($session->get('username'))){

            echo view('admin/layout/stylesheet');
            echo view('admin/Colleges/AddColleges');
            echo view('admin/layout/script');
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}

       
    }

    public function addCollegesPost()
    {
        $rules = [
            "collegeName" => "required",
            "url" => "required",
            "email" => "required|valid_email|is_unique[colleges.email]|min_length[6]",
            "country" => "required",
            "countryRank" => "required",
            "globalRank" => "required",
            "address" => "required",
            "about" => "required",
            "offers" => "required",
            "course" => "required",
            "level" => "required",
            // "file" => "required",
        ];

        $messages = [
            "collegeName" => [
                "required" => "college/University Name is required",
            ],
            "url" => [
                "required" => "url is required",
            ],
            "email" => [
                "required" => "Email required",
                "valid_email" => "Email address is not in format",
            ],
            "country" => [
                "required" => "Country is required",
            ],
            "countryRank" => [
                "required" => "Country Rank is required",
            ],
            "globalRank" => [
                "required" => "Global Rank is required",
            ],
            "address" => [
                "required" => "Address is required",
            ],
            "about" => [
                "required" => "About is required",
            ],
            "offers" => [
                "required" => "Offers is required",
            ],
            "course" => [
                "required" => "Course is required",
            ],
            "level" => [
                "required" => "Level is required",
            ],
            'file' => [
                'uploaded[file]',
                'mime_in[file, image/png, image/jpg,image/jpeg, image/gif]',
                'max_size[file, 4096]',
            ],
        ];

        if (!$this->validate($rules, $messages)) {

            $response = [
                'status' => 500,
                'error' => true,
                'message' => $this->validator->getErrors(),
                'data' => [],
            ];
            print_r('validate error');
        } else {
            $destinationPath = 'uploads/CollegesImage/';
            $file = $this->request->getFile('file');
            $file_name = $file->getClientName();
            $file->move($destinationPath, $file_name);

            $model = new CollegeModel();
            $data = [
                "names" => $this->request->getVar("collegeName"),
                "country" => $this->request->getVar("country"),
                "country_rank" => $this->request->getVar("countryRank"),
                "global_rank" => $this->request->getVar("globalRank"),
                "address" => $this->request->getVar("address"),
                "website" => $this->request->getVar("url"),
                "email" => $this->request->getVar("email"),
                "about" => $this->request->getVar("about"),
                "offers" => $this->request->getVar("offers"),
                "image" => $file_name,
                "courses" => $this->request->getVar("course"),
                "levels" => $this->request->getVar("level"),
                "active" => 1,
            ];

            // checking user by email id
            $modelData = $model->where("email", $this->request->getVar("email"))->first();
            //     // if exsists
            if (!empty($modelData)) {
                $response = [
                    'status' => 500,
                    'error' => true,
                    'messages' => 'This email id is already registred',
                    'data' => [],
                ];
                // return $this->respondCreated($response);
            } else {
                if ($model->insert($data)) {
                    $response = [
                        'status' => 200,
                        'messages' => 'Successfully college Added',
                        'data' => [],
                    ];

                    return redirect()->to('https://springandfall.in/admin/colleges');
                    // return redirect()->to('http://localhost:8080/admin/colleges');

                } else {

                    $response = [
                        'status' => 500,
                        "error" => true,
                        'messages' => 'Failed to add college',
                        'data' => [],
                    ];
                }
            }
        }
    }

    public function editCollege($id)
    {
        $session = session();
		if(!empty($session->get('username'))){

            $model = new CollegeModel();
            $data['collegeDatabyId'] = $model->where('id = ', $id)->findAll();
            echo view('admin/Colleges/EditColleges', $data);
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}

        
    }

    public function editCollegePost()
    {
        $rules = [
            "collegeName" => "required",
            "url" => "required",
            "email" => "required|min_length[6]",
            "country" => "required",
            "countryRank" => "required",
            "globalRank" => "required",
            "address" => "required",
            "about" => "required",
            "offers" => "required",
            "course" => "required",
            "level" => "required",
            // "file" => "required",
        ];

        $messages = [
            "collegeName" => [
                "required" => "college/University Name is required",
            ],
            "url" => [
                "required" => "url is required",
            ],
            "email" => [
                "required" => "Email required",
                "valid_email" => "Email address is not in format",
            ],
            "country" => [
                "required" => "Country is required",
            ],
            "countryRank" => [
                "required" => "Country Rank is required",
            ],
            "globalRank" => [
                "required" => "Global Rank is required",
            ],
            "address" => [
                "required" => "Address is required",
            ],
            "about" => [
                "required" => "About is required",
            ],
            "offers" => [
                "required" => "Offers is required",
            ],
            "course" => [
                "required" => "Course is required",
            ],
            "level" => [
                "required" => "Level is required",
            ],
            'file' => [
                'uploaded[file]',
                'mime_in[file, image/png, image/jpg,image/jpeg, image/gif]',
                'max_size[file, 4096]',
            ],
        ];
        if (!$this->validate($rules, $messages)) {

            $response = [
                'status' => 500,
                'error' => true,
                'message' => $this->validator->getErrors(),
                'data' => [],
            ];
            print_r('validate error');
        } else {
            $destinationPath = 'uploads/CollegesImage/';
            $file = $this->request->getFile('file');
            $file_name = $file->getClientName();
            $file->move($destinationPath, $file_name);

            $model = new CollegeModel();

            $id = $this->request->getVar("id");
            $data = [
                "names" => $this->request->getVar("collegeName"),
                "country" => $this->request->getVar("country"),
                "country_rank" => $this->request->getVar("countryRank"),
                "global_rank" => $this->request->getVar("globalRank"),
                "address" => $this->request->getVar("address"),
                "website" => $this->request->getVar("url"),
                "email" => $this->request->getVar("email"),
                "about" => $this->request->getVar("about"),
                "offers" => $this->request->getVar("offers"),
                "image" => $file_name,
                "courses" => $this->request->getVar("course"),
                "levels" => $this->request->getVar("level"),
                "active" => 1,
            ];

            if ($model->update($id, $data)) {
                $response = [
                    'status' => 200,
                    'messages' => 'Successfully college Added',
                    'data' => [],
                ];

                // return redirect()->to('/admin/colleges');
                return redirect()->to('https://springandfall.in/admin/colleges');
                // return redirect()->to('http://localhost:8080/admin/colleges');
            } else {

                $response = [
                    'status' => 500,
                    "error" => true,
                    'messages' => 'Failed to add college',
                    'data' => [],
                ];
            }
        }
    }

    public function deleteCollege($id)
    {
        $session = session();
		if(!empty($session->get('username'))){

            $model = new CollegeModel();
            $model->where('id = ', $id)->delete();
            return redirect()->to('https://springandfall.in/admin/colleges');
            // return redirect()->to('http://localhost:8080/admin/colleges');
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}

        
    }
    //

}
