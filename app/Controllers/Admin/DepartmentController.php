<?php

namespace App\Controllers\Admin;

use App\Models\DepartmentModel;
use CodeIgniter\Controller;

class DepartmentController extends Controller
{
    public function index()
    {
        //
    }
    public function department()
    {
        $session = session();
		if(!empty($session->get('username'))){

            $model = new DepartmentModel();
        $data['departmentData'] = $model->findAll();
        echo view('admin/layout/stylesheet');
        echo view('admin/Department/Department', $data);
        echo view('admin/layout/script');
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}

       
    }
    public function addDepartment()
    {
        $session = session();
		if(!empty($session->get('username'))){

            echo view('admin/layout/stylesheet');
            echo view('admin/Department/AddDepartment');
            echo view('admin/layout/script');
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}
      
    }

    public function addDepartmentPost()
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
            $model = new DepartmentModel();
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

                return redirect()->to('https://springandfall.in/admin/department');
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

    public function editDepartment($id)
    {
        $session = session();
		if(!empty($session->get('username'))){

            $model = new DepartmentModel();
        $data['departmentDatabyId'] = $model->where('id = ', $id)->findAll();
        echo view('admin/Department/EditDepartment', $data);
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}
       
    }

    public function editDepartmentPost()
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
            $model = new DepartmentModel();
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
                return redirect()->to('https://springandfall.in/admin/department');
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

    public function deleteDepartment($id)
    {
        $session = session();
		if(!empty($session->get('username'))){

            $model = new DepartmentModel();
        $model->where('id = ', $id)->delete();
        return redirect()->to('https://springandfall.in/admin/department');
        // return redirect()->to('http://localhost:8080/admin/pages');
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}
       
    }

}
