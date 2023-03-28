@extends('backend.layouts.app')
@push('style')
    
@endpush
@section('content')
<div class="content-wrapper">
  <div class="col-md-8 grid-margin stretch-card  m-auto ">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-primary">Update Service</h4>
        <div class="mb-3">
          @foreach ($errors->all() as $error)
              <li style="color: red">{{ $error }}</li>
          @endforeach
        </div>
        <form class="forms-sample" action="{{'/admin/services/edit/'.$service->id}}" method="POST" enctype= multipart/form-data>
            @csrf
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Title</label>
            <div class="col-sm-9">
              <input type="text" name="name" class="form-control" id="exampleInputUsername2" value="{{$service->name}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Details</label>
            <div class="col-sm-9">
              <textarea name="details" id="" cols="30" rows="10" class="form-control" id="exampleInputUsername2" placeholder="Packege details">{{$service->details}}</textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="Image" class="col-sm-3 col-form-label">Image</label>
            <div class="col-sm-9">
              <input type="file" name="image" class="form-control" id="Image">
              <img style="height: 70px !important; width:150px !important;  border-radius:none" src="{{asset('/storage/images/admin/services/'.$service->image)}}" alt="image"/>
              <p class="text-muted" style="font-size: 12px; margin-top: 5px; color: #c7c7c7 !important">Image size will be : (width: 512px, height: 512px)</p>
            </div>
           </div>   
            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                  <button id="AddNew" type="submit" class="btn btn-primary mr-2">Submit</button>
                    
                </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>
</div>
  <!-- content-wrapper ends -->
@stop

@push('script')

@endpush
