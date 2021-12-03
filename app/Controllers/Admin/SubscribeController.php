<?php

namespace App\Controllers\Admin;

use App\Models\SubscribeModel;
use CodeIgniter\Controller;

class SubscribeController extends Controller
{
    public function index()
    {
        //
    }
    public function getSubscribe()
    {
        $session = session();
		if(!empty($session->get('username'))){

            $model = new SubscribeModel();
        $data['subscribeData'] = $model->findAll();
        echo view('admin/layout/stylesheet');
        echo view('admin/Subscribe/Subscribe', $data);
        echo view('admin/layout/script');
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}

       
    }
    // public function addPages()
    // {
    //     $session = session();
	// 	if(!empty($session->get('username'))){

    //         echo view('admin/layout/stylesheet');
    //         echo view('admin/Pages/AddPages');
    //         echo view('admin/layout/script');
            
	// 	}else{
    //         return redirect()->to('https://springandfall.in/admin/login');
	// 		// return redirect()->to('http://localhost:8080/admin/login');
	// 	}
      
    // }

    // public function addPagesPost()
    // {
    //     $rules = [
    //         "name" => "required",
    //     ];

    //     $messages = [
    //         "name" => [
    //             "required" => "Name is required",
    //         ],
    //     ];

    //     if (!$this->validate($rules, $messages)) {

    //         $response = [
    //             'status' => 500,
    //             'error' => true,
    //             'message' => $this->validator->getErrors(),
    //             'data' => [],
    //         ];
    //         print_r('validate error');
    //     } else {
    //         $model = new PagesModel();
    //         $data = [
    //             "name" => $this->request->getVar("name"),
    //             "active" => 1,
    //         ];

    //         if ($model->insert($data)) {
    //             $response = [
    //                 'status' => 200,
    //                 'messages' => 'Successfully Pages Added',
    //                 'data' => [],
    //             ];

    //             return redirect()->to('https://springandfall.in/admin/pages');
    //             // return redirect()->to('http://localhost:8080/admin/pages');

    //         } else {

    //             $response = [
    //                 'status' => 500,
    //                 "error" => true,
    //                 'messages' => 'Failed to add Review',
    //                 'data' => [],
    //             ];
    //         }

    //     }
    // }

    // public function editPages($id)
    // {
    //     $session = session();
	// 	if(!empty($session->get('username'))){

    //         $model = new PagesModel();
    //     $data['pagesDatabyId'] = $model->where('id = ', $id)->findAll();
    //     echo view('admin/Pages/EditPages', $data);
            
	// 	}else{
    //         return redirect()->to('https://springandfall.in/admin/login');
	// 		// return redirect()->to('http://localhost:8080/admin/login');
	// 	}
       
    // }

    // public function editPagesPost()
    // {
    //     $rules = [
    //         "name" => "required",
    //     ];

    //     $messages = [
    //         "name" => [
    //             "required" => "Name is required",
    //         ],
    //     ];

    //     if (!$this->validate($rules, $messages)) {

    //         $response = [
    //             'status' => 500,
    //             'error' => true,
    //             'message' => $this->validator->getErrors(),
    //             'data' => [],
    //         ];
    //         print_r('validate error');
    //     } else {
    //         $model = new PagesModel();
    //         $id = $this->request->getVar("id");
    //         $data = [
    //             "name" => $this->request->getVar("name"),
    //             "active" => 1,
    //         ];

    //         if ($model->update($id, $data)) {
    //             $response = [
    //                 'status' => 200,
    //                 'messages' => 'Successfully Pages Added',
    //                 'data' => [],
    //             ];

    //             // return redirect()->to('/admin/colleges');
    //             return redirect()->to('https://springandfall.in/admin/pages');
    //             // return redirect()->to('http://localhost:8080/admin/pages');
    //         } else {

    //             $response = [
    //                 'status' => 500,
    //                 "error" => true,
    //                 'messages' => 'Failed to add Pages',
    //                 'data' => [],
    //             ];
    //         }
    //     }
    // }

    public function deleteSubscribe($id)
    {
        $session = session();
		if(!empty($session->get('username'))){

            $model = new SubscribeModel();
        $model->where("id = ", $id)->delete();
        return redirect()->to('https://springandfall.in/admin/subscribe');
        // return redirect()->to('http://localhost:8080/admin/subscribe');
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}
       
    }

}
