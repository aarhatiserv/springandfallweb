<?php

namespace App\Controllers\Admin;

use App\Models\CollegeModel;
use App\Models\DepartmentModel;
use App\Models\LevelModel;
use App\Models\CourseModel;
use App\Models\CareerguideModel;

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
        if (!empty($session->get('username'))) {

            $model = new CollegeModel();
            $data['collegeData'] = $model->find();
            echo view('admin/layout/stylesheet');
            echo view('admin/Colleges/Colleges', $data);
            echo view('admin/layout/script');
        } else {
            return redirect()->to('https://springandfall.in/admin/login');
            // return redirect()->to('http://localhost:8080/admin/login');
        }
    }

    public function addColleges()
    {

        $session = session();
        if (!empty($session->get('username'))) {

            echo view('admin/layout/stylesheet');
            echo view('admin/Colleges/AddColleges');
            echo view('admin/layout/script');
        } else {
            return redirect()->to('https://springandfall.in/admin/login');
            // return redirect()->to('http://localhost:8080/admin/login');
        }
    }


    public function AddCsv()
    {

        $session = session();
        if (!empty($session->get('username'))) {

            // echo view('admin/layout/stylesheet');
            echo view('admin/Colleges/AddCsv');
            // echo view('admin/layout/script');
        } else {
            return redirect()->to('https://springandfall.in/admin/login');
            // return redirect()->to('http://localhost:8080/admin/login');
        }
    }



    public function importCsvToDb()
    {
        $input = $this->validate([
            'file' => 'uploaded[file]|max_size[file,102400]|ext_in[file,csv],'
        ]);
        if (!$input) {
            $data['validation'] = $this->validator;
            // return view('AddCsv', $data);
            // return view('admin/layout/stylesheet');
            return view('admin/Colleges/AddCsv', $data);
            // return view('admin/layout/script');
        } else {
            if ($file = $this->request->getFile('file')) {
                // echo "file accepted";
                // print_r($file);
                // exit;
                if ($file->isValid() && !$file->hasMoved()) {
                    $newName = $file->getRandomName();
                    $file->move('uploads/csvfile', $newName);
                    $file = fopen("uploads/csvfile/" . $newName, "r");
                    $i = 0;
                    $numberOfFields = 7;
                    $csvArr = array();

                    while (($filedata = fgetcsv($file, 2000, ",")) !== FALSE) {
                        $num = count($filedata);
                        if ($i > 0 && $num == $numberOfFields) {
                            $csvArr[$i]['names'] = $filedata[0];


                            $csvArr[$i]['country'] = $filedata[1];
                            $csvArr[$i]['country_rank'] = $filedata[2];
                            $csvArr[$i]['global_rank'] = $filedata[3];
                            $csvArr[$i]['address'] = $filedata[4];
                            $csvArr[$i]['about'] = $filedata[5];
                            $csvArr[$i]['international_fee'] = $filedata[6];
                            // $csvArr[$i]['phone'] = $filedata[6];
                            // $csvArr[$i]['created_at'] = $filedata[3];
                        }
                        $i++;
                    }
                    fclose($file);
                    $count = 0;
                    $data = [];
                    foreach ($csvArr as $userdata) {
                        // print_r($userdata);

                        array_push($data, [
                            "names" => $userdata['names'],
                            "country" => $userdata['country'],
                            "country_rank" => $userdata['country_rank'],
                            "global_rank" => $userdata['global_rank'],
                            "address" => $userdata['address'],
                            "website" => '',
                            "email" => '',
                            "about" => $userdata['about'],
                            "international_fee" => $userdata['international_fee'],
                            "offers" => '',
                            "image" => '',
                            "image_background" => '',
                            "active" => 1,
                        ]);
                        // $students = new StudentModel();
                        // $findRecord = $students->where('email', $userdata['email'])->countAllResults();
                        // if($findRecord == 0){
                        //     if($students->insert($userdata)){
                        //         $count++;
                        //     }
                        // }
                        $count++;
                    }
                    $model = new CollegeModel();
                    $findRecord = $model->where('names', $userdata['names'])->countAllResults();
                    if ($findRecord == 0) {
                        if ($model->ignore(true)->insertBatch($data)) {
                            // $count++;
                        }
                    }
                    session()->setFlashdata('message', $count . ' rows successfully added.');
                    session()->setFlashdata('alert-class', 'alert-success');
                } else {
                    session()->setFlashdata('message', 'CSV file coud not be imported.');
                    session()->setFlashdata('alert-class', 'alert-danger');
                }
            } else {
                session()->setFlashdata('message', 'CSV file coud not be imported.');
                session()->setFlashdata('alert-class', 'alert-danger');
            }
        }
        return redirect()->route('admin/AddCsv');
    }



    public function addCollegesPost()
    {
        $rules = [
            "collegeName" => "required",
            "url" => "required",
            "country" => "required",
            "address" => "required",
            "about" => "required",
            // "offers" => "required",
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
            // "offers" => [
            //     "required" => "Offers is required",
            // ],
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
            $destinationPath = 'uploads/CollegesImage/' . $this->request->getVar("country") . '/logo/';
            $file = $this->request->getFile('file');
            // $file_name = $file->getClientName();
            $ext = $file->getClientExtension();
            $file_name = $this->request->getVar("collegeName") . '.' . $ext;
            $file->move($destinationPath, $file_name);

            $destinationPath1 = 'uploads/CollegesImage/' . $this->request->getVar("country") . '/banner/';
            $fileBg = $this->request->getFile('fileBg');
            $extBg = $file->getClientExtension();
            $file_nameBg = $this->request->getVar("collegeName") . '.' . $extBg;
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

            $collegeName =  $this->request->getVar("collegeName");
            $country = $this->request->getVar("country");
            $countryRank = $this->request->getVar("countryRank");
            $globalRank = $this->request->getVar("globalRank");
            $address = $this->request->getVar("address");
            $url = $this->request->getVar("url");
            $email = $this->request->getVar("email");
            $about = $this->request->getVar("about");
            $offers = $this->request->getVar("offers");

            $substring_index = stripos($collegeName, "<script>");
            $substring_index1 = stripos($country, "<script>");
            $substring_index2 = stripos($countryRank, "<script>");
            $substring_index3 = stripos($globalRank, "<script>");
            $substring_index4 = stripos($address, "<script>");
            $substring_index5 = stripos($url, "<script>");
            $substring_index6 = stripos($email, "<script>");
            $substring_index7 = stripos($about, "<script>");
            $substring_index8 = stripos($offers, "<script>");

            $substring_index9 = stripos($collegeName, "<table>");
            $substring_index10 = stripos($country, "<table>");
            $substring_index11 = stripos($countryRank, "<table>");
            $substring_index12 = stripos($globalRank, "<table>");
            $substring_index13 = stripos($address, "<table>");
            $substring_index14 = stripos($url, "<table>");
            $substring_index15 = stripos($email, "<table>");
            $substring_index16 = stripos($about, "<table>");
            $substring_index17 = stripos($offers, "<table>");

            if (($substring_index !== false)
                || ($substring_index1 !== false)
                || ($substring_index2 !== false)
                || ($substring_index3 !== false)
                || ($substring_index4 !== false)
                || ($substring_index5 !== false)
                || ($substring_index6 !== false)
                || ($substring_index7 !== false)
                || ($substring_index8 !== false)
                || ($substring_index9 !== false)
                || ($substring_index10 !== false)
                || ($substring_index11 !== false)
                || ($substring_index12 !== false)
                || ($substring_index13 !== false)
                || ($substring_index14 !== false)
                || ($substring_index15 !== false)
                || ($substring_index16 !== false)
                || ($substring_index17 !== false)
            ) {
                return redirect()->to('https://springandfall.in/admin/colleges');
            } else {





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
    }

    public function editCollege($id)
    {
        $session = session();
        if (!empty($session->get('username'))) {

            $model = new CollegeModel();
            $data['collegeDatabyId'] = $model->where('id = ', $id)->findAll();
            echo view('admin/Colleges/EditColleges', $data);
        } else {
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
            // "offers" => "required",
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
            // "offers" => [
            //     "required" => "Offers is required",
            // ],
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
            $destinationPath = 'uploads/CollegesImage/' . $this->request->getVar("country") . '/logo/';
            $file = $this->request->getFile('file');
            // $file_name = $file->getClientName();
            $ext = $file->getClientExtension();
            $file_name = $this->request->getVar("collegeName") . '.' . $ext;
            $file->move($destinationPath, $file_name);

            $destinationPath1 = 'uploads/CollegesImage/' . $this->request->getVar("country") . '/banner/';
            $fileBg = $this->request->getFile('fileBg');
            $extBg = $file->getClientExtension();
            $file_nameBg = $this->request->getVar("collegeName") . '.' . $extBg;
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
            $collegeName =  $this->request->getVar("collegeName");
            $country = $this->request->getVar("country");
            $countryRank = $this->request->getVar("countryRank");
            $globalRank = $this->request->getVar("globalRank");
            $address = $this->request->getVar("address");
            $url = $this->request->getVar("url");
            $email = $this->request->getVar("email");
            $about = $this->request->getVar("about");
            $offers = $this->request->getVar("offers");

            $substring_index = stripos($collegeName, "<script>");
            $substring_index1 = stripos($country, "<script>");
            $substring_index2 = stripos($countryRank, "<script>");
            $substring_index3 = stripos($globalRank, "<script>");
            $substring_index4 = stripos($address, "<script>");
            $substring_index5 = stripos($url, "<script>");
            $substring_index6 = stripos($email, "<script>");
            $substring_index7 = stripos($about, "<script>");
            $substring_index8 = stripos($offers, "<script>");

            $substring_index9 = stripos($collegeName, "<table>");
            $substring_index10 = stripos($country, "<table>");
            $substring_index11 = stripos($countryRank, "<table>");
            $substring_index12 = stripos($globalRank, "<table>");
            $substring_index13 = stripos($address, "<table>");
            $substring_index14 = stripos($url, "<table>");
            $substring_index15 = stripos($email, "<table>");
            $substring_index16 = stripos($about, "<table>");
            $substring_index17 = stripos($offers, "<table>");

            if (($substring_index !== false)
                || ($substring_index1 !== false)
                || ($substring_index2 !== false)
                || ($substring_index3 !== false)
                || ($substring_index4 !== false)
                || ($substring_index5 !== false)
                || ($substring_index6 !== false)
                || ($substring_index7 !== false)
                || ($substring_index8 !== false)
                || ($substring_index9 !== false)
                || ($substring_index10 !== false)
                || ($substring_index11 !== false)
                || ($substring_index12 !== false)
                || ($substring_index13 !== false)
                || ($substring_index14 !== false)
                || ($substring_index15 !== false)
                || ($substring_index16 !== false)
                || ($substring_index17 !== false)
            ) {
                return redirect()->to('https://springandfall.in/admin/colleges');
            } else {
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
    }

    public function deleteCollege($id)
    {
        $session = session();
        if (!empty($session->get('username'))) {


            $cmodel = new CourseModel();
            $cmodel->where('college_id = ', $id)->delete();

            $model = new CollegeModel();
            $model->where('id = ', $id)->delete();
            return redirect()->to('https://springandfall.in/admin/colleges');
            // return redirect()->to('http://localhost:8080/admin/colleges');

        } else {
            return redirect()->to('https://springandfall.in/admin/login');
            // return redirect()->to('http://localhost:8080/admin/login');
        }
    }
}