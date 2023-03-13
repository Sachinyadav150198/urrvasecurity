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

            <form action="gurdformcode.php" method="POST" enctype="multipart/form-data">

                <div class="form-row">
                    <div class="col-sm-4">
                        <label for="">Enter First</label>
                        <input type="text" class="form-control" name="name" placeholder="First Name">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Enter Middle Name</label>
                        <input type="text" class="form-control" name="midname" placeholder="Middle Name">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Enter Last Name</label>
                        <input type="text" class="form-control" name="lname" placeholder="Last Name">
                    </div>
                </div> <br> <br>

                <div class="form-row">
                    <div class="col-sm-4">
                        <label for="">Father's Name</label>
                        <input type="text" class="form-control" name="fname" placeholder="Father's Name">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Mother'S Name</label>
                        <input type="text" class="form-control" name="mname" placeholder="Mother's Name">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Mobile Number</label>
                        <input type="number" class="form-control" name="mobile" placeholder="Mobile Number">
                    </div>

                </div> <br><br>

                <div class="form-row">

                    <div class="col-sm-4">
                        <label for="">Your Parmanent Address</label>
                        <textarea id="" class="form-control" name="paradds" placeholder="Parmanent Address"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <label for="">Your Temporary Address</label>
                        <textarea id="" class="form-control" name="temadds" placeholder="Temporary Address"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <label for="">Gender</label> <br>
                        Male <input type="radio" class="" name="gender" value="Male"> &emsp;
                        Female <input type="radio" class="" name="gender" value="Female">
                    </div>
                </div> <br>

                <div class="form-row">
                    <div class="col-sm-4">
                        <label for="">Enter Aaddhar Number</label>
                        <input type="Number" class="form-control" name="aaddhar" placeholder="0123-4567-7890">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Enter Pan Card Number </label>
                        <input type="text" class="form-control" name="pan" placeholder="Pan Card Number ">
                    </div>
                    <div class="col-sm-4">
                        <label for="">DOB</label>
                        <input type="date"  pattern="\d{4}-\d{2}-\d{2}" class="form-control" name="dob"
                            placeholder="last name">

                    </div>

                </div> <br>
                <div class="form-row">
                    <div class="col-sm-4">
                        <label for="">Image Upload</label>
                        <input type="file" class="form-control" name="img" placeholder="">
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
                        <input type="number" class="form-control" name="pf" placeholder="Your PF">
                    </div>
                    <div class="col-sm-4">
                        <label for="">ESI Number</label>
                        <input type="number" class="form-control" name="esi" placeholder="ESI Number">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Selary In Hand</label>
                        <input type="number" class="form-control" name="sel" placeholder="Selary In Hand">
                    </div>
                </div> <br><br>



                <div class="form-row">

                    <div class="col-sm-4">
                        <label for="">Date Of Join</label>
                        <input type="date" class="form-control" name="datejoin" placeholder="date Of Join">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Job Title</label>

                        <select class="form-group form-control" name="jobtitle">
                            <option value="select Input">Select Input</option>
                            <?php
                                $sel = mysqli_query($conn, "select * from category where action='active'");
                                
                            while ($sel_res = mysqli_fetch_array($sel)) {
                                ?>
                            <option value="<?php echo $sel_res['id'] ?>"><?php echo $sel_res['category_name'] ?>
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
                        <label for="">Account Number</label>
                        <input type="Number" class="form-control" name="account" placeholder="Account Number">
                    </div>
                    <div class="col-sm-4">
                        <label for="">IFSC Code </label>
                        <input type="text" class="form-control" name="ifsc" placeholder="IFSC Code ">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Bank Name</label>
                        <input type="text" class="form-control" name="bankname" placeholder="Bank Name">
                    </div>
                </div> <br>
                <div class="form-row">

                    <div class="col-sm-4">
                        <label for="">Account Holder Name</label>
                        <input type="text" class="form-control" name="holder" placeholder="Account Holder Name">
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
                        <label for="">Enter Reference Name</label>
                        <input type="text" class="form-control" name="ref" placeholder="Reference Name">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Reference ID </label>
                        <input type="number" class="form-control" name="refid" placeholder="Aadhar Number">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Mobile Number</label>
                        <input type="number" class="form-control" name="refnum" placeholder="Mobile Number">
                    </div>
                </div> <br> <br>


                <div class="form-row">

                    <div class="col-sm-4">
                        <label for="">Enter Relation Name</label>
                        <input type="text" class="form-control" name="relation" placeholder="Relation">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Reference DOB</label>
                        <input type="date" class="form-control" name="refdob" placeholder="">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Reference Gender</label> <br>
                        Male <input type="radio" class="" name="refgender" value="Male">&emsp;
                        Female <input type="radio" class="" name="refgender" value="Female">
                    </div>

                </div> <br> <br>

                <div class="form-row">


                    <div class="col-sm-4">
                        <label for="">Reference images</label>
                        <input type="file" class="form-control" name="refimg" multiple placeholder="">
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
                        <label for=""> Police Verification Image</label>
                        <input type="file" class="form-control" name="police[]" multiple>
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
                        <textarea id="" class="form-control" name="comment" placeholder="Comment Box"
                            style="height: 150%;"></textarea>
                    </div>

                </div> <br><br><br> </br><br>


                <div class="form-row">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-4">
                        <button class="btn btn-success">Form Submit</button>
                    </div>
                    <div class="col-sm-4">
                    </div>
                </div> <br> <br>

            </form>

            <?php include('./include/footer.php'); ?>