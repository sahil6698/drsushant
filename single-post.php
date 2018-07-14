<?php
session_start();
if (isset($_SESSION['postId'])){
    $postId=$_SESSION['postId'];
    include "blog/processPHP/db.php";
    ?>

    <!--

    Including head


                        -->
    <?php include "head.php"?>

    <!--

    Including nav bar

                        -->

    <?php include "nav.php";?>

    <section class="row content_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8">
                    <div class="row m0 blog single_post">
                        <?php
                        $query="SELECT * FROM posts WHERE post_id='$postId'";
                        $result=$connection->query($query);
                        while ($row=$result->fetch_assoc()){
                            $body=$row['body'];
                            $userId=$row['user_id'];
                            $title=$row['title'];
                            $date=$row['date'];
                            $time=$row['time'];
                        }

                        $query2="SELECT username FROM user where user_id='$userId'";
                        $result2=$connection->query($query2);
                        while ($row2=$result2->fetch_assoc()){
                            $userName=$row2['username'];
                            break;
                        }
                        ?>
                        <h3><?php echo $title;?></h3>
                        <div class="row m0 meta">By : <?php echo $userName;?> on : <?php echo $date?>
                        </div>
                        <p>
                            <?php echo base64_decode($body);?>
                        </p>


                        </div> <!--Single Post-->
            </div>
        </div>
    </section>

    <section class="row book_banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-9">
                    <div class="row m0">
                        <h3 class="bannerTitle">ONLINE HASSLE FREE Appointment BOOKING</h3>
                        <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacinia, ipsum eu vulputate pulvinar,</h5>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3">
                    <div class="row m0">
                        <a href="#appointment" class="view_all">book your appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>











    <?php include "footer.php"?>

    <!--jQuery, Bootstrap and other vendor JS-->

    <!--jQuery-->
    <script src="js/jquery-2.1.3.min.js"></script>

    <!--Bootstrap JS-->
    <script src="js/bootstrap.min.js"></script>

    <!--Owl Carousel-->
    <script src="vendors/owl.carousel/js/owl.carousel.min.js"></script>

    <!--Counter Up-->
    <script src="vendors/counterup/jquery.counterup.min.js"></script>

    <!--Waypoints-->
    <script src="vendors/waypoints/waypoints.min.js"></script>

    <!--Bootstrap Date-->
    <script src="vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

    <!--FlexSlider-->
    <script src="vendors/flexslider/jquery.flexslider-min.js"></script>

    <!--Strella JS-->
    <script src="js/theme.js"></script>
    </body>
    </html>







<?php


}else{
    header("location:index.php");
    exit();
}