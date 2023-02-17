@extends('layout')
@section('content')
<div class="content-wrapper">
   <section class="content">
    <div class="card card-primary card-outline card-outline-tabs">
              <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                
                  <li class="nav-item">
                  <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill"
     href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Sales</a>
                  </li>

                    <div class="col-sm-10" style="padding-top: calc(.5rem + 0px);">
           <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Customer Name">
                    </div>
                    <div class="col-sm-1" style="padding-top: calc(.5rem + 0px);">
                        <td>

<button type="button" class="btn btn-block btn-outline-danger btn-xs" data-toggle="modal" data-target="#addsales"><i class="fa fa-plus"> </i> Add</button>
</td>
                    </div>
                </ul>
              </div>
              <div class="card-body">
          <div class="tab-content" id="custom-tabs-four-tabContent">
          <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" 
          aria-labelledby="custom-tabs-four-home-tab">
                <table id="example2" class="table table-bordered table-hover">
<thead>
<tr>
                    <th>#ID</th>
                    <th>User Type</th>
                    <th>Customer Name</th>
                    <th>Bill Number</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($manageSale as $key=>$manageSalelist)
                      <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $manageSalelist->user_types_name }}</td>
                        <td>{{ $manageSalelist->full_name }}</a></td>
                        <td>{{ $manageSalelist->gender }}</td>
                        <td>{{ $manageSalelist->email }}</td>
                        <td>{{ $manageSalelist->mobile_number }}</td>
                        @if($manageSalelist->status == 1)
                          <td>Active</td>
                        @else
                          <td>Inactive</td>
                        @endif
                        <td>
                          @if($manageSalelist->user_types_id !=1 )
                            
                           <div class="btn-group dropdown">

<button type="button" class="btn btn-default btn-outline-danger btn-xs fa fa-eye" data-toggle="dropdown">
           </button>
<button type="button" class="btn btn-default btn-outline-danger btn-xs">Action</button>

          <div class="dropdown-content">
          <a href="" data-toggle="modal" data-target="#edit{{ $manageSalelist->userID }}">Edit Profile</a>
          </div>
</div>                       
                          @endif
                   </td>
                        <div class="modal fade" id="edit{{ $manageSalelist->userID }}">
                            <form action="{{url('/edit_user')}}" method="post">
                            {{ csrf_field() }}
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                    <div class="modal-header">
                                    <h4 class="modal-title">Edit Sales</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                  
                                    <div class="modal-body">
                                      <div class="row">
                                      <div class="col-md-6">   
                  <input type="hidden" class="form-control" name="id" value="{{ $manageSalelist->userID }}"/>

   <input value="{{ $manageSalelist->first_name }}" type="text" class="form-control mb-3" name="first_name" placeholder="Enter First Name"/>

      <input value="{{ $manageSalelist->email }}"type="email" class="form-control mb-3" name="email" 
      placeholder="Email"/>
                          <div class="form-group">
                  <select name="gender" class="form-control">
             <option value="Male" <?php if($manageSalelist->gender == 1){ echo "selected"; }?>>Male</option>
             <option value="Female" <?php if($manageSalelist->gender == 0){ echo "selected"; }?>>Female</option>
                                        </select>
                                        </div>
                                        <div class="form-group">
              

                   </div>
                   </div>
                  <div class="col-md-6">   
                  <input value="{{ $manageSalelist->last_name }}" type="text" class="form-control mb-3" name="last_name" placeholder="Enter Last Name"/>

                  <input value="{{ $manageSalelist->mobile_number }}" type="text" class="form-control mb-3" name="mobile_number" placeholder="Enter Mobile Number"/>
  <div class="form-group">
    <select name="status" class="form-control">
                         <option value="1" <?php if($manageSalelist->status == 1){ echo "selected"; }?>>Active</option>
                         <option value="0" <?php if($manageSalelist->status == 0){ echo "selected"; }?>>Inactive</option>
                                        </select>
 </div>
                  <textarea name='address' class="form-control" rows="3" placeholder="Enter Address..." >{{ $manageSalelist->address }}</textarea>
                </div>  
                                    </div>
                                    </div>
             <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
             </div>
                                </div>
                            </div>
                            </form>
                        </div>
                         </tr>
                    
                      @endforeach

</tbody>
</table>
                  </div>
                </div>
                </div>

                  <div class="modal fade" id="addsales">
                  <form action="{{url('/pharmacy/add_sales')}}" method="post">
                   {{ csrf_field() }}
                  <div class="modal-dialog">
                  <div class="modal-content">
                  <div class="modal-header">
                  <h4 class="modal-title">Add Sales</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <div class="modal-body">
                  <div class="row">
                  <div class="col-md-6">   
                  <input type="text" class="form-control mb-3" name="first_name" placeholder="First Name"/>

                  <input type="email" class="form-control mb-3" name="email" placeholder="Email"/>

                  <input type="password" class="form-control mb-3" name="password" placeholder="Password"/>

                   <select class="form-control mb-3" name="gender">
                    <option>Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
                <div class="col-md-6">   

                  <input type="text" class="form-control mb-3" name="last_name" placeholder="Last Name"/>

                  <input type="text" class="form-control mb-3" name="mobile_number" placeholder="Number"/>

                  <input type="text" class="form-control mb-3" name="check_password" placeholder="Confirm Password"/>

                  <textarea name='address' class="form-control" rows="3" placeholder="Address" ></textarea>
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
 </form>
</div>
              <!-- /.card -->
    </section>
    <!-- /.content -->
 

  </div>
@endsection


