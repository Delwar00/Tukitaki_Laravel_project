@include('include.header')
<div class="container">
  <div class="panel panel-primary">
    <div class="panel-heading">
          <div class="col-md-12">
              <strong class="col-md-12 text-center"><h4>Confirm All Services</h4></strong>
          </a>
          </div>
          <div class="clearfix"></div>
      </div>

        <div class="col-md-12 " style="border-left:1px solid #DDDDDD;border-right:1px solid #DDDDDD;border-bottom:1px solid #DDDDDD">
        @forelse ($all as $all_search_info)
          <table class="table text-center">
            <tr>
              <td ><h4 style="text-transform:capitalize">{{ $all_search_info->sub_service }}</td>
              <td><a href="{{ url('/search/add') }}/{{ $all_search_info->id }}" class="btn btn-info">Book Now</a></td>
            </tr>
          </table>

               @empty
              <p>No Services</p>
        @endforelse

  </div>
  </div>
</div>
<br><br>

@include('include.footer')
