@extends('backend.layouts.app')
@push('style')
    
@endpush
@section('content')

<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
           
          <div class="card-body">
            <a href="{{url('admin/services/create')}}" class="btn btn-outline-primary btn-lg mb-4"> <i class="mdi mdi-account-multiple-plus pt-5"></i>&nbsp;&nbsp; ADD SERVICES</a>
            <h4 class="card-title">Service Table</h4>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                     Title
                    </th>
                    <th>
                     Details
                    </th>
                    <th>
                      Actions
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($services as $service)
                  <tr>
                    <td>
                     {{$service['name']}}
                    </td>
                    <td>
                        {{ Str::limit($service['details'], 20) }}
                    </td>
                    <td>
                       <img style="height: 80px !important; width:80px !important;  border-radius:none" src="{{asset('/storage/images/admin/services/'.$service->image)}}" alt="image"/>
                    </td>
                    <td>
                      @if ($service['status']==1)
                      <a style="font-size:1.3rem"  class="updateServiceStatus" id="service-{{$service['id']}}" service_id="{{$service['id']}}" href="javascript:void(0)" title="Mute"><i status="Active" class="mdi mdi-toggle-switch"></i></a>
                      @else
                      <a style="font-size:1.3rem"  class="updateServiceStatus" id="service-{{$service['id']}}" service_id="{{$service['id']}}" href="javascript:void(0)" title="Unmute"><i status="Disable" class="mdi mdi-toggle-switch-off"></i></a>
                      @endif
                      <a href="{{url('admin/services/edit',$service['id'])}}" style="font-size:1.3rem" title="Edit"><i class="mdi mdi-table-edit"></i></a>
                      <a class="confirmDelete" href="{{url('admin/services/delete',$service['id'])}}" name="This service"style="font-size:1.3rem" title="Delete"><i class="mdi mdi-delete-forever"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</div>
  <!-- content-wrapper ends -->
@stop

@push('script')
    <script>
       function myFunction() {
            var x = document.getElementById("AddAttribute");
            if (x.style.display === "none") {
              x.style.display = "block";
            } else {
              x.style.display = "none";
            }
          }
    </script>
@endpush
