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
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#add_academic"><i class="fa fa-plus"> </i> Add</button>
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
                           <th>From To Year</th>
                           <th>Status</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($manageAcademic as $key=>$manageacademiclist)
                        <tr id="arrayorder_<?php echo $manageacademiclist->id?>">
                           <td>{{ $key + 1 }}</td>
                           <td>{{ $manageacademiclist->from_to_year }}</td>
                           @if($manageacademiclist->status == 1)
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
                            <a href="" class="dropdown-item"  data-toggle="modal" data-target="#edit{{ $manageacademiclist->id }}">Edit</a>
               <!-- <a href="" class="dropdown-item"  data-toggle="modal" data-target="#assign{{ $manageacademiclist->id }}">Assign</a> -->
                        </div>
                    </td>

                        </tr>
                        <div class="modal fade" id="edit{{ $manageacademiclist->id }}">
                           <form action="{{url('/edit_academic')}}" method="post">
                              {{ csrf_field() }}
                              <div class="modal-dialog">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h4 class="modal-title">Edit Academic</h4>
                                       <button type="button" class="close" data-dismiss="modal" 
                                          aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                       </button>
                                    </div>

                                    <div class="modal-body">
                                       <input type="hidden" class="form-control" name="id" 
                                          value="{{ $manageacademiclist->id }}"/>

                                       <input type="text" class="form-control mb-3" name="from_to_year" 
                                          value="{{ $manageacademiclist->from_to_year }}" placeholder="Year"/>

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

         <div class="modal fade" id="add_academic">
            <form action="{{url('/add_academic')}}" method="post">
            {{ csrf_field() }}
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">Add Academic</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <div class="row">
                        <div class="col-md-12">
                           <input type="text" class="form-control mb-6" name="from_to_year" placeholder="Year"/>

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