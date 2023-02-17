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
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#add_staffs"><i class="fa fa-plus"> </i> Add</button>
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
                           <th>Father Name</th>
                           <th>Mother Tongue</th>
                           <th>Nationalty</th>
                           <th>Qualific</th>
                           <th>Language Known</th>
                           <th>Blood Group</th>
                           <th>Status</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($manageStaffs as $key=>$managestaffslist)
                        <tr id="arrayorder_<?php echo $managestaffslist->id?>">
                           <td>{{ $key + 1 }}</td>
                           <td>{{ $managestaffslist->first_name }}</td>
                           <td>{{ $managestaffslist->last_name }}</td>
                           <td>{{ $managestaffslist->father_name }}</td>
                           <td>{{ $managestaffslist->mother_tongue }}</td>
                           <td>{{ $managestaffslist->nationalty }}</td>
                           <td>{{ $managestaffslist->qualification }}</td>
                           <td>{{ $managestaffslist->language_known }}</td>
                           <td>{{ $managestaffslist->blood_group }}</td>
                           @if($managestaffslist->status == 1)
                           <td>Active</td>
                           @else
                           <td>Inactive</td>
                           @endif 
                 
                 <div class="col-sm-1">
                <td>
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#edit{{ $managestaffslist->id }}">
                         <i class="fa fa-eye"> </i> Edit</button>
                </td>
                </div>

                  <!--<div class="margin">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">More</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" role="menu">
                            <a href="" class="dropdown-item"  data-toggle="modal" data-target="#edit{{ $managestaffslist->id }}">Edit</a>
               <!-- <a href="" class="dropdown-item"  data-toggle="modal" data-target="#assign{{ $managestaffslist->id }}">Assign</a>
                        </div>-->
                    
                        </tr>

                        <div class="modal fade" id="edit{{ $managestaffslist->id }}">
                           <form action="{{url('/edit_staffs')}}" method="post">
                              {{ csrf_field() }}
                              <div class="modal-dialog">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h4 class="modal-title">Edit Staff</h4>
                                       <button type="button" class="close" data-dismiss="modal" 
                                          aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                       </button>
                                    </div>

                                    <div class="modal-body">
                                    <div class="row">
                                    <div class="col-md-6">

                                       <input type="hidden" class="form-control" name="id" 
                                          value="{{ $managestaffslist->id }}"/>

                                          <input type="text" class="form-control mb-3" name="first_name" 
                                          value="{{ $managestaffslist->first_name }}" placeholder="First Name"/>

                                          <input type="text" class="form-control mb-3" name="father_name"
                                          value="{{ $managestaffslist->father_name }}" placeholder="Father Name"/>

                                         <input type="text" class="form-control mb-3" name="mother_tongue"
                                          value="{{ $managestaffslist->mother_tongue }}" placeholder="Mother Ton"/>

                                          <input type="text" class="form-control mb-3" name="language_known"
                                          value="{{ $managestaffslist->language_known }}" placeholder="Language Known"/>

                                          <input type="text" class="form-control mb-3" name="aadhaar"
                                          value="{{ $managestaffslist->aadhaar }}" placeholder="Aadhaar"/>

                                          <input type="text" class="form-control mb-3" name="phone_number"
                                          value="{{ $managestaffslist->phone_number }}" placeholder="Mobile"/>

                                          <input type="text" class="form-control mb-3" name="gender"
                                          value="{{ $managestaffslist->gender }}" placeholder="Gender"/>

                                          <input type="text" class="form-control mb-3" name="date_of_birth"
                                          value="{{ $managestaffslist->date_of_birth }}" placeholder="Dob"/>


</div>     
                              
                                    <div class="col-md-6">

                                      <input type="text" class="form-control mb-3" name="last_name" 
                                          value="{{ $managestaffslist->last_name }}" placeholder="Last Name"/>

                                      <input type="text" class="form-control mb-3" name="nationalty"
                                          value="{{ $managestaffslist->nationalty }}" placeholder="Nationalty"/>

                                      <input type="text" class="form-control mb-3" name="qualification"
                                          value="{{ $managestaffslist->qualification }}" placeholder="Qualific"/>

                                      <input type="text" class="form-control mb-3" name="blood_group"
                                          value="{{ $managestaffslist->blood_group }}" placeholder="Blood Grp"/>

                                      <input type="text" class="form-control mb-3" name="pan_no"
                                          value="{{ $managestaffslist->pan_no }}" placeholder="Pan No"/>

                                      <input type="text" class="form-control mb-3" name="email"
                                          value="{{ $managestaffslist->email }}" placeholder="Email"/>

                                      <textarea name='address' value="{{ $managestaffslist->address }}" class="form-control" rows="3" placeholder="Enter Address..." ></textarea>
                                 
                                    </div>       
</div>
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

         <div class="modal fade" id="add_staffs">
         <form action="{{url('/add_staffs')}}" method="post">
            {{ csrf_field() }}
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">Add Staffs</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <div class="row">
                        <div class="col-md-6">

                           <input type="text" class="form-control mb-3" name="first_name" placeholder="First Name"/>

                           <input type="text" class="form-control mb-3" name="father_name" placeholder="Father Name"/>

                           <input type="text" class="form-control mb-3" name="nationalty" placeholder="Nationalty"/>

                           <input type="text" class="form-control mb-3" name="aadhaar" placeholder="Adhaar"/>

                           <input type="text" class="form-control mb-3" name="language_known" placeholder="lanuguage Known"/>

                           <select class="form-control mb-3" name="gender">
                              <option>Select Gender</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                           </select>

                           <input type="email" class="form-control mb-3" name="email" placeholder="Email"/>

                           <input type="text" class="form-control mb-3" name="phone_number" placeholder="Mobile"/>

                        </div>

                        <div class="col-md-6"> 

                        <input type="text" class="form-control mb-3" name="last_name" placeholder="Last Name"/>

                        <input type="text" class="form-control mb-3" name="mother_tongue" placeholder="Mother Tong"/>	

                        <input type="text" class="form-control mb-3" name="qualification" placeholder="Qualific"/>

                        <input type="text" class="form-control mb-3" name="pan_no" placeholder="PAN"/>

                        <input type="text" class="form-control mb-3" name="blood_group" placeholder="Blood Grp"/>

                        <input type="date" class="form-control mb-3" name="date_of_birth" placeholder="DOB"/>
         
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