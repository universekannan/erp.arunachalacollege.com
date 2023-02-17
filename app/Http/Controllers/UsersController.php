<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Config;
use ApiChef\Obfuscate\Support\Facades\Obfuscate;

use App\Models\Core\Setting;
use App\Models\Admin\Admin;
use App\Models\Core\Order;
use App\Models\Core\Customers;
use App\Models\Core\Drivers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Input;
use Exception;
use App\Models\Core\Images;
use Validator;
use Hash;
use Auth;
use ZipArchive;
use File;
use Carbon\Carbon;



class UsersController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /****** View  Roles Start ******/

        public function manageUsers(){
			     $manageusers = DB::table('users')->select('users.*','user_types.*','users.id as userID')
                ->Join('user_types', 'user_types.id', '=', 'users.user_types_id')
                ->orderBy('users.id','Asc')->get();

                $manageteaching = DB::table('users')->select('users.*','user_types.*','users.id as userID')
                ->Join('user_types', 'user_types.id', '=', 'users.user_types_id')->where('users.user_types_id','4')
                ->orderBy('users.id','Asc')->get();

                $managingedituser = DB::table('users')->select('users.*','user_types.*','users.id as userID')
                ->Join('user_types', 'user_types.id', '=', 'users.user_types_id')->where('users.user_types_id','5')
                ->orderBy('users.id','Asc')->get();

                $userrole = DB::table('user_types')->where('status','Active')->get();

            return view("users.index")->with('manageusers',$manageusers)->with('userrole',$userrole)->with('manageteaching',$manageteaching)
            ->with('managingedituser',$managingedituser);
           
        }
                  
        public function manageEdits($id){
            $managingedituser = DB::table('users')->select('users.*','user_types.*','users.id as userID')
            ->Join('user_types', 'user_types.id', '=', 'users.user_types_id')
            ->where('users.id', '=', $id)
            ->first();
            $managingeditusereducation = DB::table('users_educations')->where('user_id','$id')->get();
        
            return view("users.edit")->with('managingedituser',$managingedituser)->with('managingeditusereducation',$managingeditusereducation);
            
        }

    public function manageStudents(){
            $manageStudents = DB::table('students')->orderBy('id','Asc')->get();
            return view("students.index")->with('managestudents', $manageStudents);
       }
    
    /******   View Roles  end ******/

    public function usersAttendance($id){
            $attendance = DB::table('attendances')->select('attendances.*','users.*','attendances.id as userID')
                ->Join('users', 'users.id', '=', 'attendances.user_id')
                ->orderBy('attendances.id','Asc')->get();
            return view("users.attendance")->with('attendance', $attendance);
        }

    /****** Add  Roles Action Start ******/

        public function addUser(Request $request){
               /* $email = trim($request->get('email'));
                $emailcheck = DB::table('users')->select('email')->where('email','=',$email)->get();

               if(count($emailcheck) > 0){
            return redirect('/users')->with('error', 'Email already used by another user');
        }else{*/
            $addUser = DB::table('costomer')->insertGetId([

                'first_name'		 	    =>   $request->first_name.' '.$request->last_name,
                'gender'                    =>   $request->gender,
                'age'                       =>   $request->age,
                'addres'                    =>   $request->addres,
                'status'                    =>   $request->status,
                'login_id'                  =>   $request->login_id,
                'updated_at'                =>   date('Y-m-d H:i:s'),
               
                ]);

                return redirect('/users')->with('success', 'Users Created Successfully');
        }

     /****** Edit  Roles Start ******/

        public function editUser(Request $request){
   
             $edituser = DB::table('users')->where('id',$request->id)->update([
           
                'first_name'		 	    =>   $request->first_name.' '.$request->last_name,
                'gender'                    =>   $request->gender,
                'mobile'                    =>   $request->mobile,
                'age'                       =>   $request->age,
                'address'                   =>   $request->address,
                'status'                    =>   $request->status,
                'login_id'                  =>   $request->login_id,
                'updated_at'                =>   date('Y-m-d H:i:s'),

                
                ]);
                           // Print_r($edituser);die();

                return redirect('/users')->with('success', 'Users Updated Successfully'); 
            }

            public function editStudents(Request $request){
   
                $edituser = DB::table('students')->where('id',$request->id)->update([
            
                    'first_name'              =>   $request->first_name,
                    'last_name'               =>   $request->last_name,
                    'father_name'             =>   $request->father_name,
                    'mother_name'             =>   $request->mother_name,
                    'department'              =>   $request->department,
                    'date_of_birth'           =>   $request->date_of_birth,
                    'age'                     =>   $request->age,
                    'gender'                  =>   $request->gender,
                    'adhar'                   =>   $request->adhar,
                    'father_job'              =>   $request->father_job,
                    'religion'                =>   $request->religion,
                    'mobile'                  =>   $request->mobile,
                    'address'                 =>   $request->address,
                    'pin_code'                =>   $request->pin_code,
                    'email'                   =>   $request->email,
                    'status'                  =>   $request->status,
                    'updated_at'              =>   date('Y-m-d H:i:s'),
                ]);
            
                return redirect('/students')->with('success', 'Updated Successfully'); 
            }
            public function addEducations(Request $request){

                $adduser = DB::table('users_educations')->insertGetId([
                    'course_name'             =>   $request->course_name,
                    'subject_specialisation'  =>   $request->subject_specialisation,
                    'college_name'            =>   $request->college_name,
                    'univercity_name'         =>   $request->univercity_name,
                    'ft_pt'                   =>   $request->ft_pt,
                    'reg_no'                  =>   $request->reg_no,
                    'class_obtained'          =>   $request->class_obtained,
                    'study_year'              =>   $request->study_year,
                    'created_at'              =>   date('Y-m-d H:i:s'),
                ]);
            
                return redirect('/users')->with('success', 'Added Successfully'); 
            }
            
            
/******   Edit Users End ******/

public function checkemail(Request $request){
    $email = trim($request->get('email'));
    $id = trim($request->get('id'));
    if($id == 0){
        $sql = "SELECT * FROM users where email='$email'";
    }else{
        $sql = "SELECT * FROM users where email='$email' and id <> $id";
    }
    $emailcheck = DB::select(DB::raw($sql));
    if(count($emailcheck) > 0){
        return response()->json(array("exists" => true));
    }else{
        return response()->json(array("exists" => false));   
    }
}

}
