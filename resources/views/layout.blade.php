<!doctype html>
<html class="no-js" lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tarefas</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{url('/')}}/favicon.ico" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{url('/')}}/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/')}}/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{url('/')}}/node_modules/ionicons/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="{{url('/')}}/node_modules/icon-kit/dist/css/iconkit.min.css">
    <link rel="stylesheet" href="{{url('/')}}/node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{url('/')}}/dist/css/theme.min.css">
    <script src="{{url('/')}}/src/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="wrapper">
        <header class="header-top" header-theme="light">
            <div class="container-fluid">
                <div class="d-flex justify-content-between">
                    <div class="top-menu d-flex align-items-center">
                        <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                        <button type="button" id="navbar-fullscreen" class="nav-link"><i
                                class="ik ik-maximize"></i></button>
                    </div>
                </div>
            </div>
        </header>
        <div class="page-wrap">
            <div class="app-sidebar colored">
                <div class="sidebar-header">
                    <a class="header-brand" href="index.html">
                        <div class="logo-img">
                            <i class="ik ik-clock"></i>
                        </div>
                        <span class="text">Cronômetro <br>de processos</span>
                    </a>
                    <button type="button" class="nav-toggle"><i data-toggle="expanded"
                            class="ik ik-toggle-right toggle-icon"></i></button>
                    <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                </div>

                <div class="sidebar-content">
                    <div class="nav-container">
                        <nav id="main-menu-navigation" class="navigation-main">
                                <div class="nav-lavel">Navigation</div>
                                <div class="nav-item">
                                    <a href="operacao"><i class="ik ik-bar-chart-2"></i><span>Operações</span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="tarefa"><i class="ik ik-menu"></i><span>Tarefas</span> </a>
                                </div>
                                <div class="nav-item">
                                    <a href="produto"><i class="ik ik-layers"></i><span>Produto</span> </a>
                                </div>
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Cronometragem</span></a>
                                    <div class="submenu-content">
                                        <a href="cronometro" class="menu-item">Cronometro</a>
                                        <a href="listagemCronometro" class="menu-item">Listagem</a>
                                    </div>
                                </div>
                        </nav>
                    </div>
                </div>
            </div>
            
            @yield('conteudo')

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{url('/')}}/src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
    <script src="{{url('/')}}/node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="{{url('/')}}/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{url('/')}}/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="{{url('/')}}/node_modules/screenfull/dist/screenfull.js"></script>
    <script src="{{url('/')}}/node_modules/amcharts3/amcharts/amcharts.js"></script>
    <script src="{{url('/')}}/node_modules/amcharts3/amcharts/gauge.js"></script>
    <script src="{{url('/')}}/node_modules/amcharts3/amcharts/serial.js"></script>
    <script src="{{url('/')}}/node_modules/amcharts3/amcharts/themes/light.js"></script>
    <script src="{{url('/')}}/node_modules/amcharts3/amcharts/plugins/animate/animate.js"></script>
    <script src="{{url('/')}}/node_modules/amcharts3/amcharts/pie.js"></script>
    <script src="{{url('/')}}/node_modules/ammap3/ammap/ammap.js"></script>
    <script src="{{url('/')}}/node_modules/ammap3/ammap/maps/js/usaLow.js"></script>
    <script src="{{url('/')}}/dist/js/theme.min.js"></script>
    <script src="{{url('/')}}/js/chart-amcharts.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
            (function (b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l; b[l] || (b[l] =
                    function () { (b[l].q = b[l].q || []).push(arguments) }); b[l].l = +new Date;
                e = o.createElement(i); r = o.getElementsByTagName(i)[0];
                e.src = 'https://www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e, r)
            }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X', 'auto'); ga('send', 'pageview');
    </script>
</body>

<!-- //funções javascript -->
<script type="text/javascript">

    function abrirModalIncluir() {

        $('#modalIncluir').modal('show');
    }

    function abrirModalEditar() {

        $('#modalEditar').modal('show');
    }

</script>

</html>

