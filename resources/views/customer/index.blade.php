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
<li class="nav-item">
<a class="nav-link" id="custom-tabs-four-admin-new" data-toggle="pill" href="#custom-tabs-four-new" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">New</a>
</li>
<li class="nav-item">
<a class="nav-link" id="custom-tabs-four-assigned-tab" data-toggle="pill" href="#custom-tabs-four-assigned" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Assigned</a>
</li>
<div class="col-sm-5">
<center>
   <div class="nav-link">Users List</div>
</center>
</div>
<div class="col-sm-3">
<input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Customer Full Name">
</div>
<div class="col-sm-1">
<td>
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#adduser"><i class="fa fa-plus"> </i> Add</button>
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
                           <th>Customer Name</th>
                           <th>College Name</th>
                           <th>DepartMent</th>
                           <th>Degree</th>
                           <th>Pass Out</th>
                           <th>Status</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($managecustomers as $key=>$managecustomerslist)
                        <tr id="arrayorder_<?php echo $managecustomerslist->id?>">
                           <td>{{ $key + 1 }}</td>
                           <td>{{ $managecustomerslist->customer_name }}</td>
                           <td>{{ $managecustomerslist->name_of_college }}</td>
                           <td>{{ $managecustomerslist->name_of_department }}</td>
                           <td>{{ $managecustomerslist->name_of_degree }}</td>
                           <td>{{ $managecustomerslist->year_of_passing }}</td>
                           @if($managecustomerslist->status == 1)
                           <td>Active</td>
                           @else
                           <td>Inactive</td>
                           @endif 
                <td>
                  <div class="margin">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">More</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" role="menu">
                            <a href="" class="dropdown-item"  data-toggle="modal" data-target="#edit{{ $managecustomerslist->id }}">Edit</a>
                            <a href="" class="dropdown-item"  data-toggle="modal" data-target="#assign{{ $managecustomerslist->id }}">Assign</a>
                        </div>
                    </td>

                        </tr>
                        <div class="modal fade" id="edit{{ $managecustomerslist->id }}">
                           <form action="{{url('/edit_user')}}" method="post">
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
                                          value="{{ $managecustomerslist->id }}"/>
                                       <input type="text" class="form-control mb-3" name="customer_name" 
                                          value="{{ $managecustomerslist->customer_name }}" placeholder="Name"/>
                                       <input type="text" class="form-control mb-3" name="name_of_college" 
                                          value="{{ $managecustomerslist->name_of_college }}" placeholder="College Name"/>
                                       <input type="text" class="form-control mb-3" name="email"
                                          value="{{ $managecustomerslist->email }}" placeholder="Enter email"/>
                                       <input type="text" class="form-control mb-3" name="phone"
                                          value="{{ $managecustomerslist->mobile_number }}" placeholder="Enter phone"/>
                                       <select name="gender" class="form-control">
                                          <option value="">Select status</option>
                                          <option value="Mail" <?php if($managecustomerslist->gender == 1){ echo "selected"; }?>>Mail</option>
                                          <option value="Femail" <?php if($managecustomerslist->gender == 0){ echo "selected"; }?>>Femail</option>
                                       </select>
                                       </br>
                                       </br>
                                       <select name="status" class="form-control">
                                          <option value="">Select status</option>
                                          <option value="1" <?php if($managecustomerslist->status == 1){ echo "selected"; }?>>Active</option>
                                          <option value="0" <?php if($managecustomerslist->status == 0){ echo "selected"; }?>>Inactive</option>
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
                     </tbody>
                  </table>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                 <table id="example2" class="table table-bordered table-hover">
                     <thead>
                        <tr>
                           <th>Id</th>
                           <th>Customer Name</th>
                           <th>College Name</th>
                           <th>DepartMent</th>
                           <th>Degree</th>
                           <th>Pass Out</th>
                           <th>Status</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($managecustomers as $key=>$managecustomerslist)
                        <tr id="arrayorder_<?php echo $managecustomerslist->id?>">
                           <td>{{ $key + 1 }}</td>
                           <td>{{ $managecustomerslist->customer_name }}</td>
                           <td>{{ $managecustomerslist->name_of_college }}</td>
                           <td>{{ $managecustomerslist->name_of_department }}</td>
                           <td>{{ $managecustomerslist->name_of_degree }}</td>
                           <td>{{ $managecustomerslist->year_of_passing }}</td>
                           @if($managecustomerslist->status == 1)
                           <td>Active</td>
                           @else
                           <td>Inactive</td>
                           @endif 
                <td>
                  <div class="margin">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">More</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" role="menu">
                            <a href="" class="dropdown-item"  data-toggle="modal" data-target="#edit{{ $managecustomerslist->id }}">Edit</a>
                            <a href="" class="dropdown-item"  data-toggle="modal" data-target="#assign{{ $managecustomerslist->id }}">Assign</a>
                        </div>
                    </td>

                        </tr>
                        <div class="modal fade" id="edit{{ $managecustomerslist->id }}">
                           <form action="{{url('/edit_user')}}" method="post">
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
                                          value="{{ $managecustomerslist->id }}"/>
                                       <input type="text" class="form-control mb-3" name="customer_name" 
                                          value="{{ $managecustomerslist->customer_name }}" placeholder="Name"/>
                                       <input type="text" class="form-control mb-3" name="name_of_college" 
                                          value="{{ $managecustomerslist->name_of_college }}" placeholder="College Name"/>
                                       <input type="text" class="form-control mb-3" name="email"
                                          value="{{ $managecustomerslist->email }}" placeholder="Enter email"/>
                                       <input type="text" class="form-control mb-3" name="phone"
                                          value="{{ $managecustomerslist->mobile_number }}" placeholder="Enter phone"/>
                                       <select name="gender" class="form-control">
                                          <option value="">Select status</option>
                                          <option value="Mail" <?php if($managecustomerslist->gender == 1){ echo "selected"; }?>>Mail</option>
                                          <option value="Femail" <?php if($managecustomerslist->gender == 0){ echo "selected"; }?>>Femail</option>
                                       </select>
                                       </br>
                                       </br>
                                       <select name="status" class="form-control">
                                          <option value="">Select status</option>
                                          <option value="1" <?php if($managecustomerslist->status == 1){ echo "selected"; }?>>Active</option>
                                          <option value="0" <?php if($managecustomerslist->status == 0){ echo "selected"; }?>>Inactive</option>
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
                     </tbody>
                  </table>
                              </div>
                         
						 <div class="tab-pane fade" id="custom-tabs-four-admin" role="tabpanel" aria-labelledby="custom-tabs-four-admin-tab">
                                <table id="example2" class="table table-bordered table-hover">
                     <thead>
                        <tr>
                           <th>Id</th>
                           <th>Customer Name</th>
                           <th>College Name</th>
                           <th>DepartMent</th>
                           <th>Degree</th>
                           <th>Pass Out</th>
                           <th>Status</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($managecustomers as $key=>$managecustomerslist)
                        <tr id="arrayorder_<?php echo $managecustomerslist->id?>">
                           <td>{{ $key + 1 }}</td>
                           <td>{{ $managecustomerslist->customer_name }}</td>
                           <td>{{ $managecustomerslist->name_of_college }}</td>
                           <td>{{ $managecustomerslist->name_of_department }}</td>
                           <td>{{ $managecustomerslist->name_of_degree }}</td>
                           <td>{{ $managecustomerslist->year_of_passing }}</td>
                           @if($managecustomerslist->status == 1)
                           <td>Active</td>
                           @else
                           <td>Inactive</td>
                           @endif 
                <td>
                  <div class="margin">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">More</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" role="menu">
                            <a href="" class="dropdown-item"  data-toggle="modal" data-target="#edit{{ $managecustomerslist->id }}">Edit</a>
                            <a href="" class="dropdown-item"  data-toggle="modal" data-target="#assign{{ $managecustomerslist->id }}">Assign</a>
                        </div>
                    </td>

                        </tr>
                        <div class="modal fade" id="edit{{ $managecustomerslist->id }}">
                           <form action="{{url('/edit_user')}}" method="post">
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
                                          value="{{ $managecustomerslist->id }}"/>
                                       <input type="text" class="form-control mb-3" name="customer_name" 
                                          value="{{ $managecustomerslist->customer_name }}" placeholder="Name"/>
                                       <input type="text" class="form-control mb-3" name="name_of_college" 
                                          value="{{ $managecustomerslist->name_of_college }}" placeholder="College Name"/>
                                       <input type="text" class="form-control mb-3" name="email"
                                          value="{{ $managecustomerslist->email }}" placeholder="Enter email"/>
                                       <input type="text" class="form-control mb-3" name="phone"
                                          value="{{ $managecustomerslist->mobile_number }}" placeholder="Enter phone"/>
                                       <select name="gender" class="form-control">
                                          <option value="">Select status</option>
                                          <option value="Mail" <?php if($managecustomerslist->gender == 1){ echo "selected"; }?>>Mail</option>
                                          <option value="Femail" <?php if($managecustomerslist->gender == 0){ echo "selected"; }?>>Femail</option>
                                       </select>
                                       </br>
                                       </br>
                                       <select name="status" class="form-control">
                                          <option value="">Select status</option>
                                          <option value="1" <?php if($managecustomerslist->status == 1){ echo "selected"; }?>>Active</option>
                                          <option value="0" <?php if($managecustomerslist->status == 0){ echo "selected"; }?>>Inactive</option>
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
                     </tbody>
                  </table>
                              </div>
                           </div>
                        </div>
                        <!-- /.card -->
                     @if(auth()->user()->user_types_id == 1)

                  @foreach($managecustomers as $key=>$managecustomerslist)
                                 <div class="modal fade" id="assign{{ $managecustomerslist->id }}">
                           <form action="{{url('/assignadmin')}}" method="post">
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
                                          value="{{ $managecustomerslist->id }}"/>
                                              @foreach($manageadmincustomer as $key=>$manageadmin)
                                               <input type="hidden" class="form-control" name="center_id" 
                                          value="{{ $manageadmin->center_id }}"/>
                                              @endforeach

                                           <select name="gender" class="form-control">
                                           @foreach($manageadmincustomer as $key=>$manageadmin)
                                            
                                                 <option value="{{ $manageadmin->id }}" <?php if($manageadmin->id == $manageadmin->user_types_id){ echo "selected"; }?>>{{ $manageadmin->full_name }}</option>
                                             @endforeach
                                       </select>
                                       </br>
                                    
                                        <textarea name='address' class="form-control" rows="3" placeholder="Address..." ></textarea>

                                       
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
                   
         @else(auth()->user()->user_types_id == 2)
          @foreach($managecustomers as $key=>$managecustomerslist)
                                 <div class="modal fade" id="assign{{ $managecustomerslist->id }}">
                           <form action="{{url('/assignstaff')}}" method="post">
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
                                          value="{{ $managecustomerslist->id }}"/>
                                              @foreach($managestaffcustomer as $key=>$managestaff)
                                               <input type="hidden" class="form-control" name="staff_id" 
                                          value="{{ $managestaff->userID }}"/>
                                              @endforeach

                                           <select name="gender" class="form-control">
                                           @foreach($managestaffcustomer as $key=>$managestaff)
                                            
                                                 <option value="{{ $managestaff->userID }}" <?php if($managestaff->userID == $managestaff->user_types_id){ echo "selected"; }?>>{{ $managestaff->full_name }}</option>
                                             @endforeach
                                       </select>
                                       </br>
                                    
                                        <textarea name='address' class="form-control" rows="3" placeholder="Address..." ></textarea>

                                       
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
                    
         @endif
         <div class="modal fade" id="add_customer">
            <form action="{{url('/add_customer')}}" method="post">
            {{ csrf_field() }}
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">Add Customer</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <div class="row">
                        <div class="col-md-6">
                           <input type="text" class="form-control mb-3" name="customer_name" placeholder="Customer Name"/>
                           <input type="email" class="form-control mb-3" name="email" placeholder="Email"/>
                           <select class="form-control mb-3" name="gender">
                              <option>Select Gender</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                           </select>
                           <input type="text" class="form-control mb-3" name="date_of_birth" placeholder="DOB"/>
                           <input type="text" class="form-control mb-3" name="caste" placeholder="Caste"/>
                           <input type="text" class="form-control mb-3" name="name_of_instiute" placeholder="Instiute Name"/>
                           <input type="text" class="form-control mb-3" name="name_of_board_univercity" placeholder="Name Of Univercity"/>
                        </div>
                        <div class="col-md-6"> 
                           <input type="text" class="form-control mb-3" name="name_of_college" placeholder="College Name "/>	
                           <input type="text" class="form-control mb-3" name="name_of_department" placeholder="Department Name"/>
                           <input type="text" class="form-control mb-3" name="	name_of_degree" placeholder="Name Of Degree"/>
                           <input type="text" class="form-control mb-3" name="year_of_passing" placeholder="Year Of Passing"/>				  
                           <input type="text" class="form-control mb-3" name="mobile_number" placeholder="Enter Mobile Number"/>
                           <input type="text" class="form-control mb-3" name="	percentage_of_marks" placeholder="Percentage"/>
                           <input type="text" class="form-control mb-3" name="remarks" placeholder="Remarks"/>
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