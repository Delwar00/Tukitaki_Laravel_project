@extends('layouts.app')
@section('content')

<div class="panel panel-primary">
              <div class="panel-heading">
                  <div class="col-md-12">
                      <strong class="fa fa-calendar ">  Add Services</strong>
                      <a class="btn btn-info pull-right" href="{{ url('/service') }}" style="color:white" >All Services Information
                    <span class="fa fa-plus-square"></span>
                  </a>
                  </div>

                  <div class="clearfix"></div>
              </div>
              <div class="panel-body" style="border:1px solid #30a5ff;border-top:0">
                  <form method="post" action="{{ route('service.store') }}" enctype="multipart/form-data">
                     @csrf
                    <div class="col-md-8">
                      <div class="panel panel-danger" >
                     <div class="panel-heading">
                         <div class="col-sm-9">
                             <strong class="fa fa-calendar"> Add sub services</strong>
                         </div>

                         <div class="clearfix"></div>
                     </div>
                     <div class="panel-body" style="border:1px solid #30a5ff;border-top:0">


                      <div class="form-group">
                        <div class="col-md-2">
                          <label >Service Name</label>
                        </div>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="service_name" placeholder="Enter Service Name ??">
                          <br>
                        </div>
                      </div>

                      <div class="form-group"  >
                        <div class="col-md-2">
                          <label >Service Details</label>
                        </div>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="service_details" placeholder="Enter Service Details ??">
                          <br>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-md-2">
                          <label >Service Button</label>
                        </div>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="service_button" placeholder="Enter service Button Text ??">
                          <br>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-2">
                          <label >Service Image</label>
                        </div>
                        <div class="col-md-9">
                          <input type="file" class="form-control" name="service_image">
                          <br>
                        </div>
                      </div>
                   </div>
                 </div>
               </div>
                        <br><br>
                       <div class="col-md-6">
                         <div class="panel" >
                        <div class="panel-heading" style="background:gray">
                            <div class="col-sm-9">
                                <strong class="fa fa-calendar"> Add sub services</strong>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-body" style="border:1px solid #30a5ff;border-top:0">
                         <div class="form-group" id="form-main-area" >
                           <div class="col-md-3">
                             <label >Sub Service name</label>
                           </div>
                           <div class="col-md-9" >
                             <input id="form-clone" type="text" required class="form-control" name="sub_service[]" placeholder="Enter Sub Services Name??">
                             <br>
                           </div>
                         </div>
                         <div id="add">

                          </div>
                         <div class="col-md-12">
                         <button type="button"  class="btn btn-primary" id="add_sub_service">More Sub Services
                          <span style="font-weight:bold;"> +</span>
                         </button>

                            </div>
                           </div>
                        </div>
                      </div>


                     <div class="col-md-6">
                       <div class="panel panel-danger" >
                      <div class="panel-heading">
                          <div class="col-sm-9">
                              <strong class="fa fa-calendar"> Add sub services</strong>
                          </div>

                          <div class="clearfix"></div>
                      </div>
                      <div class="panel-body" style="border:1px solid #30a5ff;border-top:0">
                         <div class="form-group" id="form-main-area1">
                           <div class="col-md-3" >
                             <label >Sub Service Area</label>
                           </div>
                           <div class="col-md-9" >
                             <input id="form-clone1" type="text" required class="form-control" name="sub_ser_area[]" placeholder="Enter Sub Services Area??">
                             <br>
                           </div>
                         </div>
                       <div id="add1">

                        </div>
                       <div class="col-md-12">
                       <button type="button"  class="btn btn-primary" id="add_sub_service1">Added More Areas
                        <span style="font-weight:bold;"> +</span>
                       </button>

                        <button type="submit" class="btn btn-primary">Add Services & Sub Services</button>
                          </div>
                         </div>
                      </div>
                    </div>
                    </form>
              </div>
          </div>
@endsection
@section('footer_scripts')
  <script>
    $(document).ready(function(){
      $('#add_sub_service').click(function() {
        var clone = $('#form-main-area').clone('#form-clone');
        clone.find('#form-clone').val('');
        $('#add').append(clone);
      });
      $('#add_sub_service1').click(function() {
        var clone = $('#form-main-area1').clone('#form-clone1');
        clone.find('#form-clone1').val('');
        $('#add1').append(clone);
      });
    });
</script>
@endsection
