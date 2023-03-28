@extends('backend.layouts.app')
@push('style')
    
@endpush
@section('content')

<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <a href="{{ route('add_menu') }}" class="btn btn-outline-primary btn-lg mb-4"> <i class="mdi mdi-account-multiple-plus pt-5"></i>&nbsp;&nbsp; ADD Menu</a>
            <h4 class="card-title">Users Table</h4>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      Navbar Menu Name:
                    </th>
		    <th>
                      Navbar Menu URL:
                    </th>
                    <th>
                      Action
                    </th>
                  </tr>
                </thead>
                <tbody>

                   <form action="{{ route('store_menu') }}" method="post">
                                @csrf
                              <div class="mb-3">
                                <label for="">Menubar Name</label>
                                <input type="text" name="name" class="form-control" id="name">
                                @error('name')
                                    <span style="color:red">{{ $message }}</span>
                                @enderror

                              </div>
 				<div class="mb-3">
                                <label for="">Menubar URL</label>
                                <input type="text" name="url" class="form-control" id="url">
                                @error('url')
                                    <span style="color:red">{{ $message }}</span>
                                @enderror

                              </div>
                              <button type="submit" class="btn btn-primary">Add Name</button>
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
