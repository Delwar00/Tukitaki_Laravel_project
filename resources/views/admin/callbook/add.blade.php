@extends('layouts.app')
@section('content')

<div class="panel panel-primary">
              <div class="panel-heading">
                  <div class="col-md-12">
                      <strong class="fa fa-calendar ">  Add Call Book Information</strong>
                      <a class="btn btn-info pull-right" href="{{ route('callbookview') }}" style="color:white" >All Call Book Information
                    <span class="fa fa-plus-square"></span>
                  </a>
                  </div>

                  <div class="clearfix"></div>
              </div>
              <div class="panel-body" style="border:1px solid #30a5ff;border-top:0">

                  <form method="post" action="{{ route('callbookadd') }}" enctype="multipart/form-data">
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
                              <label >Title</label>
                            </div>
                            <div class="col-md-9">
                              <input type="text" required class="form-control" name="cabook_heading" placeholder="Enter Call Book Heading??">
                              <br>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-2">
                              <label >Details</label>
                            </div>
                            <div class="col-md-9">
                              <textarea class="form-control" name="cabook_details" rows="3" cols="20" placeholder="Enter Call Book Details??"></textarea>
                              <br>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-2">
                              <label >Button Text</label>
                            </div>
                            <div class="col-md-9">
                              <input type="text" class="form-control" name="cabook_button" placeholder="Enter Call Book Button??">
                              <br>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-2">
                              <label >Button Url</label>
                            </div>
                            <div class="col-md-9">
                              <input type="text" class="form-control" name="cabook_button_url" placeholder="Enter Call Book Button Url??">
                              <br>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-2">
                              <label >Get Text</label>
                            </div>
                            <div class="col-md-9">
                              <input type="text" class="form-control" name="cabook_get" placeholder="Enter Call Get Text??">
                              <br>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-2">
                              <label >Call Button Text</label>
                            </div>
                            <div class="col-md-9">
                              <input type="text" class="form-control" name="cabook_call" placeholder="Enter Call Button Text??">
                              <br>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-2">
                              <label >Book Button Text</label>
                            </div>
                            <div class="col-md-9">
                              <input type="text" class="form-control" name="cabook_book" placeholder="Enter Book Button Text??">
                              <br>
                            </div>
                          </div>
                          <div class="form-group"  >
                            <div class="col-md-2">
                              <label >Image</label>
                            </div>
                            <div class="col-md-9">
                              <input type="file" class="form-control" name="cabook_image">
                              <br>
                            </div>
                          </div>

                             <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Add Call Book Info</button>
                             </div>
                            </div>
                    </form>

              </div>
              <div class="panel-footer">

              </div>
          </div>
@endsection
