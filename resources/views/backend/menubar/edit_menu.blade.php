@extends('backend.layouts.app')
@push('style')
    
@endpush
@section('content')

<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <a href="{{ route('view_menu') }}" class="btn btn-outline-primary btn-lg mb-4"> <i class="mdi mdi-account-multiple-plus pt-5"></i>&nbsp;&nbsp; View Menu</a>
            <h4 class="card-title">Users Table</h4>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      Navbar Menu Name:
                    </th>
                    <th>
                      Action
                    </th>
                  </tr>
                </thead>
                <tbody>

                   <form action="{{ route('update_menu',$editData->id) }}" method="post" id="myForm">
                                  @csrf
                                  <div class="form-row">
                                      <div class="form-group col-md-6">
                                          <label for="name">Name</label>
                                          <input type="text" name="name" class="form-control" value="{{$editData->name}}">
                                      </div>
 					<div class="form-group col-md-6">
                                          <label for="url">URL</label>
                                          <input type="text" name="url" class="form-control" value="{{$editData->url}}">
                                      </div>
                                      <div class="form-group col-md-12">
                                          <input type="submit" class="btn btn-primary btn-lg btn-block" value="submit">
                                      </div>
                                  </div>
                     </form>
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
