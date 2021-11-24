<?php

namespace App\Controllers;

use App\Models\CollegeModel;
use App\Models\CareerguideModel;
use App\Controllers\BaseController;

class CollegeController extends BaseController
{
	public function index()
	{
		//
	}

	public function getColleges($country){
		if(!empty($country)){
			
			$model = new CollegeModel();
			$data = $model->where('country', $country)->findAll();
		 echo json_encode(["status" => 1, "data" => $data]);
		}else{
			return redirect()->to('https://springandfall.in/consultation');
			// return redirect()->to('http://localhost:8080/consultation');
		}
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

	public function careerGuidePost(){

		$session = session();
		// $rules = [
        //     "fname" => "required",
        //     "lname" => "required",
        //     "phone" => "required",
		// 	"email" => "required|valid_email|min_length[6]",
        //     "addressline1" => "required",
        //     "addressline2" => "required",
        //     "city" => "required",
        //     "state" => "required",
        //     "pin" => "required",
        //     "qualification" => "required",
        //     "passingYear" => "required",
        //     "higherSecondary" => "required",
        //     "higherSecondaryYear" => "required",
        //     "secondary" => "required",
        //     "secondaryPassingYear" => "required",
            
        //     // "file" => "required",
        // ];

        // $messages = [
        //     "fname" => [
        //         "required" => "First Name is required",
        //     ],
        //     "lname" => [
        //         "required" => "Last Name is required",
        //     ],
        //     "phone" => [
        //         "required" => "Phone is required",
        //     ],
        //     "email" => [
		// 		"required" => "Email required",
		// 		"valid_email" => "Email address is not in format"
		// 	],
        //     "addressline1" => [
        //         "required" => "addressline1 is required",
        //     ],
        //     "addressline2" => [
        //         "required" => "addressline2 is required",
        //     ],
        //     "city" => [
        //         "required" => "city is required",
        //     ],
        //     "state" => [
        //         "required" => "state is required",
        //     ],
        //     "pin" => [
        //         "required" => "pin is required",
        //     ],
        //     "qualification" => [
        //         "required" => "qualification is required",
        //     ],
        //     "passingYear" => [
        //         "required" => "passingYear is required",
        //     ],
        //     "higherSecondary" => [
        //         "required" => "higherSecondary is required",
        //     ],
        //     "higherSecondaryYear" => [
        //         "required" => "higherSecondaryYear is required",
        //     ],
        //     "secondary" => [
        //         "required" => "secondary is required",
        //     ],
        //     "secondaryPassingYear" => [
        //         "required" => "secondaryPassingYear is required",
        //     ],
        //     'file' => [
        //         'uploaded[file]',
        //         'mime_in[file, image/png, image/jpg,image/jpeg, image/gif]',
        //         'max_size[file, 4096]',
        //     ],
        // ];

        // if (!$this->validate($rules, $messages)) {

        //     $response = [
        //         'status' => 500,
        //         'error' => true,
        //         'message' => $this->validator->getErrors(),
        //         'data' => [],
        //     ];
        //     print_r('validate error');
        // } else {
           

            

			    // $firstname =                          $this->request->getVar("fname"); 
                // $lastname =                           $this->request->getVar("lname");
                // $email =                              $this->request->getVar("email");
                // $phone =                              $this->request->getVar("phone");
                // $address_1 =                          $this->request->getVar("addressline1");
                // $address_2 =                          $this->request->getVar("addressline2");
                // $city =                               $this->request->getVar("city");
                // $state =                              $this->request->getVar("state");
                // $pincode =                            $this->request->getVar("pin");
                // $highest_qualification =              $this->request->getVar("qualification");
                // $highest_qualification_passing_year = $this->request->getVar("passingYear");
                // $higherSecondary =                    $this->request->getVar("higherSecondary");
                // $higherSecondary_passing_year =       $this->request->getVar("higherSecondaryYear");
                // $secondary =                          $this->request->getVar("secondary");
                // $secondary_passing_year =             $this->request->getVar("secondaryPassingYear");
                // $image =                              $file_name;
 
				// $session->set('firstname', $firstname);
				// $session->set('lastname', $lastname);
				// $session->set('email', $email);
				// $session->set('phone', $phone);
				// $session->set('address_1', $address_1);
				// $session->set('address_2', $address_2);
				// $session->set('city', $city);
				// $session->set('state', $state);
				// $session->set('pincode', $pincode);
				// $session->set('highest_qualification', $highest_qualification);
				// $session->set('highest_qualification_passing_year', $highest_qualification_passing_year);
				// $session->set('higherSecondary', $higherSecondary);
				// $session->set('higherSecondary_passing_year', $higherSecondary_passing_year);
				// $session->set('secondary', $secondary);
				// $session->set('secondary_passing_year', $secondary_passing_year);
				// $session->set('image', $image);

                //    $destinationPath = 'uploads/CareerGuide/';
                //    $file = $this->request->getVar('file');
                //    $file_name = $file->getClientName();
                //    $file->move($destinationPath, $file_name);
                    //   echo json_encode(["status" => 1, "message" => "Your Query submitted, We'll callback soon.!!".$this->request->getFile('file')]);
                    if(!empty($session->get('token'))){
                        $userType=$session->get('token');
                    }else{
                        $userType="guest";
                    }
                $model = new CareerguideModel();
            $data = [
                "firstname" => $this->request->getVar("firstName"),
                "lastname" =>  $this->request->getVar("lastName"),
                "email" => $this->request->getVar("email"),
                "phone" => $this->request->getVar("phone"),
                "address_1" => $this->request->getVar("addressline1"),
                "address_2" => $this->request->getVar("addressline2"),
                "city" => $this->request->getVar("city"),
                "state" => $this->request->getVar("state"),
                "pincode" => $this->request->getVar("pin"),
                "highest_qualification" => $this->request->getVar("qualification"),
                "highest_qualification_passing_year" => $this->request->getVar("passingYear"),
                "higher_secondary" => $this->request->getVar("higherSecondary"),
                "higher_secondary_passing_year" => $this->request->getVar("higherSecondaryYear"),
                "secondary" => $this->request->getVar("secondary"),
                "secondary_passing_year" => $this->request->getVar("secondaryPassingYear"),
                "user_type" => $userType,
                // "image" => $this->request->getVar("fileName"),
                "active" => 1,
            ];

            if ($model->insert($data)) {
                $response = [
                    'status' => 200,
                    'messages' => 'Successfully Hot Courses Added',
                    'data' => [],
                ];
                $data = $model->where("email = ", $this->request->getVar("email"))->findAll();
                $session->set('idCareerGuide', $data[0]['id']);
                echo json_encode(["status" => 1, "message" => "Your Details Submitted Successfully!!"]);

            } else {

                $response = [
                    'status' => 500,
                    "error" => true,
                    'messages' => 'Failed to add Hot Courses',
                    'data' => [],
                ];
            }

        // }
		
	 }


     public function careerGuideImagePost(){

                //   $destinationPath = 'uploads/CareerGuide/';
                //    $file = $this->request->getFile('file');
                //    $file_name = $file->getClientName();
                //    $file->move($destinationPath, $file_name);
                   echo json_encode(["status" => 1, "message" => "File Uploaded!".$file_name]);

     }

     public function apply($collegeId){
         $session = session();
         $data=[
            "college_id" => $collegeId
         ];
         $model = new CareerguideModel();
        $id = $session->get('idCareerGuide');
         $model->update($id, $data);

         $email = \Config\Services::email();
         $email->setFrom('support@springandfall.in', 'Spring and Fall');
         $email->setTo("sknazim1818@gmail.com");
        //  $email->setSubject('Welcome to Spring and Fall ' . $this->request->getVar('name') . '');
         $email->setSubject('Welcome to Spring and Fall ');
        //  $url = "http://" . $_SERVER['SERVER_NAME'] . '/user/verify.php?id=' . $lastId . '&token=' . $token;
        //  $data = ["username" => $this->request->getVar("name"), "url" => $url];
         $body = view('templates/email', $data);
 
         $email->setMessage($body);
         if ($email->send()) {
             echo "email sent";
         } else {
             echo "email failed";
         }

         echo json_encode(["status" => 1, "message" => "Your Query submitted, We'll callback soon.!!"]);
        }

}