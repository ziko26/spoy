<!DOCTYPE html>
<html class="loading" lang="ar" data-textdirection="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="spoy موقع مغربي للبحث عن المركات و المحلات التجارية، كما أنها تتيح لصاحب المحل عرض سلعته ومعلومات عن نشاطه التجاري ليتمكن زبنائه العثور عليه بسهولة.">
    <meta name="keywords"
          content="بيع، المنتوجات، العلامات التجارية، المحلات.">
    <meta name="author" content="Zakaria bouhanda">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/images/icon.png')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/admin/css-rtl/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/admin/vendors/css/forms/icheck/icheck.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/admin/vendors/css/forms/icheck/custom.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/admin/css-rtl/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/admin/css-rtl/custom.css')}}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('public/assets/admin/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/admin/css-rtl/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/admin/css-rtl/pages/login-register.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/admin/css-rtl/plugins/forms/wizard.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/admin/css-rtl/plugins/pickers/daterange/daterange.css')}}">

    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/admin/css-rtl/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/dashboard.css')}}">
    <!-- END Custom CSS-->
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }
    </style>
</head>
<body class="vertical-layout vertical-menu 1-column   menu-expanded blank-page blank-page"
      data-open="click" data-menu="vertical-menu" data-col="1-column">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
        @yield('content')
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<!-- BEGIN VENDOR JS-->
<script src="{{asset('public/assets/admin/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->

<script src="{{asset('public/assets/admin/vendors/js/extensions/jquery.steps.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/assets/admin/vendors/js/pickers/dateTime/moment-with-locales.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/assets/admin/vendors/js/pickers/daterange/daterangepicker.js')}}" type="text/javascript"></script>
<script src="{{asset('public/assets/admin/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/assets/admin/js/scripts/forms/wizard-steps.js')}}" type="text/javascript"></script>
<script src="{{asset('public/assets/admin/vendors/js/forms/validation/jqBootstrapValidation.js')}}"

        type="text/javascript"></script>
<script src="{{asset('public/assets/admin/vendors/js/forms/validation/jquery.validate.min.js')}}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="{{asset('public/assets/admin/js/core/app-menu.js')}}" type="text/javascript"></script>
<script src="{{asset('public/assets/admin/js/core/app.js')}}" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('public/assets/admin/js/scripts/forms/form-login-register.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->

<script>
</script>
</body>
</html>
