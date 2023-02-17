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
use PDF;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class StudentsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /******   Manage Users  Start ******/

    public function manageStudents(){

    $manageStudents = DB::table('students')->orderBy('id','Asc')->get();
     return view("students.index")->with('managestudents', $manageStudents);
 }

  public function doctorPatients(){
     
     $manageoppatients = DB::table('patients')->select('patients.*','patient_disease.*','patients.id as userID')
     ->Join('patient_disease', 'patient_disease.id', '=', 'patients.disease_id')
     ->where('patients.user_types_id', '=','4')->where('patients.status', '=','2')->where('patients.doctor_id', '=',auth()->user()->id)->orderBy('patients.id','Asc')->get();

     $manageippatients = DB::table('patients')->select('patients.*','patient_disease.*','patients.id as userID')
     ->Join('patient_disease', 'patient_disease.id', '=', 'patients.disease_id')
     ->where('patients.user_types_id', '=','4')->where('patients.status', '=','3')->where('patients.doctor_id', '=',auth()->user()->id)->orderBy('patients.id','Asc')->get();
     
     $managedoctor = DB::table('users')->where('user_types_id', '=','3')->orderBy('id','Asc')->get();
     
     $managedistrict = DB::table('district')->where('status', '=','Active')->orderBy('id','Asc')->get();

     $manageblocks = DB::table('blocks')->where('status', '=','1')->orderBy('id','Asc')->get();

     return view("patients.doctorpatient")->with('manageoppatients', $manageoppatients)->with('manageippatients', $manageippatients)->with('managedoctor', $managedoctor)->with('managedistrict', $managedistrict)->with('manageblocks', $manageblocks);
 }



 public function getdepartment(Request $request){
    $getdepartment = DB::table('department')->where('parent',$request->department_id)->orderBy('id','Asc')->get();
    return response()->json($getdepartment);
}

 public function gettaluk(Request $request){
    $gettaluk = DB::table('taluk')->where('parent',$request->taluk_id)->orderBy('id','Asc')->get();
    return response()->json($gettaluk);
}
public function getpanchayath(Request $request){
    $getpanchayath = DB::table('panchayath')->where('parent',$request->panchayath_id)->orderBy('id','Asc')->get();
    return response()->json($getpanchayath);
}

public function manageDisease(){
    $managedisease = DB::table('patient_disease')->orderBy('id','Asc')->get();
    return view("patients.index")->with('managedisease', $managedisease);
}

public function addStudents(Request $request){

    $adduser = DB::table('students')->insertGetId([
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
        'pincode'                 =>   $request->pincode,
        'email'                   =>   $request->email,
        'status'                  =>   $request->status,
        'created_at'              =>   date('Y-m-d H:i:s'),
    ]);

    return redirect('/students')->with('success', 'Added Successfully'); 
}

public function editStudents($id){
    $editstudents = DB::table('students')->where('id',$id)->orderBy('id','Asc')->get();
    return view("students.edit")->with('editstudents', $editstudents);
}

public function beEdit($id){
    $beedit = DB::table('students')->where('id',$id)->orderBy('id','Asc')->get();
    return view("students.beedit")->with('beedit', $beedit);
}
public function meEdit($id){
    $meedit = DB::table('students')->where('id',$id)->orderBy('id','Asc')->get();
    return view("students.meedit")->with('meedit', $meedit);
}
public function mbaEdit($id){
    $mbaedit = DB::table('students')->where('id',$id)->orderBy('id','Asc')->get();
    return view("students.mbaedit")->with('mbaedit', $mbaedit);
}
public function mcaEdit($id){
    $mcaedit = DB::table('students')->where('id',$id)->orderBy('id','Asc')->get();
    return view("students.mcaedit")->with('mcaedit', $mcaedit);
}

/******   Edit Users End ******/


public function appointments($id){
    return view("patients.appointments");
}

/**    Add Event  Start **/

public function calandarData(){
   print_r("ok"); die();

   $event = DB::table('reminder_event')->where('status',1)->orderBy('id','DESC')->get();
   $currentDate = date('Y-m-d');
   $domainExpired = DB::table('tb_user')->where('status', '1')->orderBy('id','DESC')->get();

   foreach($event as $eve){
    if($eve->event_name != ''){
        $data[] = array(
            'title'   => $eve->event_name,
            'start'   => $eve->event_date,
            'end'     => $eve->event_time,
            'url'     => "edit_event/".$eve->id,
            'backgroundColor'=> '#00bc8c',
            'borderColor'=> '#00bc8c',
        );
    }
}

foreach($domainExpired as $domExp){
    if($domExp->shop_name != ''){
        $data[] = array(
            'title'   => $domExp->first_name,
            'start'   => date('Y-m-d',strtotime($domExp->end_date)),
            'end'     => date('H:i:s',strtotime($domExp->end_date)),
            'url'     => "shoplistdashboard/". $domExp->id,
            'backgroundColor'=> '#e74c3c',
            'borderColor'=> '#e74c3c',
        );
    }
}

echo json_encode($data);

}

/**   Add Event  End **/

/**    Add Event  Start **/

public function addEvent(Request $request){

    $mangeRolesUpdate = DB::table('reminder_event')->insert([

        'event_name'    =>   $request->event_name,
        'event_date'	=>   $request->event_date,
        'event_time'	=>   $request->event_time,
        'status'		=>   1,
        'created_at'	=>	 date('Y-m-d H:i:s'),
    ]);

    return redirect()->back(); 

}

/**   Add Event  End **/


/**    Edit Event  Start **/

public function editEvent(Request $request,$id){

    $editevent = DB::table('reminder_event')->where('id','=',$id)->first();
    return view("patients.appointments")->with('editevent',$editevent);

}

/**   Edit Event  End **/


/**    Update Event  Start **/

public function updateEvent(Request $request){

    $updateEvent = DB::table('reminder_event')->where('id',$request->id)->update([

        'event_name'    =>   $request->event_name,
        'event_date'	=>   $request->event_date,
        'event_time'	=>   $request->event_time,
        'status'		=>   1,
        'created_at'	=>	 date('Y-m-d H:i:s'),
    ]);

    return redirect()->back()->with('success','Event Updated Successfully ... !'); 

}

/**   Update Event  End **/


/**    Delete Event  Start **/

public function deleteEvent(Request $request){

    $delEvent = DB::table('reminder_event')->where('id',$request->delid)->delete();

    return view("patients.appointments");

}

/**   Delete Event  End **/
/******    Delete Users  Start ******/

public function deleteUser(Request $request){

    $deluser = DB::table('patients')->where('id',$request->id)->delete();
    return redirect()->back(); 

}

/******   Delete Users  End ******/


/******    Sorting Users  Start ******/

public function planSorting(Request $request)
{
    $array  = $request->arrayorder;
            //Print_r($array);die();
    if($request->update == "update")
    {
        $count = 1;

        foreach ($array as $idval)
        {
                    //$data=array('sort_order'=> $count);
            $sortPlan = DB::table('manage_plan')->where('id',$idval)->update(['sort_order' =>   $count]);
            $count ++;
        }
    }
    echo 'Manage Plan Order Change Successfully....!';
}

/******    Sorting Users  End ******/


}
