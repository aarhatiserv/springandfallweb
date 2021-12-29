<?php

namespace App\Controllers\Admin;

use App\Models\CoursesModel;
use CodeIgniter\Controller;

class CoursesController extends Controller
{
    public function index()
    {
        //
    }
    public function course()
    {
        $session = session();
		if(!empty($session->get('username'))){

            $model = new CoursesModel();
        $data['coursesData'] = $model->findAll();
        echo view('admin/layout/stylesheet');
        echo view('admin/Courses/Course', $data);
        echo view('admin/layout/script');
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}

       
    }
    public function addCourse()
    {
        $session = session();
		if(!empty($session->get('username'))){

            echo view('admin/layout/stylesheet');
            echo view('admin/Courses/AddCourse');
            echo view('admin/layout/script');
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}
      
    }

    public function addCoursePost()
    {
        $rules = [
            "name" => "required",
        ];

        $messages = [
            "name" => [
                "required" => "Name is required",
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
            $model = new PagesModel();
            $data = [
                "name" => $this->request->getVar("name"),
                "active" => 1,
            ];

            if ($model->insert($data)) {
                $response = [
                    'status' => 200,
                    'messages' => 'Successfully Pages Added',
                    'data' => [],
                ];

                return redirect()->to('https://springandfall.in/admin/pages');
                // return redirect()->to('http://localhost:8080/admin/pages');

            } else {

                $response = [
                    'status' => 500,
                    "error" => true,
                    'messages' => 'Failed to add Review',
                    'data' => [],
                ];
            }

        }
    }

    public function editCourse($id)
    {
        $session = session();
		if(!empty($session->get('username'))){

            $model = new PagesModel();
        $data['pagesDatabyId'] = $model->where('id = ', $id)->findAll();
        echo view('admin/Pages/EditPages', $data);
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}
       
    }

    public function editCoursePost()
    {
        $rules = [
            "name" => "required",
        ];

        $messages = [
            "name" => [
                "required" => "Name is required",
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
            $model = new PagesModel();
            $id = $this->request->getVar("id");
            $data = [
                "name" => $this->request->getVar("name"),
                "active" => 1,
            ];

            if ($model->update($id, $data)) {
                $response = [
                    'status' => 200,
                    'messages' => 'Successfully Pages Added',
                    'data' => [],
                ];

                // return redirect()->to('/admin/colleges');
                return redirect()->to('https://springandfall.in/admin/pages');
                // return redirect()->to('http://localhost:8080/admin/pages');
            } else {

                $response = [
                    'status' => 500,
                    "error" => true,
                    'messages' => 'Failed to add Pages',
                    'data' => [],
                ];
            }
        }
    }

    public function deleteCourse($id)
    {
        $session = session();
		if(!empty($session->get('username'))){

            $model = new PagesModel();
        $model->where('id = ', $id)->delete();
        return redirect()->to('https://springandfall.in/admin/pages');
        // return redirect()->to('http://localhost:8080/admin/pages');
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}
       
    }

}
