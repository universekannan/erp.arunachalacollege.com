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
                           @foreach($beedit as $key=>$beedit)
                           <input value="{{ $beedit->id }}" type="hidden" class="form-control mb-3" name="id"/>
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="form-group row">
                                    <label for="quota" class="col-sm-4 col-form-label"><span style="color:red"></span>Select Quota</label>
                                    <div class="col-sm-8">
                                       <select name="quota" class="form-control">
                                          <option value="GQ" <?php if($beedit->quota == 'GQ'){ echo "selected"; }?>>Goverment Quota</option>
                                          <option value="MQ" <?php if($beedit->quota == 'MQ'){ echo "selected"; }?>>Management Quota</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <label for="first_name" class="col-sm-4 col-form-label"><span style="color:red"></span>First Name</label>
                                    <div class="col-sm-8">
                                       <input value="{{ $beedit->first_name }}" type="text" class="form-control" name="first_name" placeholder="First Name"/>
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <label for="last_name" class="col-sm-4 col-form-label"><span style="color:red"></span>Last Name</label>
                                    <div class="col-sm-8">
                                       <input value="{{ $beedit->last_name }}" type="text" class="form-control" name="last_name" placeholder="Last Name"/>
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <label for="mobile" class="col-sm-4 col-form-label"><span style="color:red"></span>Mobile Number</label>
                                    <div class="col-sm-8">
                                       <input value="{{ $beedit->mobile }}" type="text" class="form-control" name="mobile" placeholder="Mobile Number"/> 
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <label for="date_of_birth" class="col-sm-4 col-form-label"><span style="color:red"></span>Date of Birth</label>
                                    <div class="col-sm-8">
                                       <input value="{{ $beedit->date_of_birth }}" type="date" class="form-control" name="date_of_birth"placeholder="" />
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <label for="adhar" class="col-sm-4 col-form-label"><span style="color:red"></span>Aadhar No</label>
                                    <div class="col-sm-8">
                                       <input value="{{ $beedit->adhar }}" type="text" class="form-control" name="adhar" placeholder="Aadhar No"/> 
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <label for="address" class="col-sm-4 col-form-label"><span style="color:red"></span>Address</label>
                                    <div class="col-sm-8">
                                       <textarea name="address" class="form-control" rows="3" placeholder="Enter Address...">{{ $beedit->address }}</textarea>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group row">
                                    <label for="father_job" class="col-sm-4 col-form-label"><span style="color:red"></span>Parent Occupation</label>
                                    <div class="col-sm-8">
                                       <input value="{{ $beedit->father_job }}" type="text" class="form-control" name="father_job" placeholder="Parent Occupation"/>                           
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <label for="whats_up" class="col-sm-4 col-form-label"><span style="color:red"></span>Whatapp Number</label>
                                    <div class="col-sm-8">
                                       <input value="{{ $beedit->whats_up }}" type="text" class="form-control" name="whats_up" placeholder="Whatapp Number"/> 
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <label for="father_no" class="col-sm-4 col-form-label"><span style="color:red"></span>Father Number</label>
                                    <div class="col-sm-8">
                                       <input value="{{ $beedit->father_no }}" type="text" class="form-control" name="father_no" placeholder="Father Number"/> 
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <label for="mother_no" class="col-sm-4 col-form-label"><span style="color:red"></span>Mother Number</label>
                                    <div class="col-sm-8">
                                       <input value="{{ $beedit->mother_no }}" type="text" class="form-control" name="mother_no" placeholder="Mother Number"/>
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <label for="pin_code" class="col-sm-4 col-form-label"><span style="color:red"></span>Pin Code</label>
                                    <div class="col-sm-8">
                                       <input value="{{ $beedit->pin_code }}" type="text" class="form-control" name="pin_code" placeholder="Pin Code"/>
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <label for="email" class="col-sm-4 col-form-label"><span style="color:red"></span>Email ID</label>
                                    <div class="col-sm-8">
                                       <input value="{{ $beedit->email }}" type="text" class="form-control" name="email" placeholder="Email"/> 
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-9">
                                       <div class="form-group row">
                                          <label for="age" class="col-sm-4 col-form-label"><span style="color:red"></span>Age</label>
                                          <div class="col-sm-8">
                                             <input value="{{ $beedit->age }}" type="text" class="form-control" name="age" placeholder="Age"/>
                                          </div>
                                       </div>
                                       <div class="form-group row">
                                          <label for="profile_photo" class="col-sm-4 col-form-label"><span style="color:red"></span>Profile Photo</label>
                                          <div class="col-sm-8">
                                             <div class="custom-file">
                                                <input type="file" name="profile_photo" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="profile_photo">Choose file</label>
                                             </div>
                                          </div>
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
                           @endforeach
                        </div>
                     </form>
                  </div>
               </div>
			   
               <div class="card card-purple">
                  <div class="card-header">
                     <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse2">
                        BE Admission Form - page 2
                        </a>
                     </h4>
                  </div>
                  
                  <div id="collapse2" class="collapse" data-parent="#accordion">
                     <form action="{{url('/edit_admission1')}}" method="post">
                        {{ csrf_field() }}
                        <div class="card-body">
                           @foreach($beedit1 as $key=>$beedit1)
                     <input value="{{ $beedit1->id }}" type="hidden" class="form-control mb-3" name="id"/>
						   
                             <div class="row">
                               <div class="col-md-6">
                                <div class="form-group row">
                        <label for="caste" class="col-sm-4 col-form-label"><span style="color:red"></span>Caste</label>
                                  <div class="col-sm-8">
            <input value="{{ $beedit1->caste }}" required="requiered" type="text" class="form-control" name="caste" id="caste"        maxlength="50" placeholder="Caste">
                                    <span id="" style="color:red"></span>
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <label for="comunity" class="col-sm-4 col-form-label"><span style="color:red"></span>Service Community</label>
                                    <div class="col-sm-5">
                                       <select class="form-control select2bs4" name="comunity" required="requiered" style="width: 100%;" required="required">
                                          <option value="{{ $beedit1->comunity }}">{{ $beedit1->comunity }}</option>
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
                                    <label for="whether_first_graduate" class="col-sm-4 col-form-label"><span style="color:red"></span>Whether First Graduate</label>
                                    <div class="col-sm-8">
                                       <input value="{{ $beedit1->whether_first_graduate }}" type="checkbox" name="my-checkbox" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <label for="mother_tongue" class="col-sm-4 col-form-label"><span style="color:red"></span>Mother Tongue</label>
                                    <div class="col-sm-8">
                                       <select class="form-control" name="mother_tongue">
                                          <option value="{{ $beedit1->mother_tongue }}">{{ $beedit1->mother_tongue }}</option>
                                          <option value="Tamil">Tamil</option>
                                          <option value="Malayalam">Malayalam</option>
                                          <option value="English">English</option>
                                          <option value="Others">Others</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <label for="father_name" class="col-sm-4 col-form-label"><span style="color:red"></span>Parent Of Guardian</label>
                                    <div class="col-sm-8">
                                       <input value="{{ $beedit1->father_name }}" required="requiered" type="text" class="form-control" name="father_name" id="father_name" maxlength="50" placeholder="Name Of The Parent Or Guardian">
                                       <span id="" style="color:red"></span>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group row">
                                    <label for="father_job" class="col-sm-4 col-form-label"><span style="color:red"></span>Occu...</label>
                                    <div class="col-sm-8">
                                       <input value="{{ $beedit1->father_job }}" required="requiered" type="text" class="form-control" 
                                          name="father_job" id="father_job" maxlength="50" placeholder="Occupation Of The Parent">
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
                                    <td><input value="{{ $beedit1->study_in_sslc_address }}" required="requiered" type="text" class="form-control" name="study_in_sslc_address" id="study_in_sslc_address" maxlength="50" placeholder="Enter Study In SSLC Address"></td>
                                    <td><input value="{{ $beedit1->sslc_marks }}" required="requiered" type="text" class="form-control" name="sslc_marks" id="sslc_marks" maxlength="50" placeholder="ofMarks"></td>
                                    <td><input value="{{ $beedit1->sslc_passout }}" required="requiered" type="text" class="form-control" name="sslc_passout" id="sslc_passout" maxlength="50" placeholder="Passout"></td>
                                 </tr>
                                 <tr>
                                    <td>H S C</td>
                                    <td><input value="{{ $beedit1->study_in_hsc_address }}" required="requiered" type="text" class="form-control" name="study_in_hsc_address" id="study_in_hsc_address" maxlength="50" placeholder="Enter Study In HSC Address"></td>
                                    <td><input value="{{ $beedit1->hsc_marks }}" required="requiered" type="text" class="form-control" name="hsc_marks" id="hsc_marks" maxlength="50" placeholder="ofMarks"></td>
                                    <td><input value="{{ $beedit1->hsc_passout }}" required="requiered" type="text" class="form-control" name="hsc_passout" id="hsc_passout" maxlength="50" placeholder="Passout"></td>
                                 </tr>
                                 <tr>
                                    <td>Degree</td>
                                    <td><input value="{{ $beedit1->study_in_degree_address }}" required="requiered" type="text" class="form-control" name="study_in_degree_address" id="study_in_degree_address" maxlength="50" placeholder="Enter Study In College Address"></td>
                                    <td><input value="{{ $beedit1->degree_marks }}" required="requiered" type="text" class="form-control" name="degree_marks" id="degree_marks" maxlength="50" placeholder="ofMarks"></td>
                                    <td><input value="{{ $beedit1->degree_passout }}" required="requiered" type="text" class="form-control" name="degree_passout" id="degree_passout" maxlength="50" placeholder="Passout"></td>
                                 </tr>
                              </tbody>
                           </table>
                           <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="submit" id="save" class="btn btn-primary">Submit</button>
                           </div>
                           @endforeach
                        </div>
                     </form>
                  </div>
               </div>
               <!-- page 3 -->
			   
               <div class="card card-olive">
                  <div class="card-header">
                     <h4 class="card-title w-100">
                     <a class="d-block w-100" data-toggle="collapse" href="#collapse3">
                        BE Admission Form - page 3
                        </a>
                     </h4>
                  </div>
				    <div id="collapse3" class="collapse" data-parent="#accordion">
                     <form action="{{url('/edit_admission2')}}" method="post">
                        {{ csrf_field() }}
                        <div class="card-body">
                           @foreach($beedit2 as $key=>$beedit2)
                        <input value="{{ $beedit2->id }}" type="hidden" class="form-control mb-3" name="id"/>
                           <table class="table table-bordered table-hover">
                              <thead>
                                 <tr>
                                    <th>S No</th>
                                    <th style="width:50%">Name Of The Subjects </th>
                                    <th>Max Marks</th>
                                    <th>Marks Obtained</th>
                                    <th>% ofMarks</th>
                                 </tr>
                              </thead>
                              <tbody>
							      <tr>
                                    <td>1</td>
                                    <td>Tamil / Malayalam</td>
                                    <td><input value="{{ $beedit2->max_marks }}" required="requiered" type="text" class="form-control" name="max_marks" id="max_marks" maxlength="50" placeholder="Max Marks"></td>
                                    <td><input value="{{ $beedit2->tamil_malayalam_marks_obtained }}" required="requiered" type="text" class="form-control" name="tamil_malayalam_marks_obtained" id="tamil_malayalam_marks_obtained" maxlength="50" placeholder="Enter Marks"></td>
                                    <td><input value="{{ $beedit2->tamil_malayalam_percentage }}" required="requiered" type="text" class="form-control" name="tamil_malayalam_percentage" id="tamil_malayalam_percentage" maxlength="50" placeholder="Per%"></td>
                                 </tr>
								   <tr>
                                    <td>2</td>
                                    <td>English</td>
                                    <td><input value="{{ $beedit2->max_marks }}" required="requiered" type="text" class="form-control" name="max_marks" id="max_marks" maxlength="50" placeholder="Max Marks"></td>
                                    <td><input value="{{ $beedit2->english_marks_obtained }}" required="requiered" type="text" class="form-control" name="english_marks_obtained" id="english_marks_obtained" maxlength="50" placeholder="Enter Marks"></td>
                                    <td><input value="{{ $beedit2->english_percentage }}" required="requiered" type="text" class="form-control" name="english_percentage" id="english_percentage" maxlength="50" placeholder="Per%"></td>
                                 </tr>
								   <tr>
                                    <td>3</td>
                                    <td>Mathematics</td>
                                    <td><input value="{{ $beedit2->max_marks }}" required="requiered" type="text" class="form-control" name="max_marks" id="max_marks" maxlength="50" placeholder="Max Marks"></td>
                                    <td><input value="{{ $beedit2->mathematics_marks_obtained }}" required="requiered" type="text" class="form-control" name="mathematics_marks_obtained" id="mathematics_marks_obtained" maxlength="50" placeholder="Enter Marks"></td>
                                    <td><input value="{{ $beedit2->mathematics_percentage }}" required="requiered" type="text" class="form-control" name="mathematics_percentage" id="mathematics_percentage" maxlength="50" placeholder="Per%"></td>
                                 </tr>
								 <tr>
                                    <td>4</td>
                                    <td>Physics</td>
                                    <td><input value="{{ $beedit2->max_marks }}" required="requiered" type="text" class="form-control" name="max_marks" id="max_marks" maxlength="50" placeholder="Max Marks"></td>
                                    <td><input value="{{ $beedit2->physics_marks_obtained }}" required="requiered" type="text" class="form-control" name="physics_marks_obtained" id="physics_marks_obtained" maxlength="50" placeholder="Enter Marks"></td>
                                    <td><input value="{{ $beedit2->physics_percentage }}" required="requiered" type="text" class="form-control" name="physics_percentage" id="physics_percentage" maxlength="50" placeholder="Per%"></td>
                                 </tr>
                                 <tr>
                                    <td>5</td>
                                    <td>Chemistry</td>
                                    <td><input value="{{ $beedit2->max_marks }}" required="requiered" type="text" class="form-control" name="max_marks" id="max_marks" maxlength="50" placeholder="Max Marks"></td>
                                    <td><input value="{{ $beedit2->chemistry_marks_obtained }}" required="requiered" type="text" class="form-control" name="chemistry_marks_obtained" id="chemistry_marks_obtained" maxlength="50" placeholder="Enter Marks"></td>
                                    <td><input value="{{ $beedit2->chemistry_percentage }}" required="requiered" type="text" class="form-control" name="chemistry_percentage" id="chemistry_percentage" maxlength="50" placeholder="Per%"></td>
                                 </tr>
                                 <tr>
                                    <td>6</td>
                                    <td>Biology / Computer Science</td>
                                    <td><input value="{{ $beedit2->max_marks }}" required="requiered" type="text" class="form-control" name="max_marks" id="max_marks" maxlength="50" placeholder="Max Marks"></td>
                                    <td><input value="{{ $beedit2->biology_computer_marks_obtained }}" required="requiered" type="text" class="form-control" name="biology_computer_marks_obtained" id="biology_computer_marks_obtained" maxlength="50" placeholder="Enter Marks"></td>
                                    <td><input value="{{ $beedit2->biology_computer_percentage }}" required="requiered" type="text" class="form-control" name="biology_computer_percentage" id="biology_computer_percentage" maxlength="50" placeholder="Per%"></td>
                                 </tr>
                              </tbody>
                           </table>
                           </br>
                           <table class="table table-bordered table-hover">
                              <thead>
                                 <tr>
                                    <th>Subjects</th>
                                    <th>Mathematics</th>
                                    <th>Physics</th>
                                    <th>Chemistry</th>
                                    <th>Total</th>
                                    <th>Percentage</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>Total Marks</td>
                                    <td><input value="{{ $beedit2->mathematics_marks_obtained }}" required="requiered" type="text" class="form-control" name="mathematics_marks_obtained" id="mathematics_marks_obtained" maxlength="50" placeholder="(Out Of 200)"></td>
                                    <td><input value="{{ $beedit2->physics_marks_obtained }}" required="requiered" type="text" class="form-control" name="physics_marks_obtained" id="physics_marks_obtained" maxlength="50" placeholder="(Out Of 200)"></td>
                                    <td><input value="{{ $beedit2->chemistry_marks_obtained }}" required="requiered" type="text" class="form-control" name="chemistry_marks_obtained" id="chemistry_marks_obtained" maxlength="50" placeholder="(Out Of 200)"></td>
                                    <td><input value="{{ $beedit2->total_marks }}" required="requiered" type="text" class="form-control" 
                                       name="total_marks" id="total_marks" maxlength="50" placeholder="(Out Of 600)"></td>
                                    <td><input value="{{ $beedit2->total_marks_per }}" required="requiered" type="text" class="form-control" name="total_marks_per" id="total_marks_per" maxlength="50" placeholder="(Total/6)"></td>
                                 </tr>
                              </tbody>
                           </table>
                           </br>
                           <table class="table table-bordered table-hover">
                              <thead>
                                 <tr>
                                    <th>Subjects</th>
                                    <th>Mathematics</th>
                                    <th>Physics</th>
                                    <th>Chemistry</th>
                                    <th>Total</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>Cut Off Mark</td>
                                    <td><input value="{{ $beedit2->cut_of_mathematics }}" required="requiered" type="text" class="form-control" name="cut_of_mathematics" id="cut_of_mathematics" maxlength="50" placeholder="(Out of 100)"></td>
                                    <td><input value="{{ $beedit2->cut_of_physics }}" required="requiered" type="text" class="form-control" name="cut_of_physics" id="cut_of_physics" maxlength="50" placeholder="(Out of 50)"></td>
                                    <td><input value="{{ $beedit2->cut_of_chemestry }}" required="requiered" type="text" class="form-control" name="cut_of_chemestry" id="cut_of_chemestry" maxlength="50" placeholder="(Out of 50)"></td>
                                    <td><input value="{{ $beedit2->cut_of_mark_total }}" required="requiered" type="text" class="form-control" name="cut_of_mark_total" id="cut_of_mark_total" maxlength="50" placeholder="(Out of 200)"></td>
                                 </tr>
                              </tbody>
                           </table>
                           </br>
                           <table class="table table-bordered table-hover">
                              <thead>
                                 <tr>
                                    <th>Diploma</th>
                                    <th>5<sub>th</sub>Semester</th>
                                    <th>6<sub>th</sub>Semester</th>
                                    <th>Total Marks</th>
                                    <th>Percentage</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>Marks</td>
                                    <td><input value="{{ $beedit2->fifth_semester }}" required="requiered" type="text" class="form-control" name="fifth_semester" id="fifth_semester" maxlength="50" placeholder="(Total Marks)"></td>
                                    <td><input value="{{ $beedit2->sixth_semester }}" required="requiered" type="text" class="form-control" name="sixth_semester" id="sixth_semester" maxlength="50" placeholder="(Total Marks)"></td>
                                    <td><input value="{{ $beedit2->diploma_total_marks }}" required="requiered" type="text" class="form-control" name="diploma_total_marks" id="diploma_total_marks" maxlength="50" placeholder="(5th And 6th)"></td>
                                    <td><input value="{{ $beedit2->diploma_percentage }}" required="requiered" type="text" class="form-control" name="diploma_percentage" id="diploma_percentage" maxlength="50" placeholder="%"></td>
                                 </tr>
                              </tbody>
                           </table>
                           </br>
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group row">
                                    <label for="hostel_accomadation" class="col-sm-6 col-form-label"><span style="color:red"></span>Hostel Accomodation Required</label>
                                    <div class="col-sm-6">
                                       <input value="{{ $beedit2->hostel_accomadation }}" type="checkbox" name="my-checkbox" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group row">
                                    <label for="college_bus_accomadation" class="col-sm-6 col-form-label"><span style="color:red"></span>College Bus Facility Required</label>
                                    <div class="col-sm-6">
                                       <input value="{{ $beedit2->college_bus_accomadation }}" type="checkbox" name="my-checkbox" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="submit" id="save" class="btn btn-primary">Submit</button>
                           </div>
                           @endforeach
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <!-- /.card-body -->
         </div>
         <!-- /.card -->
      </div>
      <!-- /.col -->
</section>
</div>
<!-- /.col -->
@endsection