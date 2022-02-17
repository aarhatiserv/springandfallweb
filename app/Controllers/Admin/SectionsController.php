<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Models\PagesModel;
use App\Models\SectionsModel;

class SectionsController extends Controller
{

    public function __construct()
    {
        $db = \Config\Database::connect();
    }

    public function index()
    {
        //
    }
    public function sections()
    {
        $session = session();
        if (!empty($session->get('username'))) {

            $db = \Config\Database::connect();
            $query = $db->query('SELECT sections.id, sections.section_name, sections.title, sections.discription, sections.image, pages.name FROM sections INNER JOIN pages ON sections.pages_id = pages.id');
            $data['sectionsData'] = $query->getResult();

            echo view('admin/layout/stylesheet');
            echo view('admin/Sections/Sections', $data);
            echo view('admin/layout/script');
        } else {
            return redirect()->to('https://springandfall.in/admin/login');
            // return redirect()->to('http://localhost:8080/admin/login');
        }
    }
    public function allPagesInEdit()
    {

        $model = new PagesModel();
        $data = $model->findAll();
        echo json_encode(["status" => 1, "data" => $data]);
    }

    public function addSections()
    {
        $session = session();
        if (!empty($session->get('username'))) {
            $model = new PagesModel();
            $data['pageData'] = $model->findAll();

            echo view('admin/layout/stylesheet');
            echo view('admin/Sections/AddSections', $data);
            echo view('admin/layout/script');
        } else {
            return redirect()->to('https://springandfall.in/admin/login');
            // return redirect()->to('http://localhost:8080/admin/login');
        }
    }

    public function addSectionsPost()
    {
        $rules = [
            "name" => "required",
            "title" => "required",
            "discription" => "required",
            "pages_id" => "required",
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
            "pages_id" => [
                "required" => "Pages is required",
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
            $destinationPath = 'uploads/SectionsImage/';
            $file = $this->request->getFile('file');
            $file_name = $file->getClientName();
            $file->move($destinationPath, $file_name);

            $model = new SectionsModel();
            $data = [
                "section_name" => $this->request->getVar("name"),
                "title" => $this->request->getVar("title"),
                "discription" => $this->request->getVar("discription"),
                "pages_id" => $this->request->getVar("pages_id"),
                "image" => $file_name,
                "active" => 1,
            ];

            if ($model->insert($data)) {
                $response = [
                    'status' => 200,
                    'messages' => 'Successfully Sections Added',
                    'data' => [],
                ];

                return redirect()->to('https://springandfall.in/admin/sections');
                // return redirect()->to('http://localhost:8080/admin/sections');

            } else {

                $response = [
                    'status' => 500,
                    "error" => true,
                    'messages' => 'Failed to add Sections',
                    'data' => [],
                ];
            }
        }
    }

    public function editSections($id)
    {
        $session = session();
        if (!empty($session->get('username'))) {

            $db = \Config\Database::connect();

            $model = new SectionsModel();
            $data = $model->where('id = ', $id)->findAll();
            $page_id = $data[0]['pages_id'];

            $query = $db->query("SELECT sections.id as sid, pages.id as pid, sections.section_name, sections.title, sections.discription, sections.image, pages.name FROM sections INNER JOIN pages ON sections.pages_id = pages.id WHERE sections.pages_id = '$page_id' AND sections.id = '$id'");
            $data['sectionsData'] = $query->getResult();

            echo view('admin/Sections/EditSections', $data);
        } else {
            return redirect()->to('https://springandfall.in/admin/login');
            // return redirect()->to('http://localhost:8080/admin/login');
        }
    }

    public function editSectionsPost()
    {
        $rules = [
            "name" => "required",
            "title" => "required",
            "discription" => "required",
            "pages_id" => "required",
            // "file" => "required",
        ];

        $messages = [

            "title" => [
                "required" => "title is required",
            ],
            "discription" => [
                "required" => "discription is required",
            ],
            "pages_id" => [
                "required" => "Pages is required",
            ],
            'file' => [
                'uploaded[file]',
                'mime_in[file, image/png,jpg,image/jpeg, image/gif]',
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
            // print_r('validate error');
            echo json_encode($response);
        } else {
            $destinationPath = 'uploads/SectionsImage/';
            $file = $this->request->getFile('file');
            $file_name = $file->getClientName();
            $file->move($destinationPath, $file_name);

            $model = new SectionsModel();
            $id = $this->request->getVar("id");
            $data = [
                "section_name" => $this->request->getVar("name"),
                "title" => $this->request->getVar("title"),
                "discription" => $this->request->getVar("discription"),
                "pages_id" => $this->request->getVar("pages_id"),
                "image" => $file_name,
                "active" => 1,
            ];

            if ($model->update($id, $data)) {
                $response = [
                    'status' => 200,
                    'messages' => 'Successfully Sections Updated',
                    'data' => [],
                ];

                return redirect()->to('https://springandfall.in/admin/sections');
                // return redirect()->to('http://localhost:8080/admin/sections');

            } else {

                $response = [
                    'status' => 500,
                    "error" => true,
                    'messages' => 'Failed to Update Sections',
                    'data' => [],
                ];
            }
        }
    }

    public function deleteSections($id)
    {
        $session = session();
        if (!empty($session->get('username'))) {

            $model = new SectionsModel();
            $model->where('id = ', $id)->delete();
            return redirect()->to('https://springandfall.in/admin/sections');
            // return redirect()->to('http://localhost:8080/admin/sections');

        } else {
            return redirect()->to('https://springandfall.in/admin/login');
            // return redirect()->to('http://localhost:8080/admin/login');
        }
    }
}