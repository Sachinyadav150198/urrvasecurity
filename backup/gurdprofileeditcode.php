<?php
include('./include/config.php');
?>

<?php
    $idd = $_POST['id'];
    $name = $_POST['name'];
    $midname = $_POST['midname'];
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $mobile = $_POST['mobile'];
    $adds = $_POST['adds'];
    $paradds = $_POST['paradds'];
    $temadds = $_POST['temadds'];
    $fnagender = $_POST['gender'];
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

    $sel = "select * from blog where id=$idd";
    $r = mysqli_query($conn,$sel);
    $res = mysqli_fetch_array($r);
    $loc = "upload/".$res['user_img'];

    $up = "update blog set user_name='$name',user_middle_name='$midname',user_last_name='$lname',user_father_name='$fname',user_mother_name='$mname',user_mobile='$mobile',user_address='$adds',user_per_address='$paradds',user_tmp_address='$temadds',user_status='$fnagender',user_pf='$pf',user_esi_number='$esi',user_account='$account',user_ifsc_code='$ifsc',user_bank_name='$holder',user_aaddhar='$aaddhar',user_pancard='$pan',ref_name='$ref',user_img='$img',user_dob='$dob',ref_id='$refid',ref_relation='$relation',ref_mobile='$refnum',ref_dob='$refdob',ref_gender='$refgender',ref_img='$refimg',police_verification='$verification',date='$date',time='$time',action='$action' where id='$idd'";
    if(mysqli_query($conn,"$up"))
    {
        unlink($loc);
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