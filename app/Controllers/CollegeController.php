<?php

namespace App\Controllers;

use App\Models\CollegeModel;
use App\Controllers\BaseController;

class CollegeController extends BaseController
{
	public function index()
	{
		//
	}

	public function getColleges(){
       $model = new CollegeModel();
       $data = $model->find();
	//    echo view('pages/consultation', $data);
    //    return redirect()->to('consultation');
	//    return view('pages/career-guide', $data);
	// return redirect()->to('consultation');
	// return $this->response->setJSON($data);
	echo json_encode(["status" => 1, "data" => $data]);
	}
}