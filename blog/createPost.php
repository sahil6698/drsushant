<?php session_start();

if (isset($_SESSION['username'])){
    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Create Post</title>
        <!-- Favicon-->
        <link rel="icon" href="../../favicon.ico" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core Css -->
        <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Waves Effect Css -->
        <link href="plugins/node-waves/waves.css" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="plugins/animate-css/animate.css" rel="stylesheet" />

        <!-- Custom Css -->
        <link href="css/style.css" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="css/themes/theme-red.css" rel="stylesheet" />
    </head>


    <body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="dashboard.php">Blog Post Manager</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dr Sushant</div>
                    <div class="email">Admin</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="processPHP/logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="dashboard.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="createPost.php">
                            <i class="material-icons">text_fields</i>
                            <span>Create Post</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <!-- #Top Bar -->

    <section class="content">
        <div class="container-fluid">
                <?php if (isset($_SESSION['successMessage'])){
                    ?>
                  <div class="row clearfix" style="margin-top: 10px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="alert-success" >
                                <div class="header" style="color: white; font-family: Montserrat-Bold;font-size: 1.5em;">

                                <?php echo $_SESSION['successMessage']; unset($_SESSION['successMessage']);?>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                    <?php
                }
                ?>
<!---->
<!--            <div class="row clearfix" style="margin-top: 10px; margin-bottom: 10px;">-->
<!--                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--                    <div class="card">-->
<!--                        <div class="alert alert-info" style="background-color: #e8edef;">-->
<!--                            <div class="header" style="color: black; font-family: Montserrat-Bold;font-size: 1.5em;">-->
<!--                                Please insert the <strong>htmlize</strong> version of the blog body, else no formatting(line breaks, font size...) will be applied to the blog post.-->
<!--                                <br>-->
<!--                                To htmlize your blog simply visit <a href="https://wordtohtml.net"> Word To Html </a> and paste the text in the left window named visual editor and get the htmlized version from the side window named html editor which is to be inserted in the blog body.-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->


            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Post Content
                            </h2>
                        </div>
                        <div class="body">
                            <form action="processPHP/createPost.php" method="post">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="postTitle" class="form-control" name="postTitle" required>
                                        <label class="form-label">Post Title</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea type="postBody" id="postTagline" name="postTagline" class="form-control" rows="4" required></textarea>
                                        <label class="form-label">Post Tagline</label>
                                    </div>
                                </div>
                                <div class="alert alert-info" style="background-color: #e8edef;">
                                    <div class="header" style="color: black; font-family: Montserrat-Bold;font-size: 1.5em;">
                                        Please insert the <strong>htmlize</strong> version of the blog body, else no formatting(line breaks, font size...) will be applied to the blog post.
                                        <br>
                                        To htmlize your blog simply visit <a href="https://wordtohtml.net" target="_blank"> Word To Html </a> and paste the text in the left window named visual editor and get the htmlized version from the side window named html editor which is to be inserted in the blog body.
                                    </div>
                                </div>
                                <br>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea type="postBody" id="postBody" name="postBody" class="form-control" rows="10" required></textarea>
                                        <label class="form-label">Post Body</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Publish</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
    </body>

    </html>








    <?php
}else{
    $_SESSION['failureMessage']="Login first";
    header("location:index.php");

}
