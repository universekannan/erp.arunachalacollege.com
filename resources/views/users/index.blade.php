@extends('layout')
@section('content')
<div class="content-wrapper">
<section class="content">
<div class="card card-primary card-outline card-outline-tabs">
<div class="card-header p-0 border-bottom-0">
<ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
<li class="nav-item">
<a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Teaching</a>
</li>
<li class="nav-item">
<a class="nav-link" id="custom-tabs-four-admin-tab" data-toggle="pill" href="#custom-tabs-four-admin" role="tab" aria-controls="custom-tabs-four-admin" aria-selected="false">Non Teaching</a>
</li>
<div class="col-sm-5">
<center>
   <div class="nav-link">Staff List</div>
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
                <th>#ID</th>
                <th>User Type</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($manageteaching as $key=>$manageteachinglist)
            <tr> 
                <td>{{ $key + 1 }}</td>
                <td>{{ $manageteachinglist->user_types_name }}</td>
                <td>{{ $manageteachinglist->first_name }} {{ $manageteachinglist->last_name }}</td>
                <td>{{ $manageteachinglist->gender }}</td>
                <td>{{ $manageteachinglist->email }}</td>
                <td>{{ $manageteachinglist->mobile }}</td>
                   @if($manageteachinglist->status == 1)
                <td>Active</td>
                @else
                <td>Inactive</td>
                @endif
                <td>
                  @if($manageteachinglist->user_types_id != 1)
                  <div class="margin">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">More</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" role="menu">
                        <a href="{{url('/edit/'.$manageteachinglist->userID)}}" class="dropdown-item" >Edite Page</a>
                        </div>
                        @endif
                    </td>
                </div>
            </div>
    </div>
</tr>

@endforeach

</tbody>
</table>
</div>

<!-- 2nd tap -->

                 <div class="tab-pane fade" id="custom-tabs-four-admin" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                             <table id="example2" class="table table-bordered table-admin">
        <thead>
            <tr>
                <th>#ID</th>
                <th>User Type</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($managingedituser as $key=>$managingedituserlist)
            <tr>
                <td>{{ $key + 1 }}</td>    
                <td>{{ $managingedituserlist->user_types_name }}</td>
                <td>{{ $managingedituserlist->first_name }} {{ $managingedituserlist->last_name }}</td>
                <td>{{ $managingedituserlist->gender }}</td>
                <td>{{ $managingedituserlist->email }}</td>
                <td>{{ $managingedituserlist->mobile }}</td> 
                   @if($managingedituserlist->status == 1)
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
                            <a href="{{url('/edit/'.$managingedituserlist->userID)}}" class="dropdown-item" > Edite Page</a>
                        </div>
                    </td>
                </div>
            </div>
    </div>
</tr>
    </div>
    </div>


@endforeach

</tbody>
                        </table>
                       </div>
                     </div>
                  </div>
               </section>
                  </div>
       
     <!-- add -->          
               
<div class="modal fade" id="adduser">
    <form action="{{url('/add_user')}}" method="post" enctype="multipart/from-data">
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

                          <input type="text"  class="form-control mb-3" name="page_number" placeholder="Page Number"/>

                          <input type="text"  class="form-control mb-3" name="costomer_id" placeholder="Costomer Id"/>

                          <input type="text" class="form-control mb-3" name="things" placeholder="things"/>

                          <input type="text" class="form-control mb-3" name="things_type" placeholder="Things Type"/>

                          <input type="text" class="form-control mb-3" name="measurement" placeholder="Measurement"/>

                          <input type="text" class="form-control mb-3" name="credit_amount" placeholder="Credit Amount"/>

                          <input type="text" class="form-control mb-3" name="intrest" placeholder="Intrest"/>

                          <input type="text" class="form-control mb-3" name="from_date" placeholder="From Date"/>

                          <select  class="form-control mb-3" name="gender">
                            <option>Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>  
    
                          <div class="form-group">
                            
                         </div>

                     </div>

                    <div class="col-md-6">   

                          <input type="text" class="form-control mb-3" name="age" id="resultBday" placeholder="Age"/>

                          <textarea name='address' class="form-control" rows="3" placeholder="Enter Address..." ></textarea>

                    </div>
                    
              </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" id="save" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
   </form>    
  
   </div>
   </div>
</div>
</div>
<!-- /.card -->
<!-- /.content -->
   @endsection
