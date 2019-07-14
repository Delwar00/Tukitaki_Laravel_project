@include('include.header')
<br><br>
  <div class=" container">
     <div clas="row">
       <div class="col-md-3"></div>
          <div class="col-md-6">
               <div class=" order-form">
                   <div class="panel panel-default">
                       <div class="panel-heading">
                           <h2 class="text-center">Confirm Service Request</h2>
                       </div>
             <form method="post" action="{{ url('/all/service/add') }}" >
               @csrf
              <div class="panel-body">
              <div class="form-group">
                 <select class="form-control" id="sel1" name="selected_service_area">
                   <option>---Select Area---</option>
                   @foreach ($info_area as $ervice_info)
                     <option value="{{ $ervice_info->id }}">{{ $ervice_info->sub_ser_area }}</option>
                   @endforeach
                 </select>
               </div>
                 <div class="form-group">
                     <select class="form-control" id="sel1" name="selected_sub_service">
                       <option>---Select Service---</option>
                       @foreach ($info as $ervice_info)
                         <option value="{{ $ervice_info->id }}">{{ $ervice_info->sub_service }}</option>
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
  </div>

@include('include.footer')
