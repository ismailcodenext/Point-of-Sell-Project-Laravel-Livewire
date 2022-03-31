<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
{{--        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
{{--            <div class="container">--}}
{{--                <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                    {{ config('app.name', 'Laravel') }}--}}
{{--                </a>--}}
{{--                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--                    <span class="navbar-toggler-icon"></span>--}}
{{--                </button>--}}

{{--                <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                    <!-- Left Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav me-auto">--}}

{{--                    </ul>--}}

{{--                    <!-- Right Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav ms-auto">--}}
{{--                        <!-- Authentication Links -->--}}
{{--                        @guest--}}
{{--                            @if (Route::has('login'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}

{{--                            @if (Route::has('register'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}
{{--                        @else--}}
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                    {{ Auth::user()->name }}--}}
{{--                                </a>--}}

{{--                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
{{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                        {{ __('Logout') }}--}}
{{--                                    </a>--}}

{{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        @endguest--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

{{--    <!DOCTYPE html>--}}
{{--<!----}}
{{--This is a starter template page. Use this page to start your new project from--}}
{{--scratch. This page gets rid of all links and provides the needed markup only.--}}
{{---->--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <title>Pos System Dashboard</title>--}}

{{--    <!-- Google Font: Source Sans Pro -->--}}
{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">--}}
{{--    <!-- Font Awesome Icons -->--}}
{{--    <link rel="stylesheet" href="{{'backend/plugins/fontawesome-free/css/all.min.css'}}">--}}
{{--    <!-- Theme style -->--}}
{{--    <link rel="stylesheet" href="{{'backend/dist/css/adminlte.min.css'}}">--}}
{{--</head>--}}
{{--<body class="hold-transition sidebar-mini">--}}
{{--<div class="wrapper">--}}

{{--    <!-- Navbar -->--}}
{{--    @include('layouts.partials.navbar')--}}
{{--    <!-- /.navbar -->--}}

{{--    <!-- Main Sidebar Container -->--}}
{{--    @include('layouts.partials.aside')--}}

{{--    <!-- Content Wrapper. Contains page content -->--}}
{{--    <div class="content-wrapper">--}}
{{--        <!-- Content Header (Page header) -->--}}
{{--        <div class="content-header">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row mb-2">--}}
{{--                    <div class="col-sm-6">--}}
{{--                        <h1 class="m-0">Starter Page</h1>--}}
{{--                    </div><!-- /.col -->--}}
{{--                    <div class="col-sm-6">--}}
{{--                        <ol class="breadcrumb float-sm-right">--}}
{{--                            <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
{{--                            <li class="breadcrumb-item active">Starter Page</li>--}}
{{--                        </ol>--}}
{{--                    </div><!-- /.col -->--}}
{{--                </div><!-- /.row -->--}}
{{--            </div><!-- /.container-fluid -->--}}
{{--        </div>--}}
{{--        <!-- /.content-header -->--}}

{{--        <!-- Main content -->--}}
{{--        <div class="content">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body">--}}
{{--                                <h5 class="card-title">Card title</h5>--}}

{{--                                <p class="card-text">--}}
{{--                                    Some quick example text to build on the card title and make up the bulk of the card's--}}
{{--                                    content.--}}
{{--                                </p>--}}

{{--                                <a href="#" class="card-link">Card link</a>--}}
{{--                                <a href="#" class="card-link">Another link</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="card card-primary card-outline">--}}
{{--                            <div class="card-body">--}}
{{--                                <h5 class="card-title">Card title</h5>--}}

{{--                                <p class="card-text">--}}
{{--                                    Some quick example text to build on the card title and make up the bulk of the card's--}}
{{--                                    content.--}}
{{--                                </p>--}}
{{--                                <a href="#" class="card-link">Card link</a>--}}
{{--                                <a href="#" class="card-link">Another link</a>--}}
{{--                            </div>--}}
{{--                        </div><!-- /.card -->--}}
{{--                    </div>--}}
{{--                    <!-- /.col-md-6 -->--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-header">--}}
{{--                                <h5 class="m-0">Featured</h5>--}}
{{--                            </div>--}}
{{--                            <div class="card-body">--}}
{{--                                <h6 class="card-title">Special title treatment</h6>--}}

{{--                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
{{--                                <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="card card-primary card-outline">--}}
{{--                            <div class="card-header">--}}
{{--                                <h5 class="m-0">Featured</h5>--}}
{{--                            </div>--}}
{{--                            <div class="card-body">--}}
{{--                                <h6 class="card-title">Special title treatment</h6>--}}

{{--                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
{{--                                <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- /.col-md-6 -->--}}
{{--                </div>--}}
{{--                <!-- /.row -->--}}
{{--            </div><!-- /.container-fluid -->--}}
{{--        </div>--}}
{{--        <!-- /.content -->--}}
{{--    </div>--}}
{{--    <!-- /.content-wrapper -->--}}

{{--    <!-- Control Sidebar -->--}}
{{--    <aside class="control-sidebar control-sidebar-dark">--}}
{{--        <!-- Control sidebar content goes here -->--}}
{{--        <div class="p-3">--}}
{{--            <h5>Title</h5>--}}
{{--            <p>Sidebar content</p>--}}
{{--        </div>--}}
{{--    </aside>--}}
{{--    <!-- /.control-sidebar -->--}}

{{--    <!-- Main Footer -->--}}
{{--    <footer class="main-footer">--}}
{{--        <!-- To the right -->--}}
{{--        <div class="float-right d-none d-sm-inline">--}}
{{--            Anything you want--}}
{{--        </div>--}}
{{--        <!-- Default to the left -->--}}
{{--        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.--}}
{{--    </footer>--}}
{{--</div>--}}
{{--<!-- ./wrapper -->--}}

{{--<!-- REQUIRED SCRIPTS -->--}}

{{--<!-- jQuery -->--}}
{{--<script src="{{'backend/plugins/jquery/jquery.min.js'}}"></script>--}}
{{--<!-- Bootstrap 4 -->--}}
{{--<script src="{{'backend/plugins/bootstrap/js/bootstrap.bundle.min.js'}}"></script>--}}
{{--<!-- AdminLTE App -->--}}
{{--<script src="{{'backend/dist/js/adminlte.min.js'}}"></script>--}}
{{--</body>--}}
{{--</html>--}}

