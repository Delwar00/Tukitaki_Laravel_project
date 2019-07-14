@include('include.header')
<div class="header-feature header-image">
                <div class="header-text text-center">
                    <h2><sub style="font-size:13px">100%</sub>Service / Satisfaction Guaranteed <sub style="font-size:13px">100%</sub></h2>
                </div>
                <div class="header-search">

                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    {{-- <form method="get" action="{{ route('search') }}">
                      @csrf
                         <div class="form-group has-success has-feedback">

                          <input style="border-radius:10px;color:black;background:#E6E8EE" type="text" class="form-control" id="inputSuccess2">
                          <span style="font-size:23px;padding-top:10px;padding-right:25px;" class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>
                       </form> --}}

                       <form method="get" action="{{ route('search') }}" role="search">
                          @csrf
                        <div class="input-group col-md-12">
                              <input required name="search" type="text" class="data-search form-control" id="search-input" placeholder="Search">
                              <span class="input-group-btn"><button style="padding-top:13px" value="search" class="glyphicon glyphicon-search btn btn-default btn-lg data-search btn btn-default" type="submit"></button></span>
                        </div>
                        </form><br>

                 </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-md-offset-2"></div>

                </div>
        </div>


    <!-- header part end -->


    <!-- service area -->
    <section class="service" style="padding:50px 0">
        <div class="container">
            <div class="row">
                <h2 class="text-center" style="padding:20px 0;color: #7f234b;font-size:30px;font-family: OpenSans-Semibold;text-transform: uppercase;">All Services</h2>
                @foreach($service_info as $service)

                  <div class="col-md-4">
                      <div class="bd-plumbing">
                          <img src="{{asset('/storage')}}/{{$service->service_image}}" style="height:200px" alt="Avatar" class="image">
                          <div class="overlay">
                               <div class="text"><a data-toggle="modal" data-target="#myModal" href="{{$service->service_button_url}}" style="padding:10px 20px;border:1px solid white;color:white;text-decoration: none">
                                    {{$service->service_button}}
                                </a><br> <br>
                                  <span>{{ $service->service_details }}</span>
                               </div>
                          </div>
                          <div class="panel panel-default text-center" style="margin-top:0">
                              <h4 style="padding:10px 0">{{ $service->service_name }}</h4>
                       </div>
                      </div>
                  </div>

              @endforeach
              <!-- Trigger the modal with a button -->
              <!-- Modal -->
              <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title text-center">Service Request</h4>
                    </div>
                    <div class="modal-body well">
                      <form method="post" action="{{ url('/all/service/add') }}">
                        @csrf
                              <div class="panel-body">
                              <div class="form-group">

                        <select class="form-control" id="sel1" name="selected_service_area">
                          <option>---Select Area---</option>

                          @foreach ($all_area as $area)
                            <option value="{{ $area->id }}">{{ $area->sub_ser_area }}</option>
                          @endforeach
                        </select>
                      </div>
                        <div class="form-group">
                            <select class="form-control" id="sel1" name="selected_sub_service">
                              <option>----Select Service-----</option>
-
                              @foreach ($all_info as $aervice_info)
                                <option value="{{ $aervice_info->id }}">{{ $aervice_info->sub_service }}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" required name="contact_num" placeholder="Contact Number">
                          </div>
                         <div class="form-group">
                            <input type="text" class="form-control" id="streetAddress" required name="selected_service_street" placeholder="Street Address with Home Number">
                          </div>
                            </div>
                            <div class="panel-footer">
                                <button class="btn btn-success btn-group-justified" type="submit">SUBMIT</button>
                             </div>
                          </form>
                    </div>
                  </div>

                </div>
              </div>
              {{-- modal end --}}
            </div>
        </div>
    </section>

<!-- handy section -->
<section class="handy">
    <div class="container">
        <div class="row">
            <div class="bg-handy">
                <div class="col-md-9" style="">
                    <div class="handy-text">
                        <h2 style="color: white;font-size:30px;font-family: OpenSans-Semibold;text-transform: uppercase;">
                          {{ $callBook->cabook_heading }}
                        </h2>
                        <p>{{ $callBook->cabook_details }}</p>
                        <a href="{{ $callBook->cabook_button_ur }}">
                          {{ $callBook->cabook_button }}
                          <spna class="fa fa-arrow-right"></spna></a>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('/storage') }}/{{ $callBook->cabook_image }}" style="height:400px;width:100%" alt="">
                </div>
            </div>
            <div class="handy-call col-md-12" >
                <div class="col-md-6">
                    <h4 style="color:white">
                        {{ $callBook->cabook_get }}
                     </h4>
                </div>
                <div class="col-md-6  handy-call-book">
                    <ul>
                        <li>
                          <a href="" class="smart1">
                            {{ $callBook->cabook_call }}
                          </a>
                        </li>

                        <li>
                          <a href="">
                            <i class="fa fa-phone"></i>
                          </a>
                        </li>
                        <li>
                          <a data-toggle="modal" data-target="#myModal" href="" class="smart">{{ $callBook->cabook_book }}</a>
                        </li>
                        <li>
                          <a href="" class="smart2">
                            <i class="fa fa-ticket"></i>
                          </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- why handy mama -->
<section class="why-handy" style="background-image: url('{{asset("/storage")}}/{{$why_bg->why_bg_image}}')">
    <div class="lol">
    <div class="container">
        <div class="row">
            <h2 style="color:#7f234b;font-size:30px;font-family: OpenSans-Semibold;text-transform: uppercase;" class="text-center">
              {{$why_bg->why_heading}}
            </h2>
            @foreach($why_bd_info as $why_bd)
            <div class="col-md-4">
                <div class="panel" style="background:transparent;color:white;margin-top:30px">
                    <div class="panel-body money" style="margin-top:0">
                        <h2>{{$why_bd->service_header_name}}</h2>
                        <p style="border-bottom:10px solid red;padding-bottom:10px">{{$why_bd->service_details}} </p>
                     </div>
                 </div>
            </div>
            @endforeach


        </div>
    </div>
    </div>
</section>
<section class="happy-customers" style="padding:30px 0 50px 0">
    <div class="container">
        <div class="row">
            <h2 class="text-center" style="padding:20px 0;color: #7f234b;font-size:30px;font-family: OpenSans-Semibold;text-transform: uppercase;">Our Happy Client Says</h2>
            <div class="col-md-4">
                <a href=" " style="text-decoration:none">
                    <div class="panel panel-default" style="margin-top:10px">
                      <div class="panel-body" >
                            <img style="width:100%;max-height:200px" src="{{ asset('/website') }}/images/f4.jpg" alt="">
                      </div>
                      <div class="panel-footer text-center" >Naiam Islam</div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="" style="text-decoration:none">
                    <div class="panel panel-default" style="margin-top:10px">
                      <div class="panel-body">
                        <img style="width:100%;max-height:200px" src="{{ asset('/website') }}/images/f2.jpg" alt="">
                      </div>
                      <div class="panel-footer text-center" >Suvroto Halder</div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="" style="text-decoration:none">
                    <div class="panel panel-default" style="margin-top:10px">
                      <div class="panel-body">
                        <img style="width:100%;max-height:200px" src="{{ asset('/website') }}/images/f3.jpg" alt="">
                     </div>
                      <div class="panel-footer text-center">Sriti Rani Roy</div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>
@include('include.footer')
