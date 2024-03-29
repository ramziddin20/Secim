<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{asset('img/transperentoq.png')}}" type="image/png">
    <meta property="og:image" content="img/transperentoq.png">

    <title>Secim - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('back/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('back/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Secim Админ</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{route('home')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Главный</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <li class="nav-item active">
            <a class="nav-link" href="{{route('seo.index')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Сео</span></a>
        </li>

        <hr class="sidebar-divider">

        <li class="nav-item active">
            <a class="nav-link" href="{{route('slider.index')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Слайдер</span></a>
        </li>

        <hr class="sidebar-divider">

        <li class="nav-item active">
            <a class="nav-link" href="{{route('about.index')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>О нас</span></a>
        </li>

        <hr class="sidebar-divider">

        <li class="nav-item active">
            <a class="nav-link" href="{{route('advantages.index')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Почему мы</span></a>
        </li>

        <hr class="sidebar-divider">

        <li class="nav-item active">
            <a class="nav-link" href="{{route('service.index')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Услуга</span></a>
        </li>

        <hr class="sidebar-divider">

        <li class="nav-item active">
            <a class="nav-link" href="{{route('university.index')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Университет</span></a>
        </li>

        <hr class="sidebar-divider">

        <li class="nav-item active">
            <a class="nav-link" href="{{route('informationWork.index')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Контакты</span></a>
        </li>

        <hr class="sidebar-divider">

        <li class="nav-item active">
            <a class="nav-link" href="{{route('contact.index')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Заявка</span></a>
        </li>

        <hr class="sidebar-divider">

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
               aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Социальные медиа</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('instagram.index')}}">Инстаграм</a>
                    <a class="collapse-item" href="{{route('telegram.index')}}">Телеграмма</a>
                    <a class="collapse-item" href="{{route('facebook.index')}}">Фейсбук</a>
                    <a class="collapse-item" href="{{route('youtube.index')}}">YouTube</a>
                </div>
            </div>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">


                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hojakbar</span>
                            <img class="img-profile rounded-circle"
                                 src="{{asset('back/img/profile.svg')}}">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->
            @yield('home')
        </div>
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('back/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('back/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('back/vendor/jquery-easing/jquery.easing.min')}}.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('back/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('back/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('back/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('back/js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>
