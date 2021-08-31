<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Sistema de gestão de Feiras" />
    <meta name="author" content="@oandalves" />
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />

    <link rel="stylesheet" href="{{ asset('website/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/style-costumizado.css') }}">
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <!--
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li>
                        -->
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="{{ url('/dashboard') }}">Feiras</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="{{ url('/dashboard') }}">Feirantes</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="{{ url('/dashboard') }}">Categorias</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="{{ url('/dashboard') }}">Produtos</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="{{ url('/dashboard') }}">Relatórios</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="{{ url('/dashboard') }}">Usuários</a></li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                                href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();">Sair</a></li>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0">Produtos</p>
        </div>
    </header>
    <section class="page-section">
        <div class="container">
            <div class="row justify-content-center">
                <table class="table table-hover caption-top">
                    <caption>Listagem de produtos</caption>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Otto</td>
                            <td>
                                <a href="#" title="Ver detalhes" class="acoes"><i class="far fa-eye"></i></a>
                                <a href="#" title="Editar" class="acoes"><i class="far fa-edit"></i></a>
                                <a href="#" title="Excluir" class="acoes"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Thornton</td>
                            <td>
                                <a href="#" title="Ver detalhes" class="acoes"><i class="far fa-eye"></i></a>
                                <a href="#" title="Editar" class="acoes"><i class="far fa-edit"></i></a>
                                <a href="#" title="Excluir" class="acoes"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Thornton</td>
                            <td>
                                <a href="#" title="Ver detalhes" class="acoes"><i class="far fa-eye"></i></a>
                                <a href="#" title="Editar" class="acoes"><i class="far fa-edit"></i></a>
                                <a href="#" title="Excluir" class="acoes"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; 2021</small></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('website/js/scripts.js') }}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
