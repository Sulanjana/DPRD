<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png ')}}">
    <title>Admin DPRD</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets/bootstrap/dist/css/bootstrap.min.css ')}}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{asset('assets/bower_components/sidebar-nav/dist/sidebar-nav.min.css ')}}" rel="stylesheet">
    <!-- toast CSS -->
    <!-- morris CSS -->
    <link href="{{asset('assets/bower_components/morrisjs/morris.css ')}}" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="{{asset('assets/bower_components/chartist-js/dist/chartist.min.css ')}}" rel="stylesheet">
    <link href="{{asset('assets/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css ')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{asset('assets/css/animate.css ')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('assets/css/style.css ')}}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{asset('assets/css/colors/default.css ')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="dashboard.html">
                        <!-- Logo icon image, you can use font-icon also -->
                        <b>
                            <!--This is dark logo icon-->
                            <img src="{{asset('assets/images/admin-logo.png ')}}" alt="home" class="dark-logo" />
                            <!--This is light logo icon-->
                            <img src="{{asset('assets/images/admin-logo-dark.png ')}}" alt="home" class="light-logo" />
                        </b>
                        <!-- Logo text image you can use text also -->
                        <span class="hidden-xs">
                            <!--This is dark logo text-->
                            <img src="{{asset('assets/images/admin-text.png ')}}" alt="home" class="dark-logo" />
                            <!--This is light logo text-->
                            <img src="{{asset('assets/images/admin-text-dark.png ')}}" alt="home" class="light-logo" />
                        </span> 
                    </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                    </li>
                    
                    
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="{{ url('index') }}" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ url('umum') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Umum</a>
                    </li>
                    <li>
                        <a href= "{{ url('instansi') }}" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>Instansi</a>
                    </li>
                    <li>
                        <a href="{{ url('kunjungan') }}" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Table Kunjungan</a>
                    </li>
                    <li>
                        <a href="{{ url('login') }}" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Logout</a>
                    </li>
                    
                    
                    

                </ul>
                
            </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                        </ol>
                    </div>
                    
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Seluruh Pengungjung</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">659</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Pengunjung Umum</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash2"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">869</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Pengunjung Instansi</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">911</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/.row -->
                <!--row -->
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Grafik Tahunan</h3>
                            <ul class="list-inline text-right">
                                <li>
                                    <h5><i class="fa fa-circle m-r-5 text-info"></i>Instansi</h5> </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5 text-inverse"></i>Umum</h5> </li>
                            </ul>
                            <div id="ct-visits" style="height: 405px;"></div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- table -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- chat-listing & recent comments -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- .col -->
                    
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="panel">
                            <div class="sk-chat-widgets">
                                <div class="panel panel-default">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            <!-- /.container-fluid -->
            
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('assets/bower_components/jquery/dist/jquery.min.js ')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('assets/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{asset('assets/bower_components/sidebar-nav/dist/sidebar-nav.min.js ')}}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{asset('assets/js/jquery.slimscroll.js ')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('assets/js/waves.js ')}}"></script>
    <!--Counter js -->
    <script src="{{asset('assets/bower_components/waypoints/lib/jquery.waypoints.js ')}}"></script>
    <script src="{{asset('assets/bower_components/counterup/jquery.counterup.min.js ')}}"></script>
    <!-- chartist chart -->
    <script src="{{asset('assets/bower_components/chartist-js/dist/chartist.min.js ')}}"></script>
    <script src="{{asset('assets/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js ')}}"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="{{asset('assets/bower_components/jquery-sparkline/jquery.sparkline.min.js ')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('assets/js/custom.min.js ')}}"></script>
    <script src="{{asset('assets/js/dashboard1.js ')}}"></script>
    <script src="{{asset('assets/bower_components/toast-master/js/jquery.toast.js ')}}"></script>
</body>

</html>
