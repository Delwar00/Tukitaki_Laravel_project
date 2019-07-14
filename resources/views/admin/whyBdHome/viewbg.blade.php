@extends('layouts.app')
@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="col-md-12">
            <strong class="fa fa-calendar ">  Why Bd Home Services Information</strong>
            <a class="btn btn-info pull-right" href="{{ url('/whyBgHome') }}" style="color:white" >Add New Why Services
            <span class="fa fa-plus-square"></span>
            </a>
        </div>

        <div class="clearfix"></div>
    </div>
    <div class="panel-body" style="border:1px solid #30a5ff;border-top:0">
        <div class="col-md-12">
        <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Why Tittle</th>
            <th>Why Background Img</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          @foreach($why_bg as $why_bg)
          <tr>
            <td>{{$why_bg->id}}</td>
            <td>{{$why_bg->why_heading}}</td>
            <td>
              <img style="height:50px;width:100px"
                src="{{asset('/storage')}}/{{$why_bg->why_bg_image}}">
            </td>

            <td>
              @if($why_bg->service_status==1)
                 <span style="background-color:red;padding:4px 6px;border-radius:4px;color:white">Deactived</span>
              @else
                <span style="background-color:green;padding:4px 14px;border-radius:4px;color:white">Actived</span>
              @endif
              </td>
            <td>
              @if($why_bg->service_status==1)
                  {{-- <a href="{{ url('/whybg/deactive')}}/{{$why_bg->id }}">Dective</a> --}}
                  <a href="{{ url('/whybg/active')}}/{{$why_bg->id }}">Active</a>
              @else
                  --
              @endif
              <a href="">Delete</a>
              <a href="">Update</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      </div>
    </div>
  </div>
@endsection
