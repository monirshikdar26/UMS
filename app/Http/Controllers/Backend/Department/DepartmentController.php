<?php

namespace App\Http\Controllers\Backend\Department;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function DepartmentView(){
        return view('backend.Department.view_department');
    }
}
