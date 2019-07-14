@extends('layouts.app')
@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="col-md-12">
            <strong class="fa fa-calendar ">  Services Information</strong>
            <a class="btn btn-info pull-right" href="{{ url('/add/service') }}" style="color:white" >Add New  Services
            <span class="fa fa-plus-square"></span>
            </a>
        </div>

        <div class="clearfix"></div>
    </div>
    <div class="panel-body" style="border:1px solid #30a5ff;border-top:0">
        <div class="col-md-12">
        <table class="table table-bordered" id="mydatatable">
        <thead>
          <tr>
            <th>#</th>
            <th>Service Title</th>
            <th>Service Details</th>
            <th>Service Button</th>
            <th>Sub Services</th>
            <th>Sub Services Area</th>
            <th>Photos</th>
            <th>Statas</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

     <tr>
       @foreach($service_info as $service)
          <td>{{ $service->id }}</td>
          <td>{{ $service->service_name }}</td>
          <td>{{ $service->service_details }}</td>
          <td>{{ $service->service_button }}</td>
          <td>

            @php
            $sub_service=App\Service::find($service->id)->getSubServices;
            //echo $sub_service;
            @endphp
            @foreach($sub_service as $sub)
              <ul type="square">
                  <li>{{ $sub->sub_service }}</li>
              </ul>
            @endforeach
          </td>
          <td>
            @php
            $sub_service_area=App\Service::find($service->id)->getSubAreas;
            //echo $sub_service;
            @endphp
            @foreach($sub_service_area as $sub_area)
              <ul type="square">
                  <li>{{ $sub_area->sub_ser_area }}</li>
              </ul>
            @endforeach

          </td>
          <td><img style="height:50px;width:100px"
            src="{{asset('/storage')}}/{{$service->service_image}}">
          </td>
          <td>
            @if($service->service_status==1)
               <span style="background-color:green;padding:4px 14px;border-radius:4px;color:white">Actived</span>
            @else
              <span style="background-color:red;padding:4px 6px;border-radius:4px;color:white">Dectived</span>
            @endif
            </td>
          <td>
            @if($service->service_status==1)
                <a href="{{ url('/service/deactive')}}/{{$service->id }}">Dective</a>
            @else
                <a href="{{ url('/service/active')}}/{{$service->id }}">Active</a>
            @endif
            <a href="{{ url('/service/delete')}}/{{$service->id }}">Delete</a>
            <a href="{{ url('/service/edit') }}/{{ $service->id }}">Update</a>
          </td>
        </tr>
@endforeach

        </tbody>
      </table>
      <h2>{{ $service_info->links() }}</h2>
        </div>
    </div>
  </div>


@endsection
@section('footer_scripts')
  <script>
  $(document).ready( function () {
    $('#mydatatable').DataTable();
} );
  </script>
@endsection
