<?php

session_start();
if (isset($_SESSION['username'])){
    if (isset($_POST)){
        $username=$_SESSION['username'];
        include "db.php";
        $query="SELECT user_id FROM user WHERE username='$username'";
        $result=$connection->query($query);
        while ($row=$result->fetch_assoc()){
            $userId=$row['user_id'];
            break;
        }
        $date=date("Y-m-d");
        $time=date("H:i:s");


        $postTitle=$_POST['postTitle'];
//        $postBody=$_POST['postBody'];
        $postBody=base64_encode($_POST['postBody']);
        if(isset($_POST['postTagline'])){

            $postTagLine=$_POST['postTagline'];
        }else{
            $postTagLine="";
        }
//        echo $postBody."<br>";
//        echo "date: $date, time:$time, tagling: $postTagLine, title: $postTitle <br>";
        $query="INSERT INTO `posts`(`user_id`, `title`, `body`, `tagline`, `date`, `time`) VALUES ('$userId','$postTitle','$postBody','$postTagLine','$date','$time')";
        $connection->query($query) ;

//        if (!mysqli_query($connection,$query))
//        {
//            echo("Error description: " . mysqli_error($connection));
//        }

        $_SESSION['successMessage']="Post Created Successfully.";
        header("location:../createPost.php");
        exit();
    }

}else{
    $_SESSION['failureMessage']="Login First.";
    header("../index.php");
    exit();
}