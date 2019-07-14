@extends('layouts.app')
@section('content')

<div class="panel panel-primary">
              <div class="panel-heading">
                  <div class="col-md-12">
                      <strong class="fa fa-calendar ">  Add Call Book Information</strong>
                      <a class="btn btn-info pull-right" href="{{ route('callbook') }}" style="color:white" >Add Call Book Information
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
                    <th>Title</th>
                    <th>Details</th>
                    <th>Button Text</th>
                    <th>Button Url</th>
                    <th>Call Text</th>
                    <th>Book Text</th>
                    <th>Get Text</th>
                    <th>Photos</th>
                    <th>Statas</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($callBook as $callBk)
                      <tr>
                        <td>{{ $callBk->id }}</td>
                        <td>{{ $callBk->cabook_heading }}</td>
                        <td>{{ $callBk->cabook_details }}</td>
                        <td>{{ $callBk->cabook_button }}</td>
                        <td>{{ $callBk->cabook_button_url }}</td>
                        <td>{{ $callBk->cabook_call }}</td>
                        <td>{{ $callBk->cabook_get }}</td>
                        <td>{{ $callBk->cabook_book }}</td>
                        <td><img style="height:50px;width:50px" src="{{ asset('/storage') }}/{{$callBk->cabook_image}}"></td>
                        <td>
                          @if($callBk->cabook_status==1)
                              <span style="background-color:red;padding:4px 6px;border-radius:4px;color:white">Deactived</span>
                          @else
                            <span style="background-color:green;padding:4px 14px;border-radius:4px;color:white">Actived</span
                          @endif
                        </td>
                        <td>
                          @if($callBk->cabook_status==1)
                              <a href="{{ url('/callbook/active')}}/{{$callBk->id }}">Active</a> /
                          @else
                              --
                          @endif
                          <a href="">Delete</a> /
                          <a href="">Update</a>
                        </td>
                      </tr>
                    @endforeach

                </tbody>
              </table>

              </div>
              <div class="panel-footer">

              </div>
          </div>
@endsection
