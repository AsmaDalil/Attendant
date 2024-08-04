<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CsvController;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\perscriptionController;


use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/form', [App\Http\Controllers\FormController::class, 'index'])->name('form');
Route::view('/register','register')->name('register');
Route::view('/registration-success','registration-success')->name('registration.success');
//Route::get('/students',[App\Http\Controllers\StudentController::class, 'index']);
Route::get('/perscription',[App\Http\Controllers\perscriptionController::class, 'index']);

Route::resource('students', StudentController::class);

Route::middleware(['middleware'=>'PreventBackHistory'])->group(function () {
    Auth::routes();
});

Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('students',[AdminController::class,'students'])->name('admin.students');
    Route::get('perscriptions',[AdminController::class,'perscriptions'])->name('admin.perscription');
    Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');
 Route::get('all-students',[StudentsController::class, 'index'])->name('student.index');


    Route::post('update-profile-info',[AdminController::class,'updateInfo'])->name('adminUpdateInfo');
    Route::post('change-profile-picture',[AdminController::class,'updatePicture'])->name('adminPictureUpdate');
    Route::post('change-password',[AdminController::class,'changePassword'])->name('adminChangePassword');   

}
        
);
Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
    Route::get('profile',[UserController::class,'students'])->name('user.profile');
    Route::get('settings',[UserController::class,'settings'])->name('user.settings');
});
Route::controller(CsvController::class)->group(function(){
    Route::get('records', 'index')->name('students.records');;
    Route::get('students-export', 'export')->name('students.export');
    Route::post('students-import', 'import')->name('students.import');

});
