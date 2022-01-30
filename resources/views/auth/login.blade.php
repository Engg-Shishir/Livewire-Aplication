<!-- extend main.blade.php file here -->
@extends('layouts.appWelcome')



{{-- Dynamic page title --}}
@section('title') Admin | Login @endsection



{{-- Dynamic page body --}}
@section('content')

    @include('welcome.tabContent.login.login')
        
@endsection



@push('styles')
<style>
        .content{
            width: 80%;
            margin: 0px auto !important;
            margin-top: 50px !important;
            background-color: white;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
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

</style>
@endpush






   
@push('scripts')
@endpush







