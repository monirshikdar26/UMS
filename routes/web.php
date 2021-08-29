<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\Course\CourseController;
use App\Http\Controllers\Backend\Student\StuRegController;
use App\Http\Controllers\Backend\Faculty\FacultyController;
use App\Http\Controllers\Backend\Employee\EmployeeRegController;
use App\Http\Controllers\Backend\Department\DepartmentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::get('/admin/logout',[AdminController::class,'Logout'])->name('admin.logout');

// User Management All group Routes
Route::prefix('users')->group(function(){ 
    Route::get('/view',[UserController::class,'UserView'])->name('user.view');
    Route::get('/add',[UserController::class,'UserAdd'])->name('user.add');
    Route::post('/store',[UserController::class,'UserStore'])->name('user.store');
    Route::get('/edit/{id}',[UserController::class,'UserEdit'])->name('user.edit');
    Route::post('/update/{id}',[UserController::class,'UserUpdate'])->name('user.update');
    Route::get('/delete/{id}',[UserController::class,'UserDelete'])->name('user.delete');

});


Route::prefix('profile')->group(function(){
    Route::get('/view',[ProfileController::class,'ProfileView'])->name('profile.view');
    Route::get('/edit',[ProfileController::class,'ProfileEdit'])->name('profile.edit');
    Route::post('/store',[ProfileController::class,'ProfileStore'])->name('profile.store');
});


Route::prefix('student')->group(function(){
    Route::get('reg/view',[StuRegController::class,'StuView'])->name('student.reg.view');
});


Route::prefix('employee')->group(function(){
    Route::get('reg/employee/view',[EmployeeRegController::class,'EmployeeView'])->name('employee.reg.view');
    Route::get('reg/employee/add',[EmployeeRegController::class,'EmployeeAdd'])->name('employee.reg.add');
    Route::post('reg/employee/store',[EmployeeRegController::class,'EmployeeStore'])->name('employee.reg.store');
    Route::get('reg/employee/edit/{id}',[EmployeeRegController::class,'EmployeeEdit'])->name('employee.reg.edit');
    Route::post('reg/employee/update/{id}',[EmployeeRegController::class,'EmployeeUpdate'])->name('employee.reg.update');
    Route::get('reg/employee/details/{id}',[EmployeeRegController::class,'EmployeeDetails'])->name('employee.reg.details');
});
 
Route::prefix('faculty')->group(function(){
    Route::get('view',[FacultyController::class,'FacultyView'])->name('faculty.view');
    Route::get('add',[FacultyController::class,'FacultyAdd'])->name('faculty.add');
});

Route::prefix('course')->group(function(){
    Route::get('view',[CourseController::class,'CourseView'])->name('course.view');
    Route::get('add',[CourseController::class,'CourseAdd'])->name('course.add');
});

Route::prefix('department')->group(function(){
    Route::get('view',[DepartmentController::class,'DepartmentView'])->name('department.view');
    Route::get('add',[DepartmentController::class,'DepartmentAdd'])->name('department.add');
});