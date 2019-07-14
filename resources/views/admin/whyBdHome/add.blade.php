@extends('layouts.app')
@section('content')

<div class="panel panel-primary">
              <div class="panel-heading">
                  <div class="col-md-12">
                      <strong class="fa fa-calendar ">Why Bd Home Service</strong>
                      <a class="btn btn-info pull-right" href="{{ url('/whybdhome') }}" style="color:white" >All Why Information
                    <span class="fa fa-plus-square"></span>
                  </a>
                  </div>

                  <div class="clearfix"></div>
              </div>
              <div class="panel-body" style="border:1px solid #30a5ff;border-top:0">
                <div class="col-md-8">
                  <form method="post" action="{{ route('whybdhome.store') }}" enctype="multipart/form-data">

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
                        <div class="col-md-2">
                          <label >Service Heading</label>
                        </div>
                        <div class="col-md-9">
                          <input type="text" required class="form-control" name="service_header_name" placeholder="Enter Service Heading??">
                          <br>
                        </div>
                      </div>

                      <div class="form-group"  >
                        <div class="col-md-2">
                          <label >Service Details</label>
                        </div>
                        <div class="col-md-9">
                          <textarea name="service_details" class="form-control" placeholder="Enter Service Details ??" rows="8" cols="80"></textarea>
                          <br>
                        </div>
                      </div>

                         <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Add Services</button>
                         </div>



                    </form>
                      </div>
              </div>
              <div class="panel-footer">

              </div>
          </div>
@endsection
