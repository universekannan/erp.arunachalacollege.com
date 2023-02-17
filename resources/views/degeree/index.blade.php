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
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#add_degeree"><i class="fa fa-plus"> </i> Add</button>
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
                           <th>Id#</th>
                           <th>Degeree</th>
                           <th>Action</th>
                           <th>Department</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                     @foreach($managedegeree as $key=>$managedegereelist)
                        <tr id="arrayorder_<?php echo $managedegereelist->id?>">
                           <td>{{ $key + 1 }}</td>
                           <td>{{ $managedegereelist->degree_name	}}</td>
                         
                <td>
                  <div class="margin">
                    <div class="btn-group">
                        <div class="row">
                                 <a type="button" data-toggle="modal" 
								 data-target="#edit{{ $managedegereelist->id }}"
								 class="col-md-4 btn-lg">
                                 <i class="fa fa-eye"></i></a> 
                              </div>
                    </td>

                    <td>

              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#add_department{{ $managedegereelist->id }}"><i class="fa fa-eye">View</i></button>

                    </td>


                    <td>

              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#add_department{{ $managedegereelist->id }}"><i class="fa fa-plus"> </i> Add</button>

                    </td>

                        </tr>

                        <div class="modal fade" id="edit{{ $managedegereelist->id }}">
                           <form action="{{url('/edit_degeree')}}" method="post">
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
                                          value="{{ $managedegereelist->id }}"/>

                                       <input type="text" class="form-control mb-3" name="degree_name" 
                                          value="{{ $managedegereelist->degree_name }}" placeholder="Batchler Eng"/>

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


          <div class="modal fade" id="add_department{{ $managedegereelist->id }}">
            <form action="{{url('/add_department')}}" method="post">
            {{ csrf_field() }}
            <div class="modal-dialog model-lg">
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">Add Department</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <div class="row">
                        <div class="col-md-12">

                           <input type="hidden" name="degeree_id" value="{{ $managedegereelist->id }}"/>

                           <input type="text" class="form-control mb-4" name="department_name" placeholder="Depart Ment"/>
                 
                  <div class="modal-footer justify-content-between">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
               </div>
            </div>
         </div>
         </form>
		 </div>
		 </div>
		 </div>
		 
       @endforeach
                        
         <div class="modal fade" id="add_degeree">
            <form action="{{url('/add_degeree')}}" method="post">
            {{ csrf_field() }}
            <div class="modal-dialog model-lg">
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">Add Degeree</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <div class="row">
                        <div class="col-md-12">
                           <input type="TEXT" class="form-control mb-4" name="degree_name" placeholder="Enter Degeree"/>
                 
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
</form>
</section>

<!-- /.content -->
</div>

         <!-- /.card -->
      </div>
</div>
<!-- /.content -->
</div>
@endsection