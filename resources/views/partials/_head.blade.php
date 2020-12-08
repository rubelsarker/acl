<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>SMS @yield('title')</title>
<link rel="icon" type="image/x-icon" href="{{url('')}}/assets/img/logo.png"/>
<link rel="icon" href="{{url('')}}/assets/img/logo.png" type="image/png" sizes="16x16">
<link rel="stylesheet" href="{{url('')}}/assets/vendor/pace/pace.css">
<script src="{{url('')}}/assets/vendor/pace/pace.min.js"></script>
<!--vendors-->
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/vendor/jquery-scrollbar/jquery.scrollbar.css">
<link rel="stylesheet" href="{{url('')}}/assets/vendor/select2/css/select2.min.css">
<link rel="stylesheet" href="{{url('')}}/assets/vendor/jquery-ui/jquery-ui.min.css">
<link rel="stylesheet" href="{{url('')}}/assets/vendor/daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="{{url('')}}/assets/vendor/timepicker/bootstrap-timepicker.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,600" rel="stylesheet">
<!--Material Icons-->
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/fonts/materialdesignicons/materialdesignicons.min.css">
<!--Material Icons-->
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/fonts/feather/feather-icons.css">
<!--Bootstrap + atmos Admin CSS-->
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/css/atmos.min.css">
<!-- Additional library for page -->
@yield('styles')
<!-- Styles -->
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
@livewireStyles
<!-- Scripts -->
<script src="{{ mix('js/app.js') }}" defer></script>