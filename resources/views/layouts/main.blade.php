<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">


 <!-- Laravel CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}" />

 <!-- here show dynamic page title, which define from another blade file -->
 <title> @yield('title') </title>

 {{-- All css resource stored there --}}
 @include('layouts.css')
  

  @livewireStyles
  @stack('styles')

  

</head>
<body class="hold-transition sidebar-mini layout-fixed">






 <!-- wrapper Start-->   
<div class="wrapper">
   
  <!-- Navbar Start-->
  @include('layouts.admin.partials.nav')
  <!-- /.navbar End-->

  <!-- Main Sidebar Container Start-->
  @include('layouts.admin.partials.aside')
  <!-- Main Sidebar Container End-->

  {{-- Dynamic Content Start--}}
  <div class="content-wrapper">
      {{ $slot }}
  </div>
  {{-- Dynamic Content End--}}

</div>
<!-- wrapper End-->






  {{-- All js resources stored there --}}
  @include('layouts.js')


{{-- Toaster alert confiuaration --}}
<script>
  toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
</script>



@livewireScripts
@stack('js')
</body>
</html>
