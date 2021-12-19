
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Laravel CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <!-- here show dynamic page title, which define from another blade file -->
  <title> @yield('title') </title>

  {{-- All css resource stored there --}}
  @livewireStyles
  @include('layouts.css')