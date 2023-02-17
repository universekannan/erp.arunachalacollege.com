@extends('layout')
@section('content')
<div class="content-wrapper">
<section class="content">
<div class="card card-primary card-outline card-outline-tabs">
<div class="card-header p-0 border-bottom-0">
<ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
<li class="nav-item">
<a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">All</a>
</li>
<div class="col-sm-5">
<center>
   <div class="nav-link">Admission Students List</div>
</center>
</div>
<div class="col-sm-5">
<input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="serch for Students">
</div>
<div class="col-sm-1">
<td>
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#add_students"><i class="fa fa-plus"> </i> Add</button>
</td>
</div>
</ul>
</div>

<div class="card-body">
@if(session()->has('success'))
<div class="alert alert-success alert-dismissable">
<a href="#" style="color:white !important" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong> {{ session('success') }} </strong>
</div>
@endif
<div class="tab-content" id="custom-tabs-four-tabContent">
<div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
 <table id="example2" class="table table-bordered table-hover">
                     <thead>
                        <tr>
                           <th>Id</th>
                           <th>Full Name</th>
                           <th>Father Name</th>
                           <th>Mother Name</th>
                           <th>DepartMent</th>
                           <th>Gender</th>
                           <th>Status</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($manageadmission as $key=>$manageadmissionlist)
                        <tr id="arrayorder_<?php echo $manageadmissionlist->id?>">
                           <td>{{ $key + 1 }}</td>
                           <td>{{ $manageadmissionlist->first_name }} {{ $manageadmissionlist->last_name }}</td>
                           <td>{{ $manageadmissionlist->father_name }}</td>
                           <td>{{ $manageadmissionlist->mother_name }}</td>
                           <td>{{ $manageadmissionlist->department_id }}</td>

                           @if($manageadmissionlist->gender == 1)
                           <td>Male</td>
                           @else
                           <td>Female</td>
                           @endif       

						   @if($manageadmissionlist->status == 1)
                           <td>Active</td>
                           @else
                           <td>Inactive</td>
                           @endif 
                <td>
				 @if($manageadmissionlist->degree_id == 1)
                      <a href="{{url('/admission/beedit/'.$manageadmissionlist->id)}}" class="btn btn-default fa fa-eye" > Edit</a>
				 @elseif($manageadmissionlist->degree_id == 2)
                      <a href="{{url('/admission/meedit/'.$manageadmissionlist->id)}}" class="btn btn-default fa fa-eye" > Edit</a>
				 @elseif($manageadmissionlist->degree_id == 3)
                      <a href="{{url('/admission/mbaedit/'.$manageadmissionlist->id)}}" class="btn btn-default fa fa-eye" > Edit</a>
                           @else
                      <a href="{{url('/admission/mcaedit/'.$manageadmissionlist->id)}}" class="btn btn-default fa fa-eye" > Edit</a>
                           @endif
						   
		
                        @endforeach
                        
         <div class="modal fade" id="add_students">
            <form action="{{url('/add_students')}}" method="post">
            {{ csrf_field() }}
            <div class="modal-dialog model-lg">
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">Add Students</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                      <div class="row">
                        <div class="col-md-6"> 
         
                        <select  class="form-control mb-3" name="quota">
                            <option>Select Quota</option>
                            <option value="GQ">Goverment Quota</option>
                            <option value="MQ">Management Quota</option>
                        </select> 
  
                        <input type="text" class="form-control mb-3" name="last_name" placeholder="Last Name"/>

                        <input type="text" class="form-control mb-3" name="father_job" placeholder="Parent Occupation"/>
       
                        <input type="text" class="form-control mb-3" name="mobile" placeholder="Mobile No"/> 

                        <input type="text" class="form-control mb-3" name="father_no" placeholder="Father No"/> 
						
						<select  class="form-control mb-3" name="degree_id" id="degree">
                            <option>---- Select Degree ----</option>
							@foreach($managedegree as $key=>$managedegree)
                            <option value="{{ $managedegree->id }}">{{ $managedegree->degree_name }}</option>
							@endforeach
                        </select>
						
                        <input type="date" class="form-control mb-3" name="date_of_birth" id="bday" onchange="submitBday()">
   
                        <input type="text" class="form-control mb-3" name="pin_code" placeholder="Pin Code"/>

                        <textarea type="text" class="form-control" rows="3"  name="address" placeholder="Address"></textarea>
          
</div>
               <div class="col-md-6"> 
            
                        <input type="text" class="form-control mb-3" name="first_name" placeholder="First Name"/>

                        <input type="text" class="form-control mb-3" name="father_name" placeholder="Parent/Guardian"/>

                        <input type="text" class="form-control mb-3" name="whats_up" placeholder="Whatapp No"/> 

                        <input type="text" class="form-control mb-3" name="mother_no" placeholder="Mother No"/> 

                        <input type="text" class="form-control mb-3" name="adhar" placeholder="Aadhar No"/> 
						
                       <select class="form-control mb-3" name="department_id" id="department" style="width: 100%;">
                          <option value="">Select department</option>
                          </select>
                                   
                        <input type="text" class="form-control mb-3" name="age" id="resultBday" placeholder="Age"/>
            
                        <input type="text" class="form-control mb-3" name="email" placeholder="Email"/> 

                        <input id="image" type="file" name="profile_photo" placeholder="Photo" required="" capture>
           
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
         <!-- /.card -->
      </div>
</div>
</section>
<!-- /.content -->
</div>
@endsection

