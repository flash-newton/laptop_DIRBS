<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DIRBS</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('laptop.ico') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    
    <!-- plugins:css -->
  <link rel="stylesheet" href=" {{asset('dashboard/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('dashboard/vendors/base/vendor.bundle.base.css')}}">
 
  <link rel="stylesheet" href="{{asset('dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">

  <link rel="stylesheet" href="{{asset('dashboard/css/style.css')}}">

  <link rel="shortcut icon" href="{{asset('dashboard/css/style.css')}}" />
  <link rel="stylesheet" href="/css/dashboard/panel.css">

   
    <!-- bootsrap link - CSS -->
     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link href="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.min.css
    " rel="stylesheet">

    @yield('customcss')

    
    @livewireStyles
</head>
<body>
    <div class="container-scroller">
        @include('components.header')
        <div class="container-fluid page-body-wrapper">
        @include('components.sidepanel') 
            
        <div class="main-panel" >
            <div class="content-wrapper" >
                @yield('content')
            </div>
        </div>

        </div>
    </div>




<!--bootstrap link --->

<!-- endinject -->
<!-- Plugin js for this page-->
<script src="{{asset('dashboard/vendors/base/vendor.bundle.base.js')}}"></script>
<script src="{{asset('dashboard/vendors/datatables.net/jquery.dataTables.js')}}"></script>
<script src="{{asset('dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{asset('dashboard/js/off-canvas.js')}}"></script>
<script src="{{asset('dashboard/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('dashboard/js/template.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('dashboard/js/dashboard.js')}}"></script>
<script src="{{asset('dashboard/js/data-table.js')}}"></script>
<script src="{{asset('dashboard/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('dashboard/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('dashboard/js/jquery.cookie.js')}}" type="text/javascript"></script>





<!--<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
    crossorigin="anonymous"></script>
      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> -->



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js
"></script>

@yield('customscript')

@livewireScripts
</body>
</html>
