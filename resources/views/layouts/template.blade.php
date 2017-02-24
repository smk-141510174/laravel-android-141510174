<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{url('tamplate/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{url('tamplate/css/business-casual.css')}}" rel="stylesheet">

    <!-- Fonts -->
    <link href="{{url('https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800')}}" rel="stylesheet" type="text/css">
    <link href="{{url('https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">SMK ASSALAAM BANDUNG</div>
    <div class="address-bar">Jl.Situtarate-Cibaduyut Tlp.5420220 Bandung 40239</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation" style="background-color: pink;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav nav-tabs">
                      
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li role="presentation" class="active"><a href="{{ url('/login') }}">Login</a></li>
                        @else
                        <li><a href="{{ url('/golongan') }}">Golongan</a></li>
                        <li ><a href="{{ url('/jabatan') }}">Jabatan</a></li>
                        <li><a href="{{ url('/pegawai') }}">Pegawai</a></li>
                        <li><a href="{{ url('/kategori') }}">Kategori Lembur</a></li>
                        <li><a href="{{ url('/lemburp') }}">Lembur Pegawai</a></li>
                        <li><a href="{{ url('/tunjangan') }}">Kategori Tunjangan</a></li>
                        <li><a href="{{ url('/tunjanganp') }}">Tunjangan Pegawai</a></li>
                        <li><a href="{{ url('/penggajian') }}">Penggajian</a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        
                    

        <div class="container">
            <div class="row" >
                <div class="col-md-15 col-md-offset-0">
                    <div class="panel panel-danger" style="background-color: white;">
                        <div class="panel-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
                @yield('content1')
            </div>
        </div>

        

    </div>
    <!-- /.container -->

    <footer style="background-color: pink;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Anisyah Oktaviani Ritonga</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{url('tamplate/js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('tamplate/js/bootstrap.min.js')}}"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
