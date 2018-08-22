<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Orajen Marketing Inc. - Dashboard</title>

  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="css/style.css">
 
  <link rel="stylesheet" href="{{ url('/css/fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.min.css') }}">
  <link rel="stylesheet" href="{{ url('/css/fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.css') }}">
  <link rel="stylesheet" href="{{ url('/css/custom.css') }}">

  <link rel="shortcut icon" href="/img/logo.png" />
</head>

<body>
  <div class="container-scroller">
        @yield('header')
        @yield('sidepanel')
        @yield('content')
  </div>

  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/dashboard.js"></script>
  <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>