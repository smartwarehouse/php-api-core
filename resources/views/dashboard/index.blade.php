<!DOCTYPE html>
<html lang="en/id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.png">
    <title>Dashboard</title>
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
<div class="navbar navbar-home">
    <div class="container">
        <div class="row">
            <div class="col s3">
                <div class="content-left"><a href="#slide-out" data-target="slide-out" class="sidenav-trigger"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="col s6">
                <div class="content-center"><a href="index-2.html"><h1>DASHBOARD</h1></a>
                </div>
            </div>
            <div class="col s3">
                <div class="content-right"><a href="#slide-out-right" data-target="slide-out-right" class="sidenav-trigger"><i class="fa fa-cog"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('dashboard.layout.sidebar')

<div class="features-home segments">
</div>

<div class="filter-home segments">
    <div class="container">
        <div class="row">
            <div class="col s4">
                <a href="{{route('jenisgudang')}}">
                    <div class="content waves-effect waves-light b-shadow"><i class="fa fa-building"></i>
                        <h6>Jenis Gudang</h6>
                    </div>
                </a>
            </div>
            <div class="col s4">
                <a href="{{route('gudang')}}">
                    <div class="content waves-effect waves-light b-shadow"><i class="fa fa-archive"></i>
                        <h6>Gudang</h6>
                    </div>
                </a>
            </div>
            <div class="col s4">
                <a href="{{route('satuan')}}">
                    <div class="content waves-effect waves-light b-shadow"><i class="fa fa-balance-scale"></i>
                        <h6>Satuan</h6>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col s4">
                <a href="{{ route('pengguna') }}">
                    <div class="content waves-effect waves-light b-shadow"><i class="fa fa-users"></i>
                        <h6>Pengguna</h6>
                    </div>
                </a>
            </div>
            <div class="col s4">
                <a href="{{ route('vendor') }}">
                    <div class="content waves-effect waves-light b-shadow"><i class="fa fa-bank"></i>
                        <h6>Vendor</h6>
                    </div>
                </a>
            </div>
            <div class="col s4">
                <a href="{{ route('statuskirim') }}">
                    <div class="content waves-effect waves-light b-shadow"><i class="fa fa-shopping-cart"></i>
                        <h6>Status Kirim</h6>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col s4">
                <a href="#">
                    <div class="content waves-effect waves-light b-shadow"><i class="fa fa-shopping-cart"></i>
                        <h6>Permintaan</h6>
                    </div>
                </a>
            </div>
            <div class="col s4">
                <a href="#">
                    <div class="content waves-effect waves-light b-shadow"><i class="fa fa-envelope"></i>
                        <h6>Surat Keluar</h6>
                    </div>
                </a>
            </div>
            <div class="col s4">
                <a href="#">
                    <div class="content waves-effect waves-light b-shadow"><i class="fa fa-plus"></i>
                        <h6>Request Lebih</h6>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="features-home segments">
</div>

@include('dashboard.layout.footer')