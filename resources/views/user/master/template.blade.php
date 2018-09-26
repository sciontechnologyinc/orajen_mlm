<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{url('/css/landing.css')}}" rel="stylesheet" type='text/css'>
        <link href="{{url('/css/style-800.css')}}" rel="stylesheet" type='text/css'>
        <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
        <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">

           <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- endinject -->
        <!-- plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/user.css">
        <link rel="stylesheet" href="{!! asset('css/treant.css') !!}"/>
        <title>Orajen Marketing Corp</title>

    </head>
    <body>
        <div class='main'>
            <div class="flex-center position-ref full-height">
                <div class="container-scroller">
                        @include('user.partial.headerPage')
                        <div class="container-fluid page-body-wrapper">
                        @include('user.partial.sidepanel')
                        @yield('content')
                        </div>
                </div>
            </div>
        </div>
        @yield('modal')
    </body>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
    @yield('scripts')
</html>
