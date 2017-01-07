<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="images/Andaglos-UKM.jpg" type="image/x-icon">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mdb.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/selectize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/selectize.bootstrap3.css') }}">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body  class="hidden-sn blue-skin" style="padding-top: 7%;">

 @if (Auth::check())     
  <!--Double Navigation-->
    <header>

        <!-- Sidebar navigation -->
        <ul id="slide-out" class="side-nav fixed custom-scrollbar">
            <!-- Logo -->
            <li>
                <div class="logo-wrapper waves-light">
                    <a href="http://www.andaglos.com"><img src="images/andaglos_logo.png" class="img-fluid flex-center"></a>
                </div>

            </li>
            <!--/. Logo -->

            <!--/. <li>
                <div class="logo-wrapper sn-ad-avatar-wrapper">
                
                </div>
            </li>-->

            <!--Social-->
            <li>
                <ul class="social">
                   <li><a class="icons-sm fb-ic" href="https://www.facebook.com/andaglos/?fref=ts"><i class="fa fa-facebook"> </i></a></li>
                    <li><a class="icons-sm gplus-ic" href="#"><i class="fa fa-google-plus"> </i></a></li>
                </ul>
            </li>
            <!--/Social-->
            <!-- Side navigation links -->
            <li>
                            
                <ul class="collapsible collapsible-accordion">
                
                <li><a class="collapsible-header waves-effect arrow-r" href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-archive"></i>Master Data<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">User</a></li>
                                <li><a href="{{ route('poli.index') }}" class="waves-effect">Poli</a></li>
                                <li><a href="#" class="waves-effect">Kamar</a></li>
                                <li><a href="#" class="waves-effect">Penjamin</a></li>
                                <li><a href="#" class="waves-effect">Perujuk</a></li>
                                <li><a href="{{ route('jabatans.index') }}" class="waves-effect">Jabatan</a></li>
                                <li><a href="#" class="waves-effect">Otoritas</a></li>
                                <li><a href="#" class="waves-effect">Suplier</a></li>
                                <li><a href="#" class="waves-effect">Pasien</a></li>
                                <li><a href="#" class="waves-effect">Produk</a></li>
                                <li><a href="#" class="waves-effect">Jenis Obat</a></li>
                                <li><a href="#" class="waves-effect">Kelas Kamar</a></li>
                                <li><a href="#" class="waves-effect">Cito</a></li>
                                <li><a href="#" class="waves-effect">Operasi</a></li>
                                <li><a href="#" class="waves-effect">Satuan</a></li>
                                <li><a href="#" class="waves-effect">Kategori</a></li>
                                <li><a href="#" class="waves-effect">Komisi Produk</a></li>
                                <li><a href="#" class="waves-effect">Komisi Faktur</a></li>
                                <li><a href="#" class="waves-effect">Gudang</a></li>
                                <li><a href="#" class="waves-effect">Daftar Akun</a></li>
                                <li><a href="#" class="waves-effect">Group Akun</a></li>
                            </ul>
                        </div>
                    </li>
                        @role('admin')
                        @endrole                
                </ul>
            </li>
            <!--/. Side navigation links -->
                        @endif
        </ul>
        <!--/. Sidebar navigation -->

        <!--Navbar-->
        <nav class="navbar navbar-fixed-top scrolling-navbar double-nav">
            @if (Auth::check()) 
            <!-- SideNav slide-out button -->
            <div class="float-xs-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>
                
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn">
                <p>KLINIK KOSASIH KEMILING</p>
            </div>
            @endif

            <ul class="nav navbar-nav float-xs-right">
                        @if (Auth::guest())
                <li class="nav-item ">
                    <a class="nav-link" href="{{ url('/login') }}"><i class="fa fa-sign-in"></i> <span class="hidden-sm-down">Login</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ url('/register') }}"><i class="fa fa-user-plus"></i> <span class="hidden-sm-down">Register</span></a>
                </li>
                        @else
                <li class="nav-item ">
                    <a class="nav-link" href="#"><span class="hidden-sm-down"><i class="fa fa-key"></i> Ubah Password</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="http://andaglos.com/"><span class="hidden-sm-down"><i class="fa fa-envelope"></i> Contact Us</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#"><span class="hidden-sm-down"><i class="fa fa-user"></i> {{ Auth::user()->name }}</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-sign-out"></i> Logout </a>
                    <div class="dropdown-menu dropdown-primary dd-right" aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <a class="dropdown-item" href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                                     <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                    </div>
                </li>
                                        @endif
            </ul>

        </nav>
        <!--/.Navbar-->


    </header>
    <!--/Double Navigation-->

        @include('layouts._flash')
        @yield('content')

    <!-- Scripts -->
    <script type="text/javascript" src="{{asset('js/jquery-2.2.3.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/tether.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/jquery.dataTables.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/selectize.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>

        <script>
        $(".button-collapse").sideNav();
        var el = document.querySelector('.custom-scrollbar');
        Ps.initialize(el);
    </script>
    @yield('scripts')
</body>
</html>
