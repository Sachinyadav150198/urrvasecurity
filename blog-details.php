<?php

include("./blogadmin/admin/include/config.php");

$array = explode("/", $_SERVER['REQUEST_URI']);

$MyUrl = $array[count($array) - 1];

// var_dump($MyUrl); die();



$sel = "select * from blogs where slug='" . $MyUrl . "'";



//  echo $sel;



$sqlsubmenu = mysqli_query($conn, $sel);



$row = mysqli_fetch_array($sqlsubmenu);



?>

<?php

    if(isset($_POST['Submit']))
    {
        $Name = mysqli_real_escape_string($conn,$_POST['Name']);
        $Email = mysqli_real_escape_string($conn,$_POST['Email']);
        $Website = mysqli_real_escape_string($conn,$_POST['Website']);
        $Comment = mysqli_real_escape_string($conn,$_POST['Comment']);

        $ins = "insert into comment set 
        name='$Name',
        email = '$Email',
        website = '$Website',
        comm = '$Comment'
        ";

        if(mysqli_query($conn,$ins))
        {
            echo "<script> window.location.href='$MyUrl';alert('Your Comment is Submitted') </script>";
        }

    }

?>

<!doctype html>



<html lang="en">







<head>







    <!-- Google Tag Manager -->



    <script>
        (function(w, d, s, l, i) {



            w[l] = w[l] || [];



            w[l].push({



                'gtm.start': new Date().getTime(),



                event: 'gtm.js'



            });



            var f = d.getElementsByTagName(s)[0],



                j = d.createElement(s),



                dl = l != 'dataLayer' ? '&l=' + l : '';



            j.async = true;



            j.src =



                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;



            f.parentNode.insertBefore(j, f);



        })(window, document, 'script', 'dataLayer', 'GTM-5CQM328');
    </script>



    <!-- End Google Tag Manager -->







    <!-- Required meta tags -->



    <meta charset="utf-8">



    <meta name="viewport" content="width=device-width, initial-scale=1">







    <title><?php echo $row['title']; ?></title>







    <meta name="description" content="<?php echo $row['meta_description']; ?>">







    <link rel="canonical" href="<?php echo site_Url; ?>" />







    <!-- <link rel="shortcut icon" href="<?php # echo site_Url; 
                                            ?>urvya-fav.png"> -->









    <?php include('./include/css.php'); ?>





    <?php include('./header.php'); ?>







    <style>
        input::-webkit-outer-spin-button,



        input::-webkit-inner-spin-button {



            -webkit-appearance: none;



            margin: 0;



        }











        input[type=number] {



            -moz-appearance: textfield;



        }







        #section6 button {



            font-size: 19px;



        }







        @media (min-width: 320px) and (max-width: 680px) {







            #wim img {



                width: 100%;



                max-height: 300px;







            }







            /* section5 (read more and read less coding query) */



            #read1 {



                margin-top: 30px;



            }







            /* End Section5 */







            #section6 button {



                font-size: 11px;



                margin-top: 5px;



            }







        }







        #wim img {



            width: 100%;



            height: 500px;







        }







        /*section5(Read more and Read Less coding style)  */







        #more,



        #more1,



        #more2,



        #more3,



        #more4,



        #more5 {



            display: none;







        }







        #myBtn,



        #myBtn1,



        #myBtn2,



        #myBtn3,



        #myBtn4,



        #myBtn5 {







            background-color: white;



            border: none;



            color: #0d6efd;







        }







        /* End Section5 */











        .blog_read_btn {



            float: left;



            width: auto;



            background: #151515;



            color: #fff;



            text-decoration: none;



            padding: 3px 10px;



            border-radius: 2px;











        }







        .card-text a:hover {



            float: left;



            width: auto;



            background: #151515;



            color: #fff;



            text-decoration: none;



            padding: 3px 10px;



            border-radius: 2px;







        }



















        .accordion {



            background-color: #eee;



            color: #444;



            cursor: pointer;



            padding: 18px;



            width: 100%;



            border: none;



            text-align: left;



            outline: none;



            font-size: 15px;



            transition: 0.4s;



        }







        .active,



        .accordion:hover {



            background-color: #ccc;



        }







        .panel {



            padding: 0 18px;



            display: none;



            background-color: white;



            overflow: hidden;



        }











        button.accordion:after {



            content: '\002B';



            color: #777;



            font-weight: bold;



            float: right;



            margin-left: 5px;



        }







        button.accordion.active:after {



            content: "\2212";



        }
    </style>











</head>







<body>




    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5CQM328" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>




    <div class="conatainer">
        <div class="row">
            <img src="<?php echo site_Url; ?>blogadmin/admin/upload/<?php echo $row['img']; ?>" class="img-fluid" alt="Responsive image" style="height:500px;">
        </div>
    </div>







    <!-- CLIENTS SECTION -->



    <div class="container pt-2 pb-3 mt-2">



        <div class="row">



            <div class="col-md-12">



                <!-- <button class="butts1 px-5"><span style="color:white;">Why Choose us</span></button> -->



                <div class="row">



                    <div class="col-md-12">



                        <h1 class="pt-4"><b><?php echo $row['title'] ?></b></h1>



                    </div>







                </div>



                <!-- CARD1 -->



                <div class="row pt-3 ">







                    <?php echo $row['content'] ?>







                </div>















            </div>







            <div class="col-md-12">



                <!-- <button class="accordion">Section 1</button> -->



                <!-- <div class="panel">



                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut



                       labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco



                       laboris nisi ut aliquip ex ea commodo consequat.</p>



                </div> -->







                <script>
                    var acc = document.getElementsByClassName("accordion");



                    var i;







                    for (i = 0; i < acc.length; i++) {



                        acc[i].addEventListener("click", function() {



                            this.classList.toggle("active");



                            var panel = this.nextElementSibling;



                            if (panel.style.display === "block") {



                                panel.style.display = "none";



                            } else {



                                panel.style.display = "block";



                            }



                        });



                    }
                </script>



            </div>

                    <style>
                        .form-group label
                        {
                            padding-top: 17px;
                        }
                        /* .form-group input
                        {
                            outline: none;
                        } */
                    </style>


            <div class="col-md-12 pt-3">
                <h3>Leave a Comment </h3>
                <div class="col-sm-4">
                    <form method="post">
                        <div class="form-group">
                            <label for="">Your Name *</label>
                            <input type="text" placeholder="Enter Your Name" class="form-control" name="Name" id="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="">Your Email *</label>
                            <input type="email" placeholder="Enter Your Email" class="form-control" name="Email" id="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="">Your Website</label>
                            <input type="text" placeholder="Enter Your Website" class="form-control" name="Website" id="Website">
                        </div>
                        <div class="form-group">
                        <label for="">Your Message </label>
                            <textarea name="Comment" placeholder="Enter Your Message." class="form-control" id="Comment" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group pt-3">
                            <input type="Submit" value="Post Comment" class="btn btn-success form-group" name="Submit" id="Submit">
                        </div>
                    </form>
                </div>
            </div>



        </div>







    </div>



    <!-- END CLIENTS SECTION -->











    <?php include('./footer.php'); ?>