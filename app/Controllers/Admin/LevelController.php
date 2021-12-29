<?php

namespace App\Controllers\Admin;

use App\Models\LevelModel;
use CodeIgniter\Controller;

class LevelController extends Controller
{
    public function index()
    {
        //
    }
    public function level()
    {
        $session = session();
		if(!empty($session->get('username'))){

            $model = new LevelModel();
        $data['levelData'] = $model->findAll();
        echo view('admin/layout/stylesheet');
        echo view('admin/Levels/Level', $data);
        echo view('admin/layout/script');
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}

       
    }
    public function addLevel()
    {
        $session = session();
		if(!empty($session->get('username'))){

            echo view('admin/layout/stylesheet');
            echo view('admin/Levels/AddLevel');
            echo view('admin/layout/script');
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}
      
    }

    public function addLevelPost()
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
            $model = new LevelModel();
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

                return redirect()->to('https://springandfall.in/admin/level');
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

    public function editLevel($id)
    {
        $session = session();
		if(!empty($session->get('username'))){

            $model = new LevelModel();
        $data['levelDatabyId'] = $model->where('id = ', $id)->findAll();
        echo view('admin/Levels/EditLevel', $data);
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}
       
    }

    public function editLevelPost()
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
            $model = new LevelModel();
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
                return redirect()->to('https://springandfall.in/admin/level');
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

    public function deleteLevel($id)
    {
        $session = session();
		if(!empty($session->get('username'))){

            $model = new LevelModel();
        $model->where('id = ', $id)->delete();
        return redirect()->to('https://springandfall.in/admin/level');
        // return redirect()->to('http://localhost:8080/admin/pages');
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}
       
    }

}
