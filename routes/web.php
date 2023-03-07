<?php

use Illuminate\Support\Facades\Route;

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

// Route::any('{query}', function() { return view('404'); })->where('query', '.*');

Route::fallback(function () {
    return view("404");
}); 
Route::get('/', function () {
    return view('login');
});


    Route::get('/home', 'App\Http\Controllers\AdminController@login');
    Route::get('/login', 'App\Http\Controllers\AdminController@login');
    Route::post('/checkLogin', 'App\Http\Controllers\AdminController@checkLogin');
    Route::get('/logout', 'App\Http\Controllers\AdminController@logout');

    Route::get('/not_allowed', 'App\Http\Controllers\CommonController@notAllowed');

    Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@dashboard');
    Route::post('/add_roles', 'App\Http\Controllers\RolesController@addManageRolesAction');
    Route::get('/permissions/{id}', 'App\Http\Controllers\RolesController@managePermissions');
    
    Route::get('/users', 'App\Http\Controllers\UsersController@manageUsers');
    Route::post('/add_user', 'App\Http\Controllers\UsersController@addUser');
    Route::post('/add_educations', 'App\Http\Controllers\UsersController@addEducations');


    Route::get('/edit/{id}', 'App\Http\Controllers\UsersController@manageEdits');
    
    Route::post('/edit_user', 'App\Http\Controllers\UsersController@editUser');
    Route::post('/delete_user', 'App\Http\Controllers\UsersController@deleteUser');
    Route::post('/checkemail', 'App\Http\Controllers\UsersController@checkemail');
    
    Route::get('/users/attendance/{id}', 'App\Http\Controllers\UsersController@usersAttendance');

    Route::get('/users/permissions', 'App\Http\Controllers\PermissionsController@manageusers');
    Route::get('/userrole', 'App\Http\Controllers\PermissionsController@userrole');
    Route::post('/roles', 'App\Http\Controllers\PermissionsController@roles');
    Route::post('/addroles', 'App\Http\Controllers\PermissionsController@addRoles');

    Route::get('/customer', 'App\Http\Controllers\CustomerController@manageCustomers');
	Route::post('/add_customer', 'App\Http\Controllers\CustomerController@addCustomer');
    Route::post('/edit_customer', 'App\Http\Controllers\CustomerController@editCustomer');

//Students

    Route::get('/students', 'App\Http\Controllers\StudentsController@manageStudents');
    Route::post('/add_students', 'App\Http\Controllers\StudentsController@addStudents');
    Route::get('/students/edit/{id}', 'App\Http\Controllers\StudentsController@editStudents');
    Route::get('/students/beedit/{id}', 'App\Http\Controllers\StudentsController@beEdit');
    Route::get('/students/meedit/{id}', 'App\Http\Controllers\StudentsController@meEdit');
    Route::get('/students/mbaedit/{id}', 'App\Http\Controllers\StudentsController@mbaEdit');
    Route::get('/students/mcaedit/{id}', 'App\Http\Controllers\StudentsController@mcaEdit');
// Academic

    Route::get('/academic', 'App\Http\Controllers\AcademicController@manageAcademic');
    Route::post('/add_academic', 'App\Http\Controllers\AcademicController@addAcademic');
    Route::post('/edit_academic', 'App\Http\Controllers\AcademicController@editAcademic');
  
// Staffs

    Route::get('/staffs', 'App\Http\Controllers\StaffsController@manageStaffs');
    Route::post('/add_staffs', 'App\Http\Controllers\StaffsController@addStaffs');
    Route::post('/edit_staffs', 'App\Http\Controllers\StaffsController@editStaffs');

// Admision

    Route::get('/admission', 'App\Http\Controllers\AdmissionController@manageAdmission');
    Route::post('/add_students', 'App\Http\Controllers\AdmissionController@addAdmission');
    Route::get('/admission/beedit/{id}', 'App\Http\Controllers\AdmissionController@beEdit');
    Route::get('/admission/meedit/{id}', 'App\Http\Controllers\AdmissionController@meEdit');
    Route::get('/admission/mbaedit/{id}', 'App\Http\Controllers\AdmissionController@mbaEdit');
    Route::get('/admission/mcaedit/{id}', 'App\Http\Controllers\AdmissionController@mcaEdit');
    Route::Post('/getdepartment', 'App\Http\Controllers\AdmissionController@getdepartment');
    Route::post('/edit_admission', 'App\Http\Controllers\AdmissionController@editAdmission');
    Route::post('/edit_admission1', 'App\Http\Controllers\AdmissionController@editAdmission1');
    Route::post('/edit_admission2', 'App\Http\Controllers\AdmissionController@editAdmission2');

// Degeree
    
    Route::get('/degeree', 'App\Http\Controllers\AdmissionController@manageDegeree');
    Route::post('/add_degeree', 'App\Http\Controllers\AdmissionController@addDegeree');
    Route::post('/edit_degeree', 'App\Http\Controllers\AdmissionController@editDegeree');
    Route::post('/add_department', 'App\Http\Controllers\AdmissionController@addDepartment');
    Route::post('/edit_department', 'App\Http\Controllers\AdmissionController@editDepartment');


});






