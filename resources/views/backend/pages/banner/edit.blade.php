@extends('backend.layouts.app')
@push('style')
    
@endpush
@section('content')
<div class="content-wrapper">
  <div class="col-md-6 grid-margin stretch-card  m-auto ">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-primary">Add New  Banner</h4>
        <div class="mb-3">
          @foreach ($errors->all() as $error)
              <li style="color: red">{{ $error }}</li>
          @endforeach
        </div>
        <form class="forms-sample" action="{{'/admin/banner/update/'.$banner->id}}" method="POST" enctype="multipart/form-data">@csrf
          
          <div class="form-group row">
            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Alternative</label>
            <div class="col-sm-9">
              <input type="text" name="alt" class="form-control" id="exampleInputMobile" value="{{$banner->alt}}">
              
            </div>
          </div>
          <div class="form-group row">
            <label for="Image" class="col-sm-3 col-form-label">Banner Image</label>
            <div class="col-sm-9">
              <input type="file" name="image" class="form-control" id="Image">
              <p class="text-muted" style="font-size: 12px; margin-top: 5px; color: #c7c7c7 !important">Image size will be : (width: 512px, height: 512px)</p>
              <img style="height: 70px !important; width:150px !important;  border-radius:none" src="{{asset('/storage/'.$banner['image'])}}" alt="image"/>
            </div>
            
          </div>
          <button id="AddNew" type="submit" class="btn btn-primary mr-2">Submit</button>
          <a href="{{url('admin/banner/index')}}" class="btn btn-light">Cancel</a>
        </form>
      </div>
    </div>
  </div>
</div>
  <!-- content-wrapper ends -->
@stop

@push('script')

@endpush
