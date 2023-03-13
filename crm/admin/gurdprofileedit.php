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

                            <h4 class="page-title"> Personal Details's </h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div><!-- end page title end breadcrumb -->



            </div><!-- container -->

            <?php
            $id = $_REQUEST['id'];
            $s = "select * from blog where id='$id'";
            $sel = mysqli_query($conn,$s);
            $res = mysqli_fetch_array($sel);
            ?>

            <form action="gurdprofileeditcode.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="idd" id="" value="<?php echo $res['id'] ?>">
                <div class="form-row">
                    <div class="col-sm-4">
                        <label for="">Enter First</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $res['user_name']; ?>" placeholder="First Name">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Enter Middle Name</label>
                        <input type="text" class="form-control" name="midname" value="<?php echo $res['user_middle_name']; ?>" placeholder="Middle Name">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Enter Last Name</label>
                        <input type="text" class="form-control" name="lname" value="<?php echo $res['user_last_name']; ?>" placeholder="Last Name">
                    </div>
                </div> <br> <br>

                <div class="form-row">
                    <div class="col-sm-4">
                        <label for="">Father's Name</label>
                        <input type="text" class="form-control" name="fname" value="<?php echo $res['user_father_name']; ?>" placeholder="Father's Name">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Mother'S Name</label>
                        <input type="text" class="form-control" name="mname" value="<?php echo $res['user_mother_name']; ?>" placeholder="Mother's Name">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Mobile Number</label>
                        <input type="number" class="form-control" name="mobile" value="<?php echo $res['user_mobile']; ?>" placeholder="Mobile Number">
                    </div>

                </div> <br><br>

                <div class="form-row">
                    
                    <div class="col-sm-4">
                        <label for="">Your Parmanent Address</label>
                        <textarea id="" class="form-control" name="paradds"  placeholder="Parmanent Address"><?php echo $res['user_per_address']; ?></textarea>
                    </div>
                    <div class="col-sm-4">
                        <label for="">Your Temporary Address</label>
                        <textarea id="" class="form-control" name="temadds"  placeholder="Temporary Address"><?php echo $res['user_tmp_address']; ?></textarea>
                    </div>
                    <div class="col-sm-4">
                        <label for="">Gender</label> <br>
                        Male <input type="radio" class="" name="gender" value="Male" <?php if($res['user_status']=='Male'){echo "checked";} ?>> &emsp;
                        Female <input type="radio" class="" name="gender" value="Female" <?php if($res['user_status']=='Female'){echo "checked";} ?>>
                    </div>
                </div> <br>

                <div class="form-row">
                    <div class="col-sm-4">
                        <label for="">Enter Aaddhar Number</label>
                        <input type="Number" class="form-control" value="<?php echo $res['user_aaddhar']; ?>" name="aaddhar" placeholder="0123-4567-7890">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Enter Pan Card Number </label>
                        <input type="text" class="form-control" name="pan" value="<?php echo $res['user_pancard']; ?>" placeholder="Pan Card Number ">
                    </div>
                    <div class="col-sm-4">
                        <label for="">DOB</label>
                        <input type="date" required pattern="\d{4}-\d{2}-\d{2}" class="form-control" value="<?php echo $res['user_dob']; ?>" name="dob"
                            placeholder="last name">
                     
                    </div>

                </div> <br>
                
                <div class="form-row">
                    <div class="col-sm-4">
                        <label for="">Image Upload</label>
                        <img src="<?php echo site_Url; ?>Admin/upload/<?php echo $res['user_img']; ?>" alt="" style="border-radius: 100px;border: 2px solid red; height:90px;width:90px;">
                        <input type="file" class="form-control" name="img" multiple placeholder="" >
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
                        <label for="">Your PF Number</label>
                        <input type="number" class="form-control" name="pf" value="<?php echo $res['user_pf']; ?>" placeholder="Your PF">
                    </div>
                    <div class="col-sm-4">
                        <label for="">ESI Number</label>
                        <input type="number" class="form-control" name="esi" value="<?php echo $res['user_esi_number']; ?>" placeholder="ESI Number">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Selary In Hand</label>
                        <input type="number" class="form-control" name="sal" value="<?php echo $res['salery']; ?>" placeholder="Selary In Hand">
                    </div>
                </div> <br><br>



                <div class="form-row">

                    <div class="col-sm-4">
                        <label for="">Date Of Join</label>
                        <input type="date" class="form-control" value="<?php echo $res['datejoin'] ?>" name="datejoin" placeholder="date Of Join">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Job Title</label>
                     
                        <select class="form-group form-control" name="jobtitle">
                            <?php
                            $sel_q = mysqli_query($conn,"SELECT * from blog where id='$id'");
                            $P= mysqli_fetch_array($sel_q);
                            ?>

                            <option value="select Input">Select Input</option>
                            
                            <?php
                            $sel_c = mysqli_query($conn, "select * from category where action='Active'");
                            while ($sel_c_res = mysqli_fetch_array($sel_c)) {
                                ?>
                            <option value="<?php echo $sel_c_res['id'] ?>" <?php if($sel_c_res['id']==$P['jobtitle']){ ?> selected="selected" <?php } ?>><?php echo $sel_c_res['category_name'] ?> </option>
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
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div><!-- end page title end breadcrumb -->

                <div class="form-row">
                    <div class="col-sm-4">
                        <label for="">Account Number</label>
                        <input type="Number" class="form-control" value="<?php echo $res['user_account']; ?>" name="account" placeholder="Account Number">
                    </div>
                    <div class="col-sm-4">
                        <label for="">IFSC Code </label>
                        <input type="text" class="form-control" value="<?php echo $res['user_ifsc_code']; ?>" name="ifsc" placeholder="IFSC Code ">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Bank Name</label>
                        <input type="text" class="form-control" value="<?php echo $res['bankname']; ?>" name="bankname" placeholder="Bank Name">
                    </div>
                </div> <br>
                <div class="form-row">

                    <div class="col-sm-4">
                        <label for="">Account Holder Name</label>
                        <input type="text" class="form-control" value="<?php echo $res['user_bank_name']; ?>" name="holder" placeholder="Account Holder Name">
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">

                            <h4 class="page-title"> Fill Referal Details Here. </h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div><!-- end page title end breadcrumb -->


                <div class="form-row">
                    <div class="col-sm-4">
                        <label for="">Enter Reference Name</label>
                        <input type="text" class="form-control" value="<?php echo $res['ref_name']; ?>" name="ref" placeholder="Reference Name">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Reference ID </label>
                        <input type="number" class="form-control" value="<?php echo $res['ref_id']; ?>" name="refid" placeholder="Aadhar Number">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Mobile Number</label>
                        <input type="number" class="form-control" value="<?php echo $res['ref_mobile']; ?>" name="refnum" placeholder="Mobile Number">
                    </div>
                </div> <br> <br>


                <div class="form-row">

                    <div class="col-sm-4">
                        <label for="">Enter Relation Name</label>
                        <input type="text" class="form-control" value="<?php echo $res['ref_relation']; ?>" name="relation" placeholder="Relation">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Reference DOB</label>
                        <input type="date" class="form-control" value="<?php echo $res['ref_dob']; ?>" name="refdob" placeholder="">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Reference Gender</label> <br>
                        Male <input type="radio" class="" name="refgender" value="Male" <?php if($res['user_status']=='Male'){echo "checked";} ?>>&emsp;
                        Female <input type="radio" class="" name="refgender" value="Female" <?php if($res['user_status']=='Female'){echo "checked";} ?>>
                    </div>

                </div> <br> <br>

                <div class="form-row">


                    <div class="col-sm-4">
                        <label for="">Reference images</label>
                        <img src="<?php echo site_Url; ?>Admin/upload/<?php echo $res['ref_img']; ?>" style="border-radius: 100px;border: 2px solid red; height:90px;width:90px;">
                        <input type="file" class="form-control" name="refimg" placeholder="" multiple value="<?php echo $res['police_verification']; ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">

                            <h4 class="page-title"> Police Verification </h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div><!-- end page title end breadcrumb -->

                
                <div class="form-row">
                    <div class="col-sm-4">
                        <label for=""> Police Verification Image</label>
                        <img src="<?php echo site_Url; ?>Admin/upload/<?php echo $res['police_verification']; ?>" style="border-radius: 100px;border: 2px solid red; height:90px;width:90px;">
                        <input type="file" class="form-control" name="verification[]" multiple placeholder="" value="<?php echo $res['police_verification']; ?>">
                    </div>


                </div> <br> <br>

                <div class="form-row">

                    <div class="col-sm-4">
                        <label for=""> Action</label>
                        <select class="form-group form-control" name="action">
                            <option value="Active">Active</option>
                            <option value="InActive">InActive</option>
                        </select>
                    </div>

                </div> <br> <br>

                <div class="form-row">
                    
                    <div class="col-sm-12">
                        <label for="">Comment Box</label>
                        <textarea id="" class="form-control" name="comment" placeholder="Comment Box" style="height: 150%;"><?php echo $res['comment']; ?></textarea>
                    </div>
                   
                </div> <br><br><br> </br><br>


                <div class="form-row">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-4">
                        <button class="btn btn-success">Form Upload</button>
                    </div>
                    <div class="col-sm-4">
                    </div>
                </div> <br> <br>

            </form>

            <?php include('./include/footer.php'); ?>