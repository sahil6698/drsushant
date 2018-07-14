<?php include "head.php";?>
<?php include "nav.php";?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">

        <div class="item active">
            <section class="row recentpost_acc contentRowPad">
                <div class="container">
                    <div class="row m0 titleRow">
                        <h5>recent posts</h5>
                        <h2>from our blog</h2>
                    </div>
                    <div class="row recent_post_home recent_post_home3">
                        <div class="col-sm-12 col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <a href="redirect.php?postId=6"><img src="images/blog/1.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="media-body">
                                    <a href="redirect.php?postId=6"><h4>Heart Attacks: everything to be known</h4></a>
                                    <div class="row m0 meta">By : admin &nbsp; on : 2018-07-14</a></div>
                                    <p></p>
                                </div>
                            </div>


                            <div class="media">
                                <div class="media-left">
                                    <a href="redirect.php?postId=4"><img src="images/blog/1.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="media-body">
                                    <a href="redirect.php?postId=4"><h4>Heart Attacks: everything to be known</h4></a>
                                    <div class="row m0 meta">By : admin &nbsp; on : 2018-07-14</a></div>
                                    <p></p>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-12 col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <a href="redirect.php?postId=3"><img src="images/blog/1.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="media-body">
                                    <a href="redirect.php?postId=3"><h4>Cardiac arrest: Know the causes and prevent it.</h4></a>
                                    <div class="row m0 meta">By : admin &nbsp; on : 2018-07-13</a></div>
                                    <p></p>
                                </div>
                            </div>


                            <div class="media">
                                <div class="media-left">
                                    <a href="redirect.php?postId=2"><img src="images/blog/1.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="media-body">
                                    <a href="redirect.php?postId=2"><h4>What is heart failure?</h4></a>
                                    <div class="row m0 meta">By : admin &nbsp; on : 2018-07-13</a></div>
                                    <p></p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </section>



        </div>


        <div class="item ">
            <section class="row recentpost_acc contentRowPad">
                <div class="container">
                    <div class="row m0 titleRow">
                        <h5>recent posts</h5>
                        <h2>from our blog</h2>
                    </div>
                    <div class="row recent_post_home recent_post_home3">
                        <div class="col-sm-12 col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <a href="redirect.php?postId=1"><img src="images/blog/1.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="media-body">
                                    <a href="redirect.php?postId=1"><h4>Heart Attacks: everything to be known</h4></a>
                                    <div class="row m0 meta">By : admin &nbsp; on : 2018-07-13</a></div>
                                    <p></p>
                                </div>
                            </div>


                        </div>
                    </div>
            </section>



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

<?php include "footer.php";?>


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


