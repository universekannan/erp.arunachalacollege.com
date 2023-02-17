
@extends('layout')
@section('content')

<!-- /.content -->
<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0">Dashboard</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
               </ol>
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
                     Personal Details
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
                  Family Paticulars
                        </a>
                      </h4>
                    </div>
                    <div id="collapse2" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        3
                        wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum.
                      </div>
                    </div>
                  </div>

                  <div class="card card-olive">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse3">
                  Education Detai
                        </a>
                      </h4>
                    </div>
                    <div id="collapse3" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                        nulla
                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                        beer
                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                        labore sustainable VHS.
                      </div>
                    </div>
                  </div>
   
                  <div class="card card-purple">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse4">
                  Academic Details
                        </a>
                      </h4>
                    </div>
                    <div id="collapse4" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                        nulla
                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                        beer
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
                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                        beer
                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                        labore sustainable VHS.
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
                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                        beer
                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                        labore sustainable VHS.
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
                        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                        nulla
                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                        beer
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
                        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                        nulla
                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                        beer
                      </div>
                    </div>
                  </div>

                  <div id="accordion">
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
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse10">
                       Computer Courses Completed
                        </a>
                      </h4>
                    </div>
                    <div id="collapse10" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        3
                        wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum.
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
                        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                        nulla
                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                        beer
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
                        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                        nulla
                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                        beer
                      </div>
                    </div>
                  </div>

                  <div id="accordion">
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
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse14">
                       Inplant Training / Internship
                        </a>
                      </h4>
                    </div>
                    <div id="collapse14" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        3
                        wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum.
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
                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                        beer
                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                        labore sustainable VHS.
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
                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                        beer
                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                        labore sustainable VHS.
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
                        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                        nulla
                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                        beer
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
                        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                        nulla
                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                        beer
                      </div>
                    </div>
                  </div>

                  <div id="accordion">
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
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse20">
                        Wheather Hosteller:Yes/No     If Hosteller Room No:
                        </a>
                      </h4>
                    </div>
                    <div id="collapse20" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        3
                        wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum.
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
                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                        beer
                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                        labore sustainable VHS.
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
                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                        beer
                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                        labore sustainable VHS.
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
                        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                        nulla
                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                        beer
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
                        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                        nulla
                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                        beer
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
