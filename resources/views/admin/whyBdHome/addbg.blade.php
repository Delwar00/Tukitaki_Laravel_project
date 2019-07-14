@extends('layouts.app')
@section('content')

<div class="panel panel-primary">
              <div class="panel-heading">
                  <div class="col-md-12">
                      <strong class="fa fa-calendar ">  All Why Information</strong>
                      <a class="btn btn-info pull-right" href="{{ route('whybgview') }}" style="color:white" >All Why Bg Information
                    <span class="fa fa-plus-square"></span>
                  </a>
                  </div>

                  <div class="clearfix"></div>
              </div>
              <div class="panel-body" style="border:1px solid #30a5ff;border-top:0">

                  <form method="post" action="{{ route('bgadd') }}" enctype="multipart/form-data">
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
                            <div class="col-md-2">
                              <label >Section Title</label>
                            </div>
                            <div class="col-md-9">
                              <input type="text" class="form-control" name="why_heading" placeholder="Enter Service Heading??">
                              <br>
                            </div>
                          </div>

                          <div class="form-group"  >
                            <div class="col-md-2">
                              <label >Service Details</label>
                            </div>
                            <div class="col-md-9">
                              <input type="file" class="form-control" name="why_bg_image">
                              <br>
                            </div>
                          </div>

                             <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Add Services Title & Bg</button>
                             </div>
                            </div>
                    </form>

              </div>
              <div class="panel-footer">

              </div>
          </div>
@endsection
