<?php

namespace App\Controllers;

use App\Models\ContactNowModel;
use CodeIgniter\Controller;
use App\Models\PagesModel;
use App\Models\SectionsModel;
use App\Models\ReviewModel;
use App\Models\HotCoursesModel;
use App\Models\SubscribeModel;

class Pages extends Controller
{
    public function index()
    {

        $data['title'] = 'Home';

        $page = "home";

        $pagesModel = new PagesModel();
        $pages_data = $pagesModel->where('name', $page)->findAll();
        // print_r($pages_data[0]['id']);
        
        $sectionModel = new SectionsModel();
        $data['sectionData'] = $sectionModel->where('pages_id', $pages_data[0]['id'])->findAll();
        
        $reviewModel = new ReviewModel();
        $data['review'] = $reviewModel->findAll();

        $hCoursesModel = new HotCoursesModel();
        $data['hotCourses'] = $hCoursesModel->findAll();

        echo view('templates/header', $data);
        echo view('pages/home');
        echo view('templates/footer', $data);
    }

    public function view($page = 'home')
    {
        $session = session();
        // $session->remove('flagHome');
        if ($this->request->getMethod() === 'post' && $this->validate([
            'first_name' => 'required|min_length[3]|max_length[12]',
            'last_name' => 'required|min_length[3]|max_length[12]',
            'email' => 'required',
            'mobileno' => 'required',
            'service' => 'required',
            'country' => 'required',
            'body'  => 'required',
        ])) {
        } else {

            // $data['title'] = ucfirst($page); // Capitalize the first letter

            // echo view('templates/header', $data);
            // echo view('pages/'.$page, $data);
            // echo view('templates/footer', $data);

        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $pagesModel = new PagesModel();
        $pages_data = $pagesModel->where('name', $page)->find();

        if($pages_data){
        $sectionModel = new SectionsModel();
        $data['sectionData'] = $sectionModel->where('pages_id', $pages_data[0]['id'])->findAll();
        }
        $reviewModel = new ReviewModel();
        $data['review'] = $reviewModel->findAll();

        $hCoursesModel = new HotCoursesModel();
        $data['hotCourses'] = $hCoursesModel->findAll();
        
        echo view('templates/header', $data);
        echo view('pages/' . $page, $data);
        echo view('templates/footer', $data);
    
}

    public function testdata()
    {

        $model = new ContactNowModel();
        $data['leads'] = $model->getLeads();
        echo "hello World";
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }


    public function callback()
    {
        if ($this->request->getMethod() === 'post') {
            // echo json_encode(["name" => "John "]);
            // echo json_encode(["vars" => $this->request->getVar('first_name')]);
            $fname = $this->request->getVar('fullname');
            // $lname = $this->request->getVar('last_name');
            $cemail = $this->request->getVar('email');
            $mobile = $this->request->getVar('phone');
            $service = $this->request->getVar('service');
            $country = $this->request->getVar('country');
            $message = $this->request->getVar('message');

            // model
            $model =  new ContactNowModel();

            // saving users in database
            $model->save([
                'name' => $fname,
                'email' => $cemail,
                'phone' =>  $mobile,
                'service' => $service,
                'country' => $country,
                'message' => $message,
                'active' => 1
            ]);
            // mail sening code  

            $email = \Config\Services::email();
            $email->setFrom('support@springandfall.in', 'Spring and Fall');
            $email->setTo('aarhatiserv@gmail.com');
            // $email->setCC('r3ddy03@gmail.com');
            // $email->setBCC('them@their-example.com');
            // $tdata = $this->request->getRawInput();

            // echo $table->generate($tdata);
            // echo json_encode($tdata);
            // 
            // exit;

            $email->setSubject('Spring and Fall Callback requested by - ' . $this->request->getVar('fullname') . '');
            $email->setMessage('<p>Name :' . $fname . '<br> Contact no :' . $mobile . '<br> email :' . $cemail . '<br> Service :' . $service . '<br> country: ' . $country . ' <br> message: ' . $message . ' </p>');

            if ($email->send()) {

                echo json_encode(["status" => 1, "message" => "Your Query submitted, We'll callback soon.!!"]);
            } else {
                $data = $email->printDebugger(['headers']);
                // print_r($data);
                echo json_encode(["status" => 2, "message" => "please try again later"]);
                
            }
            // var_dump($request->getRawInput());
        } else {
            echo json_encode(["name" => "Sins "]);
        }
    }


// For flaf-section routes send to consultation page

    // public function flag($flag)
    // {
    //     $session = session();
    //     $session->set('flagHome', $flag);
    //     // $url = 'http://localhost:8080/country/'.$flag;
    //     return redirect()->to('https://springandfall.in/consultation');
    //     // return redirect()->to("http://localhost:8080/consultation");
    //     // return redirect()->to($url);

    // }


    public function subscribe(){
        // print_r($this->request->getVar('email'));
        $data = [
            "email" => $this->request->getVar('email'),
            "active" => 1,
        ];
        $model = new SubscribeModel();
        if ($model->insert($data)) {
            $response = [
                'status' => 200,
                'messages' => 'Successfully Subscribe Added',
                'data' => [],
            ];

            $email = \Config\Services::email();
            $email->setFrom('support@springandfall.in', 'Spring and Fall');
            $email->setTo($this->request->getVar('email'));
            $email->setSubject('Thanks for subscribing news letter');
            // $email->setMessage('<p>Name :' . $session->get('careerFirstname').$session->get('careerLastname') . '<br> Contact no :' . $session->get('careerPhone') . '<br> email :' . $session->get('careerEmail') . ' </p>');
            $email->setMessage('<body>
                                   <h2 style="color:white; font-size:24px"> Thanks For Subscribing!</h2>
                                   </body>');

            if ($email->send()) {

                echo json_encode(["status" => 1, "message" => "Subscribe Successful"]);          
              } else {
                $data = $email->printDebugger(['headers']);
                // print_r($data);
                echo json_encode(["status" => 2, "message" => "Your Query Submitted, but mail not send"]);
                
            }

            

        } else {

            $response = [
                'status' => 500,
                "error" => true,
                'messages' => 'Failed to add Review',
                'data' => [],
            ];
            echo json_encode(["status" => 2, "message" => "please try again later"]);
        }
       
    }
   
}