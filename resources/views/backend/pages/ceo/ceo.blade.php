@extends('backend.layouts.app')

@push('style')
@endpush
@section('content')



    <div class="row">
        <div class="col-lg-4">

            <div class="card mt-5">
                <div class="card-body">
                    <h4 class="card-title text-primary">Add New CEO Image and Message</h4>
                    <div class="mb-3">
                        @foreach ($errors->all() as $error)
                            <li style="color: red">{{ $error }}</li>
                        @endforeach
                    </div>
                    <form class="forms-sample" action="{{ route('admin.ceostore') }}" method="POST"
                        enctype="multipart/form-data">@csrf
                        <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Alternative</label>
                            <div class="col-sm-9">
                                <input type="text" name="alt" class="form-control" id="exampleInputMobile"
                                    placeholder="Image alternative">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Image" class="col-sm-3 col-form-label">Ceo Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image"
                                    onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">

                                <p class="text-muted" style="font-size: 12px; margin-top: 5px; color: #c7c7c7 !important">
                                    Image size will be : (width: 512px, height: 512px)</p>
                                <div>
                                    <img id="blah" alt="Upload your image to see preview" width="100"
                                        height="100" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="message" class="col-sm-3 col-form-label">Ceo Message</label>

                            <textarea style="border:1px solid#af1226" class="form-control" name="ceosays" id="" cols="10"
                                rows="10"></textarea>

                        </div>

                        <div class="form-group row">
                            <label for="message" class="col-sm-3 col-form-label">Paragraph Message</label>

                                <textarea style="border:1px solid#af1226" class="form-control" name="paraceo"
                                    id="" cols="10" rows="10"></textarea>

                        </div>

                        <button id="AddNew" type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{ url('admin/ceo') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>

        </div>

        <div class="col-lg-7">
            <div class="ceo_list">
                <div class="card">
                    <div class="card-header text-center">
                        CEO IMAGES AND DETAILS
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Sl</th>
                                <th>Image Name</th>
                                <th>Image</th>
                                <th>CEO's Message</th>
                                <th>Paragraph Message</th>
                                <th>Action</th>


                            </tr>

                            @foreach ($ceos as $key => $ceo)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $ceo->alt }}</td>
                                    <td><img style="height:auto !important; width:150px !important;  border-radius:none"
                                            src="{{ asset('/storage/' . $ceo['image']) }}" alt="image" /></td>
                                    <td>{{ $ceo->ceosays }}</td>
                                    <td>{{ $ceo->paraceo }}</td>
                                    <td><a href="{{ route('admin.ceodelete', $ceo->id) }}" class="btn btn-danger"
                                            href="">Delete</a></td>
                                </tr>
                            @endforeach


                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>




@stop

@push('script')
@endpush
