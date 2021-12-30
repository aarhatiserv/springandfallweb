<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CollegeModel;
use App\Models\CourseModel;
use App\Models\CareerguideModel;
use App\Models\UserModel;
use \Firebase\JWT\JWT;

class CollegeController extends Controller
 {
    public function index()
 {
        //
    }

    public function getColleges( $country )
 {
        if ( !empty( $country ) ) {

            $model = new CollegeModel();
            $data2 = $model->where( 'country', $country )->findAll();
            $data = array();
            for($i = 0; $i<count($data2); $i++){
                // $data.push($data2[$i]);
                $db = \Config\Database::connect();
                $query = $db->query("SELECT  department.name as d_name, colleges.id as college_id FROM course INNER JOIN department ON course.department_id = department.id INNER JOIN colleges ON course.college_id = colleges.id WHERE course.college_id = '".$data2[$i]['id']."'");

                array_push($data, $query->getResult());
            }
            $data = array_unique($data);


            echo json_encode( [ 'status' => 1, 'data' => $data] );
        } else {
            return redirect()->to( 'https://springandfall.in/university-or-college-selection' );
            // return redirect()->to( 'http://localhost:8080/consultation' );
        }
    }

    public function getCollegesWithCourses( $country, $course )
 {
        $model = new CollegeModel();

        $dataAll = $model->where( 'country', $country )->findAll();

        $data = array();
        for ( $i = 0; $i<count( $dataAll );
        $i++ ) {
            if ( strpos( $dataAll[ $i ][ 'courses' ], $course ) !== false ) {

                array_push( $data, $dataAll[ $i ] );
            }
        }
        // getCoursesClickCountry($data);
        echo json_encode( [ 'status' => 1, 'data' => $data ] );

    }

public function getCoursesClickCountry($country){

    $data['title'] = "Consultation";
    echo view('templates/header', $data);
    echo view('pages/university-or-college-selection', $country);
    echo view('templates/footer', $data);
}

    // ------------------------------------------Single Course-------------------------------

    public function getCourse( $course )
 {
        $model = new CollegeModel();
        $dataAll = $model->findAll();

        $data = array();
        for ( $i = 0; $i<count( $dataAll );
        $i++ ) {
            if ( strpos( $dataAll[ $i ][ 'courses' ], $course ) !== false ) {

                array_push( $data, $dataAll[ $i ] );
            }
        }
        echo json_encode( [ 'status' => 1, 'data' => $data ] );
    }
    // ------------------------------------------Single Level-------------------------------

    public function getLevel( $level )
 {
        $model = new CollegeModel();
        $dataAll = $model->findAll();

        $data = array();
        for ( $i = 0; $i<count( $dataAll );
        $i++ ) {
            if ( strpos( $dataAll[ $i ][ 'levels' ], $level ) !== false ) {

                array_push( $data, $dataAll[ $i ] );
            }
        }
        echo json_encode( [ 'status' => 1, 'data' => $data ] );
    }

    //  ------------------------------------------Country And Levels---------------------

    public function getCountryAndLevels( $country, $level )
 {
        $model = new CollegeModel();
        // $data = [ $country, $courses ];
        $dataAll = $model->where( 'country', $country )->findAll();

        $data = array();
        for ( $i = 0; $i<count( $dataAll );
        $i++ ) {
            if ( strpos( $dataAll[ $i ][ 'levels' ], $level ) !== false ) {

                array_push( $data, $dataAll[ $i ] );
            }
        }
        echo json_encode( [ 'status' => 1, 'data' => $data ] );
    }

    //  ------------------------------------------Course And Levels---------------------

    public function getCourseAndLevel( $course, $level )
 {
        $model = new CollegeModel();
        // $data = [ $country, $courses ];
        $dataAll = $model->findAll();

        $data = array();
        for ( $i = 0; $i<count( $dataAll );
        $i++ ) {
            if ( strpos( $dataAll[ $i ][ 'courses' ], $course ) !== false ) {
                if ( strpos( $dataAll[ $i ][ 'levels' ], $level ) !== false ) {
                    array_push( $data, $dataAll[ $i ] );
                }
            }
        }
        echo json_encode( [ 'status' => 1, 'data' => $data ] );
    }

    //  ------------------------------------------Country And Course And Levels---------------------

    public function getCountryAndCourseAndLevel( $country, $course, $level )
 {
        $model = new CollegeModel();
        $dataAll = $model->where( 'country', $country )->findAll();

        $data = array();
        for ( $i = 0; $i<count( $dataAll );
        $i++ ) {
            if ( strpos( $dataAll[ $i ][ 'courses' ], $course ) !== false ) {
                if ( strpos( $dataAll[ $i ][ 'levels' ], $level ) !== false ) {
                    array_push( $data, $dataAll[ $i ] );
                }
            }
        }
        echo json_encode( [ 'status' => 1, 'data' => $data ] );
    }

    public function careerGuidePost()
 {

        $session  = session();

        $session->set( 'careerFirstname', $this->request->getVar( 'firstName' ) );
        $session->set( 'careerLastname', $this->request->getVar( 'lastName' ) );
        $session->set( 'careerEmail', $this->request->getVar( 'email' ) );
        $session->set( 'careerPhone', $this->request->getVar( 'phone' ) );
        $session->set( 'careerAddress_1', $this->request->getVar( 'addressline1' ) );
        $session->set( 'careerAddress_2', $this->request->getVar( 'addressline2' ) );
        $session->set( 'careerCity', $this->request->getVar( 'city' ) );
        $session->set( 'careerState', $this->request->getVar( 'state' ) );
        $session->set( 'careerPincode', $this->request->getVar( 'pin' ) );
        $session->set( 'careerHighest_qualification', $this->request->getVar( 'qualification' ) );
        $session->set( 'careerHighest_qualification_passing_year', $this->request->getVar( 'passingYear' ) );
        $session->set( 'careerHigherSecondary', $this->request->getVar( 'higherSecondary' ) );
        $session->set( 'careerHigherSecondary_passing_year', $this->request->getVar( 'higherSecondaryYear' ) );
        $session->set( 'careerSecondary', $this->request->getVar( 'secondary' ) );
        $session->set( 'careerSecondary_passing_year', $this->request->getVar( 'secondaryPassingYear' ) );
        $session->set( 'careerUserType', 'guest' );

        // register guest to parmanent
        $userModelGuest = new UserModel();
        $password = uniqid();
        $userDataGuest = [
            'name' => $session->get( 'careerFirstname' ).' '.$session->get( 'careerLastname' ),
            'phone' => $session->get( 'careerPhone' ),
            'email' => $session->get( 'careerEmail' ),
            'password' => password_hash( $password, PASSWORD_DEFAULT ),
            'passtext' => $password,
            'city' => $session->get( 'careerCity' ),
            'state' => $session->get( 'careerState' ),
            'pin' => $session->get( 'careerPincode' ),
            'highest_qualification' => $session->get( 'careerHighest_qualification' ),
            'highest_qualification_passing_year' => $session->get( 'careerHighest_qualification_passing_year' ),
            'higher_secondary' => $session->get( 'careerHigherSecondary' ),
            'higher_secondary_passing_year' => $session->get( 'careerHigherSecondary_passing_year' ),
            'secondary' =>$session->get( 'careerSecondary_passing_year' ),
            'secondary_passing_year' => $session->get( 'careerSecondary_passing_year' ),
        ];
        $alreadyEmailFound = $userModelGuest->where( 'email', $session->get( 'careerEmail' ) )->first();
        if ( !empty( $alreadyEmailFound ) ) {
            echo json_encode( [ 'status' => 4, 'message' => 'Your Email already register, please sign in!' ] );
        } else {
            if ( $userModelGuest->insert( $userDataGuest ) ) {
                $lastId = $userModelGuest->insertID();

                // print_r( $lastid );
                // exit;
                $token = sha1( $lastId );
                $email = \Config\Services::email();
                $email->setFrom( 'support@springandfall.in', 'Spring and Fall' );
                $email->setTo( $session->get( 'careerEmail' ) );
                $email->setSubject( 'Welcome to Spring and Fall ' . $this->request->getVar( 'name' ) . '' );
                $url = 'http://' . $_SERVER[ 'SERVER_NAME' ] . '/verifyGuest/' . $lastId . '/' . $token;
                $data = [ 'username' => $session->get( 'careerFirstname' ), 'url' => $url ];
                $body = view( 'templates/emailGuestVerify', $data );
                $email->setMessage( $body );
                if ( $email->send() ) {

                    // --------------------------------------------------
                    $email1 = \Config\Services::email();
                    $email1->setFrom( 'support@springandfall.in', 'Spring and Fall' );
                    $email1->setTo( 'sknazim4749@gmail.com' );
                    $email1->setSubject( 'New Leads Register' );
                    $email1->setMessage( '<p>Name :' . $session->get( 'careerFirstname' ).' '.$session->get( 'careerLastname' ) . '<br> Contact no :' .$session->get( 'careerPhone' ). '<br> email :' . $session->get( 'careerEmail' ) . ' </p>' );
                    if ( $email1->send() ) {
                        $response = [
                            'status' => 200,
                            'error' => false,
                            'messages' => 'Please check your email inbox',
                            'data' => []
                        ];
                        echo json_encode( [ 'status' => 1, 'message' => 'Email send to your emailID and Please Verify Your Email' ] );
                    } else {
                        $response = [
                            'status' => 200,
                            'error' => true,
                            'messages' => 'something went wrong',
                            'data' => []
                        ];
                        echo json_encode( [ 'status' => 1, 'message' => 'Email Not send to your emailID' ] );
                    }

                    // --------------------------------------------------
                } else {
                    $response = [
                        'status' => 200,
                        'error' => true,
                        'messages' => 'something went wrong',
                        'data' => []
                    ];
                    echo json_encode( [ 'status' => 1, 'message' => 'Email Not send to your emailID' ] );
                }
                // echo json_encode( [ 'status' => 1, 'message' => 'Register your Details but email not send' ] );
            } else {

            }

        }

        // echo json_encode( [ 'status' => 1, 'message' => 'Thank you' ] );

    }

    // upload image post data from career-guide

    // public function careerGuideImagePost()
    // {
    //     $data = array();

    //     // Read new token and assign to $data[ 'token' ]
    //     $data[ 'token' ] = csrf_hash();

    //     ## Validation
    //     $validation = \Config\Services::validation();

    //     $input = $validation->setRules( [
    //         'file' => 'uploaded[file]|max_size[file,5120]|ext_in[file,jpeg,jpg,docx,pdf],'
    // ] );

    //     if ( $validation->withRequest( $this->request )->run() == FALSE ) {

    //         $data[ 'success' ] = 0;
    //         $data[ 'error' ] = $validation->getError( 'file' );
    // Error response

    //     } else {

    //         if ( $file = $this->request->getFile( 'file' ) ) {
    //             if ( $file->isValid() && !$file->hasMoved() ) {
    //                 // Get file name and extension
    //                 $name = $file->getName();
    //                 $ext = $file->getClientExtension();

    //                 // Get random file name
    //                 $newName = $file->getRandomName();

    //                 // Store file in public/uploads/career-guide folder
    //                 $file->move( '../public/uploads/career-guide', $newName );

    //                 // File path to display preview
    //                  $filepath = base_url() . '/uploads/career-guide/' . $newName;

    //                 // Response
    //                 $data[ 'success' ] = 1;
    //                 $data[ 'message' ] = 'Uploaded Successfully!';
    //                 $data[ 'filepath' ] = $filepath;
    //                 $data[ 'extension' ] = $ext;
    //             } else {
    //                 // Response
    //                 $data[ 'success' ] = 2;
    //                 $data[ 'message' ] = 'File not uploaded.';
    //             }
    //         } else {
    //             // Response
    //             $data[ 'success' ] = 2;
    //             $data[ 'message' ] = 'File not uploaded.';
    //         }
    //     }
    //     return $this->response->setJSON( $data );
    // }

    public function apply()
 {
        $session = session();
        $collegeId = $this->request->getVar( 'id' );

        if ( !empty( $session->get( 'token' ) ) ) {
            $data = [
                'requested_for' => 'career-guide',
                'user_type' => $session->get( 'userId' ),
                'college_id' => $collegeId,
                'active' => 1
            ];
            $model = new CareerguideModel();
            $userID = $session->get( 'userId' );
            // $id = $session->get( 'idCareerGuide' );
            $appliedCollege = $model->where( "college_id = '$collegeId' AND user_type = '$userID'" )->findAll();
            if ( !empty( $appliedCollege ) ) {
                echo json_encode( [ 'status' => 3, 'message' => 'You Have Already Applied This College' ] );
            } else {
                if ( $model->insert( $data ) ) {
                    $response = [
                        'status' => 200,
                        'messages' => 'Successfully Career Details Added',
                        'data' => [],
                    ];

                    $leadsLastId = $model->insertID();
                    $leadsData = $model->where( 'id = ', $leadsLastId )->findAll();

                    $userModel = new UserModel();
                    $userData = $userModel->where( 'id = ', $leadsData[ 0 ][ 'user_type' ] )->findAll();

                    $collegeModel = new CollegeModel();
                    $collegeData = $collegeModel->where( 'id = ', $leadsData[ 0 ][ 'college_id' ] )->findAll();

                    $email = \Config\Services::email();
                    $email->setFrom( 'support@springandfall.in', 'Spring and Fall' );
                    $email->setTo( $userData[ 0 ][ 'email' ] );
                    $email->setSubject( 'Spring and Fall College Apply by - ' . $userData[ 0 ][ 'name' ] . '' );

                    $data = [ 'username' => $userData[ 0 ][ 'name' ], 'phone' => $userData[ 0 ][ 'phone' ], 'email' =>$userData[ 0 ][ 'email' ], 'collegeName' =>$collegeData[ 0 ][ 'names' ], 'country' =>$collegeData[ 0 ][ 'country' ] ];
                    $body = view( 'templates/emailForApplyColleges', $data );
                    $email->setMessage( $body );

                    if ( $email->send() ) {
                        // --------------------------------------------------
                        $email1 = \Config\Services::email();
                        $email1->setFrom( 'support@springandfall.in', 'Spring and Fall' );
                        $email1->setTo( 'springnfall.20@gmail.com' );
                        $email1->setSubject( 'Spring and Fall College Apply by - ' . $userData[ 0 ][ 'name' ] . '' );

                        $data1 = [ 'username' => $userData[ 0 ][ 'name' ], 'phone' => $userData[ 0 ][ 'phone' ], 'email' =>$userData[ 0 ][ 'email' ], 'collegeName' =>$collegeData[ 0 ][ 'names' ], 'country' =>$collegeData[ 0 ][ 'country' ] ];
                        $body = view( 'templates/emailForApplyColleges', $data1 );

                        if ( $email1->send() ) {
                            $response = [
                                'status' => 200,
                                'error' => false,
                                'messages' => 'Please check your email inbox',
                                'data' => []
                            ];
                            // echo json_encode( [ 'status' => 1, 'message' => 'Email send to your emailID and Please Verify Your Email' ] );
                        } else {
                            $response = [
                                'status' => 200,
                                'error' => true,
                                'messages' => 'something went wrong',
                                'data' => []
                            ];
                            // echo json_encode( [ 'status' => 1, 'message' => 'Email Not send to your emailID' ] );
                        }

                        // --------------------------------------------------
                        echo json_encode( [ 'status' => 1, 'message' => "Your Query submitted, We'll callback soon.!!" ] );
                    } else {
                        $data = $email->printDebugger( [ 'headers' ] );
                        // print_r( $data );
                        echo json_encode( [ 'status' => 2, 'message' => 'Your Query Submitted, but mail not send' ] );
                    }

                } else {

                    $response = [
                        'status' => 500,
                        'error' => true,
                        'messages' => 'Failed to add Career Details',
                        'data' => [],
                    ];
                    echo json_encode( [ 'status' => 2, 'message' => 'Something Went Wrong' ] );
                }
            }
        } else {
            $data = [
                'firstname' => $session->get( 'careerFirstname' ),
                'lastname' =>  $session->get( 'careerLastname' ),
                'email' => $session->get( 'careerEmail' ),
                'phone' => $session->get( 'careerPhone' ),
                'address_1' => $session->get( 'careerAddress_1' ),
                'address_2' => $session->get( 'careerAddress_2' ),
                'city' => $session->get( 'careerCity' ),
                'state' => $session->get( 'careerState' ),
                'pincode' => $session->get( 'careerPincode' ),
                'highest_qualification' => $session->get( 'careerHighest_qualification' ),
                'highest_qualification_passing_year' => $session->get( 'careerHighest_qualification_passing_year' ),
                'higher_secondary' => $session->get( 'careerHigherSecondary' ),
                'higher_secondary_passing_year' => $session->get( 'careerHigherSecondary_passing_year' ),
                'secondary' => $session->get( 'careerSecondary' ),
                'secondary_passing_year' => $session->get( 'careerSecondary_passing_year' ),
                'requested_for' => 'career-guide',
                'user_type' =>  $session->get( 'careerUserType' ),
                'college_id' => $collegeId,
                'active' => 1
            ];

            $model = new CareerguideModel();
            // $id = $session->get( 'idCareerGuide' );
            if ( $model->insert( $data ) ) {
                $response = [
                    'status' => 200,
                    'messages' => 'Successfully Career Details Added',
                    'data' => [],
                ];

                $collegeModel = new CollegeModel();
                $collegeData = $collegeModel->where( 'id = ', $collegeId )->findAll();

                // mail sening code

                $email = \Config\Services::email();
                $email->setFrom( 'support@springandfall.in', 'Spring and Fall' );
                $email->setTo( $session->get( 'careerEmail' ) );
                $email->setSubject( 'Spring and Fall College Apply by - ' . $session->get( 'careerFirstname' ) . '' );
                // $email->setMessage( '<p>Name :' . $session->get( 'careerFirstname' ).$session->get( 'careerLastname' ) . '<br> Contact no :' . $session->get( 'careerPhone' ) . '<br> email :' . $session->get( 'careerEmail' ) . ' </p>' );
                $data = [ 'username' => $session->get( 'careerFirstname' ).$session->get( 'careerLastname' ), 'phone' => $session->get( 'careerPhone' ), 'email' =>$session->get( 'careerEmail' ), 'collegeName' =>$collegeData[ 0 ][ 'names' ], 'country' =>$collegeData[ 0 ][ 'country' ] ];
                $body = view( 'templates/emailForApplyColleges', $data );
                $email->setMessage( $body );

                if ( $email->send() ) {
                    // --------------------------------------------------
                    $email1 = \Config\Services::email();
                    $email1->setFrom( 'support@springandfall.in', 'Spring and Fall' );
                    $email1->setTo( 'springnfall.20@gmail.com' );
                    $email1->setSubject( 'Spring and Fall College Apply by - ' . $session->get( 'careerFirstname' ) . '' );
                    // $email->setMessage( '<p>Name :' . $session->get( 'careerFirstname' ).$session->get( 'careerLastname' ) . '<br> Contact no :' . $session->get( 'careerPhone' ) . '<br> email :' . $session->get( 'careerEmail' ) . ' </p>' );
                    $data1 = [ 'username' => $session->get( 'careerFirstname' ).$session->get( 'careerLastname' ), 'phone' => $session->get( 'careerPhone' ), 'email' =>$session->get( 'careerEmail' ), 'collegeName' =>$collegeData[ 0 ][ 'names' ], 'country' =>$collegeData[ 0 ][ 'country' ] ];
                    $body = view( 'templates/emailForApplyColleges', $data1 );

                    if ( $email1->send() ) {
                        $response = [
                            'status' => 200,
                            'error' => false,
                            'messages' => 'Please check your email inbox',
                            'data' => []
                        ];
                        // echo json_encode( [ 'status' => 1, 'message' => 'Email send to your emailID and Please Verify Your Email' ] );
                    } else {
                        $response = [
                            'status' => 200,
                            'error' => true,
                            'messages' => 'something went wrong',
                            'data' => []
                        ];
                        // echo json_encode( [ 'status' => 1, 'message' => 'Email Not send to your emailID' ] );
                    }

                    // --------------------------------------------------

                    echo json_encode( [ 'status' => 1, 'message' => "Your Query submitted, We'll callback soon.!!" ] );

                } else {
                    $data = $email->printDebugger( [ 'headers' ] );
                    // print_r( $data );
                    echo json_encode( [ 'status' => 2, 'message' => 'Your Query Submitted, but mail not send' ] );

                }

            } else {

                $response = [
                    'status' => 500,
                    'error' => true,
                    'messages' => 'Failed to add Hot Courses',
                    'data' => [],
                ];
                echo json_encode( [ 'status' => 2, 'message' => 'please try again later' ] );
            }
        }
        //  echo json_encode( [ 'status' => 1, 'message' => 'call'.$this->firstname ] );
        // }
    }

    public function applyForCollegeInConsultation() {

        $session = session();

        $collegeId = $this->request->getVar( 'id' );
        if ( empty( $session->get( 'token' ) ) ) {
            echo json_encode( [ 'status' => 2, 'message' => 'Please signin or signup, then you can apply college' ] );
        } else {
            $data = [
                'requested_for' => 'consultation',
                'user_type' => $session->get( 'userId' ),
                'college_id' => $collegeId,
                'active' => 1
            ];
            $model = new CareerguideModel();
            $userID = $session->get( 'userId' );
            // $id = $session->get( 'idCareerGuide' );
            $appliedCollege = $model->where( "college_id = '$collegeId' AND user_type = '$userID'" )->findAll();
            if ( !empty( $appliedCollege ) ) {
                echo json_encode( [ 'status' => 3, 'message' => 'You Have Already Applied This College' ] );
            } else {
                if ( $model->insert( $data ) ) {
                    $response = [
                        'status' => 200,
                        'messages' => 'Successfully Career Details Added',
                        'data' => [],
                    ];

                    $leadsLastId = $model->insertID();
                    $leadsData = $model->where( 'id = ', $leadsLastId )->findAll();

                    $userModel = new UserModel();
                    $userData = $userModel->where( 'id = ', $leadsData[ 0 ][ 'user_type' ] )->findAll();

                    $collegeModel = new CollegeModel();
                    $collegeData = $collegeModel->where( 'id = ', $leadsData[ 0 ][ 'college_id' ] )->findAll();

                    $email = \Config\Services::email();
                    $email->setFrom( 'support@springandfall.in', 'Spring and Fall' );
                    $email->setTo( $userData[ 0 ][ 'email' ] );
                    $email->setSubject( 'Spring and Fall College Apply by - ' . $userData[ 0 ][ 'name' ] . '' );

                    $data = [ 'username' => $userData[ 0 ][ 'name' ], 'phone' => $userData[ 0 ][ 'phone' ], 'email' =>$userData[ 0 ][ 'email' ], 'collegeName' =>$collegeData[ 0 ][ 'names' ], 'country' =>$collegeData[ 0 ][ 'country' ] ];
                    $body = view( 'templates/emailForApplyColleges', $data );
                    $email->setMessage( $body );

                    if ( $email->send() ) {
                        // --------------------------------------------------
                        $email1 = \Config\Services::email();
                        $email1->setFrom( 'support@springandfall.in', 'Spring and Fall' );
                        $email1->setTo( 'springnfall.20@gmail.com' );
                        $email1->setSubject( 'Spring and Fall College Apply by - ' . $userData[ 0 ][ 'name' ] . '' );

                        $data1 = [ 'username' => $userData[ 0 ][ 'name' ], 'phone' => $userData[ 0 ][ 'phone' ], 'email' =>$userData[ 0 ][ 'email' ], 'collegeName' =>$collegeData[ 0 ][ 'names' ], 'country' =>$collegeData[ 0 ][ 'country' ] ];
                        $body = view( 'templates/emailForApplyColleges', $data1 );

                        if ( $email1->send() ) {
                            $response = [
                                'status' => 200,
                                'error' => false,
                                'messages' => 'Please check your email inbox',
                                'data' => []
                            ];
                            // echo json_encode( [ 'status' => 1, 'message' => 'Email send to your emailID and Please Verify Your Email' ] );
                        } else {
                            $response = [
                                'status' => 200,
                                'error' => true,
                                'messages' => 'something went wrong',
                                'data' => []
                            ];
                            // echo json_encode( [ 'status' => 1, 'message' => 'Email Not send to your emailID' ] );
                        }

                        // --------------------------------------------------

                        echo json_encode( [ 'status' => 1, 'message' => "Your Query submitted, We'll callback soon.!!" ] );
                    } else {
                        $data = $email->printDebugger( [ 'headers' ] );
                        // print_r( $data );
                        echo json_encode( [ 'status' => 2, 'message' => 'Your Query Submitted, but mail not send' ] );

                    }

                } else {

                    $response = [
                        'status' => 500,
                        'error' => true,
                        'messages' => 'Failed to add Career Details',
                        'data' => [],
                    ];
                    echo json_encode( [ 'status' => 2, 'message' => 'Something Went Wrong' ] );
                }
            }
        }
    }

    public function getCollegeDetails( $country, $id ) {
        $data[ 'title' ] = 'College Details';
        // Capitalize the first letter
        $page = 'college';

        $model = new CollegeModel();
        $data[ 'collegeDetails' ] = $model->where( 'id = ', $id )->findAll();
        //  print_r( $data[ 'collegeDetails' ][ 0 ][ 'country' ] );
        $data[ 'similarUniversity' ] = $model->where( 'country = ', $data[ 'collegeDetails' ][ 0 ][ 'country' ] )->findAll( 4 );
        
        $db1 = \Config\Database::connect("blogDb");
        $query = $db1->query('SELECT * FROM posts ORDER BY RAND() LIMIT 3;');
        $data['blogPostData'] = $query->getResult();

        echo view( 'templates/header', $data );
        echo view( 'pages/' . $page, $data );
        echo view( 'templates/footer', $data );
    }

    public function session_expire()
 {
        $session = session();
        $session->remove( 'careerFirstname' );
        $session->remove( 'careerLastname' );
        $session->remove( 'careerEmail' );
        $session->remove( 'careerPhone' );
        $session->remove( 'careerAddress_1' );
        $session->remove( 'careerAddress_2' );
        $session->remove( 'careerCity' );
        $session->remove( 'careerState' );
        $session->remove( 'careerPincode' );
        $session->remove( 'careerHighest_qualification' );
        $session->remove( 'careerHighest_qualification_passing_year' );
        $session->remove( 'careerHigherSecondary' );
        $session->remove( 'careerHigherSecondary_passing_year' );
        $session->remove( 'careerSecondary' );
        $session->remove( 'careerSecondary_passing_year' );
        $session->remove( 'userType' );

        return redirect()->to( 'https://springandfall.in/' );
        // return redirect()->to( 'http://localhost:8080/' );

    }

    private function getKey()
 {
        return 'aarhat@123';
    }

}