@extends('backend.layouts.app')
@push('style')

@endpush
@section('content')

<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <a href="{{url('admin/banner/create')}}" class="btn btn-outline-primary btn-lg mb-4"> <i class="mdi mdi-account-multiple-plus pt-5"></i>&nbsp;&nbsp; ADD BANNER</a>
            <h4 class="card-title">Banners Table</h4>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      Banner Image
                    </th>
                    <th>
                      Alt
                    </th>
                    <th>
                      Actions
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($banners as $banner)
                  <tr>
                    <td >
                      <img style="height:auto !important; width:150px !important;  border-radius:none" src="{{asset('/storage/'.$banner['image'])}}" alt="image"/>
                    </td>
                    <td>
                      {{$banner['alt']}}
                     </td>
                    <td>
                      <a href="{{url('admin/banner/edit',$banner['id'])}}" style="font-size:1.3rem" title="Edit"><i class="mdi mdi-table-edit"></i></a>
                      <a class="confirmDelete" href="{{url('admin/banner/delete',$banner['id'])}}" name="This Banner"style="font-size:1.3rem" title="Delete"><i class="mdi mdi-delete-forever"></i></a>
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
@stop

@push('script')

@endpush
