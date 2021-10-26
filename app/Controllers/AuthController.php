<?php

namespace App\Controllers;

use App\Models\ContactNowModel;
use CodeIgniter\Controller;

class Pages extends Controller
{

    public function signup()
    {
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
            ]);
            // mail sening code  

            $email = \Config\Services::email();
            $email->setFrom('support@springandfall.in', 'Spring and Fall');
            $email->setTo('aarhatiserv@gmail.com');
            $email->setCC('r3ddy03@gmail.com');
            // $email->setBCC('them@their-example.com');
            $tdata = $this->request->getRawInput();

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
}