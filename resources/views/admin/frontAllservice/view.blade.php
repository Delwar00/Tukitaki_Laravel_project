@extends('layouts.app')
@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="col-md-12">
            <strong class="fa fa-calendar ">  All Client Request Information</strong>
        </div>

        <div class="clearfix"></div>
    </div>
    <div class="panel-body" style="border:1px solid #30a5ff;border-top:0">
        <div class="col-md-12">
        <table class="table table-bordered" id="mydatatable1">
        <thead>
          <tr>
            <th>#</th>
            <th>Service</th>
            <th>Service Area</th>
            <th>Service Street</th>
            <th>Phone No</th>
            <th>Statas</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($ClientSrView as $client_request)
              <tr>

                @if($client_request->selected_service_status==1)
                    <td style="background-color:green">{{ $client_request->id }}</td>
                  @else
                <td style="background-color:red">{{ $client_request->id }}</td>
              @endif
                <td>
                  @php
                  $sub_info=App\ClientServiceRequest::find($client_request->id)->getInfo;
                  //echo $sub_info;
                  @endphp
                  @foreach ($sub_info as $sub)
                    {{ $sub->sub_service }}
                  @endforeach

                </td>
                <td>
                  @php
                  $sub_area_info=App\ClientServiceRequest::find($client_request->id)->getAreaInfo;
                  //echo $sub_area_info;
                  @endphp
                  @foreach ($sub_area_info as $sub_area)
                    {{ $sub_area->sub_ser_area }}
                  @endforeach
                </td>
                <td>{{ $client_request->selected_service_street }}</td>
                {{-- <td>{{ $client_request->selected_sub_service }}</td> --}}
                <td>{{ $client_request->contact_num }}</td>
                <td>
                   @if($client_request->selected_service_status==1)
                    <a href="{{url('/all/service/read')}}/{{$client_request->id}}">Mark as Read</a>
                    @else
                    --
                  @endif
                </td>
                <td>Update</td>
              </tr>
            @endforeach
        </tbody>
      </table>
      </div>
    </div>
  </div>


@endsection
@section('footer_scripts')
  <script>
  $(document).ready( function () {
    $('#mydatatable1').DataTable();
} );
  </script>
@endsection
