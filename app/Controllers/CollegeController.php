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
       $model = new CollegeModel();
       $data = $model->where('country', $country)->findAll();
	echo json_encode(["status" => 1, "data" => $data]);
	}

	public function getCollegesWithCourses($country, $courses){
		$model = new CollegeModel();
		// $data = [$country, $courses];
		$data = $model->where("country = '$country' AND courses ='$courses'")->findAll();
	 echo json_encode(["status" => 1, "data" => $data]);
	 }
}