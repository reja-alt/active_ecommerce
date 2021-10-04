<!doctype html>
<html lang="en" class="semi-dark">
  @include('admin.layouts.partial.head')


<body>


  <!--start wrapper-->
  <div class="wrapper">
    @guest
        @else
        @include('admin.layouts.partial.header')
        @include('admin.layouts.partial.sidebar')
    @endguest

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


  @include('admin.layouts.partial.script')
 
</script>
</body>

</html>