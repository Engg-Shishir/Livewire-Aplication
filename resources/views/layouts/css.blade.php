
 <!-- Font Awesome -->
 <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">

 <!-- Ionicons -->
 <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

 
 <!-- Tempusdominus Bbootstrap 4 ..... Time & date picker-->
 <link rel="stylesheet" href="{{ asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">

 <!-- Theme style -->
 <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">


 {{-- For Tostar Message css Cdn Link--}}
 <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
 
 {{-- Alopine Js For progress bar --}}
 <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

 <!-- iCheck -->
 <link rel="stylesheet" href="{{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

<!-- Filepond stylesheet -->
{{-- <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet"> --}}

 
 {{-- Summernote Html Edittor --}}
 <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

 
 <!-- Bootstrap Color Pickers -->
 <link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">



 @stack('styles')