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

	public function getColleges($country){
		// echo $country;
		log_message('debug',print_r($country,TRUE));
       $model = new CollegeModel();
       $data = $model->where('country', $country)->findAll();
	echo json_encode(["status" => 1, "data" => $data]);
	}
}