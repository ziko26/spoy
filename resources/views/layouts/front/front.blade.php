<!DOCTYPE html>
<html class="loading" lang="ar" data-textdirection="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="spoy موقع مغربي للبحث عن المركات و المحلات التجارية، كما أنها تتيح لصاحب المحل عرض سلعته ومعلومات عن نشاطه التجاري ليتمكن زبنائه العثور عليه بسهولة.">
    <meta name="keywords"
          content="بيع، المنتوجات، العلامات التجارية، المحلات.">
    <meta name="author" content="Zakaria bouhanda">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/images/icon.png')}}">
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
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PXWRK9203T"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-PXWRK9203T');
    </script>
</head>
<body>
<!-- ////////////////////////////////////////////////////////////////////////////-->
@include('front.includes.navbar')
@yield('content')
@include('front.includes.footer')

<script src="{{asset('public/js/jQuery.js')}}" type="text/javascript"></script>
<script src="{{asset('public/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/js/front.js')}}" type="text/javascript"></script>
<script data-ad-client="ca-pub-4285081963680875" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</body>
</html>
