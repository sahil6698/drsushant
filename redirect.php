<?php
if (isset($_GET)){
    session_start();
    if (isset($_GET['postId'])){
        $_SESSION['postId']=$_GET['postId'];
        header("location:single-post.php");
        exit();
    }



}else{
    header("location:index.php");
    exit();
}