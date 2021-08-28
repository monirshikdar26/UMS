<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StuRegController extends Controller
{
    public function StuView(){
        return view('backend.student.student_reg.view_student');
    }   
}
