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
                        <!-- Logo icon image, you can use font-icon also --><b>
                            <!--This is dark logo icon--><img src="{{asset('assets/images/admin-logo.png ')}}" alt="home"
                                class="dark-logo" />
                            <!--This is light logo icon--><img src="{{asset('assets/images/admin-logo-dark.png ')}}" alt="home"
                                class="light-logo" />
                        </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                            <!--This is dark logo text--><img src="{{asset('assets/images/admin-text.png ')}}" alt="home"
                                class="dark-logo" />
                            <!--This is light logo text--><img src="{{asset('assets/images/admin-text-dark.png ')}}" alt="home"
                                class="light-logo" />
                        </span> </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg"
                            href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                    </li>
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i
                                    class="fa fa-search"></i></a> </form>
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
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span
                            class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="{{ url('index') }}" class="waves-effect"><i class="fa fa-clock-o fa-fw"
                                aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ url('umum') }}" class="waves-effect"><i class="fa fa-user fa-fw"
                                aria-hidden="true"></i>Umum</a>
                    </li>
                    <li>
                        <a href="{{ url('instansi') }}" class="waves-effect"><i class="fa fa-globe fa-fw"
                                aria-hidden="true"></i>Instansi</a>
                    </li>
                    <li>
                        <a href="{{ url('kunjungan') }}" class="waves-effect"><i class="fa fa-table fa-fw"
                                aria-hidden="true"></i>Table Kunjungan</a>
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
                        <h4 class="page-title">Basic Table</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Table Kunjungan</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                                <select class="form-control pull-right row b-none">
                                    <option>Januari 2020</option>
                                    <option>Februari 2020</option>
                                    <option>Maret 2020</option>
                                    <option>April 2020</option>
                                    <option>Mei 2020</option>
                                </select>
                            </div>
                            <h3 class="box-title">Data Kunjungan Umum</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>NAMA PENGUNJUNG</th>
                                            <th>EMAIL</th>
                                            <th>ALAMAT</th>
                                            <th>TANGGAL KUNJUNGAN</th>
                                            <th>NOMOR TELEPHONE</th>
                                            <th>TUJUAN KUNJUNGAN</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="txt-oflo">Nden</td>
                                            <td>nden@gmail</td>
                                            <td class="txt-oflo">kronjo</td>
                                            <td><span class="text-success">69</span></td>
                                            <td class="txt-oflo">dueu</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="txt-oflo">Wawan</td>
                                            <td>wawan@gmail</td>
                                            <td class="txt-oflo">maja</td>
                                            <td><span class="text-info">69</span></td>
                                            <td class="txt-oflo">tigeu</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td class="txt-oflo">Dimas</td>
                                            <td>dimas@gmail</td>
                                            <td class="txt-oflo">tasik</td>
                                            <td><span class="text-info">69</span></td>
                                            <td class="txt-oflo">tutup</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td class="txt-oflo">Reza</td>
                                            <td>reza@gmail</td>
                                            <td class="txt-oflo">bandung</td>
                                            <td><span class="text-danger">69</span></td>
                                            <td class="txt-oflo">botol</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td class="txt-oflo">azka</td>
                                            <td>azka@gmail</td>
                                            <td class="txt-oflo">banten</td>
                                            <td><span class="text-success">69</span></td>
                                            <td class="txt-oflo">saya</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td class="txt-oflo">azka</td>
                                            <td>azka@gmail</td>
                                            <td class="txt-oflo">garut</td>
                                            <td><span class="text-danger">69</span></td>
                                            <td class="txt-oflo">suka</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td class="txt-oflo">taufik</td>
                                            <td>taufik@gmail</td>
                                            <td class="txt-oflo">garut</td>
                                            <td><span class="text-success">69</span></td>
                                            <td class="txt-oflo">hisap</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                                <select class="form-control pull-right row b-none">
                                    <option>Januari 2020</option>
                                    <option>Februari 2020</option>
                                    <option>Maret 2020</option>
                                    <option>April 2020</option>
                                    <option>Mei 2020</option>
                                </select>
                            </div>
                            <h3 class="box-title">Data Kunjungan Instansi</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>NAMA INSTANSI</th>
                                            <th>EMAIL</th>
                                            <th>ALAMAT INSTANSI</th>
                                            <th>TANGGAL KUNJUNGAN</th>
                                            <th>NOMOR TELEPHONE</th>
                                            <th>TUJUAN KUNJUNGAN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="txt-oflo">Nden</td>
                                            <td>nden@gmail</td>
                                            <td class="txt-oflo">kronjo</td>
                                            <td><span class="text-success">69</span></td>
                                            <td class="txt-oflo">dueu</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="txt-oflo">Wawan</td>
                                            <td>wawan@gmail</td>
                                            <td class="txt-oflo">maja</td>
                                            <td><span class="text-info">69</span></td>
                                            <td class="txt-oflo">tigeu</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td class="txt-oflo">Dimas</td>
                                            <td>dimas@gmail</td>
                                            <td class="txt-oflo">tasik</td>
                                            <td><span class="text-info">69</span></td>
                                            <td class="txt-oflo">tutup</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td class="txt-oflo">Reza</td>
                                            <td>reza@gmail</td>
                                            <td class="txt-oflo">bandung</td>
                                            <td><span class="text-danger">69</span></td>
                                            <td class="txt-oflo">botol</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td class="txt-oflo">azka</td>
                                            <td>azka@gmail</td>
                                            <td class="txt-oflo">banten</td>
                                            <td><span class="text-success">69</span></td>
                                            <td class="txt-oflo">saya</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td class="txt-oflo">azka</td>
                                            <td>azka@gmail</td>
                                            <td class="txt-oflo">garut</td>
                                            <td><span class="text-danger">69</span></td>
                                            <td class="txt-oflo">suka</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td class="txt-oflo">taufik</td>
                                            <td>taufik@gmail</td>
                                            <td class="txt-oflo">garut</td>
                                            <td><span class="text-success">69</span></td>
                                            <td class="txt-oflo">hisap</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{asset('assets/bower_components/jquery/dist/jquery.min.js ')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('assets/bootstrap/dist/js/bootstrap.min.js ')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{asset('assets/bower_components/sidebar-nav/dist/sidebar-nav.min.js ')}}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{asset('assets/js/jquery.slimscroll.js ')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('assets/js/waves.js ')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('assets/js/custom.min.js ')}}"></script>
</body>

</html>