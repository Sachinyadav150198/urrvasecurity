<?php include('./include/config.php'); ?>
<?php include('./include/setting.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>URVYA Security- Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link href="plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo site_Url; ?>assets/css/fa.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css.map">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- LOGO -->
        <div class="topbar-left"><a href="<?php echo site_Url; ?>" class="logo"><span><img src="<?php echo site_Url; ?>images/logo.svg"
                        alt="logo-small" class="logo-sm" style="height: 44px;"> </span></a></div>
        <!--end logo-->
        <!-- Navbar -->
        <nav class="navbar-custom">
            <ul class="list-unstyled topbar-nav float-right mb-0">

                <li class="dropdown"><a class="nav-link dropdown-toggle waves-effect waves-light nav-user"
                        data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><img
                            src="<?php echo site_Url; ?>assets/images/users/user-1.png" alt="profile-user" class="rounded-circle"> <span
                            class="ml-1 nav-user-name hidden-sm"> Admin <i class="mdi mdi-chevron-down"></i></span></a>
                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i
                                class="ti-user text-muted mr-2"></i> Profile</a>
                        <div class="dropdown-divider mb-0"></div><a class="dropdown-item" href="#"><i
                                class="ti-power-off text-muted mr-2"></i> Logout</a>
                    </div>
                </li>
            </ul>
            <!--end topbar-nav-->

        </nav><!-- end navbar-->
    </div><!-- Top Bar End -->
    <!-- Left Sidenav -->
    <div class="left-sidenav">
        <ul class="metismenu left-sidenav-menu">
            <li><a href="javascript: void(0);"><i class="ti-bar-chart"></i><span>Dashboard</span><span
                        class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_Url; ?>profile.php"><i
                                class="ti-control-record"></i>Add Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_Url; ?>gurdprofile.php"><i
                                class="ti-control-record"></i>Gurd Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_Url;  ?>"><i
                                class="ti-control-record"></i>Supervisor Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_Url;  ?>"><i
                                class="ti-control-record"></i>Field Officer Profile </a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_Url;  ?>"><i
                                class="ti-control-record"></i>Client Profile</a></li>
                </ul>
            </li>


        </ul>
    </div><!-- end left-sidenav-->
    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">

                            <h4 class="page-title">Analytics</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div><!-- end page title end breadcrumb -->

                <div class="row justify-content-center">


                <?php
                $sel = mysqli_query($conn,"select * from category ORDER BY id");
                while($r = mysqli_fetch_array($sel))
                {
                ?>

                    <div class="col-md-6 col-lg-3">
                        <div class="card report-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="text-dark font-weight-semibold font-14"><?php echo $r['category_name'] ?></p>
                                    </div>

                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>

                    <?php
                }
                    ?>
                    
                </div>
                <!--end row-->


            </div><!-- container -->
            <footer class="footer text-center text-sm-left">&copy; 2023 URVYA Security <span
                    class="text-muted d-none d-sm-inline-block float-right">Crafted with <i
                        class="mdi mdi-heart text-danger"></i> by URVYA Security</span></footer>
            <!--end footer-->
        </div><!-- end page content -->
    </div><!-- end page-wrapper -->
    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="plugins/apexcharts/apexcharts.min.js"></script>
    <script src="plugins/moment/moment.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="assets/pages/jquery.analytics_dashboard.init.js"></script><!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>