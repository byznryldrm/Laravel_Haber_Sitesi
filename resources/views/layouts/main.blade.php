<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="author" content="Beyz Mgzn">
    <meta name="keyword" content="@yield('keywords')">
    <!-- Shareable -->
    <meta property="og:title" content="Beyz Mgzn" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://github.com/nauvalazhar/Magz" />
    <meta property="og:image" content="https://raw.githubusercontent.com/nauvalazhar/Magz/master/images/preview.png"/>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets')}}/scripts/bootstrap/bootstrap.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="{{asset('assets')}}/scripts/ionicons/css/ionicons.min.css">
    <!-- Toast -->
    <link rel="stylesheet" href="{{asset('assets')}}/scripts/toast/jquery.toast.min.css">
    <!-- OwlCarousel -->
    <link rel="stylesheet" href="{{asset('assets')}}/scripts/owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/scripts/owlcarousel/dist/assets/owl.theme.default.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('assets')}}/scripts/magnific-popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('assets')}}/scripts/sweetalert/dist/sweetalert.css">
    <!-- Custom style -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/skins/all.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/demo.css">
    @yield('css')
    @yield('headerjs')

</head>

<body>
@include('home._header')

@yield('content')

@include('home._footer')
@yield('footerjs')
</body>
</html>
