<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/adminlte.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/public/logout">Logout<i class="fas fa-sign-out-alt"></i></a>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="{{ asset('/images/logo.jpg') }}" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin Poizya</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('/images/logo.jpg') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{Session::get('name')}}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item has-treeview">
                            @if ($content === 'dashboard')
                            <a href="/public/dashboard" class="nav-link active">
                                @else
                                <a href="/public/dashboard" class="nav-link">
                                    @endif
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                        </li>
                        <li class="nav-item has-treeview">
                            @if ($content === 'category')
                            <a href="/public/category" class="nav-link active">
                                @else
                                <a href="/public/category" class="nav-link">
                                    @endif
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Category
                                    </p>
                                </a>
                        </li>
                        <li class="nav-item has-treeview">
                            @if ($content === 'product')
                            <a href="/public/product" class="nav-link active">
                                @else
                                <a href="/public/product" class="nav-link">
                                    @endif
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Products
                                    </p>
                                </a>
                        </li>
                        <li class="nav-item has-treeview">
                            @if ($content === 'order')
                            <a href="/public/order" class="nav-link active">
                                @else
                                <a href="/public/order" class="nav-link">
                                    @endif
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Orders
                                    </p>
                                </a>
                        </li>
                        <li class="nav-item has-treeview">
                            @if ($content === 'account')
                            <a href="/public/account" class="nav-link active">
                                @else
                                <a href="/public/account" class="nav-link">
                                    @endif
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Accounts
                                    </p>
                                </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        @include($content)
        <footer class="main-footer">
            <strong>Copyright &copy; 2019 <a href="http://poizya.dennyfebrygo.com">Poizya</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0.0
            </div>
        </footer>
    </div>

    <script type="text/javascript" src="{{ asset('/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/adminlte.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/demo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/Chart.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/dashboard2.js') }}"></script>

</body>

</html>