<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar
    navbar-expand
    navbar-white navbar-white">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#">
                        <i class="fas fa-bars"></i>
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline" action="#" method="get">
                            <input type="hidden" name="_token" value="iCc2Daa6qhxcMT7lPJ8Oqfiov8tGT7FG64YqkOQR">
                            <div class="input-group">
                                <input class="form-control form-control-navbar" type="search" name="adminlteSearch"
                                    placeholder="search" aria-label="search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <span>
                            Gestor de Feira
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <li class="user-footer">
                            <a class="btn btn-default btn-flat float-right  btn-block " href="#"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-fw fa-power-off"></i>
                                Sair
                            </a>
                            <form id="logout-form" action="http://127.0.0.1:8000/logout" method="POST"
                                style="display: none;">
                                <input type="hidden" name="_token" value="iCc2Daa6qhxcMT7lPJ8Oqfiov8tGT7FG64YqkOQR">
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-white-info  elevation-4">
            <a href="http://127.0.0.1:8000/painel" class="brand-link bg-white">
                <img src="http://127.0.0.1:8000/assets/img/organic.png" alt="Organicum" class="brand-image"
                    style="opacity:.8">
                <span class="brand-text font-weight-light ">
                    <b>Organicum</b>
                </span>
            </a>
            <div class="sidebar">
                <nav class="pt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu">
                        <li class="nav-item has-treeview ">
                            <a class="nav-link  " href="">
                                <i class="fas fa-fw fa-store "></i>
                                <p>
                                    Feira
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a class="nav-link  " href="http://127.0.0.1:8000/painel/feiras">
                                        <i class="far fa-fw fa-circle "></i>
                                        <p>
                                            Editar
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview ">
                            <a class="nav-link  " href="">
                                <i class="far fa-fw fa-user-circle "></i>
                                <p>
                                    Feirantes
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a class="nav-link  " href="http://127.0.0.1:8000/painel/feirantes">
                                        <i class="far fa-fw fa-circle "></i>
                                        <p>Ver todos</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link  " href="http://127.0.0.1:8000/painel/feirantes/novo">
                                        <i class="far fa-fw fa-circle "></i>
                                        <p>Cadastrar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview ">
                            <a class="nav-link  " href="">
                                <i class="fas fa-fw fa-columns "></i>
                                <p>Categorias
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a class="nav-link  " href="http://127.0.0.1:8000/painel/categorias">
                                        <i class="far fa-fw fa-circle "></i>
                                        <p>
                                            Ver todas
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link  " href="http://127.0.0.1:8000/painel/categorias/novo">
                                        <i class="far fa-fw fa-circle "></i>
                                        <p>Cadastrar
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview ">
                            <a class="nav-link  " href="">
                                <i class="fas fa-fw fa-carrot "></i>
                                <p>
                                    Produtos
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>


                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a class="nav-link  " href="http://127.0.0.1:8000/painel/produtos">
                                        <i class="far fa-fw fa-circle "></i>
                                        <p>Ver todas </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link  " href="http://127.0.0.1:8000/painel/produtos/novo">
                                        <i class="far fa-fw fa-circle "></i>
                                        <p>Cadastrar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        
                        <li class="nav-header ">
                            Configurações de conta
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="http://127.0.0.1:8000/painel/perfil">
                                <i class="fas fa-fw fa-user "></i>
                                <p>Perfil</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

        </aside>


        <div class="content-wrapper ">
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="http://127.0.0.1:8000/vendor/jquery/jquery.min.js"></script>
    <script src="http://127.0.0.1:8000/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="http://127.0.0.1:8000/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="http://127.0.0.1:8000/vendor/adminlte/dist/js/adminlte.min.js"></script>
</body>

</html>
