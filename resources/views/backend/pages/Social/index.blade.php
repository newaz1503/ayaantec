@extends('backend.layouts.app')
@push('style')
    
@endpush
@section('content')

<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <a href="{{url('admin/social/add')}}" class="btn btn-outline-primary btn-lg mb-4"> <i class="mdi mdi-account-multiple-plus pt-5"></i>&nbsp;&nbsp; ADD PACKEGE</a>
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
                      Details
                    </th>
                    <th>
                      Action
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($socials as $social)
                  <tr>
                    <td>
                     {{$social['name']}}
                    </td>
                    <td>
                     {{$social['parent_id']}}
                    </td>
                    <td>
                       {{Str::limit($social['details'], 40)}}
                     </td>
                    <td>
                      @if ($social['status']==1)
                      <a style="font-size:1.3rem"  class="updateSocialStatus" id="social-{{$social['id']}}" social_id="{{$social['id']}}" href="javascript:void(0)" title="Stop this social"><i status="Active" class="mdi mdi-toggle-switch"></i></a>
                      @else
                      <a style="font-size:1.3rem"  class="updateSocialStatus" id="social-{{$social['id']}}" social_id="{{$social['id']}}" href="javascript:void(0)" title="Unmute this social"><i status="Disable" class="mdi mdi-toggle-switch-off"></i></a>
                      @endif
                      <a href="{{url('admin/social/edit',$social['id'])}}" style="font-size:1.3rem" title="Edit"><i class="mdi mdi-table-edit"></i></a>
                      <a class="confirmDelete" href="{{url('admin/social/delete',$social['id'])}}" name="{{$social['name']}}"style="font-size:1.3rem" title="Delete"><i class="mdi mdi-delete-forever"></i></a>
                      <a id="addTask" href="{{url('admin/service/task/index',$social['id'])}}" style="font-size:1.3rem" title="Add tasks"><i class="mdi mdi-database-plus"></i></a>
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
