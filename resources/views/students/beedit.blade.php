
@extends('layout')
@section('content')

<!-- /.content -->
<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0">Edit Profile</h1>
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
                <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
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
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        3
                        wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum.
                      </div>
                    </div>
                  </div>

                  <div id="accordion">
                  <div class="card card-purple">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse2">
                  BE Admission Form - page 2
                        </a>
                      </h4>
                    </div>
                    <div id="collapse2" class="collapse" data-parent="#accordion">
                      <div class="card-body">
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
                    </div>
                  </div>

                  <div class="card card-olive">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse3">
                  BE Admission Form - page 3
                        </a>
                      </h4>
                    </div>
                    <div id="collapse3" class="collapse" data-parent="#accordion">
                      <div class="card-body">
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
          <!-- /.col -->
@endsection
