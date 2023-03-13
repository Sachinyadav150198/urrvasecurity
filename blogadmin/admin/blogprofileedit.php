<?php include('./include/config.php'); ?>

<?php include('./include/setting.php'); ?>





<?php



$id = $_REQUEST['id'];



if (isset($_POST['Submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);

    $url1 = mysqli_real_escape_string($conn,$_POST['url']);

    $lower = strtolower($url1);

    $match = '/[^A-Za-z0-9]+/';

    $rep = '-';

    $urlname = preg_replace($match,$rep,$lower);

    $pagename = mysqli_real_escape_string($conn, $_POST['pagename']);

    $pagedesc = mysqli_real_escape_string($conn, $_POST['pagedesc']);

    $pagekey = mysqli_real_escape_string($conn, $_POST['pagekey']);

    $content = mysqli_real_escape_string($conn, $_POST['content']);

    $img = mysqli_real_escape_string($conn, $_FILES['img']['name']);

    $target_dir = "upload/";

    $target_file = $target_dir . basename($_FILES["img"]["name"]);

    $uploadOk = 1;

    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));



    // Check if image file is a actual image or fake image

    if (isset($_POST["submit"])) {

        $check = getimagesize($_FILES["img"]["tmp_name"]);

        if ($check !== false) {

            echo "File is an image - " . $check["mime"] . ".";

            $uploadOk = 1;

        } else {

            echo "<script>window.location.href='index.php';alert('File is not an image.')</script>";

            $uploadOk = 0;

        }

    }



    // Check if file already exists

    if (file_exists($target_file)) {

        // echo "Sorry, file already exists.";

        echo "<script>window.location.href='index.php';alert('Sorry, file already exists.')</script>";

        $uploadOk = 0;

    }



    // Check file size

    if ($_FILES["img"]["size"] > 1024 * 500000) {

        // echo "Sorry, your file is too large.";

        echo "<script>window.location.href='index.php';alert('Sorry, your file is too large.')</script>";

        $uploadOk = 0;

    }



    // Allow certain file formats

    if (

        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"

        && $imageFileType != "gif"

    ) {

        // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";

        echo "<script>window.location.href='index.php';alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed')</script>";

        $uploadOk = 0;

    }



    // Check if $uploadOk is set to 0 by an error

    if ($uploadOk == 0) {

        // echo "Sorry, your file was not uploaded.";

        echo "<script>window.location.href='index.php';alert('Sorry, your file was not uploaded.')</script>";

        // if everything is ok, try to upload file

    } else {

        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {

            echo "The file " . htmlspecialchars(basename($_FILES["img"]["name"])) . " has been uploaded.";

        } else {

            // echo "Sorry, there was an error uploading your file.";

            echo "<script>window.location.href='index.php';alert('Sorry, there was an error uploading your file.')</script>";

        }

    }



    // Check if image file is a actual image or fake image

    $imgtype = mysqli_real_escape_string($conn, $_FILES['img']['tmp_name']);

    $active = mysqli_real_escape_string($conn, $_POST['action']);



     $loc = "upload/";



    $ins = "update blogs set

       title= '$name',

       slug = '$urlname',

       meta_title='$pagename',

       meta_keyword = '$pagekey',

       meta_description= '$pagedesc',

       content= '$content',

       img = '$img',

       status = '$active' where id='$id' ";



    if (mysqli_query($conn, $ins)) {

        // unlink($loc);

        move_uploaded_file($imgtype, $loc . $img);

        header('location:blogprofile.php');

    } else {

        // echo "data not insert";

    }

}





?>









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



            $s = "select * from blogs where id='$id'";

            $sel = mysqli_query($conn, $s);

            $res = mysqli_fetch_array($sel);

            ?>



            <form method="POST" enctype="multipart/form-data">

                <input type="hidden" name="idd" id="" value="<?php echo $res['id'] ?>">

                <div class="form-row">

                    <div class="col-sm-6">

                        <label for="">Enter Blog Name</label>

                        <input type="text" class="form-control" name="name" value="<?php echo $res['title']; ?>">

                    </div>



                </div> <br> <br>



                <div class="form-row">

                    <div class="col-sm-6">

                        <label for="">Enter Blog Url</label>

                        <input type="text" class="form-control" name="url" value="<?php echo $res['slug'] ?>">

                    </div>

                    <div class="col-sm-6">

                        <label for="">Enter Page Name</label>

                        <input type="text" class="form-control" name="pagename" value="<?php echo $res['meta_title'] ?>">

                    </div>



                </div> <br><br>



                <div class="form-row">

                    <div class="col-sm-6">

                        <label for="">Enter Page Description</label>

                        <input type="text" class="form-control" name="pagedesc" value="<?php echo $res['meta_description'] ?>">

                    </div>

                    <div class="col-sm-6">

                        <label for="">Enter Page Keyword</label>

                        <input type="text" class="form-control" name="pagekey" value="<?php echo $res['meta_keyword'] ?>">

                    </div>



                </div> <br><br>



                <div class="form-row">

                    <div class="col-sm-12">

                        <label for="">Enter Blog Content</label> <br>

                        <textarea name="content" id="about" class="form-control" cols="185" rows="10" placeholder="Enter  Blog Content Here...."><?php echo $res['content'] ?></textarea>

                    </div>



                </div> <br><br>



                <div class="form-row">

                    <div class="col-sm-4">

                        <label for="">Image Upload</label> <br>

                        <img src="<?php echo site_Url; ?>admin/upload/<?php echo $res['img']; ?>" alt="not image" style="height:100px;width:100px;">

                        <input type="file" class="form-control" name="img" multiple placeholder="">

                    </div>



                </div> <br> <br>



                <div class="form-row">



                    <div class="col-sm-4">

                        <label for=""> Action</label>

                        <?php $active = $res['status']; ?>

                        <select class="form-group form-control" name="action">

                            <option value="Active" <?php if ($active == 'Active') { ?> selected="selected" <?php } ?>>Active

                            </option>

                            <option value="InActive" <?php if ($active == 'InActive') { ?> selected="selected" <?php } ?>>

                                InActive</option>

                        </select>

                    </div>



                </div> <br> <br>



                <div class="form-row">

                    <div class="col-sm-4"></div>

                    <div class="col-sm-3">

                        <!-- <button class="btn btn-success">Submit</button> -->

                        <input type="submit" value="Submit" name="Submit" class="form-control btn btn-success">

                    </div>

                    <div class="col-sm-5"></div>

                </div> <br> <br>



            </form>



            <?php include('./include/footer.php'); ?>