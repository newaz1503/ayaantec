@extends('backend.layouts.app')
@push('style')
    
@endpush
@section('content')

<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <a href="{{url('admin/service/create')}}" class="btn btn-outline-primary btn-lg mb-4"> <i class="mdi mdi-account-multiple-plus pt-5"></i>&nbsp;&nbsp; ADD SERVICE</a>
            <h4 class="card-title">PACKEGE TABLE</h4>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      Title
                    </th>
                    <th>
                       Parent
                    </th>
                    <th>
                      Description
                    </th>
                    <th>
                      Url
                    </th>
                    <th>
                      Action
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
                      {{$service['parent_id']}}
                    </td>
                    <td>
                       {{Str::limit($service['description'], 40)}}
                     </td>
                     <td>
                      {{$service['url']}}
                     </td>
                    <td>
                      @if ($service['status']==1)
                      <a style="font-size:1.3rem"  class="updateServiceStatus" id="service-{{$service['id']}}" service_id="{{$service['id']}}" href="javascript:void(0)" title="Stop this service"><i status="Active" class="mdi mdi-toggle-switch"></i></a>
                      @else
                      <a style="font-size:1.3rem"  class="updateServiceStatus" id="service-{{$service['id']}}" service_id="{{$service['id']}}" href="javascript:void(0)" title="Unmute this service"><i status="Disable" class="mdi mdi-toggle-switch-off"></i></a>
                      @endif
                      <a href="{{url('admin/service/edit',$service['id'])}}" style="font-size:1.3rem" title="Edit"><i class="mdi mdi-table-edit"></i></a>
                      <a class="confirmDelete" href="{{url('admin/service/delete',$service['id'])}}" name="{{$service['name']}}"style="font-size:1.3rem" title="Delete"><i class="mdi mdi-delete-forever"></i></a>
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
    
@endpush
