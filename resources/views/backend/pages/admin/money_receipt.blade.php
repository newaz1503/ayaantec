@extends('backend.layouts.app')
@push('style')
    <!-- include summernote css/js -->

@endpush
@section('content')
<div class="content-wrapper">
  <div class="col-md-6 grid-margin stretch-card  m-auto ">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-primary">Add Receipt</h4>
        <div class="mb-3">
          @foreach ($errors->all() as $error)
              <li style="color: red">{{ $error }}</li>
          @endforeach
        </div>
        <form class="forms-sample" action="{{url('/admin/money_receipt')}}" method="POST" enctype="multipart/form-data">@csrf
          <div class="form-group row">
            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Received Form</label>
            <div class="col-sm-9">
             <input type="text" class="form-control" name="to" placeholder="Sender Name">
            </div>
          </div>
          
           <div class="form-group row">
            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Received Amount</label>
            <div class="col-sm-9">
             <input type="number" step="0.01" class="form-control" name="amount" placeholder="Received Amount">
            </div>
          </div>
          
           <div class="form-group row">
            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Money Received For</label>
            <div class="col-sm-9">
             <input type="text" class="form-control" name="work" placeholder="Money Received For">
            </div>
          </div>
          
           <div class="form-group row">
            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Billing Amount</label>
            <div class="col-sm-9">
             <input type="number" step="0.01" class="form-control" name="current_balance" placeholder="Enter Current Balance">
            </div>
          </div>
          
          <div class="form-group row">
            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Paid Amount</label>
            <div class="col-sm-9">
             <input type="number" step="0.01" class="form-control" name="payable_amount" placeholder="Enter Payable Amount">
            </div>
          </div>
          
           <div class="form-group row">
            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Enter Due</label>
            <div class="col-sm-9">
             <input type="number" step="0.01" class="form-control" name="due" placeholder="Enter Due">
            </div>
          </div>
          
        <div class="form-group row">
            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Select Payment Method</label>
            <div class="col-sm-9">
             <select name="method" class="form-control"><option value="cheque">Cheque</option><option value="cash">Cash</option><option value="money_order">Money Order</option><option value="mfs">Mobile Banking</option><option value="bank_transfer">Bank Transfer</option></select>
            </div>
          </div>
          
           <div class="form-group row">
            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Received By</label>
            <div class="col-sm-9">
             <input type="text" class="form-control" name="receipt_by" placeholder="Enter Receipt By" value="{{Auth::guard('admin')->user()->name}}">
            </div>
          </div>
          
          
           <div class="form-group row">
            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Date</label>
            <div class="col-sm-9">
             <input type="date" class="form-control" name="date" placeholder="Enter Date">
            </div>
          </div>
          
          <div class="form-group row">
            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Receipt Number</label>
            <div class="col-sm-9">
             <input type="text" class="form-control" name="rnumber" placeholder="Receipt Number">
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
