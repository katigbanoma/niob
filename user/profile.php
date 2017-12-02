<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="apple-touch-icon" sizes="57x57" href="../favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicons/favicon-16x16.png">
    <link rel="manifest" href="../favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>NIOB Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="../static/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../static/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="../static/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="../static/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../static/plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../static/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="../static/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../static/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="../static/css/colors/default.css" id="theme" rel="stylesheet">
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
                <a class="logo" href="../index.php">
                    <b><img src="../img/logo-rsz.png" alt="home" class="light-logo" /></b>
                </a>
            </div>
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
                    <a href="../index.php" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Home</a>
                </li>
                <li>
                    <a href="profile.php" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Profile</a>
                </li>
                <li>
                    <a href="payments.php" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Payments</a>
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
    <?php ?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Profile page</h4>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-8">
                    <h6 class="caption" style="float: right"><a href="../logout.php">Sign Out</a></h6>
                </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div class="white-box">
                        <div class="user-bg">
                            <div class="overlay-box">
                                <div class="user-content">
                                    <?php if (isset($_SESSION['account'])) { ?>
                                        <a href="javascript:void(0)"><img src="<?php echo $_SESSION['account']['profile_image']?>" class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white"><?php echo $_SESSION['account']['surname'] ?></h4>
                                    <?php } else {?>
                                        <a href="javascript:void(0)"><img src="../img/avatar.png" class="thumb-lg img-circle" alt="img"></a>
                                    <?php } ?>
                                    <h5 class="text-white"><?php echo $_SESSION['user'] ?></h5> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-xs-12">
                    <div class="white-box">
                        <form class="form-horizontal form-material">
                            <div class="form-group">
                                <label class="col-md-12">Surname</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Doe" value="<?php if (isset($_SESSION['account'])) { echo $_SESSION['account']['surname']; } ?>" class="form-control form-control-line"> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Other Names</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Johnathan Jane" value="<?php if (isset($_SESSION['account'])) { echo $_SESSION['account']['othernames']; } ?>" class="form-control form-control-line"> </div>
                            </div>
                            <div class="form-group">
                                <label for="example-email" class="col-md-12">Email</label>
                                <div class="col-md-12">
                                    <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email"> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Password</label>
                                <div class="col-md-12">
                                    <input type="password" value="password" class="form-control form-control-line"> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Phone No</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="123 456 7890" class="form-control form-control-line"> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Message</label>
                                <div class="col-md-12">
                                    <textarea rows="5" class="form-control form-control-line"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Select Country</label>
                                <div class="col-sm-12">
                                    <select class="form-control form-control-line">
                                        <option>London</option>
                                        <option>India</option>
                                        <option>Usa</option>
                                        <option>Canada</option>
                                        <option>Thailand</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success">Update Profile</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="../static/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="../static/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="../static/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="../static/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="../static/js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="../static/js/custom.min.js"></script>
</body>

</html>
