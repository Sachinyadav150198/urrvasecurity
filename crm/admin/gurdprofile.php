<?php include('./include/config.php'); ?>
<?php include('./include/setting.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>URVYA Security - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include('./include/header.php'); ?>
</head>

<body>
    <!-- Top Bar Start -->
    <?php include('./include/head.php'); ?>
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

                            <h4 class="page-title"> Guard Profile</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div><!-- end page title end breadcrumb -->



            </div><!-- container -->

            <button class="btn btn-success"> <a href="<?php echo site_Url; ?>admin/addgurd.php" style="color:white">Add
                    Guard Profile</a> </button>

            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Job Title</th>
                    <th>Mobile</th>
                    <th>Date Of Join</th>
                    <th>Status</th>
                    <th>View</th>
                    <th>Action</th>
                </tr>

                

                <?php
                $sel = "SELECT blog.*,category.category_name FROM blog,category WHERE blog.jobtitle = category.id";
                $sel_q = mysqli_query($conn,$sel);
                while ($sel_res = mysqli_fetch_array($sel_q, MYSQLI_BOTH))


                    

                    // var_dump($sel_res);
                {
                ?>
                <tr>
                    <td><?php echo $sel_res['id']; ?></td>
                    <td><?php echo $sel_res['user_name']; ?></td>
                    <td><?php echo $sel_res['category_name']; ?></td>
                    <td><?php echo $sel_res['user_mobile']; ?></td>
                    <td><?php echo $sel_res['date']; ?> </td>
                    <td><?php echo $sel_res['action']; ?></td>
                    <td><button class="btn btn-primary" data-toggle="modal"
                            data-target="#gard<?php echo $sel_res['id']; ?>">View</button></td>
                    <!-- <td><a href="showpage.php?idd=<?php echo $sel_res['id']; ?>" class="ti-eye btn btn-info"></a></td> -->
                    <td><a href="gurdprofileedit.php?id=<?php echo $sel_res['id']; ?>"
                            class="ti-pencil-alt btn btn-success"></a></td>
                </tr>

                <?php
                }
                ?>
            </table>

            <?php
                
                $s = "SELECT blog.*,category.category_name FROM blog,category WHERE blog.jobtitle = category.id";
                $se = mysqli_query($conn,$s);
                while ($sel_rs = mysqli_fetch_array($se, MYSQLI_BOTH)) {
                    // var_dump($sel_res);
                    // echo $sel_rs['id'];

                    ?>

            <div class="modal fade" id="gard<?php echo $sel_rs['id']; ?>" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="margin: 0px 0px 0px -93px;width: 138%;">

                        <div class="modal-body">


                            <form action="#" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" id="" value="<?php echo $sel_rs['id'] ?>">
                                <div class="form-row">
                                    <div class="col-sm-4">
                                        <label for="">Enter First</label> :-
                                        <span><?php echo $sel_rs['user_name']; ?></span>

                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">Enter Middle Name</label> :-
                                        <span><?php echo $sel_rs['user_middle_name']; ?></span>

                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">Enter Last Name</label> :-
                                        <span><?php echo $sel_rs['user_last_name']; ?></span>

                                    </div>
                                </div> <br> <br>

                                <div class="form-row">
                                    <div class="col-sm-4">
                                        <label for="">Father's Name</label> :-
                                        <span><?php echo $sel_rs['user_father_name']; ?></span>

                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">Mother'S Name</label> :-
                                        <span><?php echo $sel_rs['user_mother_name']; ?></span>

                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">Mobile Number</label> :-
                                        <span><?php echo $sel_rs['user_mobile']; ?></span>

                                    </div>

                                </div> <br><br>

                                <div class="form-row">

                                    <div class="col-sm-4">
                                        <label for="">Your Parmanent Address</label> :- <br>
                                        <span><?php echo $sel_rs['user_per_address']; ?></span>

                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">Your Temporary Address</label> :- <br>
                                        <span><?php echo $sel_rs['user_tmp_address']; ?></span>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">Gender</label> <br> :-
                                        <span><?php echo $sel_rs['user_status'] ?></span>

                                    </div>
                                </div> <br>


                                <div class="form-row">
                                    <div class="col-sm-4">
                                        <label for="">Enter Aaddhar Number</label> :-
                                        <span><?php echo $sel_rs['user_aaddhar']; ?></span>

                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">Enter Pan Card Number </label> :-
                                        <span><?php echo $sel_rs['user_pancard']; ?></span>

                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">DOB</label> :- <span><?php echo $sel_rs['user_dob']; ?></span>

                                    </div>

                                </div> <br>



                                <div class="form-row">
                                    <div class="col-sm-4">
                                        <label for="">Image Upload</label> :- <span><img
                                                src="<?php echo site_Url; ?>Admin/upload/<?php echo $sel_rs['user_img']; ?>"
                                                style="border-radius: 100px;border: 2px solid red; height:90px;width:90px;"></span>

                                    </div>

                                </div> <br> <br>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="page-title-box">

                                            <h4 class="page-title"> Impolyment Details's </h4>
                                        </div>

                                    </div>

                                </div>


                                <div class="form-row">

                                    <div class="col-sm-4">
                                        <label for="">Your PF Number</label> :-
                                        <span><?php echo $sel_rs['user_pf']; ?></span>

                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">ESI Number</label> :-
                                        <span><?php echo $sel_rs['user_esi_number']; ?></span>

                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">Selary In Hand</label> :-
                                        <span><?php echo $sel_rs['salery']; ?></span>

                                    </div>
                                </div> <br><br>



                                <div class="form-row">

                                    <div class="col-sm-4">
                                        <label for="">Date Of Join</label> :-
                                        <span><?php echo $sel_rs['datejoin'] ?></span>

                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">Job Title</label> :-

                                        <select class="form-group form-control" name="jobtitle" disabled>
                                            <option value="select Input">Select Input</option>
                                            <?php
                            $sel_c = mysqli_query($conn, "select * from category");
                            while ($sel_c_res = mysqli_fetch_array($sel_c)) {
                                ?>
                                            <option disabled value="<?php echo $sel_c_res['id'] ?>"
                                                <?php if ($sel_c_res['id'] == $sel_rs['jobtitle']) { ?>
                                                selected="selected" <?php } ?>><?php echo $sel_c_res['category_name'] ?>
                                            </option>
                                            <?php
                            }
                            ?>
                                        </select>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="page-title-box">

                                            <h4 class="page-title"> Bank Details's </h4>
                                        </div>

                                    </div>

                                </div>

                                <div class="form-row">
                                    <div class="col-sm-4">
                                        <label for="">Account Number</label> :- <br>
                                        <span><?php echo $sel_rs['user_account']; ?></span>

                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">IFSC Code </label> :- <br>
                                        <span><?php echo $sel_rs['user_ifsc_code']; ?></span>

                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">Bank Name</label> :-
                                        <span><?php echo $sel_rs['bankname']; ?></span>

                                    </div>
                                </div> <br>
                                <div class="form-row">

                                    <div class="col-sm-4">
                                        <label for="">Account Holder Name</label> :-
                                        <span><?php echo $sel_rs['user_bank_name']; ?> </span>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="page-title-box">

                                            <h4 class="page-title"> Fill Referal Details Here. </h4>
                                        </div>

                                    </div>

                                </div>


                                <div class="form-row">
                                    <div class="col-sm-4">
                                        <label for="">Enter Reference Name</label> :- <br>
                                        <span><?php echo $sel_rs['ref_name']; ?></span>

                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">Reference ID </label> :- <br>
                                        <span><?php echo $sel_rs['ref_id']; ?></span>

                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">Mobile Number</label> :-
                                        <span><?php echo $sel_rs['ref_mobile']; ?></span>

                                    </div>
                                </div> <br> <br>


                                <div class="form-row">

                                    <div class="col-sm-4">
                                        <label for="">Enter Relation Name</label> :- <br>
                                        <span><?php echo $sel_rs['ref_relation']; ?></span>

                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">Reference DOB</label> :-
                                        <span><?php echo $sel_rs['ref_dob']; ?></span>

                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">Reference Gender</label> :-
                                        <span><?php echo $sel_rs['user_status']; ?></span>

                                    </div>

                                </div> <br> <br>

                                <div class="form-row">


                                    <div class="col-sm-4">
                                        <label for="">Reference images</label> :- <span><img
                                                src="<?php echo site_Url; ?>Admin/upload/<?php echo $sel_rs['ref_img']; ?>"
                                                style="border-radius: 100px;border: 2px solid red; height:90px;width:90px;">
                                        </span>

                                    </div>
                                </div>







                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="page-title-box">

                                            <h4 class="page-title"> Police Verification </h4>
                                        </div>

                                    </div>

                                </div>



                                <div class="form-row">
                                    <div class="col-sm-4">
                                        <label for=""> Police Verification Image</label> :- <span><img
                                                src="<?php echo site_Url; ?>Admin/upload/<?php echo $sel_rs['police_verification']; ?>"
                                                style="border-radius: 100px;border: 2px solid red; height:90px;width:90px;"></span>

                                    </div>


                                </div> <br> <br>

                                <div class="form-row">

                                    <div class="col-sm-4">
                                        <label for=""> Action</label> :- <span> <?php echo $sel_rs['action']; ?></span>

                                    </div>

                                </div> <br> <br>

                                <div class="form-row">

                                    <div class="col-sm-12">
                                        <label for="">Comment Box</label> :-
                                        <span><?php echo $sel_rs['comment']; ?></span>

                                    </div>

                                </div>


                            </form>


                        </div>

                    </div>
                </div>
            </div>

            <?php
                }
?>

            <?php include('./include/footer.php'); ?>