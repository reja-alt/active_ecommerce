<!doctype html>
<html lang="en" class="semi-dark">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
  <!--plugins-->
  <link href="{{ asset('public/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
  <link href="{{ asset('public/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
  <link href="{{ asset('public/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('public/assets/css/bootstrap-extended.css') }}" rel="stylesheet" />
  <link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet" />
  <link href="{{ asset('public/assets/css/icons.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  

  <!-- loader-->
	<link href="{{ asset('public/assets/css/pace.min.css') }}" rel="stylesheet" />

  <!--Theme Styles-->
  <link href="{{ asset('public/assets/css/dark-theme.css') }}" rel="stylesheet" />
  <link href="{{ asset('public/assets/css/light-theme.css') }}" rel="stylesheet" />
  <link href="{{ asset('public/assets/css/semi-dark.css') }}" rel="stylesheet" />
  <link href="{{ asset('public/assets/css/header-colors.css') }}" rel="stylesheet" />

  <title>Snacked - Bootstrap 5 Admin Template</title>
</head>

<body>


  <!--start wrapper-->
  <div class="wrapper">
  @include('admin.layouts.partial.header')
  @include('admin.layouts.partial.sidebar')
   

      @yield('content')

       <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
       <!--end overlay-->

       <!--Start Back To Top Button-->
		     <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
       <!--End Back To Top Button-->

    @include('admin.layouts.partial.switcher')

  </div>
  <!--end wrapper-->


  <!-- Bootstrap bundle JS -->
  <script src="{{ asset('public/assets/js/bootstrap.bundle.min.js') }}"></script>
  <!--plugins-->
  <script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('public/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
  <script src="{{ asset('public/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
  <script src="{{ asset('public/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
  <script src="{{ asset('public/assets/js/pace.min.js') }}"></script>
  <script src="{{ asset('public/assets/plugins/chartjs/js/Chart.min.js') }}"></script>
  <script src="{{ asset('public/assets/plugins/chartjs/js/Chart.extension.js') }}"></script>
  <script src="{{ asset('public/assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
  <!--app-->
  <script src="{{ asset('public/assets/js/app.js') }}"></script>
  <script src="{{ asset('public/assets/js/index2.js') }}"></script>
  <script>
    new PerfectScrollbar(".best-product")
 </script>


</body>

</html>