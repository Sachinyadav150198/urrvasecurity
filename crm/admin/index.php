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

    <?php include('./include/header.php'); ?>

    <?php include('./include/head.php'); ?>

</head>

<body>
    <!-- Top Bar Start -->
   
    <!-- Left Sidenav -->
    
    <?php include('./include/sidemenu.php'); ?>

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
                $sel = mysqli_query($conn,"select * from category where action='active' ORDER BY id");
                while($r = mysqli_fetch_array($sel))
                {
                ?>

                    <div class="col-md-6 col-lg-3">
                        <div class="card report-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="text-dark font-weight-semibold font-14">
                                            <?php echo $r['category_name'] ?></p>
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
            <?php include('./include/footer.php'); ?>