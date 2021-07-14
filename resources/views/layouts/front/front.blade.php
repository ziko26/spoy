<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="spoy موقع مغربي للبحث عن المركات و المحلات التجارية، كما أنها تتيح لصاحب المحل عرض سلعته ومعلومات عن نشاطه التجاري ليتمكن زبنائه العثور عليه بسهولة.">
    <meta name="keywords"
          content="بيع، المنتوجات، العلامات التجارية، المحلات.">
    <meta name="author" content="Zakaria bouhanda">
    <title>@yield('title')</title>
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">
          <link rel="stylesheet" type="text/css" href="{{asset('public/assets/admin/fonts/simple-line-icons/style.css')}}">
          <link rel="stylesheet" type="text/css" href="{{asset('public/assets/admin/fonts/feather/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/front.css')}}">
    <!-- END Custom CSS-->
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }
    </style>
</head>
<body>
<!-- ////////////////////////////////////////////////////////////////////////////-->
@include('front.includes.navbar')
@yield('content')
@include('front.includes.footer')

<script src="{{asset('public/js/jQuery.js')}}" type="text/javascript"></script>
<script src="{{asset('public/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/js/front.js')}}" type="text/javascript"></script>

<script>
</script>
</body>
</html>
