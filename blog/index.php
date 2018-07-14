<?php session_start();

if (isset($_SESSION['username'])){
    header("location:dashboard.php");
    exit();
}
?>

<?php include "head.php";?>
<body class="login-page">
<div class="login-box">
    <div class="card">
        <div class="body">
            <form id="sign_in" method="POST" action="processPHP/login.php">
                <?php
                if (isset($_SESSION['failureMessage'])){
                    ?>
<!--                    <div class="well-lg">-->
                        <div class="alert-danger" style="border-radius:25px; margin: 10px;padding: 10px; color: white; text-align: center; font-family: Montserrat-Bold; font-size: 1.5em;">
                                <span class="loginAlertBox">
                                    <?php echo $_SESSION['failureMessage']; unset($_SESSION['failureMessage']);?>
					            </span>
                        </div>
<!--                    </div>-->
                    <?php
                }
                ?>
                <div class="msg">Sign in to make and delete posts</div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                    </div>
                </div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="plugins/bootstrap/js/bootstrap.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="plugins/node-waves/waves.js"></script>

<!-- Validation Plugin Js -->
<script src="plugins/jquery-validation/jquery.validate.js"></script>

<!-- Custom Js -->
<script src="js/admin.js"></script>
<script src="js/pages/examples/sign-in.js"></script>
</body>

</html>
