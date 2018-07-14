<?php session_start();

if (isset($_SESSION['username'])){
    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Blog Post Manager</title>
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

        <!-- JQuery DataTable Css -->
        <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

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
        <!-- Right Sidebar -->
        <!-- #END# Right Sidebar -->
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

                                    <?php echo $_SESSION['successMessage']; unset($_SESSION['successMessage']); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>

            <?php
            include "processPHP/db.php";
            $query="SELECT count(post_id) as count FROM posts";
            $result=$connection->query($query);
            while ($row=$result->fetch_assoc()){
                $count=$row['count'];
                break;
            }

            if ($count==0){

                ?>
                <div class="row clearfix" style="margin-top: 10px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="alert-danger" >
                                <div class="header" style="color: white; font-family: Montserrat-Bold;font-size: 1.5em;">
                                    No Blog post found.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }else{
                ?>

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Posts
                                </h2>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                        <thead>
                                        <tr>
                                            <th>S.no</th>
                                            <th>Title</th>
                                            <th>Date Posted</th>
                                            <th>Time Posted</th>
                                            <th>Posted By</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>S.no</th>
                                            <th>Title</th>
                                            <th>Date Posted</th>
                                            <th>Time Posted</th>
                                            <th>Posted By</th>
                                            <th>Action</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php
                                            $query="SELECT post_id,user_id,title,date,time from posts";
                                            $result=$connection->query($query);
                                            $count=1;
                                            while ($row=$result->fetch_assoc()){
                                                $postId=$row['post_id'];
                                                $userId=$row['user_id'];
                                                $title=$row['title'];
                                                $date=$row['date'];
                                                $time=$row['time'];

                                                $query2="SELECT username from user where user_id='$userId'";
                                                $result2=$connection->query($query2);
                                                while ($row2=$result2->fetch_assoc()) {
                                                    $userName = $row2['username'];
                                                    break;
                                                }
                                                ?>

                                                    <tr>
                                                        <th><?php echo $count;?></th>
                                                        <th><?php echo $title;?></th>
                                                        <th><?php echo $date;?></th>
                                                        <th><?php echo $time;?></th>
                                                        <th><?php echo $userName;?></th>
                                                        <th><button class="btn btn-danger" onclick="triggerModal(<?php echo $postId;?>)">Delete</button> </th>
                                                    </tr>
                                                <?php
                                                $count++;
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </section>

    <!-- Default Size -->
    <div class="modal fade" id="deletePostModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <form action="processPHP/deletePost.php" method="post">
                        <input type="hidden" name="postId" id="postIdModal">
                    Are you sure you want to delete blog post?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-danger waves-effect">Yes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
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

    <!-- Jquery DataTable Plugin Js -->
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>


    <script>

        function triggerModal(postId) {
            console.log(postId);
            document.getElementById('postIdModal').value=postId;
            $('#deletePostModal').modal('show');
        }



    </script>

    </body>

    </html>








    <?php
}else{
    $_SESSION['failureMessage']="Login first";
    header("location:index.php");

}
