@extends('backend.layouts.app')
@push('style')
    
@endpush
@section('content')

<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <a href="{{ route('add_menu') }}" class="btn btn-outline-primary btn-lg mb-4"> <i class="mdi mdi-account-multiple-plus pt-5"></i>&nbsp;&nbsp; ADD Menu</a>
            <h4 class="card-title">All Menubar</h4>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
		     <th>
                     SL:
                    </th>
                    <th>
                      Navbar Menu Name:
                    </th> 
		    <th>
                      Navbar URL:
                    </th>
                    <th>
                      Action
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($menus as $key => $menu)
                      <tr>
			 <td>{{$key+1}}</td>
                         <td>{{ $menu->name }}</td>
			<td>{{ $menu->url }}</td>
                         <td>
                            <a href="{{ route('edit_menu',$menu->id)}}" title="Edit" class="btn btn-info btn-sm"> Edit</a>
                            <a href="{{ route('delete_menu',$menu->id)}}" title="Delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this?')">Delete</a>
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
