<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Dashboard</title>

  <!-- Favicon -->
  @if(isset($setting))    
    <link href="{{ asset('/uploads/favicon/'.$setting->favicon) }}" rel="icon" type="image/x-icon">   
  @endif

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css')}}">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css')}}">
  <!-- Bootstrap-Toggle CSS -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/bootstrap-toggle/css/bootstrap-toggle.css') }}">
  <!-- Datatables CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/data-tables/datatables.min.css') }}"/>
  <!-- Loader CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/css-loader/css-loader.css') }}"/>
  <!-- jQuery -->
  <script src="{{ asset('admin/plugins/jquery/jquery.min.js')}}"></script>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Header -->
    @include('.inc/header')

    <!-- Sidebar -->
    @include('.inc/sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Main content -->
      <section class="content">
        @yield('content')
      </section>
    </div>
    <!-- /.content-wrapper -->

    <!-- Footer -->
    @include('.inc/footer')

    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- Bootstrap 4 -->
  <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>  
  <!-- iCheck JS -->
  <script src="{{ asset('admin/plugins/iCheck/icheck.min.js') }}"></script>
  <!-- Custom JS -->
  <script src="{{ asset('js/script.js')}}"></script>
  <!-- Bootstrap-Toggle CSS -->
  <script src="{{ asset('admin/plugins/bootstrap-toggle/js/bootstrap-toggle.min.js') }}"></script>
  <!-- Datatables Js-->
  <script src="{{ asset('admin/plugins/data-tables/datatables.min.js') }}"></script>
  <!-- jQuery UI -->
  <script src="{{ asset('admin/plugins/data-tables/jquery-ui.min.js') }}"></script>
</body>

</html>