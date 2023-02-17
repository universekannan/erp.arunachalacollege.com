
@extends('layout')
@section('content')
<section class="content">
   <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body"> 
                <div id="accordion">  
                  <div class="card card-olive">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                      <div class="col-sm-1 float-right">
                     </div>
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse1">
                      Personal Details
                        </a>
                      </h4>
                    </div>
                    <div id="collapse1" class="collapse show" data-parent="#accordion">
                    <form action="{{url('/edit_user')}}" method="post">
                              {{ csrf_field() }}
                    <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                     </ul>
                          <div class="card-body">       
                          <div class="row">
                          <div class="col-md-4">   

                 <input type="hidden" value="{{ $managingedituser->userID }}" class="form-control mb-3" name="id"/>

                          <input type="text" value="{{ $managingedituser->first_name }}" class="form-control mb-3" name="first_name" placeholder="First Name"/>

                          <input type="text" value="{{ $managingedituser->mobile }}" class="form-control mb-3" name="mobile" 
                          placeholder="Mobile Number"/>

                          <input type="text" value="{{ $managingedituser->age }}" class="form-control mb-3" name="age" id="resultBday" placeholder="Age"/>

                          <input type="text" value="{{ $managingedituser->mother_tongue }}" class="form-control mb-3" name="mother_tongue" placeholder="Mother Tong"/>

                          <input type="text" value="{{ $managingedituser->comunity }}" class="form-control mb-3" name="comunity" placeholder="Comunity"/>
               
                          <span id="dupemail" style="color:red;font-size: 12px;"></span>

                 <input onkeyup="duplicateEmail(0)" value="{{ $managingedituser->email }}" id="email" type="email" class="form-control mb-3" name="email" placeholder="Email"/>

            <input type="text" value="{{ $managingedituser->religion }}" class="form-control mb-3" name="religion" placeholder="Religion"/>

                          
                     </div>

                    <div class="col-md-4">   

                          <input type="text" value="{{ $managingedituser->last_name }}" class="form-control mb-3" name="last_name" placeholder="Last Name"/>

                          <input type="text" value="{{ $managingedituser->whats_up }}" class="form-control mb-3" name="whats_up" placeholder="WhatsUp Number"/>

                          <input type="text" value="{{ $managingedituser->place_of_birth }}" class="form-control mb-3" name="place_of_birth" placeholder="Place Of Birth"/>

                          <input type="text" value="{{ $managingedituser->adhaar }}" class="form-control mb-3" name="adhaar" placeholder="Ahaddar"/>

                          <input type="text" value="{{ $managingedituser->language_known }}" class="form-control mb-3" name="language_known" placeholder="Language Known"/>

                          <input type="text" value="{{ $managingedituser->nationalty }}" class="form-control mb-3" name="nationalty" placeholder="Nationalty"/>	

                          <span id="dupemail" style="color:red;font-size: 12px;"></span>

                        
                          
                          <div class="form-group">
                                              <select name="gender" class="form-control">
                                  <option value="male" <?php if($managingedituser->gender == 1){ echo "selected"; }?>>Male</option>
                                  <option value="Female" <?php if($managingedituser->gender == 0){ echo "selected"; }?>>Female</option>
                                            </select>
                                        </div>
                    </div>
                    
                    <div class="col-md-4">   

                      <input type="text" value="{{$managingedituser->father_name }}" class="form-control mb-3" name="father_name" placeholder="Father Name"/>
                      
                      <input type="date" value="{{$managingedituser->date_of_birth }}" class="form-control mb-3" name="date_of_birth" id="bday" onchange="submitBday()">

                      <input type="text" value="{{$managingedituser->pan_no }}" class="form-control mb-3" name="pan_no" placeholder="PAN"/>

                      <input type="text" value="{{ $managingedituser->blood_group }}" class="form-control mb-3" name="blood_group" placeholder="Blood Group"/>

                      <input type="text" value="{{ $managingedituser->hobbies }}" class="form-control mb-3" name="hobbies" placeholder="Hobbies"/>

                      <input type="text" value="{{ $managingedituser->pin_code }}" class="form-control mb-3" name="pin_code" placeholder="Pin Code"/>

                      <textarea name='address' value="{{ $managingedituser->address }}" class="form-control" rows="3" placeholder="Enter Address..." ></textarea>
                      
                  </div>      
              </div>
          </div>
		  <div class="modal-footer justify-content-between">
            <button type="submit" id="save" class="btn btn-primary">Submit</button>
			<button type="button" id="save" class="btn btn-primary" data-toggle="modal" data-target="#adduser">Add</button>
            </form>
         </div>
		 
		 <div class="card-body">   
		 <div class="card-body table-responsive p-0">
		 <table id="example2" class="table table-bordered table-hover">
<thead>
<tr>
                 Educatiomal Qualification

                    <th>Course Name</th>
                    <th>Subject/Specialisation</th>
                    <th>CollegeName</th>
                    <th>UnivercityName</th>
                    <th>FT / PT</th>
                    <th>RegNo</th>
                    <th>ClassObtained</th>
                    <th>StudyYear</th>
                  </tr>
                  </thead>           
                  <tbody>
                  
                      @foreach($managingeditusereducation as $key=>$managingeditusereducationlist)
                        <tr id="arrayorder_<?php echo $managingeditusereducationlist->id?>">
                           <td>{{ $key + 1 }}</td>
                           <td>{{ $managingeditusereducationlist->course_name }}</td>
                           <td>{{ $managingeditusereducationlist->subject_specialisation }}</td>
                           <td>{{ $managingeditusereducationlist->college_name }}</td>
                           <td>{{ $managingeditusereducationlist->univercity_name }}</td>
                           <td>{{ $managingeditusereducationlist->ft_pt }}</td>
                           <td>{{ $managingeditusereducationlist->reg_no }}</td>
                           <td>{{ $managingeditusereducationlist->class_obtained }}</td>
                           <td>{{ $managingeditusereducationlist->study_year }}</td>       

            @endforeach
		  </tbody>
		 </table>
                </div> 
				</div>                        
        </div>
</div>

                    <div class="card card-purple">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                      <div class="col-sm-1 float-right">
                     <td>
       <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#adduser"><i class="fa fa-plus"> </i> Add</button>
                     </td>
                     </div>
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse2">
                  Family Paticulars
                        </a>
                      </h4>
                    </div>
                    <div id="collapse2" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                      <div class="row">
                     <div class="col-md-6">   
                                  
                                  <input value="{{ $managingedituser->first_name }}" type="text" class="form-control mb-3" name="first_name" placeholder="Enter First Name"/>

                                  <input value="{{ $managingedituser->email }}"type="email" class="form-control mb-3" 
								  name="email" placeholder="Enter Email"/>

                                  <div class="form-group">
                                  <select name="gender" class="form-control">
                                  <option value="male" <?php if($managingedituser->gender == 1){ echo "selected"; }?>>Male</option>
                                  <option value="Female" <?php if($managingedituser->gender == 0){ echo "selected"; }?>>Female</option>
                                            </select>
                                        </div>

                                 <div class="form-group">
                                 <select name="user_types_id" class="form-control">
                                 <option>Select User type</option>
                                 @if(auth()->user()->user_types_id == 1)
                                 <option value="2">Admin</option>
                                 <option value="3">Staff</option>
                                 @else
                                 <option value="3">Staff</option>
                                 @endif
                             </select>
                                   </div>
                               </div>
                               <div class="col-md-6">   
                                  <input value="{{ $managingedituser->last_name }}" type="text" class="form-control mb-3" name="last_name" placeholder="Enter Last Name"/>

                                  <input value="{{ $managingedituser->mobile }}" type="text" class="form-control mb-3" name="mobile" placeholder="Enter Mobile Number"/>
                                  <div class="form-group">
                                    <select name="status" class="form-control">
                                        <option value="1" <?php if($managingedituser->status == 1){ echo "selected"; }?>>Active</option>
                                        <option value="0" <?php if($managingedituser->status == 0){ echo "selected"; }?>>Inactive</option>
                                    </select>
                                </div>
                                <textarea name='address' class="form-control" rows="3" placeholder="Enter Address..." >{{ $managingedituser->address }}</textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                      </div>
                    </div>
                 
				 
                  <div class="card card-olive">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                      <div class="col-sm-1 float-right">
                     <td>
                     <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#adduser"><i class="fa fa-plus"> </i> Add</button>
                     </td>
                     </div>
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse3">
                  Education Details
                        </a>
                      </h4>
                    </div>
                    <div id="collapse3" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                      <div class="row">
                     <div class="col-md-6">   
                                  
   <input value="{{ $managingedituser->first_name }}" type="text" class="form-control mb-3" name="first_name" placeholder="Enter First Name"/>

                                       <input value="{{ $managingedituser->email }}"type="email" class="form-control mb-3" name="email" placeholder="Enter Email"/>
                                          <div class="form-group">
                                              <select name="gender" class="form-control">
                                                <option value="Male" <?php if($managingedituser->gender == 1){ echo "selected"; }?>>Male</option>
                                                <option value="Female" <?php if($managingedituser->gender == 0){ echo "selected"; }?>>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                         <select name="user_types_id" class="form-control">
                                 <option>Select User type</option>
                                 @if(auth()->user()->user_types_id == 1)
                                 <option value="2">Admin</option>
                                 <option value="3">Staff</option>
                                 @else
                                 <option value="3">Staff</option>
                                 @endif
                             </select>
                                   </div>
                               </div>
                               <div class="col-md-6">   
                                  <input value="{{ $managingedituser->last_name }}" type="text" class="form-control mb-3" name="last_name" placeholder="Enter Last Name"/>

                                  <input value="{{ $managingedituser->mobile }}" type="text" class="form-control mb-3" name="mobile" placeholder="Enter Mobile Number"/>
                                  <div class="form-group">
                                    <select name="status" class="form-control">
                                        <option value="1" <?php if($managingedituser->status == 1){ echo "selected"; }?>>Active</option>
                                        <option value="0" <?php if($managingedituser->status == 0){ echo "selected"; }?>>Inactive</option>
                                    </select>
                                </div>
                                <textarea name='address' class="form-control" rows="3" placeholder="Enter Address..." >{{ $managingedituser->address }}</textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                      </div>
                    </div>
                 
				 
                  <div class="card card-purple">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                      <div class="col-sm-1 float-right">
                     <td>
                     <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#adduser"><i class="fa fa-plus"> </i> Add</button>
                     </td>
                     </div>
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse4">
                  Academic Details
                        </a>
                      </h4>
                    </div>
                    <div id="collapse4" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                      <div class="row">
                     <div class="col-md-6">   
                                  
   <input value="{{ $managingedituser->first_name }}" type="text" class="form-control mb-3" name="first_name" placeholder="Enter First Name"/>

                                       <input value="{{ $managingedituser->email }}"type="email" class="form-control mb-3" name="email" placeholder="Enter Email"/>
                                          <div class="form-group">
                                              <select name="gender" class="form-control">
                                                <option value="Male" <?php if($managingedituser->gender == 1){ echo "selected"; }?>>Male</option>
                                                <option value="Female" <?php if($managingedituser->gender == 0){ echo "selected"; }?>>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                         <select name="user_types_id" class="form-control">
                                 <option>Select User type</option>
                                 @if(auth()->user()->user_types_id == 1)
                                 <option value="2">Admin</option>
                                 <option value="3">Staff</option>
                                 @else
                                 <option value="3">Staff</option>
                                 @endif
                             </select>
                                   </div>
                               </div>
                               <div class="col-md-6">   
                                  <input value="{{ $managingedituser->last_name }}" type="text" class="form-control mb-3" name="last_name" placeholder="Enter Last Name"/>

                                  <input value="{{ $managingedituser->mobile }}" type="text" class="form-control mb-3" name="mobile" placeholder="Enter Mobile Number"/>
                                  <div class="form-group">
                                    <select name="status" class="form-control">
                                        <option value="1" <?php if($managingedituser->status == 1){ echo "selected"; }?>>Active</option>
                                        <option value="0" <?php if($managingedituser->status == 0){ echo "selected"; }?>>Inactive</option>
                                    </select>
                                </div>
                                <textarea name='address' class="form-control" rows="3" placeholder="Enter Address..." >{{ $managingedituser->address }}</textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                      </div>
                    </div>
                 
				 
                  <div class="card card-olive">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse5">
                    Arrear Details
                        </a>
                      </h4>
                    </div>
                    <div id="collapse5" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                        <div class="row">
                     <div class="col-md-6">   
                                  
   <input value="{{ $managingedituser->first_name }}" type="text" class="form-control mb-3" name="first_name" placeholder="Enter First Name"/>

                                       <input value="{{ $managingedituser->email }}"type="email" class="form-control mb-3" name="email" placeholder="Enter Email"/>
                                          <div class="form-group">
                                              <select name="gender" class="form-control">
                                                <option value="Male" <?php if($managingedituser->gender == 1){ echo "selected"; }?>>Male</option>
                                                <option value="Female" <?php if($managingedituser->gender == 0){ echo "selected"; }?>>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                         <select name="user_types_id" class="form-control">
                                 <option>Select User type</option>
                                 @if(auth()->user()->user_types_id == 1)
                                 <option value="2">Admin</option>
                                 <option value="3">Staff</option>
                                 @else
                                 <option value="3">Staff</option>
                                 @endif
                             </select>
                                   </div>
                               </div>
                               <div class="col-md-6">   
                                  <input value="{{ $managingedituser->last_name }}" type="text" class="form-control mb-3" name="last_name" placeholder="Enter Last Name"/>

                                  <input value="{{ $managingedituser->mobile }}" type="text" class="form-control mb-3" name="mobile" placeholder="Enter Mobile Number"/>
                                  <div class="form-group">
                                    <select name="status" class="form-control">
                                        <option value="1" <?php if($managingedituser->status == 1){ echo "selected"; }?>>Active</option>
                                        <option value="0" <?php if($managingedituser->status == 0){ echo "selected"; }?>>Inactive</option>
                                    </select>
                                </div>
                                <textarea name='address' class="form-control" rows="3" placeholder="Enter Address..." >{{ $managingedituser->address }}</textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                      </div>
                    </div>
                  <div class="card card-purple">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse6">
                          Awards
                        </a>
                      </h4>
                    </div>
                    <div id="collapse6" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                      <div class="row">
                     <div class="col-md-6">   
                                  
   <input value="{{ $managingedituser->first_name }}" type="text" class="form-control mb-3" name="first_name" placeholder="Enter First Name"/>

                                       <input value="{{ $managingedituser->email }}"type="email" class="form-control mb-3" name="email" placeholder="Enter Email"/>
                                          <div class="form-group">
                                              <select name="gender" class="form-control">
                                                <option value="Male" <?php if($managingedituser->gender == 1){ echo "selected"; }?>>Male</option>
                                                <option value="Female" <?php if($managingedituser->gender == 0){ echo "selected"; }?>>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                         <select name="user_types_id" class="form-control">
                                 <option>Select User type</option>
                                 @if(auth()->user()->user_types_id == 1)
                                 <option value="2">Admin</option>
                                 <option value="3">Staff</option>
                                 @else
                                 <option value="3">Staff</option>
                                 @endif
                             </select>
                                   </div>
                               </div>
                               <div class="col-md-6">   
                                  <input value="{{ $managingedituser->last_name }}" type="text" class="form-control mb-3" name="last_name" placeholder="Enter Last Name"/>

                                  <input value="{{ $managingedituser->mobile }}" type="text" class="form-control mb-3" name="mobile" placeholder="Enter Mobile Number"/>
                                  <div class="form-group">
                                    <select name="status" class="form-control">
                                        <option value="1" <?php if($managingedituser->status == 1){ echo "selected"; }?>>Active</option>
                                        <option value="0" <?php if($managingedituser->status == 0){ echo "selected"; }?>>Inactive</option>
                                    </select>
                                </div>
                                <textarea name='address' class="form-control" rows="3" placeholder="Enter Address..." >{{ $managingedituser->address }}</textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                      </div>
                    </div>
                  <div class="card card-olive">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse7">
                        Participation In Workshop/Seminar/Symposium/Conference
                        </a>
                      </h4>
                    </div>
                    <div id="collapse7" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                      <div class="row">
                     <div class="col-md-6">   
                                  
   <input value="{{ $managingedituser->first_name }}" type="text" class="form-control mb-3" name="first_name" placeholder="Enter First Name"/>

                                       <input value="{{ $managingedituser->email }}"type="email" class="form-control mb-3" name="email" placeholder="Enter Email"/>
                                          <div class="form-group">
                                              <select name="gender" class="form-control">
                                                <option value="Male" <?php if($managingedituser->gender == 1){ echo "selected"; }?>>Male</option>
                                                <option value="Female" <?php if($managingedituser->gender == 0){ echo "selected"; }?>>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                         <select name="user_types_id" class="form-control">
                                 <option>Select User type</option>
                                 @if(auth()->user()->user_types_id == 1)
                                 <option value="2">Admin</option>
                                 <option value="3">Staff</option>
                                 @else
                                 <option value="3">Staff</option>
                                 @endif
                             </select>
                                   </div>
                               </div>
                               <div class="col-md-6">   
                                  <input value="{{ $managingedituser->last_name }}" type="text" class="form-control mb-3" name="last_name" placeholder="Enter Last Name"/>

                                  <input value="{{ $managingedituser->mobile }}" type="text" class="form-control mb-3" name="mobile" placeholder="Enter Mobile Number"/>
                                  <div class="form-group">
                                    <select name="status" class="form-control">
                                        <option value="1" <?php if($managingedituser->status == 1){ echo "selected"; }?>>Active</option>
                                        <option value="0" <?php if($managingedituser->status == 0){ echo "selected"; }?>>Inactive</option>
                                    </select>
                                </div>
                                <textarea name='address' class="form-control" rows="3" placeholder="Enter Address..." >{{ $managingedituser->address }}</textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                      </div>
                    </div>
                  <div class="card card-purple">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse8">
                        Papers Publised In Conference/Symposium
                        </a>
                      </h4>
                    </div>
                    <div id="collapse8" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                      <div class="row">
                     <div class="col-md-6">   
                                  
   <input value="{{ $managingedituser->first_name }}" type="text" class="form-control mb-3" name="first_name" placeholder="Enter First Name"/>

                                       <input value="{{ $managingedituser->email }}"type="email" class="form-control mb-3" name="email" placeholder="Enter Email"/>
                                          <div class="form-group">
                                              <select name="gender" class="form-control">
                                                <option value="Male" <?php if($managingedituser->gender == 1){ echo "selected"; }?>>Male</option>
                                                <option value="Female" <?php if($managingedituser->gender == 0){ echo "selected"; }?>>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                         <select name="user_types_id" class="form-control">
                                 <option>Select User type</option>
                                 @if(auth()->user()->user_types_id == 1)
                                 <option value="2">Admin</option>
                                 <option value="3">Staff</option>
                                 @else
                                 <option value="3">Staff</option>
                                 @endif
                             </select>
                                   </div>
                               </div>
                               <div class="col-md-6">   
                                  <input value="{{ $managingedituser->last_name }}" type="text" class="form-control mb-3" name="last_name" placeholder="Enter Last Name"/>

                                  <input value="{{ $managingedituser->mobile }}" type="text" class="form-control mb-3" name="mobile" placeholder="Enter Mobile Number"/>
                                  <div class="form-group">
                                    <select name="status" class="form-control">
                                        <option value="1" <?php if($managingedituser->status == 1){ echo "selected"; }?>>Active</option>
                                        <option value="0" <?php if($managingedituser->status == 0){ echo "selected"; }?>>Inactive</option>
                                    </select>
                                </div>
                                <textarea name='address' class="form-control" rows="3" placeholder="Enter Address..." >{{ $managingedituser->address }}</textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                      </div>
                    </div>
                  <div class="card card-olive">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse9">
                        Papers Published In Journal
                        </a>
                      </h4>
                    </div>
                    <div id="collapse9" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                      <div class="row">
                     <div class="col-md-6">   
                                  
   <input value="{{ $managingedituser->first_name }}" type="text" class="form-control mb-3" name="first_name" placeholder="Enter First Name"/>

                                       <input value="{{ $managingedituser->email }}"type="email" class="form-control mb-3" name="email" placeholder="Enter Email"/>
                                          <div class="form-group">
                                              <select name="gender" class="form-control">
                                                <option value="Male" <?php if($managingedituser->gender == 1){ echo "selected"; }?>>Male</option>
                                                <option value="Female" <?php if($managingedituser->gender == 0){ echo "selected"; }?>>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                         <select name="user_types_id" class="form-control">
                                 <option>Select User type</option>
                                 @if(auth()->user()->user_types_id == 1)
                                 <option value="2">Admin</option>
                                 <option value="3">Staff</option>
                                 @else
                                 <option value="3">Staff</option>
                                 @endif
                             </select>
                                   </div>
                               </div>
                               <div class="col-md-6">   
                                  <input value="{{ $managingedituser->last_name }}" type="text" class="form-control mb-3" name="last_name" placeholder="Enter Last Name"/>

                                  <input value="{{ $managingedituser->mobile }}" type="text" class="form-control mb-3" name="mobile" placeholder="Enter Mobile Number"/>
                                  <div class="form-group">
                                    <select name="status" class="form-control">
                                        <option value="1" <?php if($managingedituser->status == 1){ echo "selected"; }?>>Active</option>
                                        <option value="0" <?php if($managingedituser->status == 0){ echo "selected"; }?>>Inactive</option>
                                    </select>
                                </div>
                                <textarea name='address' class="form-control" rows="3" placeholder="Enter Address..." >{{ $managingedituser->address }}</textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                      </div>
                    </div>
                  <div class="card card-purple">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse10">
                       Computer Courses Completed
                        </a>
                      </h4>
                    </div>
                    <div id="collapse10" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                      <div class="row">
                     <div class="col-md-6">   
                                  
   <input value="{{ $managingedituser->first_name }}" type="text" class="form-control mb-3" name="first_name" placeholder="Enter First Name"/>

                                       <input value="{{ $managingedituser->email }}"type="email" class="form-control mb-3" name="email" placeholder="Enter Email"/>
                                          <div class="form-group">
                                              <select name="gender" class="form-control">
                                                <option value="Male" <?php if($managingedituser->gender == 1){ echo "selected"; }?>>Male</option>
                                                <option value="Female" <?php if($managingedituser->gender == 0){ echo "selected"; }?>>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                         <select name="user_types_id" class="form-control">
                                 <option>Select User type</option>
                                 @if(auth()->user()->user_types_id == 1)
                                 <option value="2">Admin</option>
                                 <option value="3">Staff</option>
                                 @else
                                 <option value="3">Staff</option>
                                 @endif
                             </select>
                                   </div>
                               </div>
                               <div class="col-md-6">   
                                  <input value="{{ $managingedituser->last_name }}" type="text" class="form-control mb-3" name="last_name" placeholder="Enter Last Name"/>

                                  <input value="{{ $managingedituser->mobile }}" type="text" class="form-control mb-3" name="mobile" placeholder="Enter Mobile Number"/>
                                  <div class="form-group">
                                    <select name="status" class="form-control">
                                        <option value="1" <?php if($managingedituser->status == 1){ echo "selected"; }?>>Active</option>
                                        <option value="0" <?php if($managingedituser->status == 0){ echo "selected"; }?>>Inactive</option>
                                    </select>
                                </div>
                                <textarea name='address' class="form-control" rows="3" placeholder="Enter Address..." >{{ $managingedituser->address }}</textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                      </div>
                    </div>
                  <div class="card card-olive">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse11">
                          Placement Training Undertaken
                        </a>
                      </h4>
                    </div>
                    <div id="collapse11" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                      <div class="row">
                     <div class="col-md-6">   
                                  
   <input value="{{ $managingedituser->first_name }}" type="text" class="form-control mb-3" name="first_name" placeholder="Enter First Name"/>

                                       <input value="{{ $managingedituser->email }}"type="email" class="form-control mb-3" name="email" placeholder="Enter Email"/>
                                          <div class="form-group">
                                              <select name="gender" class="form-control">
                                                <option value="Male" <?php if($managingedituser->gender == 1){ echo "selected"; }?>>Male</option>
                                                <option value="Female" <?php if($managingedituser->gender == 0){ echo "selected"; }?>>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                         <select name="user_types_id" class="form-control">
                                 <option>Select User type</option>
                                 @if(auth()->user()->user_types_id == 1)
                                 <option value="2">Admin</option>
                                 <option value="3">Staff</option>
                                 @else
                                 <option value="3">Staff</option>
                                 @endif
                             </select>
                                   </div>
                               </div>
                               <div class="col-md-6">   
                                  <input value="{{ $managingedituser->last_name }}" type="text" class="form-control mb-3" name="last_name" placeholder="Enter Last Name"/>

                                  <input value="{{ $managingedituser->mobile }}" type="text" class="form-control mb-3" name="mobile" placeholder="Enter Mobile Number"/>
                                  <div class="form-group">
                                    <select name="status" class="form-control">
                                        <option value="1" <?php if($managingedituser->status == 1){ echo "selected"; }?>>Active</option>
                                        <option value="0" <?php if($managingedituser->status == 0){ echo "selected"; }?>>Inactive</option>
                                    </select>
                                </div>
                                <textarea name='address' class="form-control" rows="3" placeholder="Enter Address..." >{{ $managingedituser->address }}</textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                      </div>
                    </div>
                  <div class="card card-purple">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse12">
                         Placement Details
                        </a>
                      </h4>
                    </div>
                    <div id="collapse12" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                      <div class="row">
                     <div class="col-md-6">   
                                  
   <input value="{{ $managingedituser->first_name }}" type="text" class="form-control mb-3" name="first_name" placeholder="Enter First Name"/>

                                       <input value="{{ $managingedituser->email }}"type="email" class="form-control mb-3" name="email" placeholder="Enter Email"/>
                                          <div class="form-group">
                                              <select name="gender" class="form-control">
                                                <option value="Male" <?php if($managingedituser->gender == 1){ echo "selected"; }?>>Male</option>
                                                <option value="Female" <?php if($managingedituser->gender == 0){ echo "selected"; }?>>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                         <select name="user_types_id" class="form-control">
                                 <option>Select User type</option>
                                 @if(auth()->user()->user_types_id == 1)
                                 <option value="2">Admin</option>
                                 <option value="3">Staff</option>
                                 @else
                                 <option value="3">Staff</option>
                                 @endif
                             </select>
                                   </div>
                               </div>
                               <div class="col-md-6">   
                                  <input value="{{ $managingedituser->last_name }}" type="text" class="form-control mb-3" name="last_name" placeholder="Enter Last Name"/>

                                  <input value="{{ $managingedituser->mobile }}" type="text" class="form-control mb-3" name="mobile" placeholder="Enter Mobile Number"/>
                                  <div class="form-group">
                                    <select name="status" class="form-control">
                                        <option value="1" <?php if($managingedituser->status == 1){ echo "selected"; }?>>Active</option>
                                        <option value="0" <?php if($managingedituser->status == 0){ echo "selected"; }?>>Inactive</option>
                                    </select>
                                </div>
                                <textarea name='address' class="form-control" rows="3" placeholder="Enter Address..." >{{ $managingedituser->address }}</textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                      </div>
                    </div>
                  <div class="card card-olive">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse13">
                       Computer Language Known
                        </a>
                      </h4>
                    </div>
                    <div id="collapse13" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                      <div class="row">
                     <div class="col-md-6">   
                                  
   <input value="{{ $managingedituser->first_name }}" type="text" class="form-control mb-3" name="first_name" placeholder="Enter First Name"/>

                                       <input value="{{ $managingedituser->email }}"type="email" class="form-control mb-3" name="email" placeholder="Enter Email"/>
                                          <div class="form-group">
                                              <select name="gender" class="form-control">
                                                <option value="Male" <?php if($managingedituser->gender == 1){ echo "selected"; }?>>Male</option>
                                                <option value="Female" <?php if($managingedituser->gender == 0){ echo "selected"; }?>>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                         <select name="user_types_id" class="form-control">
                                 <option>Select User type</option>
                                 @if(auth()->user()->user_types_id == 1)
                                 <option value="2">Admin</option>
                                 <option value="3">Staff</option>
                                 @else
                                 <option value="3">Staff</option>
                                 @endif
                             </select>
                                   </div>
                               </div>
                               <div class="col-md-6">   
                                  <input value="{{ $managingedituser->last_name }}" type="text" class="form-control mb-3" name="last_name" placeholder="Enter Last Name"/>

                                  <input value="{{ $managingedituser->mobile }}" type="text" class="form-control mb-3" name="mobile" placeholder="Enter Mobile Number"/>
                                  <div class="form-group">
                                    <select name="status" class="form-control">
                                        <option value="1" <?php if($managingedituser->status == 1){ echo "selected"; }?>>Active</option>
                                        <option value="0" <?php if($managingedituser->status == 0){ echo "selected"; }?>>Inactive</option>
                                    </select>
                                </div>
                                <textarea name='address' class="form-control" rows="3" placeholder="Enter Address..." >{{ $managingedituser->address }}</textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                      </div>
                    </div>
                  <div class="card card-purple">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse14">
                       Inplant Training / Internship
                        </a>
                      </h4>
                    </div>
                    <div id="collapse14" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                          <div class="row">
                     <div class="col-md-6">   
                                  
   <input value="{{ $managingedituser->first_name }}" type="text" class="form-control mb-3" name="first_name" placeholder="Enter First Name"/>

                                       <input value="{{ $managingedituser->email }}"type="email" class="form-control mb-3" name="email" placeholder="Enter Email"/>
                                          <div class="form-group">
                                              <select name="gender" class="form-control">
                                                <option value="Male" <?php if($managingedituser->gender == 1){ echo "selected"; }?>>Male</option>
                                                <option value="Female" <?php if($managingedituser->gender == 0){ echo "selected"; }?>>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                         <select name="user_types_id" class="form-control">
                                 <option>Select User type</option>
                                 @if(auth()->user()->user_types_id == 1)
                                 <option value="2">Admin</option>
                                 <option value="3">Staff</option>
                                 @else
                                 <option value="3">Staff</option>
                                 @endif
                             </select>
                                   </div>
                               </div>
                               <div class="col-md-6">   
                                  <input value="{{ $managingedituser->last_name }}" type="text" class="form-control mb-3" name="last_name" placeholder="Enter Last Name"/>

                                  <input value="{{ $managingedituser->mobile }}" type="text" class="form-control mb-3" name="mobile" placeholder="Enter Mobile Number"/>
                                  <div class="form-group">
                                    <select name="status" class="form-control">
                                        <option value="1" <?php if($managingedituser->status == 1){ echo "selected"; }?>>Active</option>
                                        <option value="0" <?php if($managingedituser->status == 0){ echo "selected"; }?>>Inactive</option>
                                    </select>
                                </div>
                                <textarea name='address' class="form-control" rows="3" placeholder="Enter Address..." >{{ $managingedituser->address }}</textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                      </div>
                    </div>
                  <div class="card card-olive">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse15">
                          Club Activaties
                        </a>
                      </h4>
                    </div>
                    <div id="collapse15" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                      <div class="row">
                     <div class="col-md-6">   
                                  
   <input value="{{ $managingedituser->first_name }}" type="text" class="form-control mb-3" name="first_name" placeholder="Enter First Name"/>

                                       <input value="{{ $managingedituser->email }}"type="email" class="form-control mb-3" name="email" placeholder="Enter Email"/>
                                          <div class="form-group">
                                              <select name="gender" class="form-control">
                                                <option value="Male" <?php if($managingedituser->gender == 1){ echo "selected"; }?>>Male</option>
                                                <option value="Female" <?php if($managingedituser->gender == 0){ echo "selected"; }?>>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                         <select name="user_types_id" class="form-control">
                                 <option>Select User type</option>
                                 @if(auth()->user()->user_types_id == 1)
                                 <option value="2">Admin</option>
                                 <option value="3">Staff</option>
                                 @else
                                 <option value="3">Staff</option>
                                 @endif
                             </select>
                                   </div>
                               </div>
                               <div class="col-md-6">   
                                  <input value="{{ $managingedituser->last_name }}" type="text" class="form-control mb-3" name="last_name" placeholder="Enter Last Name"/>

                                  <input value="{{ $managingedituser->mobile }}" type="text" class="form-control mb-3" name="mobile" placeholder="Enter Mobile Number"/>
                                  <div class="form-group">
                                    <select name="status" class="form-control">
                                        <option value="1" <?php if($managingedituser->status == 1){ echo "selected"; }?>>Active</option>
                                        <option value="0" <?php if($managingedituser->status == 0){ echo "selected"; }?>>Inactive</option>
                                    </select>
                                </div>
                                <textarea name='address' class="form-control" rows="3" placeholder="Enter Address..." >{{ $managingedituser->address }}</textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                      </div>
                    </div>
                  <div class="card card-purple">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse16">
                          Mini Project / Project Phase1
                        </a>
                      </h4>
                    </div>
                    <div id="collapse16" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                      <div class="row">
                     <div class="col-md-6">   
                                  
   <input value="{{ $managingedituser->first_name }}" type="text" class="form-control mb-3" name="first_name" placeholder="Enter First Name"/>

                                       <input value="{{ $managingedituser->email }}"type="email" class="form-control mb-3" name="email" placeholder="Enter Email"/>
                                          <div class="form-group">
                                              <select name="gender" class="form-control">
                                                <option value="Male" <?php if($managingedituser->gender == 1){ echo "selected"; }?>>Male</option>
                                                <option value="Female" <?php if($managingedituser->gender == 0){ echo "selected"; }?>>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                         <select name="user_types_id" class="form-control">
                                 <option>Select User type</option>
                                 @if(auth()->user()->user_types_id == 1)
                                 <option value="2">Admin</option>
                                 <option value="3">Staff</option>
                                 @else
                                 <option value="3">Staff</option>
                                 @endif
                             </select>
                                   </div>
                               </div>
                               <div class="col-md-6">   
                                  <input value="{{ $managingedituser->last_name }}" type="text" class="form-control mb-3" name="last_name" placeholder="Enter Last Name"/>

                                  <input value="{{ $managingedituser->mobile }}" type="text" class="form-control mb-3" name="mobile" placeholder="Enter Mobile Number"/>
                                  <div class="form-group">
                                    <select name="status" class="form-control">
                                        <option value="1" <?php if($managingedituser->status == 1){ echo "selected"; }?>>Active</option>
                                        <option value="0" <?php if($managingedituser->status == 0){ echo "selected"; }?>>Inactive</option>
                                    </select>
                                </div>
                                <textarea name='address' class="form-control" rows="3" placeholder="Enter Address..." >{{ $managingedituser->address }}</textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                      </div>
                    </div>
                  <div class="card card-olive">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse17">
                         Main Project / Project Phase2
                        </a>
                      </h4>
                    </div>
                    <div id="collapse17" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                      <div class="row">
                     <div class="col-md-6">   
                                  
   <input value="{{ $managingedituser->first_name }}" type="text" class="form-control mb-3" name="first_name" placeholder="Enter First Name"/>

                                       <input value="{{ $managingedituser->email }}"type="email" class="form-control mb-3" name="email" placeholder="Enter Email"/>
                                          <div class="form-group">
                                              <select name="gender" class="form-control">
                                                <option value="Male" <?php if($managingedituser->gender == 1){ echo "selected"; }?>>Male</option>
                                                <option value="Female" <?php if($managingedituser->gender == 0){ echo "selected"; }?>>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                         <select name="user_types_id" class="form-control">
                                 <option>Select User type</option>
                                 @if(auth()->user()->user_types_id == 1)
                                 <option value="2">Admin</option>
                                 <option value="3">Staff</option>
                                 @else
                                 <option value="3">Staff</option>
                                 @endif
                             </select>
                                   </div>
                               </div>
                               <div class="col-md-6">   
                                  <input value="{{ $managingedituser->last_name }}" type="text" class="form-control mb-3" name="last_name" placeholder="Enter Last Name"/>

                                  <input value="{{ $managingedituser->mobile }}" type="text" class="form-control mb-3" name="mobile" placeholder="Enter Mobile Number"/>
                                  <div class="form-group">
                                    <select name="status" class="form-control">
                                        <option value="1" <?php if($managingedituser->status == 1){ echo "selected"; }?>>Active</option>
                                        <option value="0" <?php if($managingedituser->status == 0){ echo "selected"; }?>>Inactive</option>
                                    </select>
                                </div>
                                <textarea name='address' class="form-control" rows="3" placeholder="Enter Address..." >{{ $managingedituser->address }}</textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                      </div>
                    </div>
                  <div class="card card-purple">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse18">
                          Extra Curricular Activaties-Arts Events(Price Winning Event)
                        </a>
                      </h4>
                    </div>
                    <div id="collapse18" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                      <div class="row">
                     <div class="col-md-6">   
                                  
   <input value="{{ $managingedituser->first_name }}" type="text" class="form-control mb-3" name="first_name" placeholder="Enter First Name"/>

                                       <input value="{{ $managingedituser->email }}"type="email" class="form-control mb-3" name="email" placeholder="Enter Email"/>
                                          <div class="form-group">
                                              <select name="gender" class="form-control">
                                                <option value="Male" <?php if($managingedituser->gender == 1){ echo "selected"; }?>>Male</option>
                                                <option value="Female" <?php if($managingedituser->gender == 0){ echo "selected"; }?>>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                         <select name="user_types_id" class="form-control">
                                 <option>Select User type</option>
                                 @if(auth()->user()->user_types_id == 1)
                                 <option value="2">Admin</option>
                                 <option value="3">Staff</option>
                                 @else
                                 <option value="3">Staff</option>
                                 @endif
                             </select>
                                   </div>
                               </div>
                               <div class="col-md-6">   
                                  <input value="{{ $managingedituser->last_name }}" type="text" class="form-control mb-3" name="last_name" placeholder="Enter Last Name"/>

                                  <input value="{{ $managingedituser->mobile }}" type="text" class="form-control mb-3" name="mobile" placeholder="Enter Mobile Number"/>
                                  <div class="form-group">
                                    <select name="status" class="form-control">
                                        <option value="1" <?php if($managingedituser->status == 1){ echo "selected"; }?>>Active</option>
                                        <option value="0" <?php if($managingedituser->status == 0){ echo "selected"; }?>>Inactive</option>
                                    </select>
                                </div>
                                <textarea name='address' class="form-control" rows="3" placeholder="Enter Address..." >{{ $managingedituser->address }}</textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                      </div>
                    </div>
                  <div class="card card-olive">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse19">
                       Sports/Games(Game Winning Event)
                        </a>
                      </h4>
                    </div>
                    <div id="collapse19" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                      <div class="row">
                     <div class="col-md-6">   
                                  
   <input value="{{ $managingedituser->first_name }}" type="text" class="form-control mb-3" name="first_name" placeholder="Enter First Name"/>

                                       <input value="{{ $managingedituser->email }}"type="email" class="form-control mb-3" name="email" placeholder="Enter Email"/>
                                          <div class="form-group">
                                              <select name="gender" class="form-control">
                                                <option value="Male" <?php if($managingedituser->gender == 1){ echo "selected"; }?>>Male</option>
                                                <option value="Female" <?php if($managingedituser->gender == 0){ echo "selected"; }?>>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                         <select name="user_types_id" class="form-control">
                                 <option>Select User type</option>
                                 @if(auth()->user()->user_types_id == 1)
                                 <option value="2">Admin</option>
                                 <option value="3">Staff</option>
                                 @else
                                 <option value="3">Staff</option>
                                 @endif
                             </select>
                                   </div>
                               </div>
                               <div class="col-md-6">   
                                  <input value="{{ $managingedituser->last_name }}" type="text" class="form-control mb-3" name="last_name" placeholder="Enter Last Name"/>

                                  <input value="{{ $managingedituser->mobile }}" type="text" class="form-control mb-3" name="mobile" placeholder="Enter Mobile Number"/>
                                  <div class="form-group">
                                    <select name="status" class="form-control">
                                        <option value="1" <?php if($managingedituser->status == 1){ echo "selected"; }?>>Active</option>
                                        <option value="0" <?php if($managingedituser->status == 0){ echo "selected"; }?>>Inactive</option>
                                    </select>
                                </div>
                                <textarea name='address' class="form-control" rows="3" placeholder="Enter Address..." >{{ $managingedituser->address }}</textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                      </div>
                    </div>
                  <div class="card card-purple">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse20">
                        Wheather Hosteller:Yes/No     If Hosteller Room No:
                        </a>
                      </h4>
                    </div>
                    <div id="collapse20" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                      <div class="row">
                     <div class="col-md-6">   
                                  
   <input value="{{ $managingedituser->first_name }}" type="text" class="form-control mb-3" name="first_name" placeholder="Enter First Name"/>

                                       <input value="{{ $managingedituser->email }}"type="email" class="form-control mb-3" name="email" placeholder="Enter Email"/>
                                          <div class="form-group">
                                              <select name="gender" class="form-control">
                                                <option value="Male" <?php if($managingedituser->gender == 1){ echo "selected"; }?>>Male</option>
                                                <option value="Female" <?php if($managingedituser->gender == 0){ echo "selected"; }?>>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                         <select name="user_types_id" class="form-control">
                                 <option>Select User type</option>
                                 @if(auth()->user()->user_types_id == 1)
                                 <option value="2">Admin</option>
                                 <option value="3">Staff</option>
                                 @else
                                 <option value="3">Staff</option>
                                 @endif
                             </select>
                                   </div>
                               </div>
                               <div class="col-md-6">   
                                  <input value="{{ $managingedituser->last_name }}" type="text" class="form-control mb-3" name="last_name" placeholder="Enter Last Name"/>

                                  <input value="{{ $managingedituser->mobile }}" type="text" class="form-control mb-3" name="mobile" placeholder="Enter Mobile Number"/>
                                  <div class="form-group">
                                    <select name="status" class="form-control">
                                        <option value="1" <?php if($managingedituser->status == 1){ echo "selected"; }?>>Active</option>
                                        <option value="0" <?php if($managingedituser->status == 0){ echo "selected"; }?>>Inactive</option>
                                    </select>
                                </div>
                                <textarea name='address' class="form-control" rows="3" placeholder="Enter Address..." >{{ $managingedituser->address }}</textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                      </div>
                    </div>
                  <div class="card card-olive">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse21">
                          Prizes Receiveed In Paper Presentation/Project Contest/Model Presentation/Quiz/Circuit Debugging Etc
                        </a>
                      </h4>
                    </div>
                    <div id="collapse21" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                      <div class="row">
                     <div class="col-md-6">   
                                  
   <input value="{{ $managingedituser->first_name }}" type="text" class="form-control mb-3" name="first_name" placeholder="Enter First Name"/>

                                       <input value="{{ $managingedituser->email }}"type="email" class="form-control mb-3" name="email" placeholder="Enter Email"/>
                                          <div class="form-group">
                                              <select name="gender" class="form-control">
                                                <option value="Male" <?php if($managingedituser->gender == 1){ echo "selected"; }?>>Male</option>
                                                <option value="Female" <?php if($managingedituser->gender == 0){ echo "selected"; }?>>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                         <select name="user_types_id" class="form-control">
                                 <option>Select User type</option>
                                 @if(auth()->user()->user_types_id == 1)
                                 <option value="2">Admin</option>
                                 <option value="3">Staff</option>
                                 @else
                                 <option value="3">Staff</option>
                                 @endif
                             </select>
                                   </div>
                               </div>
                               <div class="col-md-6">   
                                  <input value="{{ $managingedituser->last_name }}" type="text" class="form-control mb-3" name="last_name" placeholder="Enter Last Name"/>

                                  <input value="{{ $managingedituser->mobile }}" type="text" class="form-control mb-3" name="mobile" placeholder="Enter Mobile Number"/>
                                  <div class="form-group">
                                    <select name="status" class="form-control">
                                        <option value="1" <?php if($managingedituser->status == 1){ echo "selected"; }?>>Active</option>
                                        <option value="0" <?php if($managingedituser->status == 0){ echo "selected"; }?>>Inactive</option>
                                    </select>
                                </div>
                                <textarea name='address' class="form-control" rows="3" placeholder="Enter Address..." >{{ $managingedituser->address }}</textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                      </div>
                    </div>
                  <div class="card card-purple">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse22">
                         Industrial Visit
                        </a>
                      </h4>
                    </div>
                    <div id="collapse22" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                      <div class="row">
                     <div class="col-md-6">   
                                  
   <input value="{{ $managingedituser->first_name }}" type="text" class="form-control mb-3" name="first_name" placeholder="Enter First Name"/>

                                       <input value="{{ $managingedituser->email }}"type="email" class="form-control mb-3" name="email" placeholder="Enter Email"/>
                                          <div class="form-group">
                                              <select name="gender" class="form-control">
                                                <option value="Male" <?php if($managingedituser->gender == 1){ echo "selected"; }?>>Male</option>
                                                <option value="Female" <?php if($managingedituser->gender == 0){ echo "selected"; }?>>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                         <select name="user_types_id" class="form-control">
                                 <option>Select User type</option>
                                 @if(auth()->user()->user_types_id == 1)
                                 <option value="2">Admin</option>
                                 <option value="3">Staff</option>
                                 @else
                                 <option value="3">Staff</option>
                                 @endif
                             </select>
                                   </div>
                               </div>
                               <div class="col-md-6">   
                                  <input value="{{ $managingedituser->last_name }}" type="text" class="form-control mb-3" name="last_name" placeholder="Enter Last Name"/>

                                  <input value="{{ $managingedituser->mobile }}" type="text" class="form-control mb-3" name="mobile" placeholder="Enter Mobile Number"/>
                                  <div class="form-group">
                                    <select name="status" class="form-control">
                                        <option value="1" <?php if($managingedituser->status == 1){ echo "selected"; }?>>Active</option>
                                        <option value="0" <?php if($managingedituser->status == 0){ echo "selected"; }?>>Inactive</option>
                                    </select>
                                </div>
                                <textarea name='address' class="form-control" rows="3" placeholder="Enter Address..." >{{ $managingedituser->address }}</textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                      </div>
                    </div>
                  <div class="card card-olive">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse23">
                         Scholarship Deatails
                        </a>
                      </h4>
                    </div>
                    <div id="collapse23" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                      <div class="row">
                     <div class="col-md-6">   
                                  
   <input value="{{ $managingedituser->first_name }}" type="text" class="form-control mb-3" name="first_name" placeholder="Enter First Name"/>

                                       <input value="{{ $managingedituser->email }}"type="email" class="form-control mb-3" name="email" placeholder="Enter Email"/>
                                          <div class="form-group">
                                              <select name="gender" class="form-control">
                                                <option value="Male" <?php if($managingedituser->gender == 1){ echo "selected"; }?>>Male</option>
                                                <option value="Female" <?php if($managingedituser->gender == 0){ echo "selected"; }?>>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                         <select name="user_types_id" class="form-control">
                                 <option>Select User type</option>
                                 @if(auth()->user()->user_types_id == 1)
                                 <option value="2">Admin</option>
                                 <option value="3">Staff</option>
                                 @else
                                 <option value="3">Staff</option>
                                 @endif
                             </select>
                                   </div>
                               </div>
                               <div class="col-md-6">   
                                  <input value="{{ $managingedituser->last_name }}" type="text" class="form-control mb-3" name="last_name" placeholder="Enter Last Name"/>

                                  <input value="{{ $managingedituser->mobile }}" type="text" class="form-control mb-3" name="mobile" placeholder="Enter Mobile Number"/>
                                  <div class="form-group">
                                    <select name="status" class="form-control">
                                        <option value="1" <?php if($managingedituser->status == 1){ echo "selected"; }?>>Active</option>
                                        <option value="0" <?php if($managingedituser->status == 0){ echo "selected"; }?>>Inactive</option>
                                    </select>
                                </div>
                                <textarea name='address' class="form-control" rows="3" placeholder="Enter Address..." >{{ $managingedituser->address }}</textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                      </div>
                    </div>
                  <div class="card card-purple">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse24">
                          Updation Details(End Of Every Semester)
                        </a>
                      </h4>
                    </div>
                    <div id="collapse24" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                      <div class="row">
                     <div class="col-md-6">   
                                  
   <input value="{{ $managingedituser->first_name }}" type="text" class="form-control mb-3" name="first_name" placeholder="Enter First Name"/>

                                       <input value="{{ $managingedituser->email }}"type="email" class="form-control mb-3" name="email" placeholder="Enter Email"/>
                                          <div class="form-group">
                                              <select name="gender" class="form-control">
                                                <option value="Male" <?php if($managingedituser->gender == 1){ echo "selected"; }?>>Male</option>
                                                <option value="Female" <?php if($managingedituser->gender == 0){ echo "selected"; }?>>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                         <select name="user_types_id" class="form-control">
                                 <option>Select User type</option>
                                 @if(auth()->user()->user_types_id == 1)
                                 <option value="2">Admin</option>
                                 <option value="3">Staff</option>
                                 @else
                                 <option value="3">Staff</option>
                                 @endif
                             </select>
                                   </div>
                               </div>
                               <div class="col-md-6">   
                                  <input value="{{ $managingedituser->last_name }}" type="text" class="form-control mb-3" name="last_name" placeholder="Enter Last Name"/>

                                  <input value="{{ $managingedituser->mobile }}" type="text" class="form-control mb-3" name="mobile" placeholder="Enter Mobile Number"/>
                                  <div class="form-group">
                                    <select name="status" class="form-control">
                                        <option value="1" <?php if($managingedituser->status == 1){ echo "selected"; }?>>Active</option>
                                        <option value="0" <?php if($managingedituser->status == 0){ echo "selected"; }?>>Inactive</option>
                                    </select>
                                </div>
                                <textarea name='address' class="form-control" rows="3" placeholder="Enter Address..." >{{ $managingedituser->address }}</textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
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

<div class="modal fade" id="adduser">
<form action="{{url('/add_educations')}}" method="post">
{{ csrf_field() }}
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Add Educational Qualification</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
               <div class="modal-body">
                  <input value="{{ $managingedituserlist->userID }}" type="hidden" class="form-control-3" name="user_id"/>
                <div class="row">
                <div class="col-md-6">  
				        <div class="form-group row">
				         <label for="course_name" class="col-sm-4 col-form-label"><span style="color:red"></span>Course Name</label>
				         <div class="col-sm-8">
                 <input type="text" class="form-control mb-3" name="course_name" placeholder="Enter Course Name"/>
				  </div>
				</div>

                <div class="form-group row">
				         <label for="college_name" class="col-sm-4 col-form-label"><span style="color:red"></span>College Name</label>
				         <div class="col-sm-8">
                 <input type="text" class="form-control mb-3" name="college_name" placeholder="Enter College Name"/>
				  </div>
				</div>

                <div class="form-group row">
				         <label for="ft_pt" class="col-sm-4 col-form-label"><span style="color:red"></span>FT/PT</label>
				         <div class="col-sm-8">
                 <input type="text" class="form-control mb-3" name="ft_pt" placeholder="FT/PT"/>
				  </div>
				</div>

                <div class="form-group row">
				         <label for="class_obtained" class="col-sm-4 col-form-label"><span style="color:red"></span>Class Obtained</label>
				         <div class="col-sm-8">
                 <input type="text" class="form-control mb-3" name="class_obtained" placeholder="ClassObtained"/>
				  </div>
				</div>
</div>

                <div class="col-md-6">   

                <div class="form-group row">
				          <label for="subject_specialisation" class="col-sm-4 col-form-label"><span style="color:red"></span>Subject/Spl</label>
				          <div class="col-sm-8">
                  <input type="text" class="form-control mb-3" name="subject_specialisation" placeholder="Subject Specialisation"/>
				  </div>
				  </div>

                <div class="form-group row">
				          <label for="univercity_name" class="col-sm-4 col-form-label"><span style="color:red"></span>University Name</label>
				          <div class="col-sm-8">
                  <input type="text" class="form-control mb-3" name="univercity_name" placeholder="University"/>
				  </div>
				  </div>

                <div class="form-group row">
				          <label for="reg_no" class="col-sm-4 col-form-label"><span style="color:red"></span>Register Number</label>
				          <div class="col-sm-8">
                  <input type="text" class="form-control mb-3" name="reg_no" placeholder="Reg No"/>
				  </div>
				  </div>

                <div class="form-group row">
				          <label for="study_year" class="col-sm-4 col-form-label"><span style="color:red"></span>Year Of Steady</label>
				          <div class="col-sm-8">
                  <input type="text" class="form-control mb-3" name="study_year" placeholder="Year"/>
				  </div>
                </div>      
            </div>
        </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button id="save" type="submit" class="btn btn-primary">Submit</button>
        </div>
</div>
</div>
</div>
</div>
          <!-- /.col -->
@endsection
