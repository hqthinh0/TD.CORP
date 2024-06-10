<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Trang Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href=" {{ asset('backend/assets/vendors/feather/feather.css')}}">
 
  <link rel="stylesheet" href=" {{ asset('backend/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href=" {{ asset('backend/assets/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href=" {{ asset('backend/assets/vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href=" {{ asset('backend/assets/vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href=" {{ asset('backend/assets/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href=" {{ asset('backend/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" type="text/css" href=" {{ asset('backend/assets/js/select.dataTables.min.css')}}">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href=" {{ asset('backend/assets/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href=" {{ asset('backend/assets/images/favicon.png')}}" />

</head>

<body class="with-welcome-text">
  <div class="container-scroller">
  
    <!-- partial:partials/_navbar.html -->
    @include('admin.body.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('admin.body.sidebar')
      <!-- partial -->
      <div class="main-panel">
        @yield('admin')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('admin.body.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('backend/assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{ asset('backend/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('backend/assets/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{ asset('backend/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('backend/assets/js/off-canvas.js')}}"></script>
  <script src="{{ asset('backend/assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{ asset('backend/assets/js/template.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('backend/assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
  <script src="{{ asset('backend/assets/js/dashboard.js')}}"></script>
  <script src="{{ asset('backend/assets/js/proBanner.js')}}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('backend/assets/js/code.js')}}"> </script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;
    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;
    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;
    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>
  <script src="{{ asset('backend/assets/libs/tinymce/tinymce.min.js') }} "></script>
          <!-- init js -->
  <script src="{{ asset('backend/assets/js/pages/form-editor.init.js') }} "></script>
  <!-- <script src="../../assets/js/Chart.roundedBarCharts.js"></script> -->
  <!-- End custom js for this page-->
</body>

</html>