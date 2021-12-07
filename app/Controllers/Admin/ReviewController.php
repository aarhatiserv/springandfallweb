<?php

namespace App\Controllers\Admin;

use App\Models\ReviewModel;
use CodeIgniter\Controller;

class ReviewController extends Controller
{
    public function index()
    {
        //
    }
    public function review()
    {
        $session = session();
		if(!empty($session->get('username'))){

            $model = new ReviewModel();
            $data['reviewData'] = $model->findAll();
            echo view('admin/layout/stylesheet');
            echo view('admin/Reviews/Review', $data);
            echo view('admin/layout/script');
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}

    }
    public function addReview()
    {
        $session = session();
		if(!empty($session->get('username'))){
            echo view('admin/layout/stylesheet');
            echo view('admin/Reviews/AddReview');
            echo view('admin/layout/script');
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}

    }

    public function addReviewPost()
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

            // $file = $this->request->getFile('file');
            // $person = $this->request->getVar("person");

            // if(!file_exists($file)){
            //    if($person === "male"){
            //     $file_name = "https://cdn-icons.flaticon.com/png/512/5349/premium/5349022.png?token=exp=1638431601~hmac=b123bff9334f27f4888c401e9677d2f0";
            //    }else{
            //     $file_name = "https://cdn-icons.flaticon.com/png/512/5349/premium/5349136.png?token=exp=1638431648~hmac=cc54a1e0225ac63a43f89af606a5fa1b";
            //    }
            // }else{
            //     $destinationPath = 'uploads/ReviewsImage/';
            //     $file_name = $file->getClientName();
            //     $file->move($destinationPath, $file_name);
            // }

            $destinationPath = 'uploads/ReviewsImage/';
            $file = $this->request->getFile('file');
            $file_name = $file->getClientName();
            $file->move($destinationPath, $file_name);
            
            $model = new ReviewModel();
            $data = [
                "name" => $this->request->getVar("name"),
                "title" => $this->request->getVar("title"),
                "discription" => $this->request->getVar("discription"),
                "image" => $file_name,
                "active" => 1,
            ];

            if ($model->insert($data)) {
                $response = [
                    'status' => 200,
                    'messages' => 'Successfully Review Added',
                    'data' => [],
                ];

                return redirect()->to('https://springandfall.in/admin/reviews');
                // return redirect()->to('http://localhost:8080/admin/reviews');

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

    public function editReview($id)
    {
        $session = session();
		if(!empty($session->get('username'))){
            $model = new ReviewModel();
            $data['reviewDatabyId'] = $model->where('id = ', $id)->findAll();
            echo view('admin/Reviews/EditReview', $data);
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}

    }

    public function editReviewPost()
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
           
            // $file = $this->request->getFile('file');
            // $file = $this->request->getFile('file');
            // $person = $this->request->getVar("person");

            // if(!file_exists($file)){
            //    if($person === "male"){
            //     $file_name = "https://cdn-icons.flaticon.com/png/512/5349/premium/5349022.png?token=exp=1638431601~hmac=b123bff9334f27f4888c401e9677d2f0";
            //    }else{
            //     $file_name = "https://cdn-icons.flaticon.com/png/512/5349/premium/5349136.png?token=exp=1638431648~hmac=cc54a1e0225ac63a43f89af606a5fa1b";
            //    }
            // }else{
            //     $destinationPath = 'uploads/ReviewsImage/';
            //     $file_name = $file->getClientName();
            //     $file->move($destinationPath, $file_name);
            // }

            $destinationPath = 'uploads/ReviewsImage/';
            $file = $this->request->getFile('file');
            $file_name = $file->getClientName();
            $file->move($destinationPath, $file_name);

            $model = new ReviewModel();
            $id = $this->request->getVar("id");
            $data = [
                "name" => $this->request->getVar("name"),
                "title" => $this->request->getVar("title"),
                "discription" => $this->request->getVar("discription"),
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
                return redirect()->to('https://springandfall.in/admin/reviews');
                // return redirect()->to('http://localhost:8080/admin/reviews');
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

    public function deleteReview($id)
    {
        $session = session();
		if(!empty($session->get('username'))){

            $model = new ReviewModel();
            $model->where('id = ', $id)->delete();
            return redirect()->to('https://springandfall.in/admin/reviews');
            // return redirect()->to('http://localhost:8080/admin/reviews');
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}
        
    }

}
