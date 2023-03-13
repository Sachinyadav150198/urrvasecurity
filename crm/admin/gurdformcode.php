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

    $paradds = $_POST['paradds'];
    $temadds = $_POST['temadds'];
    $fnagenderme = $_POST['gender'];

    $aaddhar = $_POST['aaddhar'];
    $pan = $_POST['pan'];
    $dob = $_POST['dob'];

    // $img = implode('.',$_FILES['img']['name']);
    $img = $_FILES['img']['name'];
    $img1 = $_FILES['img']['tmp_name'];

    $pf = $_POST['pf'];
    $esi = $_POST['esi'];
    $sel = $_POST['sel'];

    $datejoin = $_POST['datejoin'];
    $jobtitle = $_POST['jobtitle'];

    $account = $_POST['account'];
    $ifsc = $_POST['ifsc'];
    $bankname = $_POST['bankname'];
    $holder = $_POST['holder'];
     
    $ref = $_POST['ref'];
    $refid = $_POST['refid'];
    $refnum = $_POST['refnum'];

    $relation = $_POST['relation'];
    $refdob = $_POST['refdob'];
    $refgender = $_POST['refgender'];

    $refimg = $_FILES['refimg']['name'];
    // $refimg = implode(',',$_FILES['refimg']['name']);
    $refimg1 = $_FILES['refimg']['tmp_name'];

    // $verification = implode(',',$_FILES['police']['name']);
    // $verification1 = $_FILES['police']['tmp_name'];

    $action = $_POST['action'];

    $comment = $_POST['comment'];
    
    $date = date("d/m/Y");
    date_default_timezone_set("asia/kolkata");
    $time = date("h:i:sa");

    $location = "./upload/";

$file_name = $_FILES['police']['name'];
$location = "upload/";
$image_name = implode(",", $file_name);
if(!empty($file_name))
{
    foreach($file_name as $key=>$val)
    {
        $targetPath = $location . $val;
        move_uploaded_file($_FILES["police"]['tmp_name'][$key], $targetPath);
    }
}


    $ins = "insert into blog(user_name,user_middle_name,user_last_name,user_father_name,user_mother_name,user_mobile,user_per_address,user_tmp_address,user_status,user_aaddhar,user_pancard,user_dob,user_img,user_pf,user_esi_number,salery,datejoin,jobtitle,user_account,user_ifsc_code,bankname,user_bank_name,ref_name,ref_id,ref_mobile,ref_relation,ref_dob,ref_gender,ref_img,police_verification,date,time,action,comment) values('$name','$midname','$lname','$fname','$mname','$mobile','$paradds','$temadds','$fnagenderme','$aaddhar','$pan','$dob','$img','$pf','$esi','$sel','$datejoin',$jobtitle,'$account','$ifsc','$bankname','$holder','$ref','$refid','$refnum','$relation','$refdob','$refgender','$refimg','$image_name','$date','$time','$action','$comment')";
    
    if(mysqli_query($conn,"$ins"))
    {
        move_uploaded_file($img1,$location.$img);
        move_uploaded_file($refimg1,$location.$refimg);
        // move_uploaded_file($verification1,$location.$verification);
        header("location:gurdprofile.php");
        echo "data store";

    }
    else
    {
        echo "data not store";
    } 



?>