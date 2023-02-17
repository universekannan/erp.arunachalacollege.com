
@extends('layout')
@section('content')

<!-- /.content -->
<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0">Dashboard</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
               </ol>
            </div>
         </div>
      </div>
   </div>
 
   <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <div id="accordion">
                  <div class="card card-olive">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse1">
                     Edit Basic Profile
                        </a>
                      </h4>
                    </div>
                    <div id="collapse1" class="collapse show" data-parent="#accordion">
                    <form action="{{url('/edit_admission')}}" method="post">
                              {{ csrf_field() }}
                        <div class="card-body">
                      @foreach($meedit as $key=>$meedit)
        <input value="{{ $meedit->id }}" type="hidden" class="form-control mb-3" name="id"/>

                        <div class="row">
                        <div class="col-md-6"> 

                        <div class="form-group row">
                  <label for="quota" class="col-sm-4 col-form-label"><span style="color:red"></span>Select Quota</label>
                  <div class="col-sm-8">
                    <select name="quota" class="form-control">
					            	<option value="GQ" <?php if($meedit->quota == 'GQ'){ echo "selected"; }?>>Goverment Quota</option>
                              <option value="MQ" <?php if($meedit->quota == 'MQ'){ echo "selected"; }?>>Management Quota</option>
                    </select>
                  </div>
                </div>
                     
                <div class="form-group row">
                  <label for="last_name" class="col-sm-4 col-form-label"><span style="color:red"></span>Last Name</label>
				    <div class="col-sm-8">
                      <input value="{{ $meedit->last_name }}" type="text" class="form-control" name="last_name" placeholder="Last Name"/>
                    </div>
                </div>

                <div class="form-group row">
                  <label for="father_name" class="col-sm-4 col-form-label"><span style="color:red"></span>Father/Guardian</label>
				    <div class="col-sm-8">
                      <input value="{{ $meedit->father_name }}" type="text" class="form-control" name="father_name" placeholder="Last Name"/>
                    </div>
                </div>

                <div class="form-group row">
                  <label for="mobile" class="col-sm-4 col-form-label"><span style="color:red"></span>Mobile No</label>
				    <div class="col-sm-8">
                      <input value="{{ $meedit->mobile }}" type="text" class="form-control" name="mobile" placeholder="Mobile No"/>
                    </div>
                </div>

                <div class="form-group row">
                  <label for="father_no" class="col-sm-4 col-form-label"><span style="color:red"></span>Father No</label>
				    <div class="col-sm-8">
                      <input value="{{ $meedit->father_no }}" type="text" class="form-control" name="father_no" placeholder="Father No"/>
                    </div>
                </div> 

                <div class="form-group row">
                  <label for="date_of_birth" class="col-sm-4 col-form-label"><span style="color:red"></span>Date of Birth</label>
				    <div class="col-sm-8">
                        <input value="{{ $meedit->date_of_birth }}"type="date" class="form-control" name="date_of_birth"placeholder="" />
                    </div>
                </div>	

                <div class="form-group row">
                  <label for="adhar" class="col-sm-4 col-form-label"><span style="color:red"></span>Aadhar</label>
				    <div class="col-sm-8">
                      <input value="{{ $meedit->adhar }}" type="text" class="form-control" name="adhar" placeholder="Father No"/>
                    </div>
                </div>  

      
				<div class="form-group row">
                  <label for="address" class="col-sm-4 col-form-label"><span style="color:red"></span>Address</label>
				    <div class="col-sm-8">
        <textarea name="address" class="form-control" rows="3" placeholder="Enter Address...">{{ $meedit->address }}</textarea>
                    </div>
                </div>
            </div>

               <div class="col-md-6"> 

               <div class="form-group row">
                  <label for="first_name" class="col-sm-4 col-form-label"><span style="color:red"></span>First Name</label>
				    <div class="col-sm-8">
                      <input value="{{ $meedit->first_name }}" type="text" class="form-control" name="first_name" placeholder="First Name"/>
                    </div>
                </div>
 
                <div class="form-group row">
                  <label for="father_job" class="col-sm-4 col-form-label"><span style="color:red"></span>Father Occupation</label>
				    <div class="col-sm-8">
                 <input value="{{ $meedit->father_job }}" type="text" class="form-control" name="father_job" placeholder="Father Ocupation"/>
                    </div>
                </div>                         

        
                <div class="form-group row">
                  <label for="whats_up" class="col-sm-4 col-form-label"><span style="color:red"></span>Whatsup No</label>
				    <div class="col-sm-8">
                      <input value="{{ $meedit->whats_up }}" type="text" class="form-control" name="whats_up" placeholder="Whatsup No"/>
                    </div>
                </div>   

                <div class="form-group row">
                  <label for="mother_no" class="col-sm-4 col-form-label"><span style="color:red"></span>Mother No</label>
				    <div class="col-sm-8">
                      <input value="{{ $meedit->mother_no }}" type="text" class="form-control" name="mother_no" placeholder="Mother No"/>
                    </div>
                </div>  

                <div class="form-group row">
                  <label for="pin_code" class="col-sm-4 col-form-label"><span style="color:red"></span>Pin Code</label>
				    <div class="col-sm-8">
                      <input value="{{ $meedit->pin_code }}" type="text" class="form-control" name="pin_code" placeholder="Pin Code"/>
                    </div>
                </div>  

                <div class="form-group row">
                  <label for="age" class="col-sm-4 col-form-label"><span style="color:red"></span>Age</label>
				    <div class="col-sm-8">
                      <input value="{{ $meedit->age }}" type="text" class="form-control" name="age" placeholder="Age"/>
                    </div>
                </div>  

                <div class="row"> 
             <div class="col-md-9"> 
				   <div class="form-group row">
                  <label for="email" class="col-sm-4 col-form-label"><span style="color:red"></span>Email</label>
				    <div class="col-sm-8">
                        <input value="{{ $meedit->email }}" type="text" class="form-control" name="email" placeholder="Email"/>
                    </div>
                </div>

                <div class="form-group row">
                  <label for="profile_photo" class="col-sm-4 col-form-label"><span style="color:red"></span>Profile Photo</label>
				    <div class="col-sm-8">
						<div class="custom-file">
						<input type="file" name="profile_photo" class="custom-file-input" id="customFile">
						<label class="custom-file-label" for="profile_photo">Choose file</label>
						</div>                    </div>
                </div>		
                </div>

          <div class="col-md-3"> 
        <img src="{!! asset('dist/img/icon/opd.png') !!}" class="img-circle elevation-2 " style="width: 50%; height: auto;">
         </div>
       </div>

        <div class="modal-footer justify-content-between">
            <button type="submit" id="save" class="btn btn-primary">Submit</button>
         </div>
         </div>
         </div>
         </div>
		 </div>
         </div>
         </div>
</form>
@endforeach

<!-- page 2 -->    
                  <div id="accordion">
                  <div class="card card-purple">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse2">
                  ME Admission Form - page 2
                        </a>
                      </h4>
                    </div>

                    <div id="collapse2" class="collapse" data-parent="#accordion">
                    <form action="{{url('/edit_admission1')}}" method="post">
                              {{ csrf_field() }}
                        <div class="card-body">
                      @foreach($meedit1 as $key=>$meedit1)
        <input value="{{ $meedit1->id }}" type="hidden" class="form-control mb-3" name="id"/>
                      
                     <div class="row">
                        <div class="col-md-6">
					
                        <div class="form-group row">
                  <label for="place_of_birth" class="col-sm-4 col-form-label"><span style="color:red"></span>Place Of Birth</label>
				  
				    <div class="col-sm-8">
                       <input value="{{ $meedit1->place_of_birth }}" required="requiered" type="text" class="form-control" 
                       name="place_of_birth" id="place_of_birth" maxlength="50" placeholder="Birth Place">
                     <span id="" style="color:red"></span>
                    </div>
                  </div>
						 
                  <div class="form-group row">
                  <label for="nationalty" class="col-sm-4 col-form-label"><span style="color:red"></span>Nationalty</label>
				  
				    <div class="col-sm-8">
                       <input value="{{ $meedit1->nationalty }}" required="requiered" type="text" class="form-control" name="nationalty" id="nationalty" maxlength="50" placeholder="Nationalty">
                     <span id="" style="color:red"></span>
                    </div>
                  </div>
						 
                  <div class="form-group row">
                  <label for="religion" class="col-sm-4 col-form-label"><span style="color:red"></span>Religion</label>
                  <div class="col-sm-8">
                    <select class="form-control" name="caste">
                              <option value="{{ $meedit1->religion }}">{{ $meedit1->religion }}</option>
                              <option value="caste1">Hindu</option>
                              <option value="caste2">Christian</option>
                              <option value="caste2">Muslim</option>
                              <option value="caste2">Others</option>
                         </select>
                  </div>
                </div>
   
                <div class="form-group row">
                  <label for="caste" class="col-sm-4 col-form-label"><span style="color:red"></span>Caste</label>
				    <div class="col-sm-8">
               <input value="{{ $meedit1->caste }}" required="requiered" type="text" class="form-control" 
			   name="caste" id="caste" maxlength="50" placeholder="Caste">
                     <span id="" style="color:red"></span>
                    </div>
                  </div>
                
                <div class="form-group row">
                   <label for="comunity" class="col-sm-4 col-form-label"><span style="color:red"></span>Service Community</label>
                    <div class="col-sm-5">
                        <select class="form-control select2bs4" name="caste" required="requiered" style="width: 100%;" required="required">
                     <option value="{{ $meedit1->comunity }}">{{ $meedit1->comunity }}</option>
                      <option value="OC">OC</option>
						    <option value="BC">BC</option>
						    <option value="MBC">MBC</option>
							 <option value="SC">SC</option>
						    <option value="ST">ST</option>
							 <option value="BCM">BCM</option>
							 <option value="SCA">SCA</option>
                        </select>
                    </div>
				    <div class="col-sm-3">
					    <input type="file" class="custom-file-input" id="customFile">
					    <label class="custom-file-label" for="customFile">Choose file</label>
				    </div>
                </div>

				<div class="form-group row">
            <label for="whether_first_graduate" class="col-sm-2 col-form-label"><span style="color:red"></span>Whether First Graduate</label>
				    <div class="col-sm-8">
                        <input value="{{ $meedit1->whether_first_graduate }}" type="checkbox" name="my-checkbox" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                    </div>
                </div>

                <div class="form-group row">
                  <label for="tancent_score" class="col-sm-4 col-form-label"><span style="color:red"></span>TANCET Score</label>
                  <div class="col-sm-8">
                  <div class="col-sm-12">
					    <input value="{{ $meedit1->tancent_score }}" type="file" class="custom-file-input" id="customFile">
					    <label class="custom-file-label" for="customFile">Attach Score Card</label>
				    </div>
                  </div>
                </div>
                
				<div class="form-group row">
                  <label for="mother_tongue" class="col-sm-4 col-form-label"><span style="color:red"></span>Mother Tongue</label>
                  <div class="col-sm-8">
                    <select class="form-control" name="mother_tongue">
                              <option value="{{ $meedit1->mother_tongue }}">{{ $meedit1->mother_tongue }} </option>
                              <option value="Tamil">Tamil</option>
                              <option value="Malayalam">Malayalam</option>
							  <option value="Others">Others</option>
                         </select>
                  </div>
                </div>
              </div>

                        <div class="col-md-6"> 
                  <div class="form-group row">
                  <label for="father_job" class="col-sm-4 col-form-label"><span style="color:red"></span>Occu...</label>
				  
				    <div class="col-sm-8">
                       <input value="{{ $meedit1->father_job }}" required="requiered" type="text" class="form-control" name="father_job" id="father_job" maxlength="50" placeholder="Occupation Of The Parent">
                     <span id="" style="color:red"></span>
                    </div>
                  </div>

                  <div class="form-group row">
                  <label for="father_name" class="col-sm-4 col-form-label"><span style="color:red"></span>Parent Of Guardian</label>
				  
				    <div class="col-sm-8">
                       <input value="{{ $meedit1->father_name }}" required="requiered" type="text" class="form-control" name="father_name" id="father_name" maxlength="50" placeholder="Name Of The Parent Or Guardian">
                     <span id="" style="color:red"></span>
                    </div>
                  </div>   

                  <div class="form-group row">
                  <label for="branch_of_steady" class="col-sm-4 col-form-label"><span style="color:red"></span>Branch Of Steady</label>
				  
				    <div class="col-sm-8">
                       <input value="{{ $meedit1->branch_of_steady }}" required="requiered" type="text" class="form-control" name="branch_of_steady" id="branch_of_steady" maxlength="50" placeholder="Branch">
                     <span id="" style="color:red"></span>
                    </div>
                  </div>
				          
			<div class="form-group row">
                <label for="department_preference_1" class="col-sm-4 col-form-label"><span style="color:red"></span>Preference 1</label>
                <div class="col-sm-8">
                    <select class="form-control" name="department_preference_1">
                       <option>---- Select department Preference 1 ----</option>
					@foreach($department as $key=>$department1)
						<option value="{{ $department1->id }}">{{ $department1->department_name }}</option>
					@endforeach
                    </select>
                 </div>
            </div>
            
			<div class="form-group row">
                <label for="department_preference_2" class="col-sm-4 col-form-label"><span style="color:red"></span>Preference 2</label>
                <div class="col-sm-8">
                    <select class="form-control" name="department_preference_2">
                       <option>---- Select department Preference 2 ----</option>
					@foreach($department as $key=>$department1)
						<option value="{{ $department1->id }}">{{ $department1->department_name }}</option>
					@endforeach
                    </select>
                 </div>
            </div>

			<div class="form-group row">
                <label for="department_preference_3" class="col-sm-4 col-form-label"><span style="color:red"></span>Preference 3</label>
                <div class="col-sm-8">
                    <select class="form-control" name="department_preference_3">
                       <option>---- Select department Preference 3 ----</option>
					@foreach($department as $key=>$department1)
						<option value="{{ $department1->id }}">{{ $department1->department_name }}</option>
					@endforeach
                    </select>
                 </div>
            </div>

			<div class="form-group row">
                <label for="department_preference_4" class="col-sm-4 col-form-label"><span style="color:red"></span>Preference 4</label>
                <div class="col-sm-8">
                    <select class="form-control" name="department_preference_4">
                       <option>---- Select department Preference 4 ----</option>
					@foreach($department as $key=>$department1)
						<option value="{{ $department1->id }}">{{ $department1->department_name }}</option>
					@endforeach
                    </select>
                 </div>
            </div>

            <div class="form-group row">
                <label for="department_preference_5" class="col-sm-4 col-form-label"><span style="color:red"></span>Preference 5</label>
                <div class="col-sm-8">
                    <select class="form-control" name="department_preference_5">
                       <option>---- Select department Preference 5 ----</option>
					@foreach($department as $key=>$department1)
						<option value="{{ $department1->id }}">{{ $department1->department_name }}</option>
					@endforeach
                    </select>
                 </div>
</div>

                        </div>
                     </div>
					  <table class="table table-bordered table-hover">
                     <thead>
                        <tr>
                           <th>Class </th>
                           <th style="width:70%">Name Of The School/College With Address </th>
                           <th style="width:10%">% ofMarks</th>
                           <th>Passout</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>S S L C</td>
                           <td><input value="{{ $meedit1->study_in_sslc_address }}" required="requiered" type="text" class="form-control" name="study_in_sslc_address" id="study_in_sslc_address" maxlength="50" placeholder="Enter Study In SSLC Address"></td>
                           <td><input value="{{ $meedit1->sslc_marks }}" required="requiered" type="text" class="form-control" name="sslc_marks" id="sslc_marks" maxlength="50" placeholder="ofMarks"></td>
                           <td><input value="{{ $meedit1->sslc_passout }}" required="requiered" type="text" class="form-control" name="sslc_passout" id="sslc_passout" maxlength="50" placeholder="Passout"></td>
                        </tr>
						<tr>
                           <td>H S C</td>
                           <td><input value="{{ $meedit1->study_in_hsc_address }}" required="requiered" type="text" class="form-control" name="study_in_hsc_address" id="study_in_hsc_address" maxlength="50" placeholder="Enter Study In HSC Address"></td>
                           <td><input value="{{ $meedit1->hsc_marks }}" required="requiered" type="text" class="form-control" name="hsc_marks" id="hsc_marks" maxlength="50" placeholder="ofMarks"></td>
                           <td><input value="{{ $meedit1->hsc_passout }}" required="requiered" type="text" class="form-control" name="hsc_passout" id="hsc_passout" maxlength="50" placeholder="Passout"></td>
                        </tr>
						<tr>
                           <td>Degree</td>
                           <td><input value="{{ $meedit1->study_in_degree_address }}" required="requiered" type="text" class="form-control" name="study_in_degree_address" id="study_in_degree_address" maxlength="50" placeholder="Enter Study In College Address"></td>
                           <td><input value="{{ $meedit1->degree_marks }}" required="requiered" type="text" class="form-control" name="degree_marks" id="degree_marks" maxlength="50" placeholder="ofMarks"></td>
                           <td><input value="{{ $meedit1->degree_passout }}" required="requiered" type="text" class="form-control" name="degree_passout" id="degree_passout" maxlength="50" placeholder="Passout"></td>
                        </tr>
                       </tbody>
                    </table>
                    <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" id="save" class="btn btn-primary">Submit</button>
            </div>
				  </div>
                    </div>
                  </div>
</form>
@endforeach
<!-- page 3-->

                  <div class="card card-olive">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse3">
                  ME Admission Form - page 3
                        </a>
                      </h4>
                    </div>
                    <div id="collapse3" class="collapse" data-parent="#accordion">
                    <form action="{{url('/edit_admission1')}}" method="post">
                              {{ csrf_field() }}
                        <div class="card-body">
                      @foreach($meedit2 as $key=>$meedit2)
        <input value="{{ $meedit2->id }}" type="hidden" class="form-control mb-3" name="id"/>
                    
                      <div class="row">
                  <div class="col-sm-6">
				<div class="form-group row">
          <label for="hostel_accomadation" class="col-sm-6 col-form-label"><span style="color:red"></span>Hostel Accomodation Required</label>
				    <div class="col-sm-6">
                        <input value="{{ $meedit2->hostel_accomadation }}" type="checkbox" name="my-checkbox" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                    </div>
                </div>
                </div>

                  <div class="col-sm-6">
				<div class="form-group row">
          <label for="college_bus_accomadation" class="col-sm-6 col-form-label"><span style="color:red"></span>College Bus Facility Required</label>
				    <div class="col-sm-6">
                        <input value="{{ $meedit2->college_bus_accomadation }}" type="checkbox" name="my-checkbox" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                    </div>
                </div>
                </div>

                <div class="col-sm-6">
				<div class="form-group row">
       <label for="parent_sig_nature" class="col-sm-6 col-form-label"><span style="color:red"></span>Signature of The Parent/Guardian</label>
				    <div class="col-sm-6">
                <input value="{{ $meedit2->parent_sig_nature }}" required="requiered" type="file" class="form-control col-sm-8" name="parent_sig_nature" id="parent_sig_nature" maxlength="50" placeholder="Sign">
                    </div>
                </div>
                </div>

                <div class="col-sm-6">
				<div class="form-group row">
   <label for="student_sig_nature" class="col-sm-6 col-form-label"><span style="color:red"></span>Signature of The Student</label>
				    <div class="col-sm-6">
       <input value="{{ $meedit2->student_sig_nature }}" required="requiered" type="file" class="form-control col-sm-8" name="student_sig_nature" id="student_sig_nature" maxlength="50" placeholder="Sign">
                    </div>
                </div>
				</div>
				
            <div class="col-sm-6">
            <div class="form-group row">
                  <label for="" class="col-sm-6 col-form-label"><span style="color:red"></span>Date</label>  
				    <div class="col-sm-6">
                       <input value="{{ $meedit2->study_in_degree_address }}" required="requiered" type="date" class="form-control col-sm-8" name="place_of_birth" id="place_of_birth" maxlength="50" placeholder="Date">
                     <span id="" style="color:red"></span>
                    </div>
                  </div>
                  </div>

               <div class="col-sm-6">
				   <div class="form-group row">
                  <label for="place" class="col-sm-6 col-form-label"><span style="color:red"></span>Place</label>  
				    <div class="col-sm-6">
                       <input value="{{ $meedit2->study_in_degree_address }}" required="requiered" type="text" class="form-control col-sm-8" name="place" id="place" maxlength="50" placeholder="Place">
                     <span id="" style="color:red"></span>
                    </div>
                  </div>
</div>

                  <div class="col-sm-6"> 
                  <div class="form-group row">
                  <label for="admited_me" class="col-sm-6 col-form-label"><span style="color:red"></span>Admitted in M.E</label>  
				    <div class="col-sm-6">
                       <input value="{{ $meedit2->admited_me }}" required="requiered" type="text" class="form-control col-sm-8" name="admited_me" id="admited_me" maxlength="50" placeholder="Admitted">
                     <span id="" style="color:red"></span>
                    </div>
                  </div>
                  </div>

                  <div class="col-sm-6">
                  <div class="form-group row">
                  <label for="admision_date" class="col-sm-6 col-form-label"><span style="color:red"></span>Date of Admission</label>  
				    <div class="col-sm-6">
                       <input value="{{ $meedit2->admision_date }}" required="requiered" type="date" class="form-control col-sm-8" name="admision_date" id="admision_date" maxlength="50" placeholder="Date of Admission">
                     <span id="" style="color:red"></span>
                    </div>
                  </div>
                  </div>
                  
                  <div class="col-sm-6">
				      <div class="form-group row">
          <label for="student_signature" class="col-sm-6 col-form-label float-right"><span style="color:red"></span>Principle</label>
				      <div class="col-sm-6">
            <input value="{{ $meedit2->study_in_degree_address }}" required="requiered" type="file" class="form-control col-sm-8" name="student_signature" id="student_signature" maxlength="50" placeholder="Sign">
                    </div>
                 </div>
				  </div>
 </div>
            
               <div class="modal-footer justify-content-between">
                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                   <button type="submit" id="save" class="btn btn-primary">Submit</button>
               </div>
</div>
                </div>
              </div>
              </form>
@endforeach

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
   </section>
</div>
          <!-- /.col -->
@endsection
