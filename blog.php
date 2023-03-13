

<!doctype html>



<html lang="en">



<title> Best Security Guard Services in NCR - Urvya Security</title>



    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description"

        content=" Urvya Security provides reliable security guard services to protect your premises. Our experienced guards ensure complete safety and security.">







    <style>

    input::-webkit-outer-spin-button,

    input::-webkit-inner-spin-button {

        -webkit-appearance: none;

        margin: 0;

    }





    input[type=number] {

        -moz-appearance: textfield;

    }

    

    #section6 button{

        font-size:19px;

    }



    @media (min-width: 320px) and (max-width: 680px) {



        #wim img {

            width: 100%;

            max-height: 300px;



        }



        /* section5 (read more and read less coding query) */

        #read1{

          margin-top:30px;

        }

        /* End Section5 */

        

        #section6 button{

        font-size:11px;

        margin-top: 5px;

    }



    }



    #wim img {

        width: 100%;

        height: 500px;



    }



    /*section5(Read more and Read Less coding style)  */



    #more,#more1,#more2,#more3,#more4,#more5 {

        display: none;



    }



    #myBtn,#myBtn1,#myBtn2,#myBtn3,#myBtn4,#myBtn5 {

      

        background-color: white;

        border: none;

        color: #0d6efd;

      

    }

    /* End Section5 */



    </style>





</head>







    <?php include ('header.php'); ?>



    </div>











    <!--Section1:Slider -->



    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">



        <div class="carousel-inner">



            <div class="carousel-item active" id="wim">



                <img src="<?php echo site_Url; ?>Banner1366.png" class="d-block w-100" alt="..." style="">



            </div>



            <div class="carousel-item" id="wim">



                <img src="<?php echo site_Url; ?>frontbanner02.png" class="d-block w-100" alt="..." style="">



            </div>



            <div class="carousel-item" id="wim">



                <img src="<?php echo site_Url; ?>frontbanner03.png" class="d-block w-100" alt="..." style="">



            </div>



        </div>



        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"



            data-bs-slide="prev">



            <span class="carousel-control-prev-icon" aria-hidden="true"></span>



            <span class="visually-hidden">Previous</span>



        </button>



        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"



            data-bs-slide="next">



            <span class="carousel-control-next-icon" aria-hidden="true"></span>



            <span class="visually-hidden">Next</span>



        </button>



    </div>



    <!-- End -->











    <!-- CLIENTS SECTION -->



    <div class="container pt-2 pb-3 mt-2">



        <div class="row">



            <div class="col-md-12">



                <!-- <button class="butts1 px-5"><span style="color:white;">Why Choose us</span></button> -->



                <div class="row">



                    <div class="col-md-6">



                        <h1 class="pt-4"><b>Our Blog</b></h1>



                    </div>







                </div>



                <!-- CARD1 -->



                <div class="row pt-3 ">







                    <?php

                        

                        include('./blogadmin/admin/include/config.php');



                    $sel = mysqli_query($conn,"select * from blogs where status='Active'");



                    while($res = mysqli_fetch_array($sel))



                    {



                ?>







                    <div class="col-md-4" id="mycards">



                        <div class="card" style="width: 100%;">



                            <div class="card-body">



                               <a href="<?php echo site_Url; ?><?php echo $res['slug']; ?>">
                               <img src="<?php echo site_Url ?>blogadmin/admin/upload/<?php echo $res['img']; ?>" alt="not image" style="height: 140px;width:100%">
                               </a> 



                                <a href="<?php echo site_Url; ?><?php echo $res['slug']; ?>" style="color: black;text-decoration:none"><h5 class="card-title pt-3"><?php echo $res['title']; ?></h5></a>







                                <div class="mycardsbtn">



                                    <p class="card-text" style="height:100px;">



                                        <?php echo substr(strip_tags($res['content']), 0, 100) . "...";?><br><br><a class="blog_read_btn" href="<?php echo $res['slug']; ?>">Read More</a></p>



                                </div>



                            </div>



                        </div>



                    </div>







                    <?php



                    }



                    ?>



                    <!-- END CARD1 -->











                </div>











            </div>











        </div>







    </div>



    <!-- END CLIENTS SECTION -->





<?php include('footer.php'); ?>