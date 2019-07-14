@extends('layouts.app')
@section('content')

<div class="panel panel-primary">
              <div class="panel-heading">
                  <div class="col-md-12">
                      <strong class="fa fa-calendar ">  Add Sub Services</strong>
                      <a class="btn btn-info pull-right" href="" style="color:white" >All Cleaning Service Information
                    <span class="fa fa-plus-square"></span>
                  </a>
                  </div>

                  <div class="clearfix"></div>
              </div>
              <div class="panel-body" style="border:1px solid #30a5ff;border-top:0">

                  <form method="post" action="" enctype="multipart/form-data">
                        <div class="col-md-6">
                         @csrf

                          @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="form-group">
                              <div class="col-md-3">
                                <label >Sub Service Area</label>
                              </div>
                              <div class="col-md-9">
                                <input type="text" required class="form-control" name="sub_ser_area" placeholder="Enter Sub Services Area??">
                                <br>
                              </div>
                            </div>

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
                                <button type="submit" class="btn btn-primary">Add Sub Services</button>
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
    });
</script>
@endsection
