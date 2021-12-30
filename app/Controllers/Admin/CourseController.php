<?php

namespace App\Controllers\Admin;

use App\Models\CollegeModel;
use App\Models\DepartmentModel;
use App\Models\LevelModel;
use App\Models\CourseModel;

use CodeIgniter\Controller;

class CourseController extends Controller
{
    public function index()
    {
        //echo view('admin/home');
    }
    
    
    public function addCourse($id)
    {
        $session = session();
		if(!empty($session->get('username'))){

            $coursemodel = new CourseModel();
            $model = new CollegeModel();
            $dmodel = new DepartmentModel();
            $lmodel = new LevelModel();
            // $data['collegeDatabyId'] = $model->where('id = ', $id)->findAll();
            $data['college_id'] = $id;
            $data['allDepartmentData'] = $dmodel->findAll();
            $data['allLevelData'] = $lmodel->findAll();

            $db = \Config\Database::connect();
            $query = $db->query("SELECT course.id as course_id,  department.name as d_name, level.name as l_name, course.name FROM course INNER JOIN department ON course.department_id = department.id INNER JOIN level ON course.level_id = level.id WHERE course.college_id = '$id'");
            $data['courseDetails'] = $query->getResult();

            // $data['courseDetails'] = $coursemodel->where('college_id', $id)->findAll();

            echo view('admin/Course/AddCourse', $data);
 
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}  
    }
    public function editCourse($collegeId, $id)
    {
        $session = session();
		if(!empty($session->get('username'))){

            $coursemodel = new CourseModel();
            $model = new CollegeModel();
            $dmodel = new DepartmentModel();
            $lmodel = new LevelModel();
            // $data['collegeDatabyId'] = $model->where('id = ', $id)->findAll();
            $data['college_id'] = $collegeId;
            $data['allDepartmentData'] = $dmodel->findAll();
            $data['allLevelData'] = $lmodel->findAll();

            $db = \Config\Database::connect();
            $query = $db->query("SELECT course.id as course_id, department.id as d_id, level.id as l_id, department.name as d_name, level.name as l_name, course.name as course_name FROM course INNER JOIN department ON course.department_id = department.id INNER JOIN level ON course.level_id = level.id WHERE course.id = '$id'");
            $data['courseDetailsById'] = $query->getResult();

            $db = \Config\Database::connect();
            $query = $db->query("SELECT course.id as course_id,  department.name as d_name, level.name as l_name, course.name FROM course INNER JOIN department ON course.department_id = department.id INNER JOIN level ON course.level_id = level.id WHERE course.college_id = '$collegeId'");
            $data['courseDetails'] = $query->getResult();
     
            // $data['courseDetails'] = $coursemodel->where('college_id', $id)->findAll();

            echo view('admin/Course/AddCourse', $data);
 
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}  
    }

    public function addCoursePost()
    {
        $session = session();
		if(!empty($session->get('username'))){

            $id = $this->request->getVar('id');
            $department_id = $this->request->getVar('department_id');
            $level_id = $this->request->getVar('level_id');
            $course = $this->request->getVar('course');
            
            $data = [
                "name" => $course,
                "college_id" => $id,
                "department_id" => $department_id,
                "level_id" => $level_id,
                "active"=>1
            ];

            $model = new CourseModel();
            if ($model->insert($data)) {
                $response = [
                    'status' => 200,
                    'messages' => 'Successfully college Added',
                    'data' => [],
                ];
            
                return redirect()->to('https://springandfall.in/admin/addCourse/'.$id);

            } else {

                $response = [
                    'status' => 500,
                    "error" => true,
                    'messages' => 'Failed to add college',
                    'data' => [],
                ];
            }

		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}
        
    }

    public function deleteCourse($collegeId, $id)
    {
        $session = session();
		if(!empty($session->get('username'))){

            $model = new CourseModel();
            $model->where('id',$id)->delete();
            return redirect()->to('https://springandfall.in/admin/addCourse/'.$collegeId);
            // return redirect()->to('http://localhost:8080/admin/colleges');
            
		}else{
            return redirect()->to('https://springandfall.in/admin/login');
			// return redirect()->to('http://localhost:8080/admin/login');
		}

        
    }
}
