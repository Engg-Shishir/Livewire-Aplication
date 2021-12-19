<!DOCTYPE html>
<html lang="en">
<head>

  {{-- Essential header are storder there --}}
  @include('layouts.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  


  <!-- Here show dynamic blade.php file content -->
  @yield('content')


  {{-- All js resources stored there --}}
  @include('layouts.js')

</body>
</html>