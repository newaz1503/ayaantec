
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  {{-- <meta charset="utf-8"> {{asset('assets/backend/{{asset('assets/backend/vendors/')}}')}} --}}
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Ayaan Tech</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('assets/backend/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/backend/vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('assets/backend/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('assets/backend/css/style.css')}}">
  <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
  
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  @stack('style')
</head>
<body>
  <div class="container-scroller">
        @include('backend.layouts.header')
    <div class="container-fluid page-body-wrapper">
          @include('backend.layouts.sidebar')
      <div class="main-panel">
          @yield('content')
         
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  
  <script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
  <script src="{{asset('assets/backend/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('assets/backend/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('assets/backend/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('assets/backend/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('assets/backend/js/off-canvas.js')}}"></script>
  <script src="{{asset('assets/backend/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('assets/backend/js/template.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('assets/backend/js/dashboard.js')}}"></script>
  <script src="{{asset('assets/backend/js/data-table.js')}}"></script>
  <script src="{{asset('assets/backend/js/jquery.dataTables.js')}}"></script>
  <script src="{{asset('assets/backend/js/dataTables.bootstrap4.js')}}"></script>
  <script src="{{asset('assets/backend/js/custom.js')}}"></script>
  <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  {!! Toastr::message() !!}

  @stack('script')
  <!-- End custom js for this page-->
  <script>
$(document).ready(function() {
  $('#summernote').summernote();
});
</script>
</body>

</html>

