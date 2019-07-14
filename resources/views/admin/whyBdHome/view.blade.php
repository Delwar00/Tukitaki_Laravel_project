@extends('layouts.app')
@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="col-md-12">
            <strong class="fa fa-calendar ">  Why Bd Home Services Information</strong>
            <a class="btn btn-info pull-right" href="{{ url('/whyBdHomeadd') }}" style="color:white" >Add New Why Services
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
            <th>Why Service Header</th>
            <th>Why Service Details</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          @foreach($why_bd_home as $why_bd)
          <tr>
            <td>{{$why_bd->id}}</td>
            <td>{{$why_bd->service_header_name}}</td>
            <td>{{$why_bd->service_details}}</td>
            <td>{{$why_bd->service_status}}</td>
            <td>
              @if($why_bd->service_status==1)
                 <span style="background-color:green;padding:4px 14px;border-radius:4px;color:white">Actived</span>
              @else
                <span style="background-color:red;padding:4px 6px;border-radius:4px;color:white">Dectived</span>
              @endif
              </td>
            <td>
              @if($why_bd->service_status==1)
                  <a href="{{ url('/why/deactive')}}/{{$why_bd->id }}">Dective</a>
              @else
                  <a href="{{ url('/why/active')}}/{{$why_bd->id }}">Active</a>
              @endif
              <a href="{{ url('/why/deleteh')}}/{{$why_bd->id }}">Delete</a>
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
