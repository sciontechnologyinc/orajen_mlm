<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token() }}"/>
        <link href="{!! asset('css/landing.css') !!}" rel="stylesheet" type='text/css'>
        <link href="{!! asset('css/landing.css') !!} {{url('/css/style-800.css')}}" rel="stylesheet" type='text/css'>
        <link rel="stylesheet" href="{!! asset('vendors/iconfonts/mdi/css/materialdesignicons.min.css') !!}">
        <link rel="stylesheet" href="{!! asset('vendors/css/vendor.bundle.base.css') !!}">
        <link rel="stylesheet" href="{!! asset('vendors/css/vendor.bundle.addons.css') !!}">
        <!-- endinject -->
        <!-- plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
        <link rel="stylesheet" href="{!! asset('css/fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.min.css') !!}">
        <link rel="stylesheet" href="{!! asset('css/fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.css') !!}">
        <link rel="stylesheet" href="{!! asset('css/custom.css') !!}">
        <link rel="stylesheet" href="{!! asset('css/user.css') !!}">
        <link rel="stylesheet" href="{!! asset('css/treant.css') !!}"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Orajen Marketing Corp</title>

    </head>
    <body>
        <div class='main'>
            <div class="flex-center position-ref full-height">
                <div class="container-scroller">
                        @include('admin.partial.headerPage')
                        <div class="container-fluid page-body-wrapper">
                            @include('admin.partial.sidepanel')
                            @yield('content')
                        </div>
                </div>
            </div>
        </div>
        @yield('modal')
    </body>
    <script src="{!! asset('js/app.js') !!}" defer></script>
    @yield('scripts')
</html>
