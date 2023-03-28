@extends('backend.layouts.app')
@push('style')
    
@endpush
@section('content')
<div class="content-wrapper">
  <div class="col-md-6 grid-margin stretch-card  m-auto ">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-primary"">Update Service</h4>
        <div class="mb-3">
          @foreach ($errors->all() as $error)
              <li style="color: red">{{ $error }}</li>
          @endforeach
        </div>
        <form class="forms-sample" action="{{'/admin/news/edit/'.$news['id']}}" method="POST" enctype="multipart/form-data">@csrf
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Title</label>
            <div class="col-sm-9">
              <input type="text" name="name" class="form-control" id="exampleInputUsername2" value="{{$news['name']}}">
            </div>
          </div>
          <div class="form-group row">
              <label for="Image" class="col-sm-3 col-form-label">Image</label>
              <div class="col-sm-9">
                <img class="m-auto" style="height: 100px; margin-top:15px;" src="{{asset('storage/images/admin/news/'.$news->image)}}" alt="No image" srcset="">
              </div>
            </div>
            <div class="form-group row">
              <label for="Image" class="col-sm-3 col-form-label">Change</label>
              <div class="col-sm-9">
                <input type="file" name="image" class="form-control" id="Image">
              </div>
            </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Details</label>
            <div class="col-sm-9">
              <textarea name="details"  class="form-control" id="exampleInputUsername2" cols="30" rows="10">{{$news['details']}}</textarea>
            </div>
          </div>
          <button id="AddNew" type="submit" class="btn btn-primary mr-2">Submit</button>
          <a href="{{url('admin/news/index')}}" class="btn btn-light">Cancel</a>
        </form>
      </div>
    </div>
  </div>
</div>
  <!-- content-wrapper ends -->
@stop

@push('script')

@endpush
