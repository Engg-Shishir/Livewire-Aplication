<!-- extend main.blade.php file here -->
@extends('layouts.appWelcome')



{{-- Dynamic page title --}}
@section('title') Shishir|Livewire @endsection



{{-- Dynamic page body --}}
@section('content')
    {{-- Fixed Nav Bar --}}
    @include('welcome.fixed.fixedNavBar')

    {{-- Tab Content --}}
    @include('welcome.tabContent.livewire.livewire')
    @include('welcome.tabContent.login.login')
        
@endsection



@push('styles')
    <style>
    .content{
        width: 80%;
        margin: 0px auto !important;
        margin-top: 160px !important;
        background-color: white;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        padding: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
        
    .codeBox{
        margin-top: -13px;
        text-align: left;
        background-color: white;
        color:black;
        box-shadow: rgba(0, 0, 0, 0.4) 0px 3px 8px;
    }
    .tabcontent {
        display: none;
    }




















        .fixed{
            position: fixed;
            z-index: 2 !important;
            top: 0;
            left: 0;
            right: 0;
            width: 80%;
            margin: 0px auto !important;
            padding: 5px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: white;
            /* border: 2px solid red; */
        }
        .fixed .heading{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-around;
            line-height: 2px;
            margin-bottom: 10px;
        }
        .fixed .heading .icon a i{
            font-size: 30px;
            cursor: pointer;
            color: rgba(29, 19, 19, 0.616);
        }
        .fixed .tab {
            overflow: hidden;
            /* border: 1px solid #ccc; */
            background-color: #f1f1f1;
            margin-bottom: 0px !important;
            z-index: 2 !important;
        }
        .fixed .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 8px 10px;
            transition: 0.3s;
        font-size: 17px;
        }
        .fixed .tab button:hover {
            background-color: #ddd;
        }
        .fixed .tab button.active {
            background-color: #ccc;
        }
    </style>
@endpush






   
@push('scripts')
<script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
      
    }
    </script>

    <script>
        $( 'pre' ).text( $( 'pre' ).html() );
    </script>
@endpush







