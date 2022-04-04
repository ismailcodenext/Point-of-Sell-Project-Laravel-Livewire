
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pos System Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{'backend/plugins/fontawesome-free/css/all.min.css'}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{'backend/dist/css/adminlte.min.css'}}">
    @livewireStyles
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    @include('layouts.partials.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('layouts.partials.aside')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper px-3 py-2">
       @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{'backend/plugins/jquery/jquery.min.js'}}"></script>
<!-- Bootstrap 4 -->
<script src="{{'backend/plugins/bootstrap/js/bootstrap.bundle.min.js'}}"></script>
<!-- AdminLTE App -->
<script src="{{'backend/dist/js/adminlte.min.js'}}"></script>
<script>
    window.addEventListener('show-userForm', event => {
        $('#formUser').modal('show');
    })
</script>

@livewireScripts
</body>
</html>
