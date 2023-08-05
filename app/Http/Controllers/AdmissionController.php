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

class AdmissionController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /******   Manage Users  Start ******/

    public function manageAdmission(){

      $manageadmission = DB::table('admission')->select('admission.*','degree.*','department.*','admission.id as userID')
       ->Join('degree', 'degree.id', '=', 'admission.degree_id')
       ->Join('department', 'department.id', '=', 'admission.department_id')
       ->orderBy('admission.id','Asc')->get();
       $managedegree = DB::table('degree')->orderBy('id','Asc')->get();
	   $department   = DB::table('department')->orderBy('id','Asc')->get();
	   $admissionacademic = DB::table('academic')->where('status', '=','1')->orderBy('id','Asc')->get();

       return view("admission.index")->with('manageadmission', $manageadmission)->with('managedegree', $managedegree)->with('department', $department)->with('admissionacademic', $admissionacademic);
    }
   
    public function manageDegeree(){
        $manageDegeree = DB::table('degree')->orderBy('id','Asc')->get();
        return view("degeree.index")->with('managedegeree', $manageDegeree);
   }

    public function getdepartment(Request $request){
    $getdepartment = DB::table('department')->where('parent',$request->department_id)->orderBy('id','Asc')->get();
    return response()->json($getdepartment);
	
}

    public function beEdit($id){
       $beedit = DB::table('admission','id as userID')->where('id',$id)->get();
       $beedit1 = DB::table('admission_1','id as userID1')->where('student_id',$id)->get();
       $beedit2 = DB::table('admission_2','id as userID2')->where('student_id',$id)->get();

       $managedegree = DB::table('degree')->orderBy('id','Asc')->get();
       $department   = DB::table('department')->where('parent', '=', 1)->orderBy('id','Asc')->get();


       return view("admission.beedit")->with('beedit', $beedit)->with('beedit1', $beedit1)->with('beedit2', $beedit2)->with('managedegree', $managedegree)->with('department', $department);
}

    public function meEdit($id){
        $meedit = DB::table('admission','id as userID')->where('id',$id)->get();
        $meedit1 = DB::table('admission_1','id as userID1')->where('id',$id)->get();
        $meedit2 = DB::table('admission_2','id as userID2')->where('id',$id)->get();
		
        $managedegree = DB::table('degree')->orderBy('id','Asc')->get();
        $department = DB::table('department')->where('parent', '=', 2)->orderBy('id','Asc')->get();

        return view("admission.meedit")->with('meedit', $meedit)->with('meedit1', $meedit1)->with('meedit2', $meedit2)->with('managedegree', $managedegree)->with('department', $department);
}

    public function mbaEdit($id){
        $mbaedit = DB::table('students')->where('id',$id)->orderBy('id','Asc')->get();
        $department = DB::table('department')->where('parent', '=', 3)->orderBy('id','Asc')->get();
        return view("admission.mbaedit")->with('mbaedit', $mbaedit)->with('department',$department);
}

    public function mcaEdit($id){
        $mcaedit = DB::table('students')->where('id',$id)->orderBy('id','Asc')->get();
        return view("admission.mcaedit")->with('mcaedit', $mcaedit);
}

         public function addAdmission(Request $request){
          
          $department = $request->get('department_id');
          //echo $department;die;
    $adduser = DB::table('admission')->insertGetId([

        'first_name'                  =>   $request->first_name,
        'last_name'                   =>   $request->last_name,
        'father_name'                 =>   $request->father_name,
        'degree_id'                   =>   $request->degree_id,
        'father_job'                  =>   $request->father_job,
		'department_id'               =>   $department,
        'gender'                      =>   $request->gender,
        'mobile'                      =>   $request->mobile,
        'father_no'                   =>   $request->father_no,
        'mother_no'                   =>   $request->mother_no,
        'whats_up'                    =>   $request->whats_up,
        'adhar'                       =>   $request->adhar,
		'quota'                       =>   $request->quota,
        'address'                     =>   $request->address,
        'pin_code'                    =>   $request->pin_code,
        'date_of_birth'               =>   $request->date_of_birth,
        'age'                         =>   $request->age,
        'email'                       =>   $request->email,      
        'status'                      =>   $request->status,
		'profile_photo'               =>   $request->profile_photo,
        'created_at'                  =>   date('Y-m-d H:i:s'),
    ]);

    $admission_1 = DB::table('admission_1')->insert([
        'student_id'         =>   $adduser,
        ]);
    $admission_2 = DB::table('admission_2')->insert([
        'student_id'         =>   $adduser,
        ]);
return redirect('/admission')->with('success', 'Added Student Successfully'); }


         public function editAdmission(Request $request){
      
    $editadmission = DB::table('admission')->where('id',$request->id)->update([

        'first_name'                  =>   $request->first_name,
        'last_name'                   =>   $request->last_name,
        'father_name'                 =>   $request->father_name,
        'father_job'                  =>   $request->father_job,
        'gender'                      =>   $request->gender,
        'mobile'                      =>   $request->mobile,
        'father_no'                   =>   $request->father_no,
        'mother_no'                   =>   $request->mother_no,
        'whats_up'                    =>   $request->whats_up,
		'adhar'                       =>   $request->adhar,
		'quota'                       =>   $request->quota,
		'address'                     =>   $request->address,
		'pin_code'                    =>   $request->pin_code,
        'date_of_birth'               =>   $request->date_of_birth,
        'age'                         =>   $request->age,
		'email'                       =>   $request->email,
        'status'                      =>   $request->status,
        'updated_at'                  =>   date('Y-m-d H:i:s'),
    ]);

    return redirect('/admission')->with('success', 'Updated Successfully'); 
}

         public function editAdmission1(Request $request){

    $edituser1 = DB::table('admission_1')->where('id',$request->student_id)->update([
        
		'father_name'                 =>   $request->father_name,
		'father_job'                  =>   $request->father_job,
        'caste'                       =>   $request->caste,
        'comunity'                    =>   $request->comunity,
		'mother_tongue'               =>   $request->mother_tongue,
        'nationalty'                  =>   $request->nationalty,
        'whether_first_graduate'      =>   $request->whether_first_graduate,
        'study_in_sslc_address'       =>   $request->study_in_sslc_address,
        'sslc_marks'                  =>   $request->sslc_marks,
        'sslc_passout'                =>   $request->sslc_passout,
        'study_in_hsc_address'        =>   $request->study_in_hsc_address,
        'hsc_marks'                   =>   $request->hsc_marks,
        'hsc_passout'                 =>   $request->hsc_passout,
        'study_in_degree_address'     =>   $request->study_in_degree_address,
        'degree_marks'                =>   $request->degree_marks,
        'degree_passout'              =>   $request->degree_passout,
		'branch_of_steady'            =>   $request->branch_of_steady,
        'tancent_score'               =>   $request->tancent_score,
        'place_of_birth'              =>   $request->place_of_birth,
        'updated_at'                  =>   date('Y-m-d H:i:s'),
    ]);

    return redirect('/admission')->with('success', 'Updated Successfully'); 
}

        public function editAdmission2(Request $request){
   
    $edituser2 = DB::table('admission_2')->where('id',$request->student_id)->update([

 'tamil_malayalam_marks_obtained'  =>   $request->tamil_malayalam_marks_obtained,
        'english_marks_obtained'      =>   $request->english_marks_obtained,
        'mathematics_marks_obtained'  =>   $request->mathematics_marks_obtained,
        'chemistry_marks_obtained'    =>   $request->chemistry_marks_obtained,
        'physics_marks_obtained'      =>   $request->physics_marks_obtained,
   'biology_computer_marks_obtained'  =>   $request->biology_computer_marks_obtained,
        'tamil_malayalam_percentage'  =>   $request->tamil_malayalam_percentage,
        'english_percentage'          =>   $request->english_percentage,
        'mathematics_percentage'      =>   $request->mathematics_percentage,
        'physics_percentage'          =>   $request->physics_percentage,
        'chemistry_percentage'        =>   $request->chemistry_percentage,
        'biology_computer_percentage' =>   $request->biology_computer_percentage,
        'hostel_accomadation'         =>   $request->hostel_accomadation,
        'college_bus_accomadation'    =>   $request->college_bus_accomadation,
        'max_marks'                   =>   $request->max_marks,
        'fifth_semester'              =>   $request->fifth_semester,
        'sixth_semester'              =>   $request->sixth_semester,
        'total_marks'                 =>   $request->total_marks,
        'total_marks_per'             =>   $request->total_marks_per,
        'cut_of_mark_total'           =>   $request->cut_of_mark_total,
        'diploma_total_marks'         =>   $request->diploma_total_marks,
        'diploma_percentage'          =>   $request->diploma_percentage,
        'cut_of_mathematics'          =>   $request->cut_of_mathematics,
        'cut_of_chemestry'            =>   $request->cut_of_chemestry,
        'cut_of_physics'              =>   $request->cut_of_physics,
        'status'                      =>   $request->status,
        'updated_at'                  =>   date('Y-m-d H:i:s'),
    ]);

    return redirect('/admission')->with('success', 'Updated Successfully'); 
}

// degree//
         public function adddegeree(Request $request){
					
    $adddegeree = DB::table('degree')->insert([

        'degree_name'	        =>   $request->degree_name,
        'status'                =>   $request->status,
        'created_at'            =>   date('Y-m-d H:i:s'),
 ]);

 return redirect('/degeree')->with('success', 'Updated Successfully'); 
}

public function editdegeree(Request $request){
					
    $editdegeree = DB::table('degree')->where('id',$request->id)->update([
     
        'degree_name'	        =>   $request->degree_name,
        'status'                =>   $request->status,
        'updated_at'            =>   date('Y-m-d H:i:s'),
    ]);
               return redirect('/degeree')->with('success', 'Updated Successfully'); 
}

public function adddepartment(Request $request){
					
    $adddepartment = DB::table('department')->insert([
         'degeree_type_id'  =>   $request->degeree_id,
         'department_name'	=>   $request->department_name,
         'status'	        =>   $request->status,
         'created_at'       =>   date('Y-m-d H:i:s'),
        
               ]);
               return redirect('/degeree')->with('success', 'Added Successfully'); 
}

/******   Edit Users End ******/


public function appointments($id){
    return view("patients.appointments");
}

/** Add Event Start **/

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
