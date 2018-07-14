
<!--

Including head


                    -->
<?php include "head.php"?>

<!--

Including nav bar

                    -->

<?php include "nav.php";?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="images/slider/homepage1/1.jpg">
        </div>

        <div class="item">
            <img src="images/slider/homepage1/2.jpg">
        </div>

        <div class="item">
            <img src="images/slider/homepage1/3.jpg">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<section class="row team_section bgf">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-3 team_menu">
                <div class="row titleRow text-left">
                    <h2>Dr Sushant Srivastava</h2>
                </div>
                <div class="row">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active media"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                                <div class="media-left"><img src="images/pages/media-left-homepage/user.png" alt=""></div>
                                <div class="media-body media-middle">
                                    <h5>Profile</h5>
                                </div>
                            </a></li>
                        <li role="presentation" class="media"><a href="#pastExperiences" aria-controls="pastExperiences" role="tab" data-toggle="tab">
                                <div class="media-left"><img src="images/pages/media-left-homepage/past-experience.png" alt=""></div>
                                <div class="media-body media-middle">
                                    <h5>Past Experiences</h5>
                                    <div class="row designation"></div>
                                </div>
                            </a></li>
                        <li role="presentation" class="media"><a href="#academicQualification" aria-controls="academicQualification" role="tab" data-toggle="tab">
                                <div class="media-left"><img src="images/pages/media-left-homepage/academic.png" alt=""></div>
                                <div class="media-body media-middle">
                                    <h5>Academic Qualifications</h5>
                                </div>
                            </a></li>
                        <li role="presentation" class="media"><a href="#surgicalWork" aria-controls="surgicalWork" role="tab" data-toggle="tab">
                                <div class="media-left"><img src="images/pages/media-left-homepage/surgery.jpg" alt=""></div>
                                <div class="media-body media-middle">
                                    <h5>Surgical Work</h5>
                                </div>
                            </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-8 col-md-9 team_descss">
                <div class="row">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane media active" id="profile">
                            <div class="media-left media-bottom">
                                <a href="#"><img src="images/pages/doctors/drsushant.jpg" alt="" class="img-responsive"></a>
                            </div>
                            <div class="media-body">
                                <div class="row titleRow text-left">
                                    <h2>Profile</h2>
                                </div>
                                <p> Director, Cardiac Surgery
                                    <br>
                                    BLK Super Specialty Hospital, New Delhi
                                    <br><br>
                                    Dr. Sushant Srivastava is a Cardio-Vascular surgeon of national repute. His special area of expertise includes Beating Heart Bypass Surgery, Single, Double and Triple Valve Repairs and Replacements, Aortic Aneurysm Surgery including Endovascular Repairs and Complex Vascular Procedures on the Aorta, Carotid Arteries, and lower limb vessels.
                                <h4 style="color: blue;"><a href="drsushant.php">Read More.....</a></h4>
                                </p>
                                <ul class="social_list">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div><!-- Doctor about-->
                        <div role="tabpanel" class="tab-pane media" id="pastExperiences">
                            <div class="media-left media-bottom">
                                <a href="#"><img src="images/pages/doctors/drsushant.jpg" alt="" class="img-responsive"></a>
                            </div>
                            <div class="media-body">
                                <div class="row titleRow text-left">
                                    <h2>Past Experiences</h2>
                                    <h5>Sub Heading</h5>
                                </div>
                                <p>
                                <ul>
                                    <li>Assistant Professor AIIMS, New Delhi.</li>
                                    <li>Senior Consultant Cardiac Surgeon at Devki Devi Max Heart and Vascular Institute, Saket, New Delhi.</li>
                                    <li>Chief Cardiac Surgeon, Batra Hospital & Medical Research Centre, 	New Delhi. </li>
                                </ul>


                                </p>
                                <ul class="social_list">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div><!-- Doctor about-->
                        <div role="tabpanel" class="tab-pane media" id="academicQualification">
                            <div class="media-left media-bottom">
                                <a href="#"><img src="images/pages/doctors/drsushant.jpg" alt="" class="img-responsive"></a>
                            </div>
                            <div class="media-body">
                                <div class="row titleRow text-left">
                                    <h2>Academic Qualifications</h2>
                                </div>
                                <p>
                                <ul>
                                    <li>M. Ch. In Cardiothoracic and Vascular Surgery   AIIMS, New Delhi, 1994</li>
                                    <li>MS  in General Surgery : Patna Medical College, Patna, India, 1991.</li>
                                </ul>
                                </p>
                                <ul class="social_list">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div><!-- Doctor about-->
                        <div role="tabpanel" class="tab-pane media" id="surgicalWork">
                            <div class="media-left media-bottom">
                                <a href="#"><img src="images/pages/doctors/drsushant.jpg" alt="" class="img-responsive"></a>
                            </div>
                            <div class="media-body">
                                <div class="row titleRow text-left">
                                    <h2>Surgical Work</h2>
                                </div>
                                <p>
                                <ul>
                                    <li>Heart Transplant Surgeon</li>
                                    <li>Performed successful beating heart bypass on the oldest reported patient in India. 96 years old Mr. J. C Mehta of Delhi.</li>
                                    <li>Performed the first ‘STITCH-LESS’ valve implantation of INDIA.</li>
                                    <li>Performed the first “awake” CABG north of Delhi.</li>
                                    <li>Endovascular therapy for Aortic Aneurysms</li>
                                    <li>Aortic Aneurysm Surgery including Re-Dos and Hybrid Procedures</li>
                                    <li>Surgery for Congenital Heart Defects.</li>
                                    <li>Re - Do Valve and Bypass surgery.</li>
                                </ul>

                                </p>
                                <ul class="social_list">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div><!-- Doctor about-->
                    </div>
                    <div class="visible-xs view_all_btn_4_mobile">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="row service_tab">
    <div class="container">
        <div class="row titleRow">
            <h5>GET WELL SOON</h5>
            <h2>MEDICAL SERVICES</h2>
        </div>
        <div class="row">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified" role="tablist" id="service_tab">
                <li role="presentation" class="active"><a href="#heart_attack" aria-controls="heart_attack" role="tab" data-toggle="tab"><span></span>Heart Attack</a></li>
                <li role="presentation"><a href="#heart_failure" aria-controls="heart_failure" role="tab" data-toggle="tab"><span></span>Heart Failure</a></li>
                <li role="presentation"><a href="#mitral-valve-regurgitation" aria-controls="mitral-valve-regurgitation" role="tab" data-toggle="tab"><span></span>Mitral Valve Regurgitation</a></li>
                <li role="presentation"><a href="#breathlessness" aria-controls="breathlessness" role="tab" data-toggle="tab"><span></span>Breathlessness</a></li>
                <li role="presentation"><a href="#enlarged_heart" aria-controls="enlarged_heart" role="tab" data-toggle="tab"><span></span>Enlarged Heart</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="heart_attack">
                    <div class="col-sm-12">
                        <div class="row m0">
                            <div class="demo" data-ycp_title="Heart Attack" data-ycp_channel="PLAUk-GhX-XwWNdygaIqsYjc2OZgUKZiEL"></div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="heart_failure">
                    <div class="col-sm-12">
                        <div class="row m0">
                            <div class="demo" data-ycp_title="Hair Failure" data-ycp_channel="PLAUk-GhX-XwVyDHa7RjsRvHOLp1KKy5Kd"></div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="mitral-valve-regurgitation">
                    <div class="col-sm-12">
                        <div class="row m0">
                            <div class="demo" data-ycp_title="Mitral Valve Regurgitation" data-ycp_channel="PLAUk-GhX-XwVdtG7QRntDYsX7NZgFFEk7"></div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="breathlessness">
                    <div class="col-sm-12">
                        <div class="row m0">
                            <div class="demo" data-ycp_title="Breathlessness" data-ycp_channel="PLAUk-GhX-XwV2nSDT3H3POKae8RruAxUW"></div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="enlarged_heart">
                    <div class="col-sm-12">
                        <div class="row m0">
                            <div class="demo" data-ycp_title="Enlarged Heart" data-ycp_channel="PLAUk-GhX-XwWUkuC7L2D0BeejQidN0HiG"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php

    include "blog/processPHP/db.php";

    $query="SELECT post_id FROM posts ";
    $result=$connection->query($query);

    if($result->num_rows>0){
        $rowNum=$result->num_rows;

    ?>

        <div id="blogCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php

                $roundedInt=ceil($rowNum/4);

                for ($index=0;$index<$roundedInt;$index++){
                    if ($index==0){
                    ?>
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

                    <?php
                    }else{
                        ?>
                        <li data-target="#myCarousel" data-slide-to="<?php echo ($index);?>"></li>
                        <?php
                    }
                }
                ?>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php
                for ($index=0;$index<$roundedInt;$index++){
                    ?>

                    <div class="item <?php if($index==0){echo 'active';}?>">
                        <?php
                        $offset=$index*4;
                        $query="SELECT * from posts ORDER BY post_id DESC LIMIT $offset,4";
                        $result=$connection->query($query);

                        if($result->num_rows>0){
                            ?>
                            <section class="row recentpost_acc contentRowPad">
                                <div class="container">
                                    <div class="row m0 titleRow">
                                        <h5>recent posts</h5>
                                        <h2>from our blog</h2>
                                    </div>
                                    <div class="row recent_post_home recent_post_home3">
                                        <?php
                                        $count=1;
                                        while ($row=$result->fetch_assoc()){
                                            $title=$row['title'];
                                            $date=$row['date'];
                                            $tagLine=$row['tagline'];
                                            $userId=$row['user_id'];
                                            $postId=$row['post_id'];

                                            $query2="SELECT username FROM user WHERE user_id='$userId'";
                                            $result2=$connection->query($query2);
                                            while ($row2=$result2->fetch_assoc()){
                                                $userName=$row2['username'];
                                                break;
                                            }

                                            if ($count==1 || $count==3){
                                                ?>
                                                <div class="col-sm-12 col-md-6">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <a href="redirect.php?postId=<?php echo $postId;?>"><h4><?php echo $title?></h4></a>
                                                        <div class="row m0 meta">By : <?php echo $userName;?> &nbsp; on : <?php echo $date?></a></div>
                                                        <p><?php echo $tagLine;?></p>
                                                    </div>
                                                </div>
                                                <?php
                                            }else{
                                                ?>
                                                <div class="media">
                                                    <div class="media-body">
                                                        <a href="redirect.php?postId=<?php echo $postId;?>"><h4><?php echo $title?></h4></a>
                                                        <div class="row m0 meta">By : <?php echo $userName;?> &nbsp; on : <?php echo $date?></a></div>
                                                        <p><?php echo $tagLine;?></p>
                                                    </div>
                                                </div>
                                                </div>
                                                <?php
                                            }


                                            ?>


                                            <?php
                                            $count++;
                                        }
                                        ?>
                                    </div>
                                </div>
                            </section>
                            <?php
                        }



                        ?>



                    </div>

                    <?php
                }
                ?>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#blogCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#blogCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <?php
            }

?>

<section class="row recent_post_home2">
    <div class="container">
        <div class="row titleRow">
            <h5>What People Say</h5>
            <h2>Our Testimonials</h2>
        </div>
        <div class="row">
            <div class="col-sm-4 recent_post">
                <div class="row m0 inner">
                    <div class="postText row m0">
                        Etiam tristique sagittis pulvinar. Cras scelerisque dui ut, bibendum ante. dit neque eget lobortis. Nam eleifend sollicitudin nulla quis Interdum et malesuada fames.
                    </div>
                    <div class="media authorMeta">
                        <div class="media-left"><img src="images/pages/doctors/1.png" alt=""></div>
                        <div class="media-body media-middle">
                            <h5>Johnathan doe</h5>
                            <div class="row designation">www.themedesigner.in</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 recent_post">
                <div class="row m0 inner">
                    <div class="postText row m0">
                        Etiam tristique sagittis pulvinar. Cras scelerisque dui ut, bibendum ante. dit neque eget lobortis. Nam eleifend sollicitudin nulla quis Interdum et malesuada fames.
                    </div>
                    <div class="media authorMeta">
                        <div class="media-left"><img src="images/pages/doctors/1.png" alt=""></div>
                        <div class="media-body media-middle">
                            <h5>Angelina johnson</h5>
                            <div class="row designation">www.themeforest.net</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 recent_post">
                <div class="row m0 inner">
                    <div class="postText row m0">
                        Etiam tristique sagittis pulvinar. Cras scelerisque dui ut, bibendum ante. dit neque eget lobortis. Nam eleifend sollicitudin nulla quis Interdum et malesuada fames.
                    </div>
                    <div class="media authorMeta">
                        <div class="media-left"><img src="images/pages/doctors/1.png" alt=""></div>
                        <div class="media-body media-middle">
                            <h5>bekka adkins</h5>
                            <div class="row designation">www.themedesigner.in</div>
                        </div>
                    </div>
                </div>
            </div>
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
                    <a href="#" data-toggle="modal" data-target="#appointmefnt_form_pop" class="view_all">book your appointment</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"?>

<div class="modal fade" id="appointmefnt_form_pop" tabindex="-1" role="dialog" aria-labelledby="appointmefnt_form_pop">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <form action="#" class="row m0 appointment_home_form2">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times-circle-o"></i>
                </button>
                <h2 class="title">BOOK<br>NOW</h2>
                <div class="form_inputs row m0">
                    <div class="row m0 input_row">
                        <div class="col-sm-12 col-md-12 col-lg-6 p0">
                            <label for="app_fname">First Name</label>
                            <input type="text" class="form-control" id="app_fname" placeholder="Your First Name">
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 p0">
                            <label for="app_lname">Last Name</label>
                            <input type="text" class="form-control" id="app_lname" placeholder="Your Last Name">
                        </div>
                    </div>
                    <div class="row m0 input_row">
                        <label for="app_email">Email Address</label>
                        <input type="email" class="form-control" id="app_email" placeholder="Enter your Email Address">
                    </div>
                    <div class="row m0 input_row">
                        <label for="app_phone">Phone Number</label>
                        <input type="tel" class="form-control" id="app_phone" placeholder="Enter your Phone Number">
                    </div>
                    <div class="row m0 input_row">
                        <label for="app_date">Booking Date</label>
                        <div class="input-append date">
                            <input type="text" class="form-control" name="date" id="app_date" placeholder="Select the Appointment Date">
                            <span class="add-on"><i class="icon-th"></i></span>
                        </div>
                    </div>
                    <div class="row m0 input_row">
                        <label for="app_texts">Message</label>
                        <textarea  id="app_texts" class="form-control" placeholder="Write down the Message"></textarea>
                    </div>
                    <input type="submit" class="form-control" value="book your appointment now">
                </div>
                <div class="row m0 form_footer">
                    <a href="#"><img src="images/call-now3.png" alt="">123 7890 456</a>
                </div>
            </form>
        </div>
    </div>
</div>

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

<!--RV-->
<script src="vendors/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!--Strella JS-->
<script src="js/theme.js"></script>
<script src="js/revs.js"></script>


<!--Youtube JS-->

<script src="js/ycp.min.js"></script>

<script>
    $(function() {

        $("#unix").ycp({
            apikey : 'AIzaSyBvpam8-Lxe6sDZttG7GK7EQ_dkl8rFVus',
            playlist : 50,
            autoplay : true,
            related : true
        });

        $(".demo").ycp({
            apikey : 'AIzaSyBvpam8-Lxe6sDZttG7GK7EQ_dkl8rFVus'
        });

        $("#go").click(function(){
            if($("#tit").val() != '' && $("#ch").val() != ''){
                $("#unix").data('ycp_title', $("#tit").val());
                $("#unix").data('ycp_channel', $("#ch").val());
                $("#unix").ycp({
                    apikey : 'AIzaSyBvpam8-Lxe6sDZttG7GK7EQ_dkl8rFVus',
                    playlist : 50,
                    autoplay : true,
                    related : true
                });
            }else{
                alert('Not empty!');
            }
            return false;
        });

    });
</script>

</body>
</html>
