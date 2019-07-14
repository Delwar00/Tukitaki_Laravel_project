@include('include.header')
<div class="header-text text-center header-image-plumbing" style="padding-top:220px">
    <h2 style="font-size:35px;min-height:40px;color:white" id="text-shadow3"></h2>

  </div>
         <div class="cleaning_content container">

            <div clas="row">
                <div class="col-sm-7" style="padding:0;margin:0">
                    <div class="startern-header-div" style="padding-top:30px">
                        <h1 class="startern-header"><span >Plumbing Service</span> </h1>
                    </div>
                    <div class="service-details" style="margin-top:0;padding:0">
                        <p>
                        No matter it's your home or workplace, cleanliness of your space is important in order to stay SAFE, HYGIENIC&nbsp;and PRODUCTIVE, everyday. HandyMama Professional Cleaning service comes&nbsp;up with&nbsp;a&nbsp;complete solution&nbsp;that makes your space sparkle! Our&nbsp;highly trained cleaning professionals go to your place with all required cleaning equipment, supplies and chemicals, do their job what they are best at.                        </p><br>
                        <h2 class="startern-sub-header" id="subheader">Features</h2>
                                                        <div class="service-features">
                                    <i class="flaticon-shape"></i>
                                    <p>Hourly, Daily, Weekly and Monthly Subscription Model.</p>
                                </div>

                                                        <div class="service-features">
                                    <i class="flaticon-shape"></i>
                                    <p>4-step Trained Cleaning Professionals.</p>
                                </div>

                                                        <div class="service-features">
                                    <i class="flaticon-shape"></i>
                                    <p>Background Checked, Verified and Trusted.</p>
                                </div>

                                                        <div class="service-features">
                                    <i class="flaticon-shape"></i>
                                    <p>Affordable Price with Custom Packages.</p>
                                </div>

                    </div>

                </div>
                <!--order form-->
                <div class="col-sm-5 order-form">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="text-center">Confirm Service Request</h2>
                        </div>
              <form method="post" action="{{ url('/all/service/add') }}" enctype="multipart/form-data">
                @csrf
                <div class="panel-body">
                <div class="form-group">
                  <select class="form-control" id="sel1" name="selected_service_area">
                    <option>---Select Area---</option>
                    @foreach ($plumbing_area as $plumbing)
                      <option value="{{ $plumbing->id }}">{{ $plumbing->sub_ser_area }}</option>
                    @endforeach
                  </select>
                </div>
                  <div class="form-group">
                      <select class="form-control" id="sel1" name="selected_sub_service">
                        <option>---Select Service---</option>

                        @foreach ($plumbing_info as $plumbing)
                          <option value="{{ $plumbing->id }}">{{ $plumbing->sub_service }}</option>
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
        <section style="padding-bottom:70px">
            <div class="container">
              <div class="row">

                 <div class="col-md-12">
                        <h2 class="startern-sub-header" id="subheader">Sub Service</h2>
                        <p>
                            You can specify your booking by selecting one or more sub services from the drop down.                        </p><br>

                            @foreach ($plumbing_info as $plumbing)
                              <p id="subS1" class="single-sub-service" onclick="selectSub('Complete Home Cleaning', '1'); ">
                                {{ $plumbing->sub_service }}
                              </p>
                            @endforeach
                              </div>

                              </div>

              </div>
            </div>
        </section>
@include('include.footer')
