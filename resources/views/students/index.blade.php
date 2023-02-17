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
   <div class="nav-link">Users List</div>
</center>
</div>
<div class="col-sm-5">
<input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Customer Full Name">
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
                           <th>First Name</th>
                           <th>Last Name</th>
                           <th>DepartMent</th>
                           <th>Father Name</th>
                           <th>Mother Name</th>
                           <th>Status</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($managestudents as $key=>$managestudentslist)
                        <tr id="arrayorder_<?php echo $managestudentslist->id?>">
                           <td>{{ $key + 1 }}</td>
                           <td>{{ $managestudentslist->first_name }}</td>
                           <td>{{ $managestudentslist->last_name }}</td>
                           <td>{{ $managestudentslist->department_id }}</td>
                           <td>{{ $managestudentslist->father_name }}</td>
                           <td>{{ $managestudentslist->mother_name }}</td>
                           @if($managestudentslist->status == 1)
                           <td>Active</td>
                           @else
                           <td>Inactive</td>
                           @endif 
                <td>
				 @if($managestudentslist->degree_id == 1)
                      <a href="{{url('/students/beedit/'.$managestudentslist->id)}}" class="btn btn-default fa fa-eye" > Edit</a>
				 @elseif($managestudentslist->degree_id == 2)
                      <a href="{{url('/students/meedit/'.$managestudentslist->id)}}" class="btn btn-default fa fa-eye" > Edit</a>
				 @elseif($managestudentslist->degree_id == 3)
                      <a href="{{url('/students/mbaedit/'.$managestudentslist->id)}}" class="btn btn-default fa fa-eye" > Edit</a>
                           @else
                      <a href="{{url('/students/mcaedit/'.$managestudentslist->id)}}" class="btn btn-default fa fa-eye" > Edit</a>
                           @endif
						   
				  

                    </td>

                        </tr>
                        <div class="modal fade" id="edit{{ $managestudentslist->id }}">
                           <form action="{{url('/edit_students')}}" method="post">
                              {{ csrf_field() }}
                              <div class="modal-dialog">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h4 class="modal-title">Edit</h4>
                                       <button type="button" class="close" data-dismiss="modal" 
                                          aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                       </button>
                                    </div>
                                    <div class="modal-body">
                                       <input type="hidden" class="form-control" name="id" 
                                          value="{{ $managestudentslist->id }}"/>

                                       <input type="text" class="form-control mb-3" name="first_name" 
                                          value="{{ $managestudentslist->first_name }}" placeholder="First Name"/>

                                       <input type="text" class="form-control mb-3" name="last_name" 
                                          value="{{ $managestudentslist->last_name }}" placeholder="Last Name"/>

                                       <input type="text" class="form-control mb-3" name="department"
                                          value="{{ $managestudentslist->department_id }}" placeholder="Depart"/>

                                       <input type="text" class="form-control mb-3" name="father_name"
                                          value="{{ $managestudentslist->father_name }}" placeholder="Father Name"/>

                                       <input type="text" class="form-control mb-3" name="mother_name"
                                          value="{{ $managestudentslist->mother_name }}" placeholder="Mother Name"/>

                                       <select name="gender" class="form-control">
                                          <option value="">Select Gender</option>
                                          <option value="Male" <?php if($managestudentslist->gender == 1){ echo "selected"; }?>>Male</option>
                                          <option value="Female" <?php if($managestudentslist->gender == 0){ echo "selected"; }?>>Female</option>
                                       </select>
                                       </br>
                                       <select name="status" class="form-control">
                                          <option value="">Select Status</option>
                                          <option value="1" <?php if($managestudentslist->status == 1){ echo "selected"; }?>>Active</option>
                                          <option value="0" <?php if($managestudentslist->status == 0){ echo "selected"; }?>>Inactive</option>
                                       </select>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                       <button type="button" class="btn btn-default" 
                                          data-dismiss="modal">Close</button>
                                       <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
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
                           <input type="text" class="form-control mb-3" name="first_name" placeholder="First Name"/>

                           <input type="text" class="form-control mb-3" name="father_name" placeholder="Father Name"/>

                           <input type="text" class="form-control mb-3" name="father_job" placeholder="Father Work"/>
                           
                           <input type="text" class="form-control mb-3" name="department" placeholder="Depart"/>

                        <input type="date" class="form-control mb-3" name="date_of_birth" id="bday" onchange="submitBday()">
                          
                           <select class="form-control mb-3" name="gender">
                              <option>Select Gender</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                           </select>
                          
                           <input type="email" class="form-control mb-3" name="email" placeholder="Email"/>
                          
                        </div>

                        <div class="col-md-6"> 

                        <input type="text" class="form-control mb-3" name="last_name" placeholder="Last Name"/>

                        <input type="text" class="form-control mb-3" name="mother_name" placeholder="Mother Name"/>

                        <input type="text" class="form-control mb-3" name="mobile" placeholder="Phone "/>	

                        <input type="text" class="form-control mb-3" name="adhar" placeholder="Adhar"/>

                        <input type="text" class="form-control mb-3" name="age" id="resultBday" placeholder="Age"/>

                        <input type="text" class="form-control mb-3" name="pincode" placeholder="PinCode"/>
                     	         
                        <textarea name='address' class="form-control" rows="3" placeholder="Address..." ></textarea>
                        
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