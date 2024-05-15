<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Auth controller
Route::get('/',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'AuthLogin'])->name('AuthLogin');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::get('/calender',[AdminController::class,'holidaycalender'])->name('holidaycalender');
Route::get('/forgot_password',[AuthController::class,'forgot_password'])->name('forgot_password');
Route::post('/check_password',[AuthController::class,'check_password'])->name('check_password');

Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/newregister',[AuthController::class,'newregister'])->name('newregister');
Route::get('/reset_password/{token}',[AuthController::class,'reset_password'])->name('reset_password');
Route::post('/reset_password/{token}',[AuthController::class,'save_reset_password'])->name('save_reset_password');

Route::get('/new_student',[AdminController::class,'addstudent'])->name('addstudent');
Route::post('/save_new_student',[AdminController::class,'save_new_student'])->name('save_new_student');
Route::get('/student_details',[AdminController::class,'student_details'])->name('student_details');
Route::get('/edit_student_details/{id}',[AdminController::class,'edit_student_details'])->name('edit_student_details');
Route::post('/update_details',[AdminController::class,'update_details'])->name('update_details');
Route::get('/delete_data/{id}',[AdminController::class,'delete_data'])->name('delete_data');


Route::get('auth/login',function(){
return view('auth.login');
});

Route::group(['middleware'=>'admin'],function(){
    Route::get('admin/dashboard',function(){
        return view('admin.dashboard');
        });
       


});
Route::group(['middleware'=>'parent'],function(){
   
});
Route::group(['middleware'=>'student'],function(){
    Route::get('student/dashboard',function(){
        return view('student.dashboard');
        });
});
Route::group(['middleware'=>'teacher'],function(){
   
});