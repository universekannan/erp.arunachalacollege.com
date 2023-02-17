<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Config;


use App\Models\Core\Setting;
use App\Models\Admin\Admin;
use App\Models\Core\Order;
use App\Models\Core\Customers;
use App\Models\Core\Drivers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
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

    public function manageCustomers(){
	$usertype = auth()->user()->user_types_id;
     if($usertype == 2){
        $manageCustomers = DB::table('customer')->where('center_id', '=',auth()->user()->center_id)->orderBy('id','Asc')->get();
    }else {
         $manageCustomers = DB::table('customer')->orderBy('id','Asc')->get();

         $manageunassigned = DB::table('customer')->where('cust_status', '=','unassigned')->orderBy('id','Asc')->get();

         $manageassigned = DB::table('customer')->where('cust_status', '=','assigned')->orderBy('id','Asc')->get(); 

         $managecompleted = DB::table('customer')->where('cust_status', '=','completed')->orderBy('id','Asc')->get();
    }
	
	
	
        return view("users.index")->with('manageCustomers',$manageCustomers);
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
            $customers_id = DB::table('users')->insertGetId([
                'full_name'		 		    =>   $request->first_name.' '.$request->last_name,
                'first_name'		 		=>   $request->first_name,
                'last_name'			 		=>   $request->last_name,
                'mobile_number'	 			=>	 $request->mobile_number,
                'email'	 					=>   $request->email,
                'password'		 			=>   Hash::make($request->password),
                'check_password'		 	=>   $request->password,
                'gender'                    =>   $request->gender,
                'address'                   =>   $request->address,
                'created_at'                =>   date('Y-m-d H:i:s'),
                'user_types_id'			    =>	 $request->user_types_id
                ]);

         $addUserRoles = DB::table('user_permission')->insert([
                'user_types_id'   =>   $request->user_types_id,
                'user_id'         =>   $customers_id,
                ]);
                return redirect()->back(); 
        }
 
     /****** Edit  Roles Start ******/

public function editUser(Request $request){

            $edituser = DB::table('users')->where('id',$request->id)->update([
                'full_name'                 =>   $request->first_name.' '.$request->last_name,
                'first_name'                =>   $request->first_name,
                'last_name'                 =>   $request->last_name,
                'mobile_number'             =>   $request->mobile_number,
                'email'                     =>   $request->email,
                'gender'                    =>   $request->gender,
                'address'                   =>   $request->address,
                'status'                    =>   $request->status,
                'created_at'                =>   date('Y-m-d H:i:s'),
                'user_types_id'             =>   $request->user_types_id
                ]);
                            //Print_r($edituser);die();

                return redirect()->back(); 
            }
/******   Edit Users End ******/

}
