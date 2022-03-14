<?php

namespace App\Controllers\Admin;

use App\Models\HotCoursesModel;
use CodeIgniter\Controller;

class HotCoursesController extends Controller
{
    public function index()
    {
        //
    }
    public function hotCourses()
    {
        $session = session();
        if (!empty($session->get('username'))) {

            $model = new HotCoursesModel();
            $data['hCourseData'] = $model->findAll();
            echo view('admin/layout/stylesheet');
            echo view('admin/HotCourses/HotCourses', $data);
            echo view('admin/layout/script');
        } else {
            return redirect()->to('https://springandfall.in/admin/login');
            // return redirect()->to('http://localhost:8080/admin/login');
        }
    }
    public function addHotCourses()
    {
        $session = session();
        if (!empty($session->get('username'))) {
            echo view('admin/layout/stylesheet');
            echo view('admin/HotCourses/AddHotCourses');
            echo view('admin/layout/script');
        } else {
            return redirect()->to('https://springandfall.in/admin/login');
            // return redirect()->to('http://localhost:8080/admin/login');
        }
    }

    public function addHotCoursesPost()
    {
        $rules = [
            "name" => "required",
            "title" => "required",
            "discription" => "required",
            // "file" => "required",
        ];

        $messages = [
            "name" => [
                "required" => "Name is required",
            ],
            "title" => [
                "required" => "title is required",
            ],
            "discription" => [
                "required" => "discription is required",
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
            $destinationPath = 'uploads/HotCoursesImage/';
            $file = $this->request->getFile('file');
            $file_name = $file->getClientName();
            $file->move($destinationPath, $file_name);

            $model = new HotCoursesModel();
            $data = [
                "name" => $this->request->getVar("name"),
                "title" => $this->request->getVar("title"),
                "discription" => $this->request->getVar("discription"),
                "city" => $this->request->getVar("city"),
                "country" => $this->request->getVar("country"),
                "image" => $file_name,
                "active" => 1,
            ];

            if ($model->insert($data)) {
                $response = [
                    'status' => 200,
                    'messages' => 'Successfully Hot Courses Added',
                    'data' => [],
                ];

                return redirect()->to('/admin/hotCourses');
                // return redirect()->to('http://localhost:8080/admin/hotCourses');

            } else {

                $response = [
                    'status' => 500,
                    "error" => true,
                    'messages' => 'Failed to add Hot Courses',
                    'data' => [],
                ];
            }
        }
    }

    public function editHotCourses($id)
    {
        $session = session();
        if (!empty($session->get('username'))) {
            $model = new HotCoursesModel();
            $data['hCoursesDatabyId'] = $model->where('id = ', $id)->findAll();
            echo view('admin/HotCourses/EditHotCourses', $data);
        } else {
            return redirect()->to('/admin/login');
            // return redirect()->to('http://localhost:8080/admin/login');
        }
    }

    public function editHotCoursesPost()
    {
        $rules = [
            "name" => "required",
            "title" => "required",
            "discription" => "required",
            // "file" => "required",
        ];

        $messages = [
            "name" => [
                "required" => "Name is required",
            ],
            "title" => [
                "required" => "title is required",
            ],
            "discription" => [
                "required" => "discription is required",
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
            $destinationPath = 'uploads/HotCoursesImage/';
            $file = $this->request->getFile('file');
            $file_name = $file->getClientName();
            $file->move($destinationPath, $file_name);

            $model = new HotCoursesModel();
            $id = $this->request->getVar("id");
            $data = [
                "name" => $this->request->getVar("name"),
                "title" => $this->request->getVar("title"),
                "discription" => $this->request->getVar("discription"),
                "city" => $this->request->getVar("city"),
                "country" => $this->request->getVar("country"),
                "image" => $file_name,
                "active" => 1,
            ];

            if ($model->update($id, $data)) {
                $response = [
                    'status' => 200,
                    'messages' => 'Successfully Review Added',
                    'data' => [],
                ];

                // return redirect()->to('/admin/colleges');
                return redirect()->to('/admin/hotCourses');
                // return redirect()->to('http://localhost:8080/admin/hotCourses');
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

    public function deleteHotCourses($id)
    {
        $session = session();
        if (!empty($session->get('username'))) {

            $model = new HotCoursesModel();
            $model->where('id = ', $id)->delete();
            return redirect()->to('https://springandfall.in/admin/hotCourses');
            // return redirect()->to('http://localhost:8080/admin/hotCourses');

        } else {
            return redirect()->to('https://springandfall.in/admin/login');
            // return redirect()->to('http://localhost:8080/admin/login');
        }
    }
}