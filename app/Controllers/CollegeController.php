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

    public function getColleges($country)
    {
        if (!empty($country)) {

            $model = new CollegeModel();
            $data = $model->where('country', $country)->findAll();
            echo json_encode(["status" => 1, "data" => $data]);
        } else {
            return redirect()->to('https://springandfall.in/consultation');
            // return redirect()->to('http://localhost:8080/consultation');
        }
    }

    public function getCollegesWithCourses($country, $courses)
    {
        $model = new CollegeModel();
        // $data = [$country, $courses];
        $data = $model->where("country = '$country' AND courses ='$courses'")->findAll();
        echo json_encode(["status" => 1, "data" => $data]);
    }
    // ------------------------------------------Single Course-------------------------------
    public function getCourse($course)
    {
        $model = new CollegeModel();
        $data = $model->where('courses', $course)->findAll();
        echo json_encode(["status" => 1, "data" => $data]);
    }
    // ------------------------------------------Single Level-------------------------------
    public function getLevel($level)
    {
        $model = new CollegeModel();
        $data = $model->where('levels', $level)->findAll();
        echo json_encode(["status" => 1, "data" => $data]);
    }

    //  ------------------------------------------Country And Levels---------------------
    public function getCountryAndLevels($country, $level)
    {
        $model = new CollegeModel();
        // $data = [$country, $courses];
        $data = $model->where("country = '$country' AND levels ='$level'")->findAll();
        echo json_encode(["status" => 1, "data" => $data]);
    }

    //  ------------------------------------------Course And Levels---------------------
    public function getCourseAndLevel($course, $level)
    {
        $model = new CollegeModel();
        // $data = [$country, $courses];
        $data = $model->where("courses = '$course' AND levels ='$level'")->findAll();
        echo json_encode(["status" => 1, "data" => $data]);
    }


    //  ------------------------------------------Country And Course And Levels---------------------
    public function getCountryAndCourseAndLevel($country, $course, $level)
    {
        $model = new CollegeModel();
        // $data = [$country, $courses];
        $data = $model->where("country = '$country'AND courses = '$course' AND levels ='$level'")->findAll();
        echo json_encode(["status" => 1, "data" => $data]);
    }

    public function careerGuidePost()
    {

        $session  = session();

        $session->set('careerFirstname', $this->request->getVar("firstName"));
        $session->set('careerLastname', $this->request->getVar("lastName"));
        $session->set('careerEmail', $this->request->getVar("email"));
        $session->set('careerPhone', $this->request->getVar("phone"));
        $session->set('careerAddress_1', $this->request->getVar("addressline1"));
        $session->set('careerAddress_2', $this->request->getVar("addressline2"));
        $session->set('careerCity', $this->request->getVar("city"));
        $session->set('careerState', $this->request->getVar("state"));
        $session->set('careerPincode', $this->request->getVar("pin"));
        $session->set('careerHighest_qualification', $this->request->getVar("qualification"));
        $session->set('careerHighest_qualification_passing_year', $this->request->getVar("passingYear"));
        $session->set('careerHigherSecondary', $this->request->getVar("higherSecondary"));
        $session->set('careerHigherSecondary_passing_year', $this->request->getVar("higherSecondaryYear"));
        $session->set('careerSecondary', $this->request->getVar("secondary"));
        $session->set('careerSecondary_passing_year', $this->request->getVar("secondaryPassingYear"));

        if (!empty($session->get('token'))) {
            $session->set('careerUserType', $session->get('token'));
        } else {
            $session->set('careerUserType', 'guest');
        }
        echo json_encode(["status" => 1, "message" => "Thank you"]);
    }


    // upload image post data from career-guide

    // public function careerGuideImagePost()
    // {
    //     $data = array();

    //     // Read new token and assign to $data['token']
    //     $data['token'] = csrf_hash();

    //     ## Validation
    //     $validation = \Config\Services::validation();

    //     $input = $validation->setRules([
    //         'file' => 'uploaded[file]|max_size[file,5120]|ext_in[file,jpeg,jpg,docx,pdf],'
    //     ]);

    //     if ($validation->withRequest($this->request)->run() == FALSE) {

    //         $data['success'] = 0;
    //         $data['error'] = $validation->getError('file'); // Error response

    //     } else {

    //         if ($file = $this->request->getFile('file')) {
    //             if ($file->isValid() && !$file->hasMoved()) {
    //                 // Get file name and extension
    //                 $name = $file->getName();
    //                 $ext = $file->getClientExtension();

    //                 // Get random file name
    //                 $newName = $file->getRandomName();

    //                 // Store file in public/uploads/career-guide folder
    //                 $file->move('../public/uploads/career-guide', $newName);

    //                 // File path to display preview
    //                  $filepath = base_url() . "/uploads/career-guide/" . $newName;

    //                 // Response
    //                 $data['success'] = 1;
    //                 $data['message'] = 'Uploaded Successfully!';
    //                 $data['filepath'] = $filepath;
    //                 $data['extension'] = $ext;
    //             } else {
    //                 // Response
    //                 $data['success'] = 2;
    //                 $data['message'] = 'File not uploaded.';
    //             }
    //         } else {
    //             // Response
    //             $data['success'] = 2;
    //             $data['message'] = 'File not uploaded.';
    //         }
    //     }
    //     return $this->response->setJSON($data);
    // }

    public function apply()
    {
        $session = session();
        $collegeId = $this->request->getVar("id");

        if (empty($session->get('careerFirstname')
            || $session->get('careerLastname')
            || $session->get('careerEmail')
            || $session->get('careerPhone')
            || $session->get('careerAddress_1')
            || $session->get('careerAddress_2')
            || $session->get('careerCity')
            || $session->get('careerState')
            || $session->get('careerPincode')
            || $session->get('careerHighest_qualification')
            || $session->get('careerHighest_qualification_passing_year')
            || $session->get('careerHigherSecondary')
            || $session->get('careerHigherSecondary_passing_year')
            || $session->get('careerSecondary')
            || $session->get('careerSecondary_passing_year')
            || $session->get('careerUserType'))) {
            // return redirect()->to('http://localhost:8080/career-guide');
            return redirect()->to('https://springandfall.in/career-guide');
        } else {
            $data = [
                "firstname" => $session->get('careerFirstname'),
                "lastname" =>  $session->get('careerLastname'),
                "email" => $session->get('careerEmail'),
                "phone" => $session->get('careerPhone'),
                "address_1" => $session->get('careerAddress_1'),
                "address_2" => $session->get('careerAddress_2'),
                "city" => $session->get('careerCity'),
                "state" => $session->get('careerState'),
                "pincode" => $session->get('careerPincode'),
                "highest_qualification" => $session->get('careerHighest_qualification'),
                "highest_qualification_passing_year" => $session->get('careerHighest_qualification_passing_year'),
                "higher_secondary" => $session->get('careerHigherSecondary'),
                "higher_secondary_passing_year" => $session->get('careerHigherSecondary_passing_year'),
                "secondary" => $session->get('careerSecondary'),
                "secondary_passing_year" => $session->get('careerSecondary_passing_year'),
                "requested_for" => "career-guide",
                "user_type" => $session->get('careerUserType'),
                "college_id" => $collegeId,
                "active" => 1
            ];
            $model = new CareerguideModel();
            // $id = $session->get('idCareerGuide');
            if ($model->insert($data)) {
                $response = [
                    'status' => 200,
                    'messages' => 'Successfully Career Details Added',
                    'data' => [],
                ];
                $email = \Config\Services::email();
                $email->setFrom('support@springandfall.in', 'Spring and Fall');
                $email->setTo($session->get('careerEmail'));
               //  $email->setSubject('Welcome to Spring and Fall ' . $this->request->getVar('name') . '');
                $email->setSubject('Welcome to Spring and Fall ');
               //  $url = "http://" . $_SERVER['SERVER_NAME'] . '/user/verify.php?id=' . $lastId . '&token=' . $token;
                $data = ["username" => "Rakesh"];
                $body = view('templates/email', $data);
   
                $email->setMessage($body);
                if ($email->send()) {
                    echo "email sent";
                } else {
                    echo "email failed";
                }

                echo json_encode(["status" => 1, "message" => "Your Query submitted, We'll callback soon.!!"]);
            } else {

                $response = [
                    'status' => 500,
                    "error" => true,
                    'messages' => 'Failed to add Hot Courses',
                    'data' => [],
                ];
            }

             echo json_encode(["status" => 1, "message" => "call".$this->firstname]);
        }
   }

   public function applyForCollegeInConsultation(){
    $session = session();

    $collegeId = $this->request->getVar("id");
    if(empty($session->get('token'))){
        echo json_encode(["status" => 2, "message" => "Please signin or signup, then you can apply college"]);
    }else{
        $data = [
            "requested_for" => "consultation",
            "user_type" => $session->get('token'),
            "college_id" => $collegeId,
            "active" => 1
        ];
        $model = new CareerguideModel();
        // $id = $session->get('idCareerGuide');
        if ($model->insert($data)) {
            $response = [
                'status' => 200,
                'messages' => 'Successfully Career Details Added',
                'data' => [],
            ];

            // $email = \Config\Services::email();
            //     $email->setFrom('support@springandfall.in', 'Spring and Fall');
            //     $email->setTo("sknazim1818@gmail.com");
            //    //  $email->setSubject('Welcome to Spring and Fall ' . $this->request->getVar('name') . '');
            //     $email->setSubject('Welcome to Spring and Fall ');
            //    //  $url = "http://" . $_SERVER['SERVER_NAME'] . '/user/verify.php?id=' . $lastId . '&token=' . $token;
            //     $data = ["username" => "NazimSpring"];
            //     $body = view('templates/email', $data);
   
            //     $email->setMessage($body);
            //     if ($email->send()) {
            //         echo "email sent";
            //     } else {
            //         echo "email failed";
            //     }

            echo json_encode(["status" => 1, "message" => "Your Query submitted, We'll callback soon.!!"]);
        } else {

            $response = [
                'status' => 500,
                "error" => true,
                'messages' => 'Failed to add Career Details',
                'data' => [],
            ];
            echo json_encode(["status" => 2, "message" => "Something Went Wrong"]);
        }
    }
   }
    public function session_expire()
    {
        $session = session();
        $session->remove('careerFirstname');
        $session->remove('careerLastname');
        $session->remove('careerEmail');
        $session->remove('careerPhone');
        $session->remove('careerAddress_1');
        $session->remove('careerAddress_2');
        $session->remove('careerCity');
        $session->remove('careerState');
        $session->remove('careerPincode');
        $session->remove('careerHighest_qualification');
        $session->remove('careerHighest_qualification_passing_year');
        $session->remove('careerHigherSecondary');
        $session->remove('careerHigherSecondary_passing_year');
        $session->remove('careerSecondary');
        $session->remove('careerSecondary_passing_year');
        $session->remove('userType');

        return redirect()->to('https://springandfall.in/');
        // return redirect()->to('http://localhost:8080/');


    }
}