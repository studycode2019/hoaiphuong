<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;   
use Core\Services\CourseServiceContract;
use App\Http\Requests;
use App\Model\client;
use App\Model\course;
use App\Model\course_student;
use App\Model\course_log;

class CoursesController extends Controller
{
    protected $model;
    protected $service;

    public function __construct(course $model, CourseServiceContract $service)
    {
        $this->model = $model;
        $this->service = $service;
    }
    
    public function getList() {
        $data['courses'] = course::with('courseStudents')->get();
        return view('course-list', $data);
    }
    
    public function getAdd() {
        return view('course-add');
    }
    
    public function postAdd(Request $req) {
        $data = $req->only($this->model->fillable);
        $course_id = $this->service->store($data);
        return redirect()->route('staff.course.list.get')->with('success', 'Đã thêm thành công!');
    }

    public function getEdit($course_id) {
        $data['course'] = $this->service->find($course_id);
        return view('course-edit', $data);
    }
    
    public function postEdit(Request $req) {        
        $data = $req->only($this->model->fillable);
        $course_id = $this->service->update($req->id, $data);
        return redirect()->route('staff.course.list.get')->with('success', 'Lưu thay đổi thành công!');
    }
    
    public function getView($course_id) {
        $data['course'] = course::with('courseStudents.client')->findOrFail($course_id); 
        return view('course-studentlist', $data);
    }

    public function getPhoneList($course_id) {
        $data['students'] = course_student::where('course_id', $course_id)->get();
        return view('course-phonelist', $data);
    }

    public function getLogList() {
        $data['course_logs'] = course_log::with('staff')->get();
        return view('course-loglist', $data);
    }
}
