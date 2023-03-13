<?php
include('./include/config.php');
?>

<?php

    $name = $_POST['name'];
    $midname = $_POST['midname'];
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $mobile = $_POST['mobile'];
    $adds = $_POST['adds'];
    $paradds = $_POST['paradds'];
    $temadds = $_POST['temadds'];
    $fnagenderme = $_POST['gender'];
    $pf = $_POST['pf'];
    $esi = $_POST['esi'];
    $account = $_POST['account'];
    $ifsc = $_POST['ifsc'];
    $holder = $_POST['holder'];
    $aaddhar = $_POST['aaddhar'];
    $pan = $_POST['pan'];
    $ref = $_POST['ref'];
    $img = $_FILES['img']['name'];
    $img1 = $_FILES['img']['tmp_name'];
    $dob = $_POST['dob'];
    $refid = $_POST['refid'];
    $relation = $_POST['relation'];
    $refnum = $_POST['refnum'];
    $refdob = $_POST['refdob'];
    $refgender = $_POST['refgender'];
    $refimg = $_FILES['refimg']['name'];
    $refimg1 = $_FILES['refimg']['tmp_name'];
    $verification = $_FILES['verification']['name'];
    $verification1 = $_FILES['verification']['tmp_name'];
    $action = $_POST['action'];
    $date = date("d/m/Y");
    date_default_timezone_set("asia/kolkata");
    $time = date("h:i:sa");

    $location = "upload/";

    $ins = "insert into blog(user_name,user_middle_name,user_last_name,user_father_name,user_mother_name,user_mobile,user_address,user_per_address,user_tmp_address,user_status,user_pf,user_esi_number,user_account,user_ifsc_code,user_bank_name,user_aaddhar,user_pancard,ref_name,user_img,user_dob,ref_id,ref_relation,ref_mobile,ref_dob,ref_gender,ref_img,police_verification,date,time,action) values('$name','$midname','$lname','$fname','$mname','$mobile','$adds','$paradds','$temadds','$fnagenderme','$pf','$esi','$account','$ifsc','$holder','$aaddhar','$pan','$ref','$img','$dob','$refid','$relation','$refnum','$refdob','$refgender','$refimg','$verification','$date','$time','$action')";
    // echo $ins;
    if(mysqli_query($conn,"$ins"))
    {
        move_uploaded_file($img1,$location.$img);
        move_uploaded_file($refimg1,$location.$refimg);
        move_uploaded_file($verification1,$location.$verification);
        header("location:gurdprofile.php");
        echo "data store";  
    }
    else
    {
        echo "data not store";
    } 



?>