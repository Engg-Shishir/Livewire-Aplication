<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Laravel CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <!-- here show dynamic page title, which define from another blade file -->
  <title> @yield('title') </title>



  <!-- Fontawesome Local css link -->
  <link rel="stylesheet" href="{{asset('Asset/plug/all.min.css')}}">

  
  <!--  Bbootstrap 4 Local css link -->
  <link rel="stylesheet" href="{{ asset('Asset/plug/bootstrap.min.css') }}"> 



  <!-- External CSS code from dynamic blade file -->
  @stack('styles')

</head>
<body>
  


  <!-- Here show dynamic blade.php file content -->
  @yield('content')


  
  <!-- Link local js file -->
  <script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>


  <!-- External javascript code from dynamic blade file -->
  @stack('scripts')

</body>
</html>