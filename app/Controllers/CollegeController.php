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
// ------------------------------------------Single Course-------------------------------
	 public function getCourse($course){
		$model = new CollegeModel();
		$data = $model->where('courses', $course)->findAll();
	 echo json_encode(["status" => 1, "data" => $data]);
	 }
	 // ------------------------------------------Single Level-------------------------------
	 public function getLevel($level){
		$model = new CollegeModel();
		$data = $model->where('levels', $level)->findAll();
	 echo json_encode(["status" => 1, "data" => $data]);
	 }

	//  ------------------------------------------Country And Levels---------------------
	public function getCountryAndLevels($country, $level){
		$model = new CollegeModel();
		// $data = [$country, $courses];
		$data = $model->where("country = '$country' AND levels ='$level'")->findAll();
	 echo json_encode(["status" => 1, "data" => $data]);
	 }

	 //  ------------------------------------------Course And Levels---------------------
	public function getCourseAndLevel($course, $level){
		$model = new CollegeModel();
		// $data = [$country, $courses];
		$data = $model->where("courses = '$course' AND levels ='$level'")->findAll();
	 echo json_encode(["status" => 1, "data" => $data]);
	 }

	 
	 //  ------------------------------------------Country And Course And Levels---------------------
	public function getCountryAndCourseAndLevel($country, $course, $level){
		$model = new CollegeModel();
		// $data = [$country, $courses];
		$data = $model->where("country = '$country'AND courses = '$course' AND levels ='$level'")->findAll();
	 echo json_encode(["status" => 1, "data" => $data]);
	 }

}