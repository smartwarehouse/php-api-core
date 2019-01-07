<!DOCTYPE html>
<html lang="en/id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="images/favicon.png">
    <title>Dashboard - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900%7CMaterial+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('asset/css/materialize.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/loaders.html')}}">
    <link rel="stylesheet" href="{{asset('asset/css/lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/line-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/line-awesome-font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/animsition.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/switcher.css')}}">
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/material-color/style-blue.css')}}" title="material-style-blue" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/material-color/style-red.css')}}" title="material-style-red" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/material-color/style-purple.css')}}" title="material-style-purple" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/material-color/style-green.css')}}" title="material-style-green" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/material-color/style-orange.css')}}" title="material-style-orange" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/material-color/style-dark-blue.css')}}" title="material-style-dark-blue" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/material-color/style-dark-red.css')}}" title="material-style-dark-red" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/material-color/style-dark-purple.html')}}" title="material-style-dark-purple" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/material-color/style-dark-green.css')}}" title="material-style-dark-green" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/material-color/style-dark-orange.css')}}" title="material-style-dark-orange" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/ios-color/style-blue.css')}}" title="ios-color-blue" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/ios-color/style-red.css')}}" title="ios-color-red" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/ios-color/style-purple.css')}}" title="ios-color-purple" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/ios-color/style-green.css')}}" title="ios-color-green" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/ios-color/style-orange.css')}}" title="ios-color-orange" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/ios-color/style-dark-blue.css')}}" title="ios-color-dark-blue" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/ios-color/style-dark-red.css')}}" title="ios-color-dark-red" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/ios-color/style-dark-purple.css')}}" title="ios-color-dark-purple" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/ios-color/style-dark-green.css')}}" title="ios-color-dark-green" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/ios-color/style-dark-orange.css')}}" title="ios-color-dark-orange" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/flat-color/style-blue.css')}}" title="flat-color-blue" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/flat-color/style-red.css')}}" title="flat-color-red" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/flat-color/style-purple.css')}}" title="flat-color-purple" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/flat-color/style-green.css')}}" title="flat-color-green" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/flat-color/style-orange.css')}}" title="flat-color-orange" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/flat-color/style-dark-blue.css')}}" title="flat-color-dark-blue" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/flat-color/style-dark-red.css')}}" title="flat-color-dark-red" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/flat-color/style-dark-purple.css')}}" title="flat-color-dark-purple" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/flat-color/style-dark-green.css')}}" title="flat-color-dark-green" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/flat-color/style-dark-orange.css')}}" title="flat-color-dark-orange" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/gradient-color/style-blue.css')}}" title="blue-gradient" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/gradient-color/style-red.css')}}" title="red-gradient" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/gradient-color/style-purple.css')}}" title="purple-gradient" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/gradient-color/style-green.css')}}" title="green-gradient" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/gradient-color/style-orange.css')}}" title="orange-gradient" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/gradient-color/style-dark-blue.css')}}" title="dark-blue-gradient" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/gradient-color/style-dark-red.css')}}" title="dark-red-gradient" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/gradient-color/style-dark-purple.css')}}" title="dark-purple-gradient" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/gradient-color/style-dark-green.css')}}" title="dark-green-gradient" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/gradient-color/style-dark-orange.css')}}" title="dark-orange-gradient" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/multi-color/style-blue.css')}}" title="multi-color-blue" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/multi-color/style-red.css')}}" title="multi-color-red" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/multi-color/style-purple.css')}}" title="multi-color-purple" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/multi-color/style-green.css')}}" title="multi-color-green" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/multi-color/style-orange.css')}}" title="multi-color-orange" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/multi-color/style-dark-blue.css')}}" title="multi-color-dark-blue" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/multi-color/style-dark-red.css')}}" title="multi-color-dark-red" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/multi-color/style-dark-purple.css')}}" title="multi-color-dark-purple" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/multi-color/style-dark-green.css')}}" title="multi-color-dark-green" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('asset/colors/multi-color/style-dark-orange.css')}}" title="multi-color-dark-orange" />
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/style.css')}}" title="default" />
</head>

<body class="animsition">

<div class="wrapper-load">
    <div class="preloader-wrapper medium-size active">
        <div class="spinner-layer spinner-custom">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div>
            <div class="gap-patch">
                <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
    </div>
</div>


<div class="navbar navbar-pages">
    <div class="container">
        <div class="content">
            <h4><a href="{{route('dashboard')}}"><i class="fa fa-arrow-left waves-effect waves-light-grey"></i></a> @yield('title')</h4>
        </div>
    </div>
</div>

@if (\Session::has('notification'))
    <div class="quotes segments-page" style="margin-bottom: -100px">
        <div class="container">
            <div class="content one-q">
                <span>{{ \Session::get('notification') }}</span>
            </div>
        </div>
    </div>
@endif

@yield('content')

@include('dashboard.layout.footer')