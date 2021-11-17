<?php

namespace App\Controllers\Admin;

use App\Models\PagesModel;
use CodeIgniter\Controller;

class PagesController extends Controller
{
    public function index()
    {
        //
    }
    public function pages()
    {
        $model = new PagesModel();
        $data['pagesData'] = $model->findAll();
        echo view('admin/layout/stylesheet');
        echo view('admin/Pages/Pages', $data);
        echo view('admin/layout/script');
    }
    public function addPages()
    {
        echo view('admin/layout/stylesheet');
        echo view('admin/Pages/AddPages');
        echo view('admin/layout/script');
    }

    public function addPagesPost()
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

                // return redirect()->to('https://https://springandfall.in/admin/reviews');
                return redirect()->to('http://localhost:8080/admin/pages');

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

    public function editPages($id)
    {
        $model = new PagesModel();
        $data['pagesDatabyId'] = $model->where('id = ', $id)->findAll();
        echo view('admin/Pages/EditPages', $data);
    }

    public function editPagesPost()
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
                // return redirect()->to('https://https://springandfall.in/admin/reviews');
                return redirect()->to('http://localhost:8080/admin/pages');
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

    public function deletePages($id)
    {
        $model = new PagesModel();
        $model->where('id = ', $id)->delete();
        // return redirect()->to('https://https://springandfall.in/admin/reviews');
        return redirect()->to('http://localhost:8080/admin/pages');
    }

}
