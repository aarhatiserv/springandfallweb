<?php

namespace App\Controllers\Admin;

use App\Models\CollegeModel;
use App\Models\DepartmentModel;
use App\Models\LevelModel;
use App\Models\CourseModel;

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
            "country" => "required",
            "address" => "required",
            "about" => "required",
            "offers" => "required",
            // "course" => "required",
            // "level" => "required",
            // "file" => "required",
        ];

        $messages = [
            "collegeName" => [
                "required" => "college/University Name is required",
            ],
            "url" => [
                "required" => "url is required",
            ],
            
            "country" => [
                "required" => "Country is required",
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
            // "course" => [
            //     "required" => "Course is required",
            // ],
            // "level" => [
            //     "required" => "Level is required",
            // ],
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
            $destinationPath = 'uploads/CollegesImage/'.$this->request->getVar("country").'/logo/';
            $file = $this->request->getFile('file');
            // $file_name = $file->getClientName();
            $ext = $file->getClientExtension();
            $file_name = $this->request->getVar("collegeName").'.'.$ext;
            $file->move($destinationPath, $file_name);

            $destinationPath1 = 'uploads/CollegesImage/'.$this->request->getVar("country").'/banner/';
            $fileBg = $this->request->getFile('fileBg');
            $extBg = $file->getClientExtension();
            $file_nameBg = $this->request->getVar("collegeName").'.'.$extBg;
            $fileBg->move($destinationPath1, $file_nameBg);
           
            // $multipleCourse = $this->request->getVar("course");
            // $mc="";  
            // foreach($multipleCourse as $mc1)  
            //  {  
            //     $mc .= $mc1.",";  
            //  }  

            //  $multipleLevel = $this->request->getVar("level");
            // $ml="";  
            // foreach($multipleLevel as $ml1)  
            //  {  
            //     $ml .= $ml1.",";  
            //  }  
            //  $multipleSubcourses = $this->request->getVar("subcourses");
            // $ms="";  
            // foreach($multipleSubcourses as $ms1)  
            //  {  
            //     $ms .= $ms1.",";  
            //  }  

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
                "image_background" => $file_nameBg,
                "active" => 1,
            ];

            // // checking user by email id
            // $modelData = $model->where("email", $this->request->getVar("email"))->first();
            // //     // if exsists
            // if (!empty($modelData)) {
            //     $response = [
            //         'status' => 500,
            //         'error' => true,
            //         'messages' => 'This email id is already registred',
            //         'data' => [],
            //     ];
            //     // return $this->respondCreated($response);
            // } else {
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
            // }
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
            "country" => "required",
            "address" => "required",
            "about" => "required",
            "offers" => "required",
            // "course" => "required",
            // "level" => "required",
            // "file" => "required",
        ];

        $messages = [
            "collegeName" => [
                "required" => "college/University Name is required",
            ],
            "url" => [
                "required" => "url is required",
            ],
            "country" => [
                "required" => "Country is required",
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
            // "course" => [
            //     "required" => "Course is required",
            // ],
            // "level" => [
            //     "required" => "Level is required",
            // ],
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
            $destinationPath = 'uploads/CollegesImage/'.$this->request->getVar("country").'/logo/';
            $file = $this->request->getFile('file');
            // $file_name = $file->getClientName();
            $ext = $file->getClientExtension();
            $file_name = $this->request->getVar("collegeName").'.'.$ext;
            $file->move($destinationPath, $file_name);

            $destinationPath1 = 'uploads/CollegesImage/'.$this->request->getVar("country").'/banner/';
            $fileBg = $this->request->getFile('fileBg');
            $extBg = $file->getClientExtension();
            $file_nameBg = $this->request->getVar("collegeName").'.'.$extBg;
            $fileBg->move($destinationPath1, $file_nameBg);
           
            // $multipleCourse = $this->request->getVar("course");
            // $mc="";  
            // foreach($multipleCourse as $mc1)  
            //  {  
            //     $mc .= $mc1.",";  
            //  }  

            //  $multipleLevel = $this->request->getVar("level");
            // $ml="";  
            // foreach($multipleLevel as $ml1)  
            //  {  
            //     $ml .= $ml1.",";  
            //  }  

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
                "image_background" => $file_nameBg,
                // "courses" => $mc,
                // "levels" => $ml,
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
    
    
    public function addCourse($id)
    {
        $session = session();
		if(!empty($session->get('username'))){

            $coursemodel = new CourseModel();
            $model = new CollegeModel();
            $dmodel = new DepartmentModel();
            $lmodel = new LevelModel();
            // $data['collegeDatabyId'] = $model->where('id = ', $id)->findAll();
            $data['college_id'] = $id;
            $data['allDepartmentData'] = $dmodel->findAll();
            $data['allLevelData'] = $lmodel->findAll();
            $data['courseDetails'] = $coursemodel->findAll();

            echo view('admin/Course/AddCourse', $data);
 
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}  
    }

    public function addCoursePost()
    {
        $session = session();
		if(!empty($session->get('username'))){

            $id = $this->request->getVar('id');
            $department_id = $this->request->getVar('department_id');
            $level_id = $this->request->getVar('level_id');
            $course = $this->request->getVar('course');
            
            $data = [
                "name" => $course,
                "college_id" => $id,
                "department_id" => $department_id,
                "level_id" => $level_id,
                "active"=>1
            ];

            $model = new CourseModel();
            if ($model->insert($data)) {
                $response = [
                    'status' => 200,
                    'messages' => 'Successfully college Added',
                    'data' => [],
                ];
               
                // echo view('admin/Course/AddCourse/'.$id, $data);
                // return redirect()->to('http://localhost:8080/admin/colleges');
                return redirect()->to('https://springandfall.in/admin/addCourse/'.$id);

            } else {

                $response = [
                    'status' => 500,
                    "error" => true,
                    'messages' => 'Failed to add college',
                    'data' => [],
                ];
            }
            // $model = new CollegeModel();
            // $dmodel = new DepartmentModel();
            // $lmodel = new LevelModel();
            // $data['collegeDatabyId'] = $model->where('id = ', $id)->findAll();
            // $data['college_id'] = $id;
            // $data['allDepartmentData'] = $dmodel->findAll();
            // $data['allLevelData'] = $lmodel->findAll();

            // echo view('admin/Course/AddCourse', $data);
 
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}

        
    }
}
