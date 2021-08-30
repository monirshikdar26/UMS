<?php

namespace App\Http\Controllers\Backend\Faculty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function FacultyView(){
        return view('backend.Faculty.view_faculty');
    }
}
