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
use DateTime;
use Carbon\CarbonPeriod;
use PDF;
use DateInterval;


class DashboardController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


     /******   dashboard Start ******/

     public function dashboard(){

        $sql = " select count(*) as userscount from users where user_types_id='1,2,3,4,5' ";
        $result = DB::select(DB::raw($sql));
        if (count($result) > 0) {
            $userscount = $result[0]->userscount;
        }
        $sql = " select count(*) as studentscount from students where user_type_id='1' ";
        $result = DB::select(DB::raw($sql));
        if (count($result) > 0) {
            $studentscount = $result[0]->studentscount;
        }
        $sql = " select count(*) as staffcount from staffs where id='id' ";
        $result = DB::select(DB::raw($sql));
        if (count($result) > 0) {
            $staffcount = $result[0]->staffcount;
        }
    
        return view('dashboard', compact('studentscount','staffcount','userscount'));
}

    /******   dashboard end ******/





}
